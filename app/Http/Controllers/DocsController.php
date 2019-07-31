<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'inn' => 'required|numeric|min:8|max:12',
                'pc' => 'required|numeric|min:20|max:20',
                'kc' => 'required|numeric|min:20|max:20',
                'bank' => 'required',
                'bic' => 'required|numeric|min:9|max:9'
        ]);


    }
}
