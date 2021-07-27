<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exercicio;
use App\User;


use Illuminate\Support\Facades\DB;

use App\Http\Requests\ExercicioRequest;

class ExerciciosController extends Controller
{

    public function index()
    {

        $exercicio = Exercicio::all();
        $kmtotal = DB::table('exercicios')->sum('kmatual');

        return view('exercicio.index', compact('exercicio' , 'kmtotal'));
    }

    public function create()
    {
        $usuario = User::all();
        $exercicio = Exercicio::all();
        return view('exercicio.create', compact('exercicio','usuario'));

    }

    public function store(ExercicioRequest $request)
    {

        $exercicio = new Exercicio();

        //$users = DB::table('users')->get();


        $exercicio->periodo = $request->input('periodo');
        $exercicio->kmatual = $request->input('kmatual');
        $exercicio->kmtotal = $request->input('kmtotal');
        $exercicio->user_id = $request->input('user_id');
        $exercicio->tempo = $request->input('tempo');
        $exercicio->save();
        return redirect()->route('exercicio.index', compact('exercicio'));
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $exercicio = Exercicio::find($id);
        if(isset($exercicio)){
            return view('exercicio.edit', compact('exercicio'));
        }
        return view('exercicio.index');
    }

    public function update(ExercicioRequest $request, $id)
    {
        $exercicio = Exercicio::find($id);
        if(isset($exercicio)){
        $exercicio->periodo = $request->input('periodo');
        $exercicio->kmatual = $request->input('kmatual');
        $exercicio->kmtotal = $request->input('kmtotal');
        $exercicio->tempo = $request->input('tempo');
        $exercicio->save();

        }
        return redirect()->route('exercicio.index', compact('exercicio'));
    }


    public function destroy($id)
    {
        $exercicio = Exercicio::find($id);
        if(isset($exercicio))
    {
        $exercicio->delete();
    }
        return redirect()->route('exercicio.index');
    }
}
