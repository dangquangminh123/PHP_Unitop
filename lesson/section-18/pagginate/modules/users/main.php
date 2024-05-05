<?php 
    get_header();
?>

<?php 
    // Cách 1
    // $sql = "SELECT * FROM `tbl_users` WHERE `gender` = 'male'";
    // $sql = "SELECT * FROM `tbl_users`";
    // $result = mysqli_query($conn, $sql);
    // $num_rows = mysqli_num_rows($result);
    // $list_users = array();
    // if($num_rows > 0) {
    //     while($row = mysqli_fetch_assoc($result)) {
    //         $list_users[] = $row;
    //     }
    // }

    // Cách 2
   
    $num_rows = db_num_rows("SELECT * FROM `tbl_users` WHERE `gender` = 'male'");
    
    // Số lượng bản ghi trên trang
    $num_per_page = 3;
    // Tổng số bản ghi
    $total_row = $num_rows;
    
    // Tổng số trang
    $num_page = ceil($total_row/$num_per_page);

    echo "Số trang: ($num_page) <br/>";
    
    $page = isset($_GET['page'])?(int)$_GET['page']:1;
    
    $start = ($page-1)*$num_per_page;
    
    $list_users = get_users($start, $num_per_page, "`gender` = 'male'");
    
   
    foreach($list_users as &$user) {
        $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
        $user['url_delete'] =  "?mod=users&act=delete&id={$user['user_id']}";
    }
    unset($user);
    
   
?>

<div id="content">
    <a href="?mod=users&act=add" class="add_new">Thêm mới</a>
    <style>

    </style>

    <h1>danh sách thành viên </h1>
    <?php
        if(!empty($list_users)) {
    ?>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>Id</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $temp=$start; 
                foreach($list_users as $item) { 
                $temp++;
            ?>
            <tr>
                <td><?php echo $temp; ?></td>
                <td><?php echo $item['user_id']; ?></td>
                <td><?php echo $item['fullname']; ?></td>
                <td><?php echo $item['username']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo show_gender($item['gender']); ?></td>
                <td><a href="<?php echo $item['url_update']; ?>">Sửa</a>|
                    <a href="<?php echo $item['url_delete']; ?>">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php 
       echo get_pagging($num_page, $page, '?mod=users&act=main');
    ?>
    <p class="num_rows">Có <?php echo $num_rows; ?> thành viên</p>
    <div class="clearfix"></div>
    <?php }?>
</div>

<?php 
   get_footer();
?>