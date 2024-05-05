<?php 
    $data = array(
        1 => array(
            'id' => 1,
            'name' => 'Kinh Doanh',
            'url' => '#',
            'parent_id' => 0
        ),
        2 => array(
            'id' => 2,
            'name' => 'Thể thảo',
            'url' => '#',
            'parent_id' => 0
        ),
        3 => array(
            'id' => 3,
            'name' => 'Quốc tế',
            'url' => '#',
            'parent_id' => 1
        ),
        4 => array(
            'id' => 4,
            'name' => 'Doanh nghiệp',
            'url' => '#',
            'parent_id' => 1
        ),
        5 => array(
            'id' => 5,
            'name' => 'Bóng đá',
            'url' => '#',
            'parent_id' => 2
        ),
        6 => array(
            'id' => 6,
            'name' => 'Marathon',
            'url' => '#',
            'parent_id' => 2
        ),
        7 => array(
            'id' => 7,
            'name' => 'Ngoại Hạng Anh',
            'url' => '#',
            'parent_id' => 5
        ),
    );

    // $result = array(
    //     1 => array(
    //         'id' => 1,
    //         'name' => 'Kinh Doanh',
    //         'parent_id' => 0
    //     ),
    //     3 => array(
    //         'id' => 3,
    //         'name' => 'Quốc tế',
    //         'parent_id' => 1
    //     ),
    //     4 => array(
    //         'id' => 4,
    //         'name' => 'Doanh nghiệp',
    //         'parent_id' => 1
    //     ),
    //     2 => array(
    //         'id' => 2,
    //         'name' => 'Thể thảo',
    //         'parent_id' => 0
    //     ),
    //     5 => array(
    //         'id' => 5,
    //         'name' => 'Bóng đá',
    //         'parent_id' => 2
    //     ),
    //     6 => array(
    //         'id' => 6,
    //         'name' => 'Marathon',
    //         'parent_id' => 2
    //     ),
    // );

    function has_child($data, $id) {
        foreach($data as $v) {
            if($v['parent_id'] == $id) return true;
        }
        return false;
    }

    function render_menu($data, $menu_id = "main-menu", $menu_class = "", $parent_id = 0, $level = 0) {
        $result = array();

        if($level == 0) {
            $result = "<ul id='{$menu_id}' class='{$menu_class}'>";
        }
        else {
            $result = "<ul class='sub-menu'>";
        }
        foreach($data as $v) {
            if($v['parent_id'] == $parent_id) {
               $result.= "<li>";
                $result.= "<a href='{$v['url']}'>{$v['name']}</a>";
                if(has_child($data, $v['id'])) {
                    $result .= render_menu($data, $menu_id, $menu_class, $v['id'], $level + 1);
                }
                $result.= "</li>";
            }
        }
        $result .= "</ul>";
        return $result;
    }

    echo render_menu($data, 'footer-menu', 'text-red');
    // $result= data_tree($data);
?>