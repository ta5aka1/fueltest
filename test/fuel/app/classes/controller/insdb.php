<?php

class Controller_Insdb extends Controller
{
	public function get_index(){
		echo View::forge('insdbview.php');
	}
	public function post_index(){
		$id = Input::post("id");
		$name = Input::post("name");
		$result = DB::insert('test')->set(
			array(
				'id' => $id,
				'name' => $name,
			))->execute();
		Response::redirect('/printdb');
	}
}
