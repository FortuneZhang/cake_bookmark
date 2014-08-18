<?php 
	/**
	* 
	*/
	class BookmarksController extends AppController
	{
		public $helpers = array('Session');
		public $components = array('Session');

		function index(){
			$bookmarks = $this->Bookmark->find('all', 
					array('order' => 'Bookmark.id DESC')
				);
			$this->set('bookmarks', $bookmarks);
		}		

		function add()
		{
			if($this->request->is('post')){
				$this->Bookmark->create();
				$this->Bookmark->set('scan_count', 100);
				if($this->Bookmark->save($this->request->data)){
					$this-> Session -> setFlash('success saved!');
					$this->redirect(array('action' => 'index'));
				}else {
					$this->Session->setFlash('save failed');
				}
			}
		}

		function save(){
			$this -> data = $this -> request -> data;
			
			$data = array(
					'ModelName' => 'Bookmark',
					[
						'host' => $this->data['host'],
						'url' => $this->data['url'],
						'description' => $this->data['description'],
						'need_auth' => false,
						'like_count' => 0, 
						'scan_count' => 0
					]
				);
			
			$this->Bookmark->save($data);
			
			$this-> set('data', $this->data);
		}
	}
?>