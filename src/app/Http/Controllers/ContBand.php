<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContBand extends Controller
{
    public function getAll()
    {
        $lista = $this->getBands();
        return response()->json($lista);
    }
    public function getById($id)
    {
        $band = null;

        foreach($this->getBands() as $_band)
        {
            if ($_band['id'] == $id)
            {
                $band = $_band;
            }
        }
        //return response()->json($band);
        return $band ? response()->json($band) : abort(404);//abort -> lança uma status code 
    }
    public function getGenero(string $genero){
        $band = null;

        foreach($this->getBands() as $_band)
        {
            if (strcmp($_band['nome'],$genero))
            {
                $band = $_band;
            }
        }
        return $band ? response()->json($band) : abort(404);
    }
    public function getBands()
    {
        return [
            ['id'=>1,'nome'=>'Linu','genero'=>'trol'],
            ['id'=>2,'nome'=>'Win','genero'=>'teste']
        ];
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $validate = $request->validate(
            [
                'nome'=>'required:min:3'
            ]
        );//Usa o validate do request
        return response()->json($request->all());
    }
}

