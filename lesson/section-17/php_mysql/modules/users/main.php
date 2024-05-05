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
    $list_users = db_fetch_array("SELECT * FROM `tbl_users`");
    $num_rows = db_num_rows("SELECT * FROM `tbl_users`");
    foreach($list_users as &$user) {
        $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
        $user['url_delete'] =  "?mod=users&act=delete&id={$user['user_id']}";
    }
    unset($user);
    
   
?>

<div id="content">
    <a href="?mod=users&act=add" class="add_new">Thêm mới</a>
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
                $temp=0; 
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
    <p class="num_rows">Có <?php echo $num_rows; ?> thành viên</p>
    <?php }?>
</div>

<?php 
   get_footer();
?>