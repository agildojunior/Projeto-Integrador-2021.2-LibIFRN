<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Emprestimo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Exception;

class EmprestimoController extends Controller
{
    
        public function store($id){
            
            $book = Books::find($id);
            $user = auth()->user();
            $emprestimo = new Emprestimo;

            $emprestimo->user_id = $user->id;
            $emprestimo->book_id = $book->id;
            $emprestimo->data_emprestimo = Carbon::now();
            $emprestimo->data_devolucao = Carbon::now()->addDays(7);
            $emprestimo->titulo = $book->titulo;

            $book->status_book = 'indisponivel';
            $book-> save();

            $emprestimo->save();

            return redirect()->route('meusemprestimos');
        }

        public function aprove($id){
            $emprestimo = Emprestimo::find($id);
            $emprestimo->status = "aprovado";
            $emprestimo->data_emprestimo = Carbon::now();
            $emprestimo->data_devolucao = Carbon::now()->addDays(7);
            $emprestimo->save();

            return redirect()->route('allemprestimo');
        }

        public function solicitarRenovacao($id){
            $emprestimo = Emprestimo::find($id);
            $emprestimo->status = 'renovando';
            $emprestimo->save();

            return redirect()->route('meusemprestimos');
        }

        public function solicitarDevolucao($id){
            $emprestimo = Emprestimo::find($id);
            $emprestimo->status = 'devolvendo';
            $emprestimo->save();

            return redirect()->route('meusemprestimos');
        }
    
        public function renovar($id){
            $emprestimo = Emprestimo::find($id);
            $emprestimo->status = 'aprovado';
            $emprestimo->data_devolucao = Carbon::now()->addDays(7);
            $emprestimo->save();

            return redirect()->route('renovacaolist');
        }

        public function reject($id){
            $emprestimo = Emprestimo::find($id);
            $id_book = $emprestimo->book_id;
            $books = Books::find($id_book);

            
            if($emprestimo->status == 'aguardando' ){
                $emprestimo->status = 'negado';
                $books->status_book = 'disponivel';
            }else if($emprestimo->status == 'renovando'){
                $emprestimo->status = 'rejeitado';
                $books->status_book = 'indisponivel';
            }
            
            $books->save();
            $emprestimo->save();

            return redirect()->route('renovacaolist');
        }

        public function aprovardevolucao($id){
            $emprestimo = Emprestimo::find($id);
            $id_book = $emprestimo->book_id;
            $books = Books::find($id_book);

            $emprestimo->status ="finalizado";
            $books->status_book = "disponivel";
            $books->save();
            $emprestimo->save();

            return redirect()->route('devolucaolist');
        }

        public function allemprestimo(){
            $emprestimo = Emprestimo::all();
            return view('panel.emprestimo',['emprestimo'=>$emprestimo]);
        }

        public function meusemprestimos(){
            $emprestimo = Emprestimo::orderBy('created_at', 'desc')->get();
            return view('panel.meusemprestimo',['emprestimo'=>$emprestimo]);
        }

        public function todosemprestimos(){
            $emprestimo = Emprestimo::orderBy('created_at', 'desc')->get();
            return view('panel.allemprestimos',['emprestimo'=>$emprestimo]);
        }

        public function renovacaolist(){
            $emprestimo = Emprestimo::all();
            return view('panel.renovacao',['emprestimo'=>$emprestimo]);
        }

        public function devolucaolist(){
            $emprestimo = Emprestimo::all();
            return view('panel.devolucao',['emprestimo'=>$emprestimo]);
        }
}
