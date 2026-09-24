<?php
class Shop_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getProducts($url = '')
    {

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

        $data = $this->_query("$sql $where ORDER BY id desc {$this->pagination()}", $queryData)[1] ?? [];


        return [
            'shop' => $data,
            'count' => count($this->_query("$sql $where ", $queryData)[1] ?? [])
        ];
    }
}
