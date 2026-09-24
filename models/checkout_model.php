<?php
class Checkout_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function cart()
    {
        $cookie = $_COOKIE[CART_ID];

        $data = $this->_get("* item_id, cookie_id, item_count, products.* 
                                FROM cart LEFT JOIN products ON item_id=products.id
        ", "cookie_id, item_count > ", [$cookie, 0], 1)[1];

        return $data ?? [];
    }
}
