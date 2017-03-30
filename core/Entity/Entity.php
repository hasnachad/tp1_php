<?php
namespace Core\Entity;

class Entity
{
	public function __get($key) //execute <?= $post->Url;//dans core/entity/entity.php
	{
		$method = 'get'.ucfirst($key);
		$this->$key = $this->$method(); //$key est remplacé par url
		return $this->$key;
	}
	

}