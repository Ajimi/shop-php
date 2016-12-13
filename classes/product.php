<?php

class Product{
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
	

	public function findAll(){
		$data = $this->_db->query('SELECT * FROM product GROUP BY product_reference');
		//echo $data->count();
		if($data->count()){
			$this->_data = $data->results();
			return true;
		}
		return false;
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


	

	public function showByReference($product){
		if($this->find($product,'ref')){
			$datas = $this->data();
			foreach ($datas as $data){
				echo $data->product_name . "<br>";
				echo "Price &dollar;" . $data->product_price . "<br>";
				echo "<a href='get.php?add={$data->product_id}'>ADD</a><br>";
			}
		}
	}

	public function show(){
		if($this->findAll()){
			$datas = $this->data();
			foreach ($datas as $data) {
				$productScheme = <<< LIMIT
				<li>
				<a href="#" class="product-photo">
				<img src="{$data->product_image}" height="130" alt="{$data->product_name}"/>
				</a>

				<h2><a href="#">{$data->product_name}</a></h2>
				<a href="#" class="product-compare">compare</a>

				<div class="product-rating">
				<div>
				<span class="product-stars" style="width: 60px" >
				<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
				</span>
				</div>

				<span><a href="#">{$data->product_reviews} reviews</a></span>
				</div>

				<p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>
				<a href='item.php?ref={$data->product_reference}'><button >PRODUCT</button></a>
				</li>
LIMIT;
				echo $productScheme;
			}
		}
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