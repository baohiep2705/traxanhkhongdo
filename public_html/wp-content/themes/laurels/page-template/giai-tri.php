<?php 
/*
 * Template Name: GIAI TRI
 */
include 'header-giaitri.php'; ?>
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
									
										$category_ids = array(5,7);
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
                                                            <p class="one-sanpham-title"><?php the_title(); ?></p>
                                                            <p style="color:#5bba46;"><?php the_excerpt() ?></p>
                                                        <?php } ?>  
											<?php	}	
																					
											}?>
                                    </div>
                                    
                            </div> 
                                                 
                                
                              <div class="col-md-3 col-sm-4 no-padding">
                              	<div class="qc1"><img src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/qc.jpg" /></div>
                                <div>
                                	<div class="blog-info1"><a href="#">Tin nổi Bật</a></div>
                                	<?php
									$categories = get_categories();
									
										$category_ids = array(5,7);
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
                                                            <p><?php the_title(); ?></p>
                                                            </div>
                                                          <?php } ?>    
											<?php	}	
																					
											}?>
                                </div>
                              </div>                  
                                  
                        </div>
                        
                             <!------------------------------------------------->
                             <hr class="hr-home1" />
                              <div id="bg" class="popup_bg"></div>
                              <div class="blog-content">
                        	<div class="col-md-12 col-sm-12">
                            <h2 style="color:#5bba46;">CLIP KHÔNG ĐỘ</h2>
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
                                                             <a href="#" onClick="openYouTube('<?php echo get_the_content(); ?>');"><p><?php the_title(); ?></p></a>
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
