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

		function add(){

		}

		function add2()
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

				// $b = $this->Bookmark->new();
				// $b['url'] = $this->request->data['url'];
				// $b['host'] = $this->request->data['host'];
				// $b['description'] = $this->request->data['description'];
				// if($b -> save()){
				// 	$this->redirect(array('action' => 'index'));
				// }else{
				// 	$this->Session->setFlash('save failed');
				// }

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