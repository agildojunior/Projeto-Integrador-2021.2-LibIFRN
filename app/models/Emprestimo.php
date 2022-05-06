<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $fillable = ['user_id', 'book_id', 'status', 'data_emprestimo', 'data_devolucao'];

    protected $table = 'emprestimo';
    
    public function user(){
        return $this-> belongsTo('App\Models\User');
    }
    
    public function books(){
        return $this-> belongsTo('App\Models\Books');
    }
}
