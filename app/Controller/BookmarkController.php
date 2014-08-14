<?php 
	/**
	* 
	*/
	class BookmarkController extends AppController
	{
		function index(){
			$bookmarks = $this->Bookmark->find('all', 
					array('order' => 'Bookmark.id DESC')
				);
			$this->set('bookmarks', $bookmarks);
		}		

		function add(){

		}

		function save(){
			$this -> data = $this -> request -> data;
			$this->set('Bookmark',  $this->data['Bookmark/url']);
			$this-> set('data', $this->data);
		}
	}
?>