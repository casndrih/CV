<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hire Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tailwind CDN (for styling in PDF rendering engines that support it) --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Ensure PDF renders cleanly */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }

        .page {
            background: #fff;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 2rem auto;
        }

        h1 {
            font-size: 1.875rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        strong {
            color: #374151;
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="flex items-center justify-between border-b pb-4 mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Project Request Summary</h1>
                <p class="text-sm text-gray-500">Generated on {{ now()->format('F j, Y') }}</p>
            </div>
            <div class="text-right">
                <span class="inline-block bg-indigo-100 text-indigo-800 text-xs font-medium px-3 py-1 rounded-full">
                    {{ ucfirst($data['client_type']) }}
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p><strong>Name:</strong> {{ $data['full_name'] }}</p>
                @if (isset($data['company_name']))
                    <p><strong>Company:</strong> {{ $data['company_name'] }}</p>
                @endif
                <p><strong>Email:</strong> {{ $data['contact_email'] }}</p>
                <p><strong>Project Title:</strong> {{ $data['project_title'] }}</p>
                <p><strong>Project Type:</strong> {{ ucfirst(str_replace('_', ' ', $data['project_type'])) }}</p>
            </div>
            <div>
                <p><strong>Project Level:</strong> {{ ucfirst($data['project_level']) }}</p>
                <p><strong>Estimated Completion:</strong>
                    {{ \Carbon\Carbon::parse($data['estimated_date'])->format('F j, Y') }}</p>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Description</h2>
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                <p class="text-gray-700 leading-relaxed">{{ $data['project_description'] }}</p>
            </div>
        </div>

        <div class="mt-8 text-center text-sm text-gray-500">
            <p>Thank you for choosing my service!</p>
            <p class="text-gray-400">© {{ date('Y') }} CN'drih CV. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
