<?php 
	/**
	* 
	*/
	class Tag extends AppModel
	{
		public function save_new($tags){
			foreach ($tags as $tag ) {
				
				if(empty($tag)){
					continue ;
				}

				$t = $this->findByName($tag);
				if(!$t){
					// $this->clear();
					$this->create();
					$this->save($tag);
				}
			}
		}

	}


?>