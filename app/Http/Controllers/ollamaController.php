<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Cloudstudio\Ollama\Facades\Ollama;

class ollamaController extends Controller
{

    public function prompt(Request $request): View
    {

        return view('prompt');
    }

    public function answer(Request $request): View
    {

            $promptText = $request->input('promptText');

        try {
            $response = Ollama::prompt($promptText)
                ->model('llama2')
                ->options(['temperature' => 0.8])
                ->stream(false)
                ->ask();
        }catch (\Illuminate\Http\Client\ConnectionException $e) {
            return view('prompt')
                ->with('errorMessage', $e->getMessage()
                );
        }

        return view('prompt')
            ->with('promptText', $promptText)
            ->with('response', $response);
    }

}
