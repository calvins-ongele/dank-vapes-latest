<?php

class Product_Model extends Model {

	public function __construct() {
		parent::__construct(); 
	}
	
    
    public function getProducts($url = '') {

        if (!empty($url)) { 
            $sql = "SELECT products.*, c.title as categ_title, c.slug as categ_slug
            FROM products
            LEFT JOIN categories c ON c.id=products.category_id
            WHERE products.slug = ?
            ";

           $data = $this->_query("$sql ", [$url])[1][0] ?? []; 
           return $data;
        }
         
        $sql = "SELECT * FROM products ";
        $where = "";
        $queryData = [];

        $data = $this->_query("$sql $where ORDER BY ih_ID desc {$this->pagination()}", $queryData )[1] ?? []; 
         

        return [
            'shop'=>$data,
            'count'=>count($this->_query("$sql $where ", $queryData )[1] ?? [])
        ];        
    }

    public function similarProducts($categoryId = '', $id = '') {
        return $this->_get("products", "category_id, id != ", [$categoryId, $id], 1, 'order by id desc limit 4')[1];
    }
      
    public function category($url = '') {
        return $this->_get("categories", "slug", [$url],0)[1];
    }
        
    public function fetchProducts($url = '') { 

        $sql = "SELECT products.*, categories.id as cat_id
        FROM products
        join categories ON products.category_id = categories.id
        where categories.slug = ?
        ";

        $data = $this->_query("$sql ", [ $url ])[1] ?? [];

        return $data;
    }
	
 
}