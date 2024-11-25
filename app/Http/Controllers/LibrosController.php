<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class LibrosController extends Controller
{
    //
    public function crear()
    {
        return view('libros.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' =>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255',
        ]);

        $libro=new Libros();
        $libro->nombre=$request->nombre;
        $libro->descripcion=$request->descripcion;
        $libro->autor=$request->autor;

        $libro->save();


        return redirect()->back()->with('success','Libro creado con éxito!');
    }

    public function leer()
    {
        $libros=Libros::all();
        return view('libros.leer',compact('libros'));
    }

    public function update(Request $request, Libros $libro)
    {
        $request->validate([
            'nombre' =>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255',
        ]);

        $libro->update($request->all());

        return redirect()->back()->with('success','Libro actualizado con éxito!');
    }

    public function eliminar()
    {
        $libros=Libros::all();
        return view('libros.eliminar',compact('libros'));
    }

    public function destroy(Request $request)
    {
        $id=$request->input('IdLibro');
        $libro=Libros::find($id);

        if($libro){
            $libro->delete();
            return redirect()->back()->with('success','Libro borrado con éxito!');
        }else{
            return redirect()->back()->with('success','Libro no encontrado.');
        }
    }

}
