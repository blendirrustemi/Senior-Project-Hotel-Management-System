<?php
    class Menu
    {
        use Controller;
        
        public function index()
        {
            $this->view('menu');
        }
    }
