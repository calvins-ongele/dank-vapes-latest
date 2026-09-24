<?php
class Checkout extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->view->cart = $this->model->cart();
        $this->view->title = "Checkout";
        $this->view->render("shop/checkout");
    }
}
