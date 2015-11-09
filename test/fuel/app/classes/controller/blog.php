<?php
class Controller_Blog extends Controller
{
	public function action_index($cat = 'php', $page ='1') 
	{
		$mongodb = \Mongo_Db::instance();
		$results = $mongodb->insert('posts', array('name' => '名前', 'contents' => 'コンテンツ'));
		$results = $mongodb->get('posts');
		var_dump($results);
		return $results;
        }
}
