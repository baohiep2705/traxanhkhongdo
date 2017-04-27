<?php
/*
 * Template Name: XOA-CUNG-AM-NHAC
 */
$laurels_options = get_option('laurels_theme_options');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if (!empty($laurels_options['favicon'])) { ?>
      <link rel="shortcut icon" href="<?php echo esc_url($laurels_options['favicon']); ?>">
    <?php } ?>
    <?php wp_head(); ?>
     <script src="http://traxanhkhongdo.com.vn/scripts/leaves.js" type="text/javascript"></script>
    <style>
    .mua-he-khong-do-1{ width:30%; margin-right:5%; float:left; padding-top:5%;}
.mua-he-khong-do-2{ padding-top:5%;}
    </style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69609626-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body <?php body_class(); ?>>
    <header>
    <div id="leafContainer"></div> 
      <div class="header_bottom_tintuc_xoacung">
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
        </div> 
        <div>
        <a href="#"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/slide-xoacungamnhac-1.jpg" /></a>
        </div>
      </div>           
    </header>
<section>	
    
    <div class="container webpage-container">
    	<article class="blog-article">        
	  		<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 col-sm-12 no-padding"); ?>> 
     				<!----------Dolphin---------->
                    
                    
                    <div class="mua-he-khong-do">
                        <div class="mua-he-khong-do-1">
                            <div class="mua-he-khong-do-0">
                            <h1>MÙA HÈ KHÔNG ÐỘ</h1>
                            </div>
                            <p> MÙA HÈ KHÔNG ĐỘ - Một đại tiệc âm nhạc hoành tráng, quy tụ hàng loạt tên tuổi ca sĩ đang được yêu mến như: Sơn Tùng M-TP, Hoàng Thuỳ Linh, Trịnh Thăng Bình, Phan Mạnh Quỳnh, Bảo Anh, Hương Tràm, Hoàng Tôn, Justa Tee, Soobin Hoàng Sơn, Erik (St.319), Suni Hạ Linh, Lou Hoàng, DJ KingLady…</p>
                        
                            <a class="xemthem" href="http://traxanhkhongdo.com.vn/xoa-cung-am-nhac/"><img class="egcg" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/xemthem.png" /></a>
                        
                        </div>
                   		 <div class="mua-he-khong-do-2">
                         	 
                         		<?php
									$categories = get_categories();
									
										$category_ids = array(5,7);
										//$category_num = $cat->category_count;
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>3);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
															<a href="<?php echo get_permalink(); ?>" class=""><?php echo the_post_thumbnail();?></a>
											<?php	}	
																					
											}?>
										
                         	
                         </div>
                          <div class="mua-he-khong-do-3">
                         	 
                         		<?php
									$categories = get_categories();
									
										$category_ids = array(5,7);
										//$category_num = $cat->category_count;
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>2, 'offset'=>3);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
															<a href="<?php echo get_permalink(); ?>" class=""><?php echo the_post_thumbnail();?></a>
											<?php	}	
																					
											}?>
										
                         	
                         </div>
                         <div class="mua-he-khong-do-4">
                         	 
                         		<?php
									$categories = get_categories();
									
										$category_ids = array(5,7);
										//$category_num = $cat->category_count;
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>1, 'offset'=>5);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
															<a href="<?php echo get_permalink(); ?>" class=""><?php echo the_post_thumbnail();?></a>
											<?php	}	
																					
											}?>
										
                         	
                         </div>
                    </div>
                    <!----------------------->
                    <div class="home-sontung">
					<div class="sontung1"><a href="http://traxanhkhongdo.com.vn/tin-tuc/"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/xoacung-1.png" /></a></div>
                    <div class="sontung2">
                        <h1>GALA MÙA HÈ KHÔNG ÐỘ</h1>
                        <div class="p-text">
                        	<p>Tinh khiết, mát lành, Trà Xanh Không Độ giúp đẩy lùi căng thẳng, mệt mỏi và tạo nên phong cách năng động, tràn đầy sức sống.</p>
                        
                        	<p>Vì sức khỏe của người dùng,Trà Xanh Không Độ đã nỗ lực không ngừng để biến chuyển những đọt trà xanh tươi non thượng hạng thành thức uống tinh khiết, mát lành.</p>
                        
                       		<p>Một chai Trà xanh không độ mỗi sáng sẽ giúp các bạn giảm cảm giác căng thẳng mệt mỏi, xoa dịu stress, tạo nên một cuộc sống lạc quan.</p>
                        </div>
                        <!--Get 3 post into home page-->
                        <div class="laurels-custom-widget">
                        <div class="main-post">
                        		<?php
									$categories = get_categories();
									
										$category_ids = array(6);
										//$category_num = $cat->category_count;
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>3);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
                                                     <div class="media blog-media">
															<a href="<?php echo get_permalink(); ?>" class="pull-left"><?php echo the_post_thumbnail();?></a>
                                                     </div>
											<?php	}	
																					
											}?>
                                            
                                            
                                <!--  <?php
                                              $laurels_args = array('posts_per_page'   => 3,
                                                            'orderby'          => 'post_date',
                                                            'order'            => 'DESC',
                                                            'post_type'        => 'post',
                                                            'post_status'      => 'publish'															
                                                        );
                                            $laurels_single_post = new WP_Query( $laurels_args );
                                            while ( $laurels_single_post->have_posts() ) { $laurels_single_post->the_post();
                                    ?>
                                    <div class="media blog-media">	  
                                    <?php $laurels_feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                                    if($laurels_feat_image!="") { ?>
                                            <a href="<?php echo esc_url(get_permalink());?>" title="<?php echo get_the_title(); ?>" class="pull-left"> 
                                                <img src="<?php echo esc_url($laurels_feat_image); ?>" alt="<?php the_title(); ?>" class="media-object" />
                                            </a>
                                    <?php }else{ ?>
                                            <a href="<?php echo esc_url(get_permalink());?>" title="<?php echo get_the_title(); ?>"  class="pull-left"> 
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/img-not-available.jpg" class="media-object" /> 
                                            </a>
                                    <?php }?>
                                    
                                   
                                    </div>
                                  
                                  <?php  } ?>-->
                                  
                                  
                                </div>
                        </div>
                        <!--End get 3 post-->
                        <a class="xemthem" href="http://traxanhkhongdo.com.vn/xoa-cung-am-nhac/"><img class="egcg" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/xemthem.png" /></a>
                    </div>
                    </div>
                    <!------------------------>
                    
                    <div class="gala-khongdo">
                    <a href="http://traxanhkhongdo.com.vn/xoa-cung-am-nhac/">
                    	<iframe width="100%" height="515" src="https://www.youtube.com/embed/kgsn4fuRkhk" frameborder="0" allowfullscreen></iframe>								
                    </a></div>
                    
                    
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