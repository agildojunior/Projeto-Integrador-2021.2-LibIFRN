<?php

// class HomeController extends BaseController {
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCategories;

use App\Models\Branch;

use App\Models\Categories;
use Exception;

class HomeController extends Controller
{

    public $categories_list = array();

    public function __construct() {
        $this->categories_list = Categories::select()->orderBy('category')->get();
    }

	public function home(){	
		return view('panel.index')
            ->with('categories_list', $this->categories_list);
	}
}
