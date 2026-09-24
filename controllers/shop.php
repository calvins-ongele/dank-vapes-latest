<?php
    class Shop extends Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {

            $this->view->data = $this->model->getProducts();
            $this->view->title = "Shop";
            $this->view->render("shop/index");
        }
    }
    