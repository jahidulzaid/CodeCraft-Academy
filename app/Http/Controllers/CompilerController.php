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

    public function run(Request $request)
{
    $code = $request->input('code');
    $languageId = $request->input('language');
    $input = $request->input('input'); // 👈 Grab user input

    $response = Http::withHeaders([
        'X-RapidAPI-Host' => 'judge0-ce.p.rapidapi.com',
        'X-RapidAPI-Key' => env('JUDGE0_API_KEY'),
    ])->post('https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=false&wait=true', [
        'source_code' => $code,
        'language_id' => (int) $languageId,
        'stdin' => $input, // 👈 Send it to API
    ]);

    $result = $response->json();

    $output = $result['stdout'] ?? $result['stderr'] ?? $result['compile_output'] ?? 'No output';

    return view('website.compiler.index', compact('code', 'languageId', 'input', 'output'));
}
}
