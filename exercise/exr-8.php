<?php 
    // Cách 1 Kiểm tra số nguyên chẵn
    // function check_even($n) {
    //     if($n % 2 ==0 ) {
    //         echo "{$n} là số nguyên chẵn";
    //     }else {
    //         echo "{$n} là số nguyên lẻ";
    //     }
    // }

    // gọi hàm
    // check_even(3);

    // Cách 2 bài 1
     // Kiểm tra số nguyên chẵn
    //  function check_even($n) {
    //     if($n % 2 ==0 ) 
    //        return true;
    //     return false;
    // }
    // // gọi hàm
    // if(check_even(10)) 
    //     echo "Đây là số nguyên chẵn";
    // else 
    //     echo "Đây là số nguyên lẻ";

    // Bài 2 cách 1
    // Tính tổng các số nguyên tố
    // Số nguyên tố là các số có giá trị lớn hơn 2!
    function check_prime($n) {
        for($i = 2; $i <= sqrt($n); $n++) {
            if($n % $i ==0) {
                // chỉ cần từ i tới căn bậc n mà có 1 số là ước của n thì ko phải số nguyên tố
                return false;
            }
        }
        return true;
    }

    function total_prime($n) {
        $t =0;
        for($i = 2; $i <= $n; $i++) {
            if(check_prime($i)) {
                $t+=$i;
                echo "${i} <br>";
            }
        }
        return $t;
    }
    echo "Tổng các số nguyên tố là".total_prime(8);

    // 3/Lấy thông tin bài viết theo id bài viết
    $list_post = array(
        1 => array(
            'id' => 1,
            'post_title' => "Bài viết số 1",
            'post_content' => "Chi tiết bài viết 1",
            'post_desc' => "Mô tả ngắn bài viết 1",
            'cat_id' => 1
        ),
        2 => array(
            'id' => 2,
            'post_title' => "Bài viết số 2",
            'post_content' => "Chi tiết bài viết 2",
            'post_desc' => "Mô tả ngắn bài viết 2",
            'cat_id' => 2
        )
    );
    
    function get_post_id($id) {
        global $list_post;
        // Cách1 
        if(array_key_exists($id,$list_post)) 
            return $list_post[$id];
        return false;

        // Cách 2
        // foreach($list_post as $key => $item) {
        //     if($key == $id) {
        //         return $list_post[$id];
        //     }
        // }
        // return false;
    }

    $item = get_post_id(1);

    echo "<pre>";
    print_r($item);
    echo "</pre>";
?>