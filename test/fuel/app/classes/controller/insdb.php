<?php

class Controller_Insdb extends Controller
{
	public function get_index(){
		echo View::forge('insdb.php');
	}
	public function post_index(){
		Response::redirect('/printdb');
	}
}
