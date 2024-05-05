<?php 
    $price = $_POST['price'];
    $num_order = $_POST['num_order'];
    $total = $price * $num_order;
    // Trường hợp bên ajax dùng method GET
    // $num_order = $_GET['num_order'];

    // $result = array(
    //     'price' => $price,
    //     'num_order' => $num_order,
    //     'total' => $total,
    // );
    // echo json_encode($result);

    echo $total;
?>