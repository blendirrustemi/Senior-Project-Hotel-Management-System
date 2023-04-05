<?php
if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('ROOT', 'http://localhost/seniorProject-iste501/public/');
    define('ADMIN', 'http://localhost/seniorProject-iste501/admin/');

    /** database config **/
    define('DBNAME', 'hotel_management_system');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

}else{

    define('ROOT', 'https://www.yinnsitethatwillbeused.com');
    define('ADMIN', '');

}

/** if true that means show the errors **/
define('DEBUG', true);

