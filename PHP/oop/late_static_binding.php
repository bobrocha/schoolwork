<?php
abstract class DomainObject {
	public static function create() {
		return new static();
	}
}

class User extends DomainObject {

}

class Document extends DomainObject {

}

Document::create();

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>