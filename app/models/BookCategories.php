<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BookCategories extends Model
{

    protected $fillable = array('categoria');

    public $timestamps = false;

    protected $table = 'book_categories';
    protected $primaryKey = 'id';

    public function books(){
		return $this->hasMany('App\Models\Books');
	}

}
