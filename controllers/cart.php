<?php
class Cart extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->view->cart = $this->model->cart();
        $this->view->title = "Cart";
        $this->view->render("shop/cart");
    }
}
