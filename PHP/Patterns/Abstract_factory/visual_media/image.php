<?php
abstract class Image {
	protected $height;
	protected $width;
	protected $type;

	public function __construct( $height, $width, $type ) {
		$this->height = (int) $height;
		$this->width = (int) $width;
		$this->type = $type;
	}

	public function getType() {
		return $this->type;
	}

	abstract public function open();
	abstract public function close();
}
?>