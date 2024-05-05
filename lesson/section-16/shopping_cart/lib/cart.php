<?php 
    function add_cart($id) {
        global $list_product;
        $item = get_product_by_id($id); 

        $qty = 1;
        if(isset($_SESSION['cart'])&&array_key_exists($id, $_SESSION['cart']['buy'])) {
            $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
        }

        $_SESSION['cart']['buy'][$id] = array(
            'id' => $item['id'],
            'url' => $item['url'],
            'product_title' => $item['product_title'],
            'price' => $item['price'],
            'product_thumb' => $item['product_thumb'],
            'code' => $item['code'],
            'qty' => $qty,
            'sub_total' => $item['price'] * $qty
        );

        // Cập nhập giỏ hàng
        update_info_cart();
    }

    function update_info_cart() {
        if(isset($_SESSION['cart'])) {
            $number_order = 0;
            $total = 0;
            foreach($_SESSION['cart']['buy'] as $item) {
                $number_order += $item['qty'];
                $total+=$item['sub_total'];
            }
        
            $_SESSION['cart']['info'] = array(
                'num_order' => $number_order,
                'total' => $total
            );
        }
    }

    function get_list_buy_cart() {
        if(isset($_SESSION['cart'])) {
            foreach($_SESSION['cart']['buy'] as &$item) {
                $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}";
            }
            return $_SESSION['cart']['buy'];
        }
        return false;
    }

    function get_num_order_cart() {
        if(isset($_SESSION['cart'])) {
            return $_SESSION['cart']['info']['num_order'];
        }
    }

    function get_total_cart() {
        if(isset($_SESSION['cart'])) {
            return $_SESSION['cart']['info']['total'];
        }
        return false;
    }


    function delete_cart($id = '') {
        if(isset($_SESSION['cart'])) {
        // Xóa sản phẩm có $id trong giỏ hàng
            if(!empty($id)) {
                unset($_SESSION['cart']['buy'][$id]);
                update_info_cart();
            }
            else {
                unset($_SESSION['cart']);
            }
        } 
    }

    // function delete_all_cart() {
    //     if(isset($_SESSION['cart'])) {
    //         unset($_SESSION['cart']);
    //     }
    // }

    function update_cart($qty) {
        foreach($qty as $id => $new_qty) {
            $qty = $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
            $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
        }
        update_info_cart();
    }
?>