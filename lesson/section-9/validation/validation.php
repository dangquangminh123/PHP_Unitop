<?php 
    function is_username($username) {
        $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
        if(!preg_match($partten ,$username, $matchs))
            return false;
        return true;
    }
    
    function is_password($password) {
        $parren = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if(!preg_match($parren, $password, $matchs)) 
            return false;
        return true;
    }

    function form_error($label_field) {
        global $error;
        if(!empty($error[$label_field])) 
        return "<p class='error'>{$error[$label_field]}</p>";
    }

    function set_value($label_field) {
        // 2 $$ để lấy cụ thể giá trị của biến
        global $$label_field;
        if(!empty($$label_field)) return $$label_field;
    }
?>