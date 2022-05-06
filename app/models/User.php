<?php

namespace App\Models;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model  {

	/* Alowing Eloquent to insert data into our database */
	protected $fillable = array('name', 'email' , 'username', 'password', 'verification_status');

    public $timestamps = false;

	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $hidden = array('password');

	public function getAuthPassword() {
	    return $this->password;
	}

	public function emprestimo(){
		return $this->hasMany('App\Models\Emprestimo');
	}

}
