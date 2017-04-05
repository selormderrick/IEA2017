<?php

namespace App\Http\Controllers;

class pagesController extends Controller{
	
	public function getIndex() {
		return view ('pages.welcome');

	}
	public function getAbout() {
		$first='selorm';
		$last='derrick';
		$full = $first . " " . $last;
		return view ('pages.about')=>withFullname{$fullname};

	}
	public function getContact() {
		return view ('pages.contact'); 
	}
}