<?php 


    /****** ANONYMOUS FUNCTION *************/
    function pluck($arr,  $key) {

      $result = array_map(function($item) use($key) {
        return $item[$key];
      }, $arr);

      return $result;

    }

    
    function sum($a, $b) {
        $result = $a + $b;  //the $result variable is local variable
        return $result;

     }


    function output($value /*= ''*/) {
        echo '<pre>';
      print_r($value);
      echo '</pre>';
    }

    function authenticate_user($email, $password) {
        return $email == USER_NAME && $password == PASSWORD;
             
    }

    function redirect($url) {
        header("Location:$url");
    }

    function is_user_authenticated() {
        return isset($_SESSION['email']);
    }
    function ensure_user_is_authenticated() {
        if (!is_user_authenticated()){
            redirect('/3.2/login.php');  
            die();  
        }
    }
    ?>