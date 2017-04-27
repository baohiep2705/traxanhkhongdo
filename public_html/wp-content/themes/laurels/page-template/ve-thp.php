<?php
/*
 * Template Name: VE-THP
 */
$laurels_options = get_option('laurels_theme_options');
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
  <!--<![endif]-->
  <head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta http-equiv="content-language" content="vi" />
<Meta name="Author" Content="traxanhkhongdo.com.vn">
<meta name="geo.placename" content="H Ch� Minh, H? Ch� Minh 70000, Vi?t Nam" />
<meta name="geo.position" content="10.8230990;106.6296640" />
<meta name="geo.region" content="VN-H? Ch� Minh" />
<meta name="ICBM" content="10.8230990, 106.6296640" />
<link rel="alternate" href="http://traxanhkhongdo.com.vn/" hreflang="vi" />
     <meta name="google-site-verification" content="AkI9b-zPZNqz4WubOZwidAPpy1t9lCTIikjePsm3Dvg" />
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69609626-1', 'auto');
  ga('send', 'pageview');

</script>
  

    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if (!empty($laurels_options['favicon'])) { ?>
      <link rel="shortcut icon" href="<?php echo esc_url($laurels_options['favicon']); ?>">
    <?php } ?>
    <?php wp_head(); ?>
    
     <script src="http://traxanhkhongdo.com.vn/scripts/leaves.js" type="text/javascript"></script>
    
  </head>
  <body <?php body_class(); ?>>
 
    <header>
      <div id="leafContainer">   </div>     
      <div class="header_bottom">
        <div class="container webpage-container">
          <div class="col-md-12 no-padding "> 
            <div class="header_menu">    
              <div class="col-sm-2 col-md-2 logo-display  no-padding">
                <?php if (empty($laurels_options['logo'])) { ?>
                  <h1 class="laurels-site-name"><a href="<?php echo esc_url(site_url()); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                <?php } else { ?>
                  <a href="<?php echo site_url(); ?>"><img class="egcg logo-txkd" src="<?php echo esc_url($laurels_options['logo']); ?>" alt="Theme Logo" class="img-responsive logo" /></a>
                <?php } ?> 
              </div>    
              <div class="col-sm-10 col-md-10 no-padding">                  
                <nav class="navbar-default main_menu navigation-deafault" role="navigation">
                  <div class="navbar-header res-nav-header toggle-respon">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>                    
                  </div>
                  </nav>	
                  <!--social-->
                   <div class="col-md-3 col-sm-4 social"> 
                    <ul class="list-inline logo_div">
					<?php if (!empty($laurels_options['facebook'])) { ?>
                      <li ><a href="<?php echo esc_url($laurels_options['facebook']); ?>"><i class="fa fa-facebook"></i> </a></li>
                    <?php } ?>  
                    <?php if (!empty($laurels_options['twitter'])) { ?>
                      <li ><a href="<?php echo esc_url($laurels_options['twitter']); ?>"> <i class="fa fa-twitter"></i> </a></li>
                    <?php } ?>  
                    <?php if (!empty($laurels_options['pinterest'])) { ?>
                      <li ><a href="<?php echo esc_url($laurels_options['pinterest']); ?>"> <i class="fa fa-pinterest"></i> </a></li>
                    <?php } ?>
                    <?php if (!empty($laurels_options['googleplus'])) { ?>  
                      <li ><a href="<?php echo esc_url($laurels_options['googleplus']); ?>"> <i class="fa fa-youtube"></i> </a></li>  
                    <?php } ?>
                    <?php if (!empty($laurels_options['rss'])) { ?>
                      <li ><a href="<?php echo esc_url($laurels_options['rss']); ?>"> <i class="fa fa-rss"></i></a></li>            
                    <?php } ?>                   
                  </ul>                       
                   </div> 
                  <?php
                  $laurels_defaults = array(
                      'theme_location' => 'primary',
                      'container' => 'div',
                      'container_class' => 'collapse navbar-collapse nav_coll main-menu-ul no-padding',
                      'container_id' => '',
                      'menu_class' => 'collapse navbar-collapse nav_coll main-menu-ul no-padding',
                      'menu_id' => '',
                      'echo' => true,
                      'fallback_cb' => 'wp_page_menu',
                      'before' => '',
                      'after' => '',
                      'link_before' => '',
                      'link_after' => '',
                      'items_wrap' => '<ul>%3$s</ul>',
                      'depth' => 0,
                      'walker' => ''
                  );
                  wp_nav_menu($laurels_defaults);
                  ?>
                
              </div>
            </div>				
          </div>
          <div id="bg" class="popup_bg"></div>
          <div class="col-md-12 no-padding video-egcg">
          	<div class="header_menu">
            	<div class="col-sm-6 col-md-6 logo-display  no-padding">
                	<a href="#" onClick="openYouTube('Zml3WQkPcDo');"><img class="egcg video" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/video.jpg" /></a>
                    
                </div>
                <div class="col-sm-6 col-md-6 no-padding video-egcg-1">
                	<a href="#"><img class="egcg egcg-traxanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-egcg.png" /></a>
                    <a href="#"><img class="egcg egcg-traxanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-traxanh.png" /></a>
                </div>
            </div>
          </div>
           <div class="col-md-12 no-padding giainhiet">          	
            <a href="#"><img class="egcg" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/button_giainhiet.png" /></a>           
            </div>
        </div> 
      </div>                
    </header>

