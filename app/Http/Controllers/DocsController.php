<?php

namespace App\Http\Controllers;

use App\Anket;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'inn' => 'required|numeric|between:00000000,999999999999',
                'pc' => 'required|numeric|digits:20',
                'kc' => 'required|numeric|digits:20',
                'bank' => 'required',
                'bic' => 'required|numeric|digits:9'
        ]);

        $anket = new Anket();
        $anket->inn = $request->inn;
        $anket->pc = $request->pc;
        $anket->kc = $request->kc;
        $anket->bank = $request->bank;
        $anket->bic = $request->bic;
        $anket->save();

    }
}
