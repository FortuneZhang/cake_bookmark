<?php 
	/**
	* 
	*/
	class Bookmark extends AppModel
	{
		var $name = 'bookmark';
		
		public function get_count(){
			return $this->find('count');
		}

		private function no_use(){
			return '';
		}

	}
?>