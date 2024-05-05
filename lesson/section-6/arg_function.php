<?php 
// số hàm bổ trợ cho quá trình truyền biến đầu vào
// 1. func_num_args(): Lấy số lượng tham số
// 2. func_get_arg(): Lấy giá trị tham số hàm riêng lẻ
// 3. func_get_args(): Lấy mảng tham số hàm

    // Hàm có 1 tham số
    // function check_even($n) {
    //     if($n % 2 == 0) {
    //         echo "{$n} là số chẵn";
    //     }    
    // }

    // check_even(6);

    //TH1 Hàm có 2 tham số 
    // function sum($a, $b){
    //     $t = $a + $b;
    //     echo $t;
    // }
    
    // sum(3, 9);

    //TH2 Hàm có nhiều tham số
    // function show_array($data) {
    //     if(is_array($data)) {
    //         echo "<pre>";
    //         print_r($data);
    //         echo "</pre>";
    //     }
    // }
    
    // function sum_multi_number() {
    //     // echo func_num_args(); //Lấy số lượng tham số đầu vào
        

    //     // Lấy giá trị riêng từng tham số
    //     // $a = func_get_arg(0);
    //     // $b = func_get_arg(1);
    //     // echo "a = {$a} <br> b = {$b}";
        
    //     // 0 1 2 3
    //     $list_args = func_get_args();
    //     $t = 0;
    //     foreach($list_args as $value) {
    //         $t += $value;
    //     }
    //     show_array($list_args);
    //     echo $t; 
    // }
    
    // sum_multi_number(2, 5, 7, 9, 3);

    // Cách làm khác của hàm nhiều tham só đầu vào
   
    // function sum_multi_number($list_number = array()) {
    //     if(is_array($list_number)) {
    //         $t =0;
    //         foreach($list_number as $value){
    //             $t += $value;
    //         }
    //         echo $t;
    //     }
    // }
    // $list_number = array(2, 4, 6);
    // sum_multi_number($list_number);

    // Cách viết function key => value
    // function myFunction($arg_1, $arg_2, $option = array()) {
        
    // }

    // Viết hàm nhận giá trị đàu vào là 1 mảng gồm các thuộc tính của thẻ input
    // <input type='text' name='' value='' id='' class'' />
    function create_input_text($name, $value, $option = array()) {
        $name = func_get_arg(0);
        $value = func_get_arg(1);
        $option = func_get_arg(2);
        if(!empty($option)){
            $id = $option['id'];
            $class = $option['class'];
        }
        
        $input_html = "<input type='text' name='{$name}' value='{$value}' id='{$id}' class='{$class}'/>";
        echo $input_html;
    }

    create_input_text('username', '', $option = array('id' => 'username', 'class' => 'form_input'));
?>