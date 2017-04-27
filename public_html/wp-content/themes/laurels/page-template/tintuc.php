<?php
/*
 * Template Name: TIN-TUC
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
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if (!empty($laurels_options['favicon'])) { ?>
      <link rel="shortcut icon" href="<?php echo esc_url($laurels_options['favicon']); ?>">
    <?php } ?>
    <?php wp_head(); ?>
      <script src="http://traxanhkhongdo.com.vn/scripts/leaves.js" type="text/javascript"></script>
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
        <a href="#"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/slide-tintuc-1.jpg" /></a>
        </div>
      </div>                
    </header>
<section>	
    
    <div class="container webpage-container">
    	<article class="blog-article">        
	  <div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 col-sm-12 no-padding"); ?>> 
      <?php while ( have_posts() ) : the_post(); ?>
      <?php $laurels_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                 <?php if(!empty($laurels_image)) { ?>
						<div class="blog-rightsidebar-img">
							<img src="<?php echo esc_url($laurels_image); ?>" alt="<?php the_title(); ?>" class="img-responsive"  />
						</div>
                    <?php } ?>
                    <div class="blog-data">                       
                        <div class="blog-content">     
                        	<div class="col-md-9 col-sm-8">
                            	<div class="one-sanpham">
                            	 	<?php
									$categories = get_categories();
									
										$category_ids = 4;
										//$category_num = $cat->category_count;
										
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>1);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
                                                     <?php $format = get_post_format($post->ID); ?>
                                                     	<?php if ($format != 'video') { ?>
															<a href="<?php echo get_permalink(); ?>" class=""><?php the_post_thumbnail( array( 1000, 800 ) ); ?></a>
                                                            <p class="one-sanpham-title"><a href="<?php echo get_permalink(); ?>" class=""><?php the_title(); ?></a></p>
                                                            <p style="color:#5bba46;"><?php the_excerpt() ?></p>
                                                        <?php } ?>  
											<?php	}	
																					
											}?>
                                    </div>
                                    
                            </div> 
                                                 
                                
                              <div class="col-md-3 col-sm-4 no-padding">
                              	<div class="qc1"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/qc.jpg" /></div>
                                <div>
                                	<div class="blog-info1"><a href="#">Tin Nổi Bật</a></div>
                                	<?php
									$categories = get_categories();
									
										$category_ids = 4;
										//$category_num = $cat->category_count;
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>3, 'offset'=>1);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
                                                     <?php $format = get_post_format($post->ID); ?>
                                                     	<?php if ($format != 'video') { ?>
                                                     		<div class="hot-sanpham">
															<a href="<?php echo get_permalink(); ?>" class=""><?php echo the_post_thumbnail();?></a>
                                                            <p><a href="<?php echo get_permalink(); ?>" class=""><?php the_title(); ?></a></p>
                                                            </div>
                                                          <?php } ?>    
											<?php	}	
																					
											}?>
                                </div>
                              </div>                  
                                  
                        </div>
                        <!------------------------------------------------->
                         <hr class="hr-home1" />
                        <div class="blog-content">
                        	<div class="col-md-12 col-sm-12">
                            <h2 style="color:#5bba46;">CÁC TIN LIÊN QUAN</h2>
                            	<?php
									$categories = get_categories();
									
										$category_ids = 4;
										//$category_num = $cat->category_count;
										
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>9, 'offset'=>4);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
                                                     	<?php $format = get_post_format($post->ID); ?>
                                                     	<?php if ($format != 'video') { ?>
                                                     		<div class="col-md-4 col-sm-4 lienquan-sanpham">
															<a href="<?php echo get_permalink(); ?>" class=""><?php echo the_post_thumbnail();?></a>
                                                            <p><?php the_title(); ?></p>
                                                            </div>
                                                           <?php } ?>
											<?php	}	
																					
											}?>
                            </div>
                             <!------------------------------------------------->
                             <hr class="hr-home1" />
                              <div id="bg" class="popup_bg"></div>
                              <div class="blog-content">
                        	<div class="col-md-12 col-sm-12">
                            <h2 style="color:#5bba46;">CLIP KHÔNG ÐỘ</h2>
                            	<?php
									$categories = get_categories();
									
										$category_ids = 9;
										//$category_num = $cat->category_count;
										
										$category_link = get_category_link( $category_ids);
										if ($category_num >=0) {												
												$args=array('category__in' => $category_ids,'showposts'=>12);
												$my_query = new wp_query($args);
												while ($my_query->have_posts()){
													 $my_query->the_post(); ?>
                                                     <?php $format = get_post_format($post->ID); ?>
                                                     	<?php if ($format == 'video') { ?>
                                                        <div class="col-md-4 col-sm-4 lienquan-sanpham">
                                                            <a href="#" onClick="openYouTube('<?php echo get_the_content(); ?>');">
                                                            <iframe width="100%" height="200" src="http://www.youtube.com/embed/<?php echo get_the_content(); ?>" frameborder="0" allowfullscreen></iframe></a>
                                                            <p><?php the_title(); ?></p>
                                                        </div>
                                                        <?php } ?>
                                                     		
											<?php }
																					
											}?>
                            </div>
                        </div>
                    </div>
                </div> 
          <?php endwhile; ?>       
                          
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
            	219 đại lộ Bình Dương, phường Vĩnh 
Phú,thị xã Thuận An, Tỉnh Bình Dương
(0650) 3755161
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