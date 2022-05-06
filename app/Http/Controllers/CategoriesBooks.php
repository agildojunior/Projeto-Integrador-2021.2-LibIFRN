<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BookCategories;

class CategoriesBooks extends Controller
{
    #CategoriesBooks
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        $this->authorize('is_admin');
        return view('panel.addbookcategory');
    }

    public function store(Request $request){
        $this->authorize('is_admin');
        $category = new BookCategories;
        $category->categoria = $request->categoria;

        $category->save();

        return view('panel.addbookcategory')->with('sucess', 'Livro atualizado com sucesso!');
    }

    public function show($id){
        $this->authorize('is_admin');
        $category = BookCategories::findOrFail($id);
       // return view('BookCategories::find.show', ['book' => $book]);
    }

    public function showAll(){
        $this->authorize('is_admin');
        $category = BookCategories::all();
        //return view('books.showAll',['books' => $books]);
    }

    public function destroy($id){
        $this->authorize('is_admin');
        $category = BookCategories::findOrFail($id);
        $category->delete();
        //return redirect('/show/books');
    }

    public function edit($id){
        $this->authorize('is_admin');
        $category = BookCategories::findOrFail($id);
        //return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request){
        $this->authorize('is_admin');

        $data = $request->all();

        BookCategories::findOrFail($request->id)->update($data);
        //return redirect('/show/books')->with('sucess', 'Livro atualizado com sucesso!');
    }

}