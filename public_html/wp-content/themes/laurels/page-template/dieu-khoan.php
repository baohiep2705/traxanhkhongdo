<?php
/*
 * Template Name: DIEU-KHOAN
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
<meta name="geo.placename" content="Hồ Chí Minh, Hồ Chí Minh 70000, Việt Nam" />
<meta name="geo.position" content="10.8230990;106.6296640" />
<meta name="geo.region" content="VN-HỒ Chí Minh" />
<meta name="ICBM" content="10.8230990, 106.6296640" />
<link rel="alternate" href="http://traxanhkhongdo.com.vn/" hreflang="vi" />
     <meta name="google-site-verification" content="AkI9b-zPZNqz4WubOZwidAPpy1t9lCTIikjePsm3Dvg" />
    
  <script src="http://traxanhkhongdo.com.vn/scripts/leaves.js" type="text/javascript"></script>
  
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
    
     <script language="javascript">


    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


</script>
    
  </head>
  <body <?php body_class(); ?>>
    
    <header>
     <div id="leafContainer"></div> 
      <div class="header_bottom_sanpham">
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
          <div class="col-md-12 no-padding">
              <div class="dieu-khoan">
              	<h1> CÁC ĐIỀU KHOẢN VÀ ĐIỀU KIỆN</h1>
                <p>Tôi là Dr. Thanh. Chân thành chào đón bạn đến với Tập đoàn nước giải khát Tân Hiệp Phát (THP). THP chúng tôi đã và đang dấn thân trên một hành trình phi thường để đạt được những thành tựu của ngày hôm nay. Từ những ngày đầu tiên chập chững sản xuất men bia và đường, đến hôm nay chúng tôi tập trung tạo ra những loại nước giải khát tốt cho sức khỏe và không chứa chất bảo quản. THP là công ty hàng tiêu dùng nhanh tư nhân hàng đầu Việt Nam và tự hào đã xây dựng được trên quê hương mình một tập đoàn ngày càng vươn rộng ra thị trường quốc tế. Ngày nay doanh nghiệp chúng tôi đã sáng tạo, sản xuất và bán ra trên 20 loại sản phẩm. Chúng tôi sở hữu ba Thương hiệu Quốc gia: Trà thảo mộc Dr. Thanh, Trà xanh Không Độ và Nước tăng lực Number 1. Các sản phẩm của chúng tôi được bán rộng rãi trên khắp đất nước Việt Nam và 16 quốc gia khác.</p>
              </div>
          </div>
           
        </div> 
      </div>                
    </header>

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
