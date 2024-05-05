<?php 
    #Danh mục
    /*
    *id => id
    *Tên danh mục => cat_title
    */

    $list_product_cat = array(
        1 => array(
            'id' => 1,
            'cat_title' => 'Điện thoại'
        ),
        2 => array(
            'id' => 2,
            'cat_title' => 'Laptop'
        ),
        3 => array(
            'id' => 3,
            'cat_title' => 'Macbook'
        ),
    );


    // Sản phẩm

    $list_product = array(
        1 => array(
            'id' => 1,
            'product_title' => 'Điện thoại Xiaomi 14 5G 512GB',
            'price' => 22490000,
            'code' => 'UNI#10',
            'product_desc' => 'Xiaomi 14 được ra mắt với tâm hướng mang đến những trải nghiệm mới mẻ và chất lượng. Như một lá cờ đầu trong ngành công nghệ, điện thoại không chỉ có thiết kế đẹp mà còn ấn tượng về màn hình, cấu hình mạnh',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/298538/xiaomi-14-xanh-1.jpg',
            'product_content' => "<p>Thêm vào đó, Xiaomi 14 còn được trang bị khả năng chống nước và chống bụi theo tiêu chuẩn IP68, một bước tiến đáng ghi nhận so với các mẫu điện thoại trước đó. Điều này giúp tăng cường 
            sự an tâm của người dùng khi sử dụng thiết bị trong nhiều môi trường và điều kiện khác nhau.</p>.
            <p><img src='https://cdn.tgdd.vn/Products/Images/42/298538/Kit/xiaomi-14-note.jpg'/></p>",
            'cat_id' => 1,
        ),
        2 => array(
            'id' => 2,
            'product_title' => 'Điện thoại iPhone 15 Pro Max 256GB',
            'price' => 29990000,
            'code' => 'UNI#14',
            'product_desc' => 'iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng.',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-black-thumbnew-200x200.jpg',
            'product_content' => "<p>Chất liệu chủ đạo của iPhone 15 Pro Max vẫn là khung kim loại và mặt lưng kính cường lực, tạo nên sự bền bỉ và chắc chắn. Tuy nhiên, với công nghệ tiên tiến, khung này đã được nâng cấp thành chất liệu titanium thay vì thép không gỉ hay nhôm ở những thế hệ trước.</p>.
            <p><img src='https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-130923-102854.jpg'/></p>",
            'cat_id' => 1,
        ),
        3 => array(
            'id' => 3,
            'product_title' => 'Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H/16GB/512GB/4GB',
            'price' => 20990000,
            'code' => 'UNI#14',
            'product_desc' => 'Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H (NH.QMFSV.002) đến từ nhà Acer với các thông số cấu hình đầy mạnh mẽ, card rời RTX 30 series cũng như sở hữu một mức giá thành lý tưởng, chắc chắn sẽ mang đến cho anh em những trải nghiệm tuyệt vời.',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/302207/hp-pavilion-15-eg2086tu-i3-7c0q8pa-1.jpg',
            'product_content' => "<p> Bộ nhớ RAM 16 GB chuẩn DDR4 cho phép người dùng đa nhiệm với các ứng dụng đòi hỏi nhiều tài nguyên mà không có tình trạng đơ máy. Đồng thời, laptop cũng có khả năng nâng cấp RAM lên đến 32 GB, tối ưu và tránh tối đa các hiện tượng tràn RAM khi sử dụng với hiệu suất cao hơn.</p>
            <p><img src='https://cdn.tgdd.vn/Products/Images/44/302207/Kit/hp-pavilion-15-eg2086tu-i3-7c0q8pa-note.jpg'/></p>",
            'cat_id' => 2,
        ), 
        4 => array(
            'id' => 4,
            'product_title' => 'Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H/16GB/512GB/4GB',
            'price' => 20990000,
            'code' => 'UNI#14',
            'product_desc' => 'Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H (NH.QMFSV.002) đến từ nhà Acer với các thông số cấu hình đầy mạnh mẽ, card rời RTX 30 series cũng như sở hữu một mức giá thành lý tưởng, chắc chắn sẽ mang đến cho anh em những trải nghiệm tuyệt vời.',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/309375/asus-vivobook-16-x1605va-i5-mb360w-glr-1-1.jpg',
            'product_content' => "<p> Bộ nhớ RAM 16 GB chuẩn DDR4 cho phép người dùng đa nhiệm với các ứng dụng đòi hỏi nhiều tài nguyên mà không có tình trạng đơ máy. Đồng thời, laptop cũng có khả năng nâng cấp RAM lên đến 32 GB, tối ưu và tránh tối đa các hiện tượng tràn RAM khi sử dụng với hiệu suất cao hơn.</p>
            <p><img src='https://cdn.tgdd.vn/Products/Images/44/309375/Kit/asus-vivobook-16-x1605va-i5-mb360w-glr-note.jpg'/></p>",
            'cat_id' => 2,
        ),
        5 => array(
            'id' => 5,
            'product_title' => 'Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11',
            'price' => 13890000,
            'code' => 'UNI#82RK005LVN',
            'product_desc' => 'Laptop Lenovo Ideapad 3 15IAU7 i3 (82RK005LVN) đã trở thành một người bạn đồng hành đắc lực, cùng mình giải quyết mọi vấn đề trong công việc cũng như học tập nhờ hiệu năng mạnh mẽ đến từ bộ vi xử lý Intel thế hệ 12 tân tiến.',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/287769/lenovo-ideapad-3-15iau7-i3-82rk005lvn-1-1.jpg',
            'product_content' => "<p> Màn hình có độ sáng 250 nits nên khi sử dụng máy trong môi trường văn phòng hoặc phòng riêng trong nhà, nội dung vẫn được hiển thị rõ nét nhưng khi mình dùng ở những nơi có độ sáng cao như ngoài quán cà phê sẽ hơi tối một chút. 
            Những thông số màn hình đo đạc bằng Spyder 5 Pro được 61% sRGB, 45% Adobe RGB và 45% DCI-P3 vẫn phù hợp với nhu cầu sử dụng thường ngày của mình đối với các tác vụ học tập và làm việc văn phòng, lướt web và xem phim giải trí 
            nhưng sẽ không đủ chuẩn xác nếu bạn có nhu cầu làm việc với hình ảnh hoặc thiết kế đồ họa.</p>
            <p><img src='https://cdn.tgdd.vn/Products/Images/44/287769/lenovo-ideapad-3-15iau7-i3-82rk005lvn-270223-111506.jpg'/></p>",
            'cat_id' => 2,
        ),
        6 => array(
            'id' => 6,
            'product_title' => 'Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU',
            'price' => 18690000,
            'code' => 'UNI#MGN63SA',
            'product_desc' => 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231244/grey-1-org.jpg',
            'product_content' => "<p> Chiếc MacBook này được trang bị con chip Apple M1 được sản xuất độc quyền bởi Nhà Táo trên tiến trình 5 nm, 8 lõi bao gồm 4 lõi tiết kiệm điện và 4 lõi hiệu suất cao, mang đến một hiệu năng kinh ngạc, xử lý mọi tác vụ văn phòng một cách mượt mà như Word, Excel, Powerpoint,... thực hiện tốt các nhiệm vụ chỉnh sửa hình ảnh, kết xuất 
            2D trên các phần mềm Photoshop, AI,... máy còn hỗ trợ tiết kiệm được điện năng cao.</p>
            <p><img src='https://cdn.tgdd.vn/Products/Images/44/231244/apple-macbook-air-2020-mgn63saa-280323-125156.jpg'/></p>",
            'cat_id' => 3,
        ),
        7 => array(
            'id' => 7,
            'product_title' => 'Laptop Apple MacBook Air 15 inch M2 8GB/256GB Sạc 35W',
            'price' => 13890000,
            'code' => 'UNI#MQKP3SA',
            'product_desc' => 'MacBook Air 15 inch M2 2023 đã có phiên bản cải tiến vừa được nhà Apple cho ra mắt, thêm không gian cho những điều bạn yêu với màn hình Liquid Retina 15 inch ấn tượng. Với người dùng yêu thích hiệu năng "nhanh như chớp" trong một thiết kế siêu gọn nhẹ của dòng Air thì đây chắc chắn là một sản phẩm bạn không nên bỏ qua.',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-15-inch-m2-2023-gray-1.jpg',
            'product_content' => "<p> Màn hình có độ sáng 250 nits nên khi sử dụng máy trong môi trường văn phòng hoặc phòng riêng trong nhà, nội dung vẫn được hiển thị rõ nét nhưng khi mình dùng ở những nơi có độ sáng cao như ngoài quán cà phê sẽ hơi tối một chút. 
            Những thông số màn hình đo đạc bằng Spyder 5 Pro được 61% sRGB, 45% Adobe RGB và 45% DCI-P3 vẫn phù hợp với nhu cầu sử dụng thường ngày của mình đối với các tác vụ học tập và làm việc văn phòng, lướt web và xem phim giải trí 
            nhưng sẽ không đủ chuẩn xác nếu bạn có nhu cầu làm việc với hình ảnh hoặc thiết kế đồ họa.</p>
            <p><img src='https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-m2-2023-070623-044421.jpg'/></p>",
            'cat_id' => 3,
        ),
        8 => array(
            'id' => 8,
            'product_title' => 'Laptop Apple MacBook Pro 14 inch M3 8GB/512GB',
            'price' => 38790000,
            'code' => 'UNI#MTL73SA',
            'product_desc' => 'MacBook Pro M3 8 GB là một bước tiến đáng kể trong dòng sản phẩm laptop của Apple, nổi bật với sự tập trung tối ưu hóa hiệu suất và đồ họa đỉnh cao. Với con chip M3 mạnh mẽ, sản phẩm này đặt ra một tiêu chuẩn mới cho hiệu năng và thiết kế thanh lịch. Điều này hứa hẹn mang đến trải nghiệm làm việc mượt mà và hiệu quả, đồng hành đỉnh cao cho tất cả tác vụ từ văn phòng, giải trí cho đến đồ họa chuyên nghiệp.',
            'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/318228/macbook-pro-14-inch-m3-2023-asd-1.jpg',
            'product_content' => "<p>MacBook Pro M3 thật sự ấn tượng với màn hình Liquid Retina XDR kích thước 14.2 inch, độ phân giải gốc 3024 x 1964 cung cấp nội dung hiển thị mang chất lượng sắc nét, cảm giác nhìn qua màn ảnh rất chân thực và sống động. Apple đã tích hợp công nghệ mini-LED và độ sáng duy trì lên đến 1.000 nits,
             tỷ lệ tương phản 1.000.000:1 và dải màu P3 Wide, tạo ra màu sắc tươi sáng và trung thực..</p>
            <p><img src='https://cdn.tgdd.vn/Products/Images/44/318228/apple-macbook-pro-14-inch-m3-2023-8-core-hinh-3-1.jpg'/></p>",
            'cat_id' => 3,
        )  
    );
?>