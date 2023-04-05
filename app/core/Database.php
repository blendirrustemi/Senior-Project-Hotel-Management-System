<?php

Class Database{
    public function connect()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);

        return $con;
    }

    public function query($query, $data = [])
    {

        try {
            $con = $this->connect();
            $stm = $con->prepare($query);

            $check = $stm->execute($data);
            if($check)
            {
                $result = $stm->fetchAll(PDO::FETCH_OBJ);
                if(is_array($result) && count($result) > 0)
                {
                    return $result;
                } return $result;
            }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return false;
    }
}
