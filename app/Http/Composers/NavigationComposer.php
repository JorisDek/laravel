<?php namespace App\Http\Composers;

use Illuminate\Contract\View\View;

class NavigationComposer {
	
	public function compose($view) {
			
		$view->with('latest', \App\Article::latest()->first());
	}
}