<section>	
    
    <div class="container webpage-container">
    	<article class="blog-article" style=" background:#f9fbfa;">        
	  		<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 col-sm-12 no-padding"); ?>> 
     				<!----------Dolphin---------->
                    <div class="sumenh-1">
                    	<div class="sumenh-1-1">
                        <h1>VỀ CHÚNG TÔI</h1>
                        <p>Tập đoàn Number 1 có tiền thân là nhà máy bia Bến Thành được thành lập vào năm 1994. Trải qua hơn 20 năm hình thành và phát triển, ngày nay Number 1 đã trở thành tập đoàn nước giải khát hàng đầu Việt Nam với các nhãnhiệu nổi tiếng được người tiêu dùng ưa chuộng như: nước tăng lực Number 1, Trà xanh Không Độ, Trà thảo mộc Dr Thanh, nước ép trái cây Number 1 Juicie, sữa đậu nành Number 1 Soya, Sữa đậu xanh Number 1 Soya, nước tinh khiết Number 1, nước uống vận động Number1 Active,trà Ô Long Không Độ Linh Chi…
</p>
                        <p>Hiện nay Tập đoàn Number 1 sở hữu nhiều công nghệ sản xuất, dây chuyền hiện đại bậc nhất thế giới và chuỗi nhà máy mới gồm Number One Chu Lai, Number 1 Hà Nam, Number 1 Hậu Giang.</p>
                        </div>
                    	<div class="sumenh-1-2"><a href="http://thp.com.vn"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/ve-chung-toi-logo.png" /></a></div>
                    </div>

                    <div class="sumenh-2">
                    	<div class="sumenh-2-1">
                        	<h1>SỨ MỆNH CỦA CHÚNG TÔI</h1>
                        	<p>Tập đoàn Tân Hiệp Phát ( THP Corp) hướng đến mục tiêu tạo nên những đóng góp quan trọng cho sự phát triển của Việt Nam bằng cách tạo ra các thương hiệu đồ uống hàng đầu cho đất nước. Mục tiêu của chúng tôi là trở thành một trong những công ty thực phẩm và nước giải khát hàng đầu ở khu vực châu Á và phục vụ cho nhu cầu người tiêu dùng toàn cầu.</p>                         </div>        
                    </div>
                 <div class="sumenh-img-thp"><a href="http://traxanhkhongdo.com.vn/xoa-cung-am-nhac/"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/lienhe3.png" /></a></div>
                  <div class="giatri-cotloi">
                  		<h1>GIÁ TRỊ CỐT LÕI CỦA TẬP ĐOÀN TÂN HIỆP PHÁT</h1>
                        <ul>
                        	<li>Thỏa mãn khách hàng</li>
                            <li> Chất lượng chuẩn quốc tế</li>
                             <li> Có trách nhiệm đối với cộng đồng và xã hội</li>
                            <li>   Không gì là không thể</li>
                             <li>  Làm chủ trong công việc</li>
                              <li>  Hôm nay phải hơn hôm qua nhưng không bằng ngày mai</li>
                              <li> Chính trực</li>
                        </ul>
                  </div>  
                    
                   <div class="nguyenvong">
                    <h1>NGUYỆN VỌNG CỦA GIA TỘC HỌ TRẦN</h1>
                    <p>Gia tộc họ Trần mong muốn sống một cuộc đời trọn vẹn nhất; can đảm tạo nên những thành tựu có giá trị và đáng nhớ được cả gia tộc và cộng đồng tại quê nhà cũng như trên toàn cầu tôn trọng.</p>
                   </div> 
                    <div class="sumenh-img"><a href="#"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/giatoc.png" /></a></div>
                    <div class="thanhtuu">
                    	<h1>THÀNH TỰU</h1>
                       <div class="thanhtuu-1">
                        	<ul>
                            	<li>Thương hiệu quốc gia 2010</li>
                                  <li>  Thương hiệu quốc gia 2012</li>
                                   <li> Thương hiệu quốc gia 2014</li>
                                   <li> Huân chương lao động hạng 3</li>
                            </ul>
                       
                       
                        	<ul>
                            	<li>Top 10 tăng trưởng nhanh Fast 500</li>
								<li>Top 100 sản phẩm dịch vụ được tin dùng năm 2012</li>
                                <li>do độc giả Thời báo Kinh tế Việt Nam - Tạp chí Tư </li>
                                <li>vấn Tiêu & Dùng bình chọn</li>
                            </ul>
                       </div>
                    </div>
                    <div class="sanpham-chuluc">
                    	<h1 class="sanpham-h1">SẢN PHẨM CHỦ LỰC</h1>
                        <div class="sanpham-txkd">
                        	<img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/txkd.jpg" />
                            <div class="sanpham-txkd-1">
                            <h1>TRÀ XANH KHÔNG ĐỘ</h1>
                            <p>Trà Xanh Không Độ được chiết xuất từ những đọt trà xanh tươi, bằng dây chuyền hiện đại của Châu Âu kết hợp với công nghệ ưu việt từ Nhật Bản, giúp giữ lại cao nhất hàm lượng chất chống oxy hóa EGCG, giúp chống lão hóa, giảm stress, ngăn ngừa ung thư, tăng cường sức đề kháng và làm đẹp da… Trà Xanh Không Độ đem đến cho người dùng cảm giác sảng khoái, tươi mát và sẵn sàng cho cuộc sống mới.</p>
                            </div>
                        </div>
                        
                        <div class="sanpham-drthanh">                        	
                            <div class="sanpham-drthanh-1">
                            <h1>TRÀ THẢO MỘC DR.THANH</h1>
                            <p>Trải nghiệm từ công dụng của 9 loại trà thảo mộc quý: Hạ khô thảo giúp lợi tiểu mát gan, sát trùng, tiêu độc – Hoa mộc miên tiết nhiệt, thanh mát – Sứ có vị ngọt tính bình – Sương sáo mát ngọt, trong lành – Cúc vàng thanh nhiệt, giải độc – Bung lai giải trừ các tác nhân gây nhiệt – Kim ngân kháng khuẩn, giải độc, thanh sạch – Cam thảo ôn trung hạ nhiệt – La hán quả giải khát sảng khoái, trà thảo mộc Dr Thanh được sản xuất bởi Tân Hiệp Phát năm 2009 đặt mục tiêu chinh phục người tiêu dùng ở vị trí thức uống giải khát có khả năng thanh nhiệt và làm mát cơ thể.
