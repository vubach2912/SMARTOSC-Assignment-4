<?php
/**
* 
*/
class Load
{
	
	function __construct(){}
	public function library($link){
		require_once('../../application/lib/'.$link.".php");
	}
	public function render($link){
		require_once('application/view/'.$link.".php");
	}
	public function model($link){
		require_once('../../application/model/'.$link.".php");
	}
}
?>