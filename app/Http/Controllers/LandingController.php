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
            'name'     => 'required|string|max:150',
            'company'  => 'required|string|max:200',
            'email'    => 'required|email|max:200',
            'phone'    => 'nullable|string|max:30',
            'use_case' => 'required|string|max:100',
            'message'  => 'nullable|string|max:2000',
            'consent'  => 'required|accepted',
        ], [
            'name.required'     => 'Podaj imię i nazwisko.',
            'company.required'  => 'Podaj nazwę firmy.',
            'email.required'    => 'Podaj adres email.',
            'email.email'       => 'Podaj poprawny adres email.',
            'use_case.required' => 'Wybierz główne zastosowanie Excela.',
            'consent.required'  => 'Wymagana zgoda na przetwarzanie danych.',
            'consent.accepted'  => 'Wymagana zgoda na przetwarzanie danych.',
        ]);

        $validated['ip_address'] = $request->ip();

        $lead = Lead::create($validated);

        try {
            Mail::to(config('mail.from.address'))->send(new NewLeadNotification($lead));
        } catch (\Exception $e) {
            Log::warning('Mail send failed: ' . $e->getMessage());
        }

        return back()->with('success', true);
    }
}
