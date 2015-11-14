<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	public function welcome() {
		$name = 'Joris';
		return view('welcome')->with('name', $name);
	}
}