<?php
/**
 * Footer For Laurels Theme.
 */
$laurels_options = get_option( 'laurels_theme_options' );
?>
<footer>
	
	<div class="container webpage-container padding-footer">
   		<div class="col-sm-2 col-md-2  no-padding bottom-footer">
                <?php if (empty($laurels_options['logo'])) { ?>
                  <h1 class="laurels-site-name"><a href="<?php echo esc_url(site_url()); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                <?php } else { ?>
                  <a href="<?php echo site_url(); ?>"><img class="egcg logo-footer" src="<?php echo esc_url($laurels_options['logo']); ?>" alt="Tra Xanh Khong Do" class="img-responsive logo" /></a>
                <?php } ?> 
             
        </div>
        <div class="col-sm-3 col-md-3  no-padding bottom-footer">
        	<p><img class="egcg lien-he" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/lien-he.png" /></p>
        	<p>
        	<?php if(!empty($laurels_options['footertext'])) {
			 	echo esc_attr($laurels_options['footertext']).' '; 
			  }
			?>  
            </p>
        </div>
        <div class="col-sm-3 col-md-3  no-padding bottom-footer">
        	<a href="http://traxanhkhongdo.com.vn/ve-tan-hiep-phat/"><p><img class="egcg ve-thp" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/ve-thp.png" /></p></a> </a>
           <a href="http://traxanhkhongdo.com.vn/dieu-khoan/"><p><img class="egcg dieu-khoan-dieu-le" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/the-le.png" /></p></a></a>
        	<p>
            	
            </p>
            </div>
        <div class="col-sm-5 col-md-5 no-padding bottom-footer">
        
        	<ul>
            	<li><a href="http://thp.com.vn/" ><img class="egcg txkd" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-thp.jpg" /></a></li>
				<li><a href="http://tradrthanh.com/" ><img class="egcg drthanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-drthanh.jpg" /></a></li>
                <li><a href="http://number1.com.vn/" ><img class="egcg number1" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-number1.jpg" /></a></li>
                <li><a href="#" ><img class="egcg number1-chanh" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2016/11/logo-number1-chanh.jpg" /></a></li>
				
            </ul>
<p class="copy-right">Copy right by <span>TRÀ XANH KHÔNG Ð?</span></p>
        </div>       
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
