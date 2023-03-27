<?php
    class Users
    {
        use Controller;
        
        public function index()
        {
            $this->view('users');
        }
    }
    
