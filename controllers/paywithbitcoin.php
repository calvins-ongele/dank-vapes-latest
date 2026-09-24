<?php
    class Paywithbitcoin extends Controller
        {

            public function __construct()
            {
                parent::__construct();
            }

            public function index()
            {

                $this->view->title = "Paywithbitcoin";
                $this->view->render("paywithbitcoin/index");
            }
        }
    