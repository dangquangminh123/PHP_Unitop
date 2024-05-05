<?php 
    if(isset($_POST['add-post'])) {
        show_array($_POST);
        show_array($_FILES);
    }
?>
<base href="http://localhost:8080/unitop/backend/exercise/exr-15/system_basic/" />
<div id="content">
    <h1>Thêm bài viết</h1>
    <form action="" enctype="multipart/form-data" method="POST">
        <label for="post-title">Tiêu đề bài viết</label>
        <input type="text" name="post-title" id="post-title" />
        <label for="post-excerpt">Mô tả ngắn</label>
        <textarea name="post-excerpt" id="post-excerpt" cols="100" rows="8"></textarea>
        <label for="post-content">Mô tả ngắn</label>
        <textarea name="post-content" class="ckeditor" id="post-content" cols="100" rows="5"></textarea>
        <label for="">Ảnh đại diện</label>
        <input type="file" name="file" />
        <br /><br />
        <input type="submit" name="add-post" value="Thêm sản phẩm" />
    </form>
</div>
<script src="../plugin/ckeditor/ckeditor.js" type="text/javascript"></script>