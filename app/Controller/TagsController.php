<?php 
	/**
	* 
	*/
	class TagsController extends AppController
	{
		public $components = array('Session');
		function index(){
			$this->set('tags', $this->Tag->find('all', array('order' => 'Tag.id DESC')));
		}

		function add(){
			if($this->request->is('post')){
				$this->Tag->create();
				if($this->Tag->save($this->request->data)){
					$this->Session->setFlash('save Success');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('save Faild');

					$this->redirct(array('action' => 'add'));
				}
			}
		}
	}

?>