</p>							
                            </div>
                            <img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/drthanh.jpg" />
                        </div>
                        
                        
                        <div class="sanpham-number1">
                        	<img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/number1.jpg" />
                            <div class="sanpham-number1-1">
                            <h1>NƯỚC TĂNG LỰC NUMBER ONE</h1>
                            <p>Nước tăng lực Number 1 có tác dụng bổ sung và giải phóng năng lượng, hòa tan các vitamin trong thức ăn, hỗ trợ các chức năng của hệ thần kinh, não và cơ bắp, tăng cường trí nhớ. Với khả năng cung cấp năng lượng ngay lập tức và hương vị thơm ngon, Number 1 trở thành lựa chọn thường xuyên cho nhiều người tiêu dùng.</p>
                            <p>Nước tăng lực Number 1 – Không Gì Là Không Thể - Chinh Phục mọi thử thách.</p>
                        </div>
                    </div>
           
                    <!-----------End Dolphin----->
            </div> 
<!--Start scroll-->
 <a href="#" class="scrollup"></a>
<!--End scroll-->     
    	</article>
    </div>
</section>
<footer>
	
	<div class="container webpage-container padding-footer">
   		<div class="col-sm-2 col-md-2  no-padding bottom-footer">
                <?php if (empty($laurels_options['logo'])) { ?>
                  <h1 class="laurels-site-name"><a href="<?php echo esc_url(site_url()); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                <?php } else { ?>
                  <a href="<?php echo site_url(); ?>"><img class="egcg logo-footer" src="<?php echo esc_url($laurels_options['logo']); ?>" alt="Tra Xanh Khong Do" class="img-responsive logo" /></a>
                <?php } ?> 
             
        </div>
        <div class="col-sm-3 col-md-3  no-padding bottom-footer diachi">
        	<p><img class="lien-he" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/lien-he.png" /></p>
        	<p>
        	<?php if(!empty($laurels_options['footertext'])) {
			 	echo esc_attr($laurels_options['footertext']).' '; 
			  }
			?>  
            </p>
        </div>
	<div class="col-sm-4 col-md-4  no-padding bottom-footer-add diachi1">        	
        	<p>
            	219 đại lộ Bình Dương, phường Vĩnh Phú,thị xã Thuận An, Tỉnh Bình Dương(0650) 3755161
            </p>
            </div>
        <div class="col-sm-3 col-md-3  no-padding bottom-footer bottom-footer-add1">
        	<a href="http://traxanhkhongdo.com.vn/ve-tan-hiep-phat/"><p><img class="ve-thp" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/ve-thp.png" /></p></a> </a>
           <a href="http://traxanhkhongdo.com.vn/dieu-khoan/"><p><img class="dieu-khoan-dieu-le" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/the-le.png" /></p></a></a>
        	<p>
            	
            </p>
            </div>
	 <div class="col-sm-3 col-md-3  no-padding bottom-footer-add">
        	<a href="http://traxanhkhongdo.com.vn/ve-tan-hiep-phat/"><p>Về Tân Hiệp Phát</p></a> </a>
           <a href="http://traxanhkhongdo.com.vn/dieu-khoan/"><p>Thể Lê - Điều khoản</p></a></a>
        	<p>
            	
            </p>
            </div>
        <div class="col-sm-4 col-md-4 no-padding bottom-footer footer-logo">
        
        	<ul>
            	<li><a href="http://thp.com.vn/" ><img class="egcg txkd" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-thp.jpg" /></a></li>
				<li><a href="http://tradrthanh.com/" ><img class="egcg drthanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-drthanh.jpg" /></a></li>
                <li><a href="http://number1.com.vn/" ><img class="egcg number1" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-number1.jpg" /></a></li>
                <li><a href="#" ><img class="egcg number1-chanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-number1-chanh.jpg" /></a></li>
				
            </ul>
<p class="copy-right">Copy right by <span>TRÀ XANH KHÔNG ĐỘ</span></p>
        </div>  

<div class="col-sm-12 col-md-12  no-padding footer-logo1">
<ul>
            	<li><a href="http://thp.com.vn/" ><img class="egcg txkd" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-thp.jpg" /></a></li>
				<li><a href="http://tradrthanh.com/" ><img class="egcg drthanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-drthanh.jpg" /></a></li>
                <li><a href="http://number1.com.vn/" ><img class="egcg number1" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-number1.jpg" /></a></li>
                <li><a href="#" ><img class="egcg number1-chanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-number1-chanh.jpg" /></a></li>
				
            </ul>
</div>     
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
