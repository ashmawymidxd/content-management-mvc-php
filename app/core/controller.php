<?php

namespace ahmed\core;

use ahmed\core\DB;

class controller extends DB{

    public function view($path, $data = []) {
        if (file_exists(VIEW.$path.".php")) {
            extract($data); // Extract the data array to make its keys accessible as variables in the view
            require VIEW.$path.".php";
        } else {
            if (file_exists(VIEW."404.php")) {
                require VIEW."404.php";
            } else {
                echo 'you must provide this dir '.VIEW."404.php";
            }
        }
    }

}