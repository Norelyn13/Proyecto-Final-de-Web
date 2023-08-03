<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('index');
    }

    public function autores(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $results = DB::select('select * from autores');
        return view('autores', compact('results'));
    }

    public function libros(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $results = DB::select('select * from titulos');
        return view('libros', compact('results'));
    }

    public function contacto(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('contacto');
    }

    public function guardar_contacto(Request $request)
    {
        $correo = $request->correo;
        $nombre = $request->nombre;
        $asunto = $request->asunto;
        $comentario = $request->comentario;

        $results = DB::select("insert into contacto (correo, nombre, asunto, comentario) values (?,?,?,?)", [$correo, $nombre, $asunto, $comentario]);

        return redirect("/");
    }
}
