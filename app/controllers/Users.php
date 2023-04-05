<?php
    //include('../models/User.php');
    
    class Users extends Controller
    {
//        use Controller;
        
        public function index()
        {
            $this->view('users');
        }
        
        // Here we construct a Users controller.
        // Here we also call functions from the Model class (models/User.php) and create functions that call the relevant functions from the model class.
        // Then we send the results to the view to be displayed back to the user.
        
        // Currently there is an error with this constructor. PLEASE TRY FIX THIS FIRST (open the users.view.php to see the error message)
    
        public User $user;
        public $request;
    
        // Creates new User model object
        public function __construct($request) {
            $this->request = $request;
            $this->user = new User(/** Insert the variables from the request */);
        }
        
        // Calls model's function
        public function getUser() {
            $this->user->getUser($this->user->getId());
        }
    
        // Calls model's function
        public function getUsers() {
            $this->user->getUsers();
        }
    
        // Calls model's function
        public function insertUser() {
            $this->user->insertUser($this->user);
        }
    
        // Calls model's function
        public function updateUser() {
            $this->user->updateUser($this->user);
        }
    
        // Calls model's function
        public function deleteUser() {
            $this->user->deleteUser($this->user->getId());
        }
    }
    
