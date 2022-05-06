<?php

namespace App\Models;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model  {

	protected $fillable = array('titulo', 'autor', 'category_id', 'descricao', 'status');
	
	public $timestamps = false;

	protected $table = 'books';
	protected $primaryKey = 'id';

	public function emprestimo(){
		return $this->hasMany('App\Models\Emprestimo');
	}

	public function bookscategories(){
        return $this-> belongsTo('App\Models\BookCategories');
    }

}

