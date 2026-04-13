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
        return view('landing.index');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:150',
            'company'    => 'required|string|max:200',
            'email'      => 'required|email|max:200',
            'phone'      => 'nullable|string|max:30',
            'use_case'   => 'required|string|max:100',
            'message'    => 'nullable|string|max:2000',
            'consent'    => 'required|accepted',
            'excel_file' => 'nullable|file|mimes:xlsx,xls,csv|max:10240',
        ], [
            'name.required'        => 'Podaj imię i nazwisko.',
            'company.required'     => 'Podaj nazwę firmy.',
            'email.required'       => 'Podaj adres email.',
            'email.email'          => 'Podaj poprawny adres email.',
            'use_case.required'    => 'Wybierz główne zastosowanie Excela.',
            'consent.required'     => 'Wymagana zgoda na przetwarzanie danych.',
            'consent.accepted'     => 'Wymagana zgoda na przetwarzanie danych.',
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
            Mail::to(config('mail.from.address'))->send(new NewLeadNotification($lead));
        } catch (\Exception $e) {
            Log::warning('Mail send failed: ' . $e->getMessage());
        }

        return back()->with('success', true);
    }
}
