<?php
class ShopProduct {
	private $title;
	private $producerMainName;
	private $producerFirstName;
	protected $price;
	private $discount = 0;
	private $id = 0;

	public function setID( $id ) {
		$this->id = $id;
	}

	public static function getInstance( $id, PDO $pdo ) {
		$stmt = $pdo->prepare( "select * from products where id=?" );
		$result = $stmt->execute( array($id) );
		$row = $stmt->fetch();

		if( empty($row) ) {
			return null;
		}

		if( $row['type'] === "book" ) {
			$product = new BookProduct( $row['title'], $row['firstname'], $row['mainname'], $row['price'], $row['numpages'] );
		} else if( $row['type'] == "cd" ) {
			$product = new CdProduct( $row['title'], $row['firstname'], $row['mainname'], $row['price'], $row['playlength'] );
		} else {
			$product = new ShopProduct( $row['title'], $row['firstname'], $row['mainname'],$row['price'] );
		}

		$product->setID( $row['id'] );
		$product->setDiscount( $row['discount'] );
		return $product;
	}

	public function __construct($title, $firstName, $mainName, $price ) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}

	public function getProducerFirstName() {
		return $this->producerFirstName;
	}

	public function gerProducerMainName() {
		return $this->producerMainName;
	}

	public function setDiscount( $num ) {
		$this->discount = $num;
	}

	public function getDiscount() {
		return $this->discount;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getPrice() {
		return ( $this->price - $this->discount );
	}


	public function getProducer() {
		return "{$this->producerFirstName}" .
				" {$this->producerMainName}";
	}


	public function getSummaryLine() {
		$base = "{$this->title} ({$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		return $base;
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////
class CdProduct extends ShopProduct {
	private $playLength = 0;

	public function __construct( $title, $firstName, $mainName, $price, $playLength ) {
		parent::__construct( $title, $firstName, $mainName, $price );
		$this->playLength = $playLength;
	}

	public function getPlayLength() {
		return $this->playLength;
	}

	public function getSummaryLine() {
		$base = parent::getSummaryLine();
		$base .= ": playing time - {$this->playLength}";
		return $base;
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////
class BookProduct extends ShopProduct {
	private $numPages = 0;

	public function __construct( $title, $firstName, $mainName, $price, $numPages ) {
		parent::__construct( $title, $firstName, $mainName, $price );

		$this->numPages = $numPages;
	}

	public function getNumerOfPages() {
		return $this->numPages;
	}

	public function getSummaryLine() {
		$base = parent::getSummaryLine();
		$base .= ": page count - {$this->numPages}";
		return $base;
	}

	public function getPrice() {
		return $this->price;
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////
abstract class ShopProductWriter {
	protected $products = array();

	public function addProduct( ShopProduct $shopProduct ) {
		$this->proructs[] = $shopProduct;
	}

	abstract public function write();
}
///////////////////////////////////////////////////////////////////////////////////////////////
class XMLProductWriter extends ShopProductWriter {
	public function write() {
		$writer = new XMLWriter();
		$writer->openMemory();
		$writer->startDocument( '1.0', 'UTF-8' );
		$writer->startElement( 'products' );
		foreach( $this->products as $shopProduct ) {
			$writer->startElement( 'product' );
			$writer->writeAttribute( 'title', $shopProduct->getTitle() );
			$writer->startElement( 'summary' );
			$writer->text( $shopProduct->getSummaryLine() );
			$writer->endElement(); // summary
			$writer->endElement(); // product
		}
		$writer->endElement(); // products
		$witer->endDocument();
		print $writer->flush();
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////
class TextProductWriter extends ShopProductWriter {
	public function write() {
		$str = "PRODUCTS:\n";
		foreach( $this->products as $shopProduct ) {
			$str .= $shopProduct->getSummaryLine() . "\n";
		}
		print $str;
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////
$product2 = new CdProduct( 'Exile on Coldharbour Lane', 'The', 'Alabama 3', 10.99, null, 60.33 );

echo "artist: {$product2->getProducer()}\n";
?>