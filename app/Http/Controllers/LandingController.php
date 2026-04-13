<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Mail\NewLeadNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class LandingController extends Controller
{
    public function index()
    {
        $stats = [
            'apps'  => 2 + Lead::where('status', Lead::STATUS_SUCCESS)->count(),
            'leads' => Lead::count(),
        ];

        return view('landing.index', compact('stats'));
    }

    public function privacy()
    {
        return view('landing.privacy');
    }

    public function contact(Request $request)
    {
        // Honeypot — boty wypełniają ukryte pole, ludzie nie
        if ($request->filled('website')) {
            return back()->with('success', true);
        }

        // Timestamp — odrzuć jeśli formularz wysłany w < 3 sekundy od załadowania
        $formLoadedAt = (int) $request->input('_form_ts');
        if (!$formLoadedAt || (time() - $formLoadedAt) < 3) {
            return back()->with('success', true);
        }

        $validated = $request->validate([
            'name'       => 'required|string|max:150',
            'company'    => 'required|string|max:200',
            'email'      => 'required|email|max:200',
            'phone'      => 'required|string|max:30',
            'use_case'   => 'required|string|max:100',
            'message'    => 'nullable|string|max:2000',
            'consent'    => 'required|accepted',
            'rodo'       => 'required|accepted',
            'excel_file' => 'nullable|file|mimes:xlsx,xls,csv|max:10240',
        ], [
            'name.required'        => 'Podaj imię i nazwisko.',
            'company.required'     => 'Podaj nazwę firmy.',
            'email.required'       => 'Podaj adres email.',
            'email.email'          => 'Podaj poprawny adres email.',
            'use_case.required'    => 'Wybierz główne zastosowanie Excela.',
            'consent.required'     => 'Wymagana zgoda na przetwarzanie danych.',
            'consent.accepted'     => 'Wymagana zgoda na przetwarzanie danych.',
            'rodo.required'        => 'Potwierdź zapoznanie się z Polityką Prywatności i RODO.',
            'rodo.accepted'        => 'Potwierdź zapoznanie się z Polityką Prywatności i RODO.',
            'phone.required'       => 'Podaj numer telefonu.',
            'excel_file.mimes'     => 'Dozwolone formaty: .xlsx, .xls, .csv',
            'excel_file.max'       => 'Plik nie może przekraczać 10 MB.',
        ]);

        $validated['ip_address'] = $request->ip();

        if ($request->hasFile('excel_file')) {
            $validated['excel_file'] = $request->file('excel_file')
                ->store('excels', 'private');
        }

        $lead = Lead::create($validated);

        try {
            Mail::to(config('mail.notify_to', 'kontakt@jakamo.pl'))->send(new NewLeadNotification($lead));
        } catch (\Exception $e) {
            Log::warning('Mail send failed: ' . $e->getMessage());
        }

        return back()->with('success', true);
    }
}
