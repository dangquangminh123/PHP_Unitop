<?php 
    get_header('product');
?>
<?php 
    $cat_id = (int)$_GET['cat_id'];
    echo $cat_id;
?>
<div id="content">
    <h1>danh sách sản phẩm - <?php echo $cat_id; ?></h1>
</div>

<?php 
   get_footer();
?>