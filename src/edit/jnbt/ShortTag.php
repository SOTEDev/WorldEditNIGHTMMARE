<?php

namespace edit\jnbt;

class ShortTag extends Tag{

	private $value;

	public function __construct(float $value){
		parent::__construct();
		$this->value = $value;
	}

	public function getValue(){
		return $this->value;
	}
}