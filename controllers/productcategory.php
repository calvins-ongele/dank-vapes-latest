<?php
    class Productcategory extends Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index($url = '')
        {
            if (empty($url) ) {
                $this->notFound();return;
            }

            $this->view->data = $this->model->getProducts($url);
            $this->view->title = "Product category";
            $this->view->render("shop/category");
        }
    }
    