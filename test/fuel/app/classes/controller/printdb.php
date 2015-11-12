<?php
class Controller_Printdb extends Controller
{
	public function action_index()
	{
		echo '<h1>test</h1>';
		$viewdata = null;
		$query 	  = DB::select()->from('test');
		$viewdata = $query->execute();
		var_dump($viewdata);
		die();
	}
}
