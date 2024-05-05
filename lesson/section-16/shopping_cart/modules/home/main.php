<?php 
    get_header();
?>


<?php 
    $list_mobile = get_list_product_by_cat_id(1); 
    $list_laptop= get_list_product_by_cat_id(2); 
    $list_macbook = get_list_product_by_cat_id(3); 

    $info_cat_mobile = get_info_cat(1);
    $info_cat_laptop = get_info_cat(2);
    $info_cat_macbook = get_info_cat(3);
?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a href="<?php echo $info_cat_mobile['url'] ?>"
                        class="section-title"><?php echo $info_cat_mobile['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php 
                            if(!empty($list_mobile)) {          
                    ?>
                    <ul class="list-item clearfix">
                        <?php foreach($list_mobile as $item) {  ?>
                        <li>
                            <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                            </a>
                            <a href="<?php echo $item['url'] ?>" title="" class="title">
                                <?php echo $item['product_title'] ?>
                            </a>
                            <p class="price"><?php echo currency_format($item['price']) ?></p>
                        </li>
                        <?php 
                            }
                        ?>
                    </ul>
                    <?php 
                            }
                        ?>
                </div>
            </div>

            <div class="section list-cat">
                <div class="section-head">
                    <a href="<?php echo $info_cat_laptop['url'] ?>"
                        class="section-title"><?php echo $info_cat_laptop['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php 
                            if(!empty($list_laptop)) {          
                    ?>
                    <ul class="list-item clearfix">
                        <?php foreach($list_laptop as $item) {  ?>
                        <li>
                            <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                            </a>
                            <a href="<?php echo $item['url'] ?>" title="" class="title">
                                <?php echo $item['product_title'] ?>
                            </a>
                            <p class="price"><?php echo currency_format($item['price']) ?></p>
                        </li>
                        <?php 
                            }
                        ?>
                    </ul>
                    <?php 
                            }
                        ?>
                </div>
            </div>

            <div class="section list-cat">
                <div class="section-head">
                    <a href="<?php echo $info_cat_macbook['url'] ?>"
                        class="section-title"><?php echo $info_cat_macbook['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php 
                            if(!empty($list_macbook)) {          
                    ?>
                    <ul class="list-item clearfix">
                        <?php foreach($list_macbook as $item) {  ?>
                        <li>
                            <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                            </a>
                            <a href="<?php echo $item['url'] ?>" title="" class="title">
                                <?php echo $item['product_title'] ?>
                            </a>
                            <p class="price"><?php echo currency_format($item['price']) ?></p>
                        </li>
                        <?php 
                            }
                        ?>
                    </ul>
                    <?php 
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
   get_footer();
?>