<?php
    
    
    class App {
        private $controller = 'Home';
        private $method = 'index';
        
        private function cleanURL() {
            /**If it does not exist ?? go home**/
            $URL = $_GET['url'] ?? 'home';
            /**Put link value into url**/
            $URL = explode("/", trim($URL, "/"));
            
            return $URL;
        }
        
        public function loadController() {
            $URL = $this->cleanURL();
            
            /**Select controller, warning, capitalised name for classes**/
            $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
            
            /*If file exists, we can require that file*/
            if (file_exists($filename)) {
                require $filename;
                /*once file exists, update whats in controller*/
                $this->controller = ucfirst($URL[0]);
            } else {
                $filename = "../app/controllers/admin/". ucfirst($URL[0]) . " .php";
                /*If file exists, we can require that file*/
                if (file_exists($filename)) {
                    require $filename;
                    /*once file exists, update whats in controller*/
                    $this->controller = ucfirst($URL[0]);
                    unset ($URL[0]);
                } else {
                    
                    $filename = "../app/controllers/_404.php";
                    require $filename;
                    $this->controller = "_404";
                }
            }
            
            $controller = new $this->controller;
            
            /**Select method**/
            if (!empty($URL[1])) {
                if (method_exists($controller, $URL[1])) {
                    $this->method = $URL[1];
                    unset($URL[1]);
                }
            }
            
            call_user_func_array([$controller, $this->method], $URL);
            
        }
        
        
    }
