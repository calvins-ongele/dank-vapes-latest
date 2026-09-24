<?php
    class Refund_returns extends Controller
        {

            public function __construct()
            {
                parent::__construct();
            }

            public function index()
            {

                $this->view->title = "Refund Policy";
                $this->view->render("refund_returns/index");
            }
        }
    