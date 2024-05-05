<?php 
    function redirect($url = '?main=home') {
        if(!empty($url)){
            header("Location: {$url}");
        }
    }
?>