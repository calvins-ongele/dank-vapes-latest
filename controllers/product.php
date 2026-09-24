<?php
    class Product extends Controller
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index($url = null, $order = null)
        {
            if (empty($url) ) {
                $this->notFound();return;
            }

            
            $this->view->data = $this->model->getProducts($url);
            if ($order) {
                $title = $this->view->data['title']??'Product';
                $this->view->title =   "Order {$title} | " . $this->_company()['c_name'];
                $this->view->render('shop/order');
                return;
            }
            $categoryId = $this->view->data['category_id']??'';
            $id = $this->view->data['id']??'';
            $this->view->similar = $this->model->similarProducts($categoryId, $id);
            $title = $this->view->data['title']??'';
            $this->view->title =   "{$title} | " . $this->_company()['c_name']; 
            $this->view->render("shop/product");
        }
    }
    