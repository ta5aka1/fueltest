<?php
class Controller_Printdb extends Controller
{
	public function action_index()
	{
		$viewdata = null;
		$data 	  = DB::select('id','name')->from('test')->execute();
		echo View::forge('printdbview.php', array('data' => $data));
	}
}
