<?php
class Bathcup {
	public $title = 'bathcup';
	public $description = 'a bath cup for toothbrush, toothpaste and whatever';
	public $default_currency = 'rub';
	public $bought_price = 50;
	public $bought_price_currency = 'usd';
	
	public function price () {
		$final_price = $this->bought_price * 1.25;
		if($this->bought_price_currency === 'usd') {
			$final_price = $this->bought_price * 75;
		}
		return $final_price;
	}
}

class Bathcup_small extends Bathcup {
	public $title = 'bathcup_small';
	public $default_currency = 'rub';
	public $bought_price = 2000;
	public $bought_price_currency = 'rub';
}

$bathcup_product = new Bathcup();
echo $bathcup_product->title;
echo $bathcup_product->description;
echo $bathcup_product->price();
echo '----------------------';
$bathcup_small_product = new Bathcup_small();
echo $bathcup_small_product->title;
echo $bathcup_small_product->description;
echo $bathcup_small_product->price();