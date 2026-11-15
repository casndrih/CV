<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\File;

class HireMeController extends Controller
{
    public function store(Request $request)
    {
    $data = $request->validate([
        'full_name' => 'required|string|max:255',
        'client_type' => 'required|in:individual,company',
        'company_name' => 'nullable|required_if:client_type,company|string|max:255',
        'project_title' => 'required|string|max:255',
        'project_description' => 'required|string',
        'project_type' => 'required|in:website,android_app',
        'project_level' => 'required|in:small,medium,large',
        'contact_email' => 'required|email',
        'estimated_date' => 'required|date',
    ]);

    $clientNameSanitized = preg_replace('/[^A-Za-z0-9\-]/', '_', $data['full_name']);
    $path = public_path("requests/{$data['client_type']}/{$clientNameSanitized}");

    if (!\File::exists($path)) {
        \File::makeDirectory($path, 0755, true);
    }

    $pdf = \PDF::loadView('pdf.hire_request', ['data' => $data]);
    $pdf->save($path . '/hire_request.pdf');

    return back()->with('success', 'Hire request submitted and PDF stored successfully.');
    }
}