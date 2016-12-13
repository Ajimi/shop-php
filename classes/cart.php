<?php

class Cart{
	private $_db,
			$_data;

	public function __construct(){
		$this->_db = DB::getInstance();
	}

	public function create($fields = array()) {
        if(!$this->_db->insert('product', $fields)) {
            throw new Exception('Sorry, there was a problem creating your product data;');
        }
    }

	public function update($fields = array() , $id = null){
		if(!$id){
			$id = $this->data()->id;
		}

		if(!$this->_db->update('product',$id,$fields)){
			throw new Exception('There was a problem updating');
		}
	}
	public function find ($product = null , $field = 'id'){
		if($product){
			$field = ($field == 'ref') ? 'product_reference' : 'product_id';
			$data = $this->_db->get('product' , array($field , '=' , $product));
			if($data->count()){
				if($field == 'product_id'){
					$this->_data = $data->first();
				}
				else {
					$this->_data = $data->results();
				}
				return true;
			}
		}
		return false;
	}
	public function updateTotal($price = 0){
		$total = Session::get('total');
		$total = $total - $price;
		Session::put('total' , $total);

	}
	
	public function deleteSession(){
		$requestType = 'get';
		if(Input::exists($requestType)){
			$id = Input::get('id');
			$quantity = Session::get('product_'.$id);
			if($this->find($id,'id')){
				$data = $this->data();
				$price = $data->product_price * $quantity;
				$this->updateTotal($price);
			}
			Session::delete('product_'.$id);
		}
		echo Session::get('total');
	}

	public function showItemCart(){
		$total = 0;
		foreach ($_SESSION as $name => $value) {
			if($this->isProduct($name)){
				$quantity = Session::get($name);
				$id = $this->productId($name);
				if($this->find($id ,'id')){
					$data = $this->data();
					$price = $data->product_price * $quantity; 
					$total += $price;
					Session::put('total' , $total); 
					$cartItem = <<< DELIMITER
					<li>
					    <span class="cd-qty">{$quantity} x</span> {$data->product_name}
					    <div class="cd-price"> &dollar;{$price}</div>
					    <a href="#{$id}" class="cd-item-remove cd-img-replace remove-item" >Remove</a>
					</li>
DELIMITER;
					echo $cartItem;
				}

				// Getting Id of item
				// Using find
				// Using delimiter ... Show the Item in the shopping cart ..
			}
		}
	}
	public function incrementProductQuantity($id = '0'){
		$value = 0;
		$name = 'product_'. $id ;
		if(!Session::exists($name)){
					Session::put($name, $value);
		}
		if($this->find($id , 'id')){
			$data = $this->data();
			$value = Session::get($name);
			if($data->product_quantity != $value){

				$value++;
				Session::put($name, $value);
			} else {
				if($data->product_quantity == 0){
					echo "out of stock";
				} else {
					// Error message creation ..
					echo "We only have ". $data->product_quantity. " available <br>" ;
				}
			}
		} else {
			// No existant of product
			echo "There's no product with id " . $id;
		}
		echo $name ." contain " . Session::get($name);
		// Redirect::to('index.php ');
	}

	public function productId($product){
		$length = strlen($product)-8;
		$id = substr($product, 8 , $length);
		return $id; // Return The id
	}

	public function isProduct($product){
		$p = substr($product,0,8);
		if($p == 'product_')
			return true;
		return false;
	}

	public function data(){
        return $this->_data;
    }
    public function countData(){
    	return $this->data()->count();
    }

    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }
}