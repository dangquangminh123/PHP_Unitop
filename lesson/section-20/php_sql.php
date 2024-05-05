<?php 
    // Xử lý dữ liệu với điều kiện phức
    "SELECT * FROM `tbl_users` WHERE `gender` = 'male' AND `age` >= 30";
    "SELECT * FROM `tbl_users` WHERE `email` = 'sonhoang@gmail.com' OR `username` = 'hoangson'";
    "SELECT * FROM `tbl_users` WHERE NOT `user_id` = 3";
    // Xử lý dữ liệu theo nhóm
    "SELECT * FROM `tbl_users` WHERE `user_id` IN (10, 20, 24)"; //lọc ra các sản phẩm có những giá trị id theo nhóm

    // Tìm kiếm thông tin trong cở sở dữ liệu
    "SELECT * FROM `tbl_users` WHERE `username` LIKE %hang%";

    // Sắp xếp dữ liệu trả về
    "SELECT * FROM `tbl_users` ORDER BY `username` ASC";

    // Đếm số lượng bản ghi theo điều kiện
    "SELECT COUNT(user_id) as `num_male` FROM `tbl_users` WHERE `gender` = 'male'";
    "SELECT COUNT(user_id) FROM `tbl_users` WHERE `username` LIKE 'h%'";

    // Tính tổng giá trị của thuộc tính
    "SELECT SUM(earn) FROM `tbl_users` WHERE `gender` = 'female'";
    
    // Các phép join
    // 1 left join
    "SELECT `tbl_comment`.`content`,`tbl_users`.`username` FROM 
    `tbl_comment` LEFT JOIN `tbl_users` ON `tbl_comment`.`user_id` = `tbl_users`.`user_id`";
    /* Ở đây là kết từ bản comment đối chiếu tới kết quả của users*/
    // 2 right join
    "SELECT `tbl_comment`.`content`,`tbl_users`.`username` FROM 
    `tbl_comment` RIGHT JOIN `tbl_users` ON `tbl_comment`.`user_id` = `tbl_users`.`user_id`";
     /* Ở đây là kết từ bản ysers đối chiếu tới kết quả của comments*/

    // 3 join
    "SELECT `tbl_comment`.`content`,`tbl_users`.`username` FROM 
    `tbl_comment` JOIN `tbl_users` ON `tbl_comment`.`user_id` = `tbl_users`.`user_id`";
    /* Đối chiếu kết quả từ cả 2 bản có thì mới xuất ra kết quả*/

    // SQL Advance
    "SELECT MAX('total') as `max_total` FROM `tbl_orders` WHERE 1";
    "SELECT MIN('total') as `min_total` FROM `tbl_orders` WHERE 1";

    // Group By
    "SELECT COUNT(`order_id`) as `num_orders`, `city` FROM `tbl_orders` GROUP BY `city`";
    //GROUP BY ORDER BY
    "SELECT COUNT(`order_id`) as `num_orders`, `city` FROM `tbl_orders` GROUP BY `city` ORDER BY COUNT(`order_id`) DESC";
    
    "SELECT * FROM `tbl_orders` WHERE `city` IN ('Ha Noi', 'Da Nang')";
?>