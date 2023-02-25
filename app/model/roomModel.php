<?php
    
    class roomModel {
        // set database config for mysql
        
        public $conn;
    
        function __construct($consetup) {
            $this->host = $consetup->host;
            $this->user = $consetup->user;
            $this->pass = $consetup->pass;
            $this->db   = $consetup->db;
        }
        
        // open mysql data base
        public function open_db() {
            try {
                $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                exit("Error: " . $e->getMessage());
            }
        }
        
        // close database
        public function close_db() {
            $this->conn = NULL;
        }
        
        // insert record
        public function insertRecord($obj) {
            /**try {
                $this->open_db();
                $query = $this->conn->prepare("INSERT INTO sports (category,name) VALUES (?, ?)");
                $query->bind_param("ss", $obj->category, $obj->name);
                $query->execute();
                $res     = $query->get_result();
                $last_id = $this->condb->insert_id;
                $query->close();
                $this->close_db();
                
                return $last_id;
            } catch (Exception $e) {
                $this->close_db();
                throw $e;
            }*/

// WORK IN PROGRESS
        }
        
        //update record
        public function updateRecord($obj) {
           /** try {
                $this->open_db();
                $query = $this->condb->prepare("UPDATE sports SET category=?,name=? WHERE id=?");
                $query->bind_param("ssi", $obj->category, $obj->name, $obj->id);
                $query->execute();
                $res = $query->get_result();
                $query->close();
                $this->close_db();
                
                return true;
            } catch (Exception $e) {
                $this->close_db();
                throw $e;
            }*/

// WORK IN PROGRESS
        }
        
        // delete record
        public function deleteRecord($id) {
            /**try {
                $this->open_db();
                $query = $this->condb->prepare("DELETE FROM sports WHERE id=?");
                $query->bind_param("i", $id);
                $query->execute();
                $res = $query->get_result();
                $query->close();
                $this->close_db();
                
                return true;
            } catch (Exception $e) {
                $this->closeDb();
                throw $e;
            }*/

// WORK IN PROGRESS
        }
        
        // select record
        public function selectRecord($id) {
            try {
                //open db connection
                $this->open_db();
                
                //Select single record
                if ($id > 0) {
                    $stmt = $this->conn->query("SELECT * FROM room_type WHERE room_type_id=$id");
                    $row = $stmt->fetch();
                    $res = $row;
                }
                
                // Select all records
                else {
                    try {
                        $stmt = $this->conn->query("SELECT * FROM room_type");
                        $res  = [];
                        while ($row = $stmt->fetch()) {
                            $res[] = $row;
                        }
                    } catch (PDOException $e) {
                        exit("Error: " . $e->getMessage());
                    }
                }
                
                //close db connection
                $this->close_db();
                
                //return response
                return $res;
                
                //handle exceptions
            } catch (Exception $e) {
                $this->close_db();
                throw $e;
            }
            
        }
    }

?>
