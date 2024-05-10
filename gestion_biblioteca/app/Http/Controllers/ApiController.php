<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class ApiController extends Controller

{
    public function index(){
        $libros  = Books::with('author')->get();
        return response()->json($libros);
    }

    public function store(Request $request){
        try{
            $request->validate([
                'tittle' => 'required|string',
                'author_id' => 'required|integer',
                'published_year' => 'required|integer',
            ]);

            $book = New Books();
            $book->title = $request->input('title');
            $book->author_id = $request->input('author_id');
            $book->published_year = $request->input('published_year');
            $book->save();
            return response ()->json($book, 201);
        }catch(\Exception $e){
            return response ()->json(['error' => 'Error'], 500);
        }
    }

    public function destroy($id){
        $book = Books::find($id);
        if(!$book){
            return response ()->json(['mensaje' => 'El libro no está'], 404);
        }
        else{
            $book->delete();
        }
        return response()->json(['mensaje' => 'El libro se ha borrado correctamente'],200);
    }
}
