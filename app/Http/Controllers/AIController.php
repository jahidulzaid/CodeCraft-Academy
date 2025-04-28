<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function ask(Request $request)
    {
        $prompt = $request->input('prompt');

        $response = Http::post('http://localhost:11434/api/generate', [
            'model' => 'llama3',
            'prompt' => $prompt,
            'stream' => false,
        ]);

        $data = $response->json();

        return response()->json([
            'response' => $data['response'] ?? 'No response received.'
        ]);
    }
}
