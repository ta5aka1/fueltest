<?php
class Controller_Testdb extends Controller
{
	public function action_index()
	{
		$viewdata = null;
		$query 	  = DB::select()->from('test');
		$viewdata = $query->execute();
		var_dump($viewdata);
		die();
	}
}
