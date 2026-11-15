<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HireMeController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'client_type' => ['required', 'in:individual,company'],
            'company_name' => ['nullable', 'required_if:client_type,company', 'string', 'max:255'],
            'project_title' => ['required', 'string', 'max:255'],
            'project_description' => ['required', 'string', 'max:10000'],
            'project_type' => ['required', 'in:website,android_app'],
            'project_level' => ['required', 'in:small,medium,large'],
            'contact_email' => ['required', 'email', 'max:255'],
            'estimated_date' => ['required', 'date', 'after_or_equal:today'],
        ]);

        // Keep client names, contact details, and project briefs outside public/.
        $clientSlug = Str::slug($data['full_name']) ?: 'client';
        $filename = now()->format('YmdHis').'-'.Str::uuid().'.pdf';
        $relativePath = "hire-requests/{$data['client_type']}/{$clientSlug}/{$filename}";

        $pdf = Pdf::loadView('pdf.hire_request', ['data' => $data]);
        $stored = Storage::disk('local')->put($relativePath, $pdf->output());

        if (! $stored) {
            report(new \RuntimeException('Unable to store the private hire request PDF.'));
            return back()->withInput()->withErrors([
                'request' => 'Your request could not be saved right now. Please try again.',
            ]);
        }

        return back()->with('success', 'Hire request submitted successfully.');
    }
}
