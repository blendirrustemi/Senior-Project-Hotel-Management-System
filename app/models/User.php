<?php
    // Here we create a class which will be used to create objects which are one-for-one replicas of a row in the database.
    // We then modify the data in the database and send a response back to the view through the controller.
    
    // Include Database.php to use the DB Connection variable
    include('../core/Database.php');
    
    class User {
        
        // Set the variables
        public $id;
        public $fullname;
        public $email;
        public $password;
        public $phone;
        public $isadmin;
        
        // Create the constructor
        public function __construct($_id, $_fullname, $_email, $_password, $_phone, $_isadmin) {
            $this->id       = $_id;
            $this->fullname = $_fullname;
            $this->email    = $_email;
            $this->password = $_password;
            $this->phone    = $_phone;
            $this->isadmin  = $_isadmin;
        }
        
        // Create the accessors
        public function getId() { return $this->id; }

        public function getFullname() { return $this->fullname; }

        public function getEmail() { return $this->email; }

        public function getPassword() { return $this->password; }

        public function getPhone() { return $this->phone; }

        public function getIsadmin() { return $this->isadmin; }
        
        // Create the modifiers
        public function setId($newId) { $this->id = $newId; }

        public function setFullName($newName) { $this->fullname = $newName; }
        
        public function setEmail($newEmail) { $this->email = $newEmail; }

        public function setPassword($newPassword) { $this->password = $newPassword; }

        public function setPhone($newPhone) { $this->phone = $newPhone; }

        public function setIsadmin($newIsadmin) { $this->isadmin = $newIsadmin; }
        
        // vv CRUD operations go here vv
        
        // Select from database
        public function getUser($id) {
            try {
                // Use the DB Connection var
                // Create query (single user - example: SELECT * FROM users WHERE id=$id)
                // Create statement
                // Execute statement
                // Return result (single object)
            } catch (Exception $e) {
                // Handle exception
                // (The code below is used to easily show the issue on the website in a block)
                echo '<pre style="overflow: auto; background: rgb(48, 48, 48); border: 1px solid #cccccc; max-height: 45vh; min-height: 5vh; font-size: 14px; font-family: monospace; padding: 1vh 0.5vw;  white-space: pre-wrap; outline: 0; margin: 1vh 0; color: #00ff00; z-index: 9999;position:relative;">';
                print_r($e);
                echo '</pre>';
            }
            
        }
        
        // Select all from database
        public function getUsers() {
            try {
                // Use the DB Connection var
                // Create query (All users - example: SELECT * from users)
                // Create statement
                // Execute statement
                // Return result (collection of objects - array)
            } catch (Exception $e) {
                // Handle exception
                // (The code below is used to easily show the issue on the website in a block)
                echo '<pre style="overflow: auto; background: rgb(48, 48, 48); border: 1px solid #cccccc; max-height: 45vh; min-height: 5vh; font-size: 14px; font-family: monospace; padding: 1vh 0.5vw;  white-space: pre-wrap; outline: 0; margin: 1vh 0; color: #00ff00; z-index: 9999;position:relative;">';
                print_r($e);
                echo '</pre>';
            }
        }
        
        // Insert into database
        public function insertUser($user) {
            try {
                // Use the DB Connection var
                // Create query (single user - example: INSERT INTO users (...) VALUES(...))
                // Create statement
                // Execute statement
                // Return result (number of rows affected - message will be printed on the screen as confirmation for the user being created)
            } catch (Exception $e) {
                // Handle exception
                // (The code below is used to easily show the issue on the website in a block)
                echo '<pre style="overflow: auto; background: rgb(48, 48, 48); border: 1px solid #cccccc; max-height: 45vh; min-height: 5vh; font-size: 14px; font-family: monospace; padding: 1vh 0.5vw;  white-space: pre-wrap; outline: 0; margin: 1vh 0; color: #00ff00; z-index: 9999;position:relative;">';
                print_r($e);
                echo '</pre>';
            }
        }
        
        // Update the database
        public function updateUser($user) {
            try {
                // Use the DB Connection var
                // Create query (single user - example: UPDATE users SET id=?, fullname=?... WHERE id=?)
                // Create statement
                // Execute statement
                // Return result (number of rows affected - message will be printed on the screen as confirmation for the user being updated)
            } catch (Exception $e) {
                // Handle exception
                // (The code below is used to easily show the issue on the website in a block)
                echo '<pre style="overflow: auto; background: rgb(48, 48, 48); border: 1px solid #cccccc; max-height: 45vh; min-height: 5vh; font-size: 14px; font-family: monospace; padding: 1vh 0.5vw;  white-space: pre-wrap; outline: 0; margin: 1vh 0; color: #00ff00; z-index: 9999;position:relative;">';
                print_r($e);
                echo '</pre>';
            }
        }
        
        // Delete from the database
        public function deleteUser($id) {
            try {
                // Use the DB Connection var
                // Create query (single user - example: DELETE FROM users WHERE id=$id)
                // Create statement
                // Execute statement
                // Return result (number of rows affected - message will be printed on the screen as confirmation for the user being deleted)
            } catch (Exception $e) {
                // Handle exception
                // (The code below is used to easily show the issue on the website in a block)
                echo '<pre style="overflow: auto; background: rgb(48, 48, 48); border: 1px solid #cccccc; max-height: 45vh; min-height: 5vh; font-size: 14px; font-family: monospace; padding: 1vh 0.5vw;  white-space: pre-wrap; outline: 0; margin: 1vh 0; color: #00ff00; z-index: 9999;position:relative;">';
                print_r($e);
                echo '</pre>';
            }
        }
    }
