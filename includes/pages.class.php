<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * Pagesmanager class 
 */


class pagesmanager extends minative {
		
		public function __constract()
		{
			
		}

		public function getpagedata($pageid)
		
		{
			global $minative_mysqliDB;
			
			$query = "SELECT * FROM pagemanager WHERE id = ?";
			$params = array($pageid);
			$pagedata = $minative_mysqliDB->selectone($query,'s',$params);
			return $pagedata;
		}
	
}

$pagesmanager = new pagesmanager();
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////