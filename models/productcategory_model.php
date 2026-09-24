<?php
    class Productcategory_Model extends Model
    {

        public function __construct()
        {
            parent::__construct();
        }


        public function getProducts(string $url) {
            
            $sql = "SELECT products.*, categories.id as cat_id, categories.title as categ_title,
            categories.slug as categ_slug, categories.content as categ_content
            FROM products
            join categories ON products.category_id = categories.id
            where categories.slug = ?
            ";

            $data = $this->_query("$sql ", [ $url ])[1] ?? [];

            $p = [
                'shop'=>$data,
                'count'=> count($data)
            ]; 

            return $p;
        }

    }
        