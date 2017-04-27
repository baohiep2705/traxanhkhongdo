<?php 
/*
 * Template Name: Full Width
 */
get_header(); ?>
<section>	
    
    <div class="container webpage-container">
    	<article class="blog-article">        
	  		<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 col-sm-12 no-padding"); ?>> 
     				<!----------Dolphin---------->
                    <div class="home-egcg"><a href="http://traxanhkhongdo.com.vn/san-pham/"><img src="http://localhost:99/traxanhkhongdo/wp-content/uploads/2016/11/content-home-1.png" /></a></div>
					<hr class="hr-home" />
                    <div class="home-sontung">
					<div class="sontung1"><a href="http://traxanhkhongdo.com.vn/tin-tuc/"><img src="http://localhost:99/traxanhkhongdo/wp-content/uploads/2016/11/son-tung.png" /></a></div>
                    <div class="sontung2">
                        <h1>GI?I NHI?T CU?C S?NG</h1>
                        <h1>GI?I PHÓNG UU PHI?N</h1>
                        <div class="p-text">
                        	<p>Tinh khi?t, mát lành, Trà Xanh Không Ð? giúp d?y lùi cang th?ng, m?t m?i và t?o nên phong cách nang d?ng, tràn d?y s?c s?ng.</p>
                        
                        	<p>Vì s?c kh?e c?a ngu?i dùng,Trà Xanh Không Ð? dã n? l?c không ng?ng d? bi?n chuy?n nh?ng d?t trà xanh tuoi non thu?ng h?ng thành th?c u?ng tinh khi?t, mát lành.</p>
                        
                       		<p>M?t chai Trà xanh không d? m?i sáng s? giúp các b?n gi?m c?m giác cang th?ng m?t m?i, xoa d?u stress, t?o nên m?t cu?c s?ng l?c quan.</p>
                        </div>
                        <!--Get 3 post into home page-->
                        <div class="laurels-custom-widget">
                        <div class="main-post">
                        		<?php
									$categories = get_categories();
									
										$category_ids = array(4,3);
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
                        <a class="xemthem" href="http://traxanhkhongdo.com.vn/xoa-cung-am-nhac/"><img class="egcg" src="http://localhost:99/traxanhkhongdo/wp-content/uploads/2016/11/xemthem.png" /></a>
                    </div>
                    </div>
                    <div class="mua-he-khong-do">
                        <div class="mua-he-khong-do-1">
                            <div class="mua-he-khong-do-0">
                            <h1>MÙA HÈ</h1>
                            <h1>KHÔNG Ð?</h1>
                            </div>
                            <p> MÙA HÈ KHÔNG Ð? - M?t d?i ti?c âm nh?c hoành tráng, quy t? hàng lo?t tên tu?i ca si dang du?c yêu m?n nhu: Son Tùng M-TP, Hoàng Thu? Linh, Tr?nh Thang Bình, Phan M?nh Qu?nh, B?o Anh, Huong Tràm, Hoàng Tôn, Justa Tee, Soobin Hoàng Son, Erik (St.319), Suni H? Linh, Lou Hoàng, DJ KingLady…</p>
                        
                            <a class="xemthem" href="http://traxanhkhongdo.com.vn/xoa-cung-am-nhac/"><img class="egcg" src="http://localhost:99/traxanhkhongdo/wp-content/uploads/2016/11/xemthem.png" /></a>
                        
                        </div>
                   		 <div class="mua-he-khong-do-2">
                         	 
                         		<?php
									$categories = get_categories();
									
										$category_ids = array(5,6);;
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
									
										$category_ids = array(5,6);
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
									
										$category_ids = array(5,6,4);
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
                    
                    
                    <div class="lai-gan-son-tung"><a href="http://traxanhkhongdo.com.vn/xoa-cung-am-nhac/"><img src="http://localhost:99/traxanhkhongdo/wp-content/uploads/2016/11/content-home-4.png" />									</a></div>
                    <!-----------End Dolphin----->
            </div>    
    	</article>
    </div>
</section>
<?php get_footer(); ?>
