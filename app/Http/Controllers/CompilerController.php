<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompilerController extends Controller
{
    public function index()
    {
        return view('website.compiler.index');
    }

    public function submit(Request $request)
    {
        $code = $request->input('code');
        $languageId = $request->input('language'); // e.g., 71 = Python3

        // Send to Judge0 API
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'judge0-ce.p.rapidapi.com',
            'x-rapidapi-key' => env('JUDGE0_API_KEY'),
        ])->post('https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=false&wait=true', [
            'source_code' => $code,
            'language_id' => (int) $languageId,
        ]);
        

        $result = $response->json();

        return view('website.compiler.index', [
            'code' => $code,
            'output' => $result['stdout'] ?? $result['stderr'] ?? 'Error running code',
            'language' => $languageId
        ]);
    }
}
