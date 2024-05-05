<?php 
    $data = array(
        1 => array(
            'id' => 1,
            'name' => 'Kinh Doanh',
            'parent_id' => 0
        ),
        2 => array(
            'id' => 2,
            'name' => 'Thể thảo',
            'parent_id' => 0
        ),
        3 => array(
            'id' => 3,
            'name' => 'Quốc tế',
            'parent_id' => 1
        ),
        4 => array(
            'id' => 4,
            'name' => 'Doanh nghiệp',
            'parent_id' => 1
        ),
        5 => array(
            'id' => 5,
            'name' => 'Bóng đá',
            'parent_id' => 2
        ),
        6 => array(
            'id' => 6,
            'name' => 'Marathon',
            'parent_id' => 2
        ),
        7 => array(
            'id' => 7,
            'name' => 'Ngoại Hạng Anh',
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

    function data_tree($data, $parent_id = 0, $level = 0) {
        $result = array();
        foreach($data as $v) {
            if($v['parent_id'] == $parent_id) {
                $v['level'] = $level;
                $result[] = $v;
                if(has_child($data, $v['id'])) {
                    $result_child = data_tree($data, $v['id'], $level + 1);
                    $result = array_merge($result, $result_child);
                }
            }
        }
        return $result;
    }

    $result= data_tree($data);
?>

<html>

<head>
    <title>Xuất dữ liệu đa cấp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <table class="table w-50">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
            </tr>
        </thead>
        <tbody>
            <?php
            unset($v); 
            $i =0;
                foreach($result as $v) {
                    $i++;
            ?>
            <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo str_repeat('--', $v['level']).$v['name']; ?></td>
            </tr>
            <?php
                }
            ?>

        </tbody>
    </table>
</body>

</html>