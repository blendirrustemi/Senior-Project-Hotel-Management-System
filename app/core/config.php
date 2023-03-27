<?php
if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('ROOT', 'http://localhost/seniorProject-iste501/public/');
    define('ADMIN', 'http://localhost/seniorProject-iste501/admin/');

}else{

    define('ROOT', 'https://www.yinnsitethatwillbeused.com');
    define('ADMIN', '');
}
