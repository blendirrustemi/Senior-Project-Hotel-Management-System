<?php
    class Forgotpassword
    {
        use Controller;
        public function index()
        {
            
            $this->view('forgot_password');
        }
    }
