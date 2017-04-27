<?php
//edited by daho
/*
 * Header For Laurels Theme.
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
     <script src="http://traxanhkhongdo.com.vn/scripts/leaves.js" type="text/javascript"></script>
  

    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if (!empty($laurels_options['favicon'])) { ?>
      <link rel="shortcut icon" href="<?php echo esc_url($laurels_options['favicon']); ?>">
    <?php } ?>
    <?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69609626-1', 'auto');
  ga('send', 'pageview');

</script>
    
<script language="javascript"> 
function openYouTube(id){ 
      //YouTube Player Parameters 
      var width = 640; 
      var height = 505; 
      var FullScreen = "yes"; 
      var AutoPlay = "yes"; 
      var HighDef = "yes"; 
      
      //Calculate Page width and height 
      var pageWidth = window.innerWidth; 
      var pageHeight = window.innerHeight; 
      if (typeof pageWidth != "number"){ 
      if (document.compatMode == "CSS1Compat"){ 
            pageWidth = document.documentElement.clientWidth; 
            pageHeight = document.documentElement.clientHeight; 
      } else { 
            pageWidth = document.body.clientWidth; 
            pageHeight = document.body.clientHeight; 
            } 
      } 
      // Make Background visible... 
      var divbg = document.getElementById('bg'); 
      divbg.style.visibility = "visible"; 
      
      //Create dynamic Div container for YouTube Popup Div 
      var divobj = document.createElement('div'); 
      divobj.setAttribute('id',id); // Set id to YouTube id 
      divobj.className = "popup"; 
      divobj.style.visibility = "visible"; 
      var divWidth = width + 4; 
      var divHeight = height + 20; 
      divobj.style.width = divWidth + "px"; 
      divobj.style.height = divHeight + "px"; 
      var divLeft = (pageWidth - divWidth) / 2; 
      var divTop = (pageHeight - divHeight) / 2 - 10; 
      //Set Left and top coordinates for the div tag 
      divobj.style.left = divLeft + "px"; 
      divobj.style.top = divTop + "px"; 
      
      //Create dynamic Close Button Div 
      var closebutton = document.createElement('div'); 
      closebutton.style.visibility = "visible"; 
      closebutton.innerHTML = "<span onclick=\"closeYouTube('" + id +"')\" class=\"close_button\"> Close X</span>"; 
      //Add Close Button Div to YouTube Popup Div container 
      divobj.appendChild(closebutton); 

      //Create dynamic YouTube Div 
      var ytobj = document.createElement('div'); 
      ytobj.setAttribute('id', "yt" + id); 
      ytobj.className = "ytcontainer"; 
      ytobj.style.width = width + "px"; 
      ytobj.style.height = height + "px"; 
      if (FullScreen == "yes") FullScreen="&fs=1"; else FullScreen="&fs=0"; 
      if (AutoPlay == "yes") AutoPlay="&autoplay=1"; else AutoPlay="&autoplay=0"; 
      if (HighDef == "yes") HighDef="&hd=1"; else HighDef="&hd=0"; 
      var URL = "http://www.youtube.com/v/" + id + "&hl=en&rel=0&showsearch=0" + FullScreen + AutoPlay + HighDef; 
      var YouTube = "<object width=\"" + width + "\" height=\"" + height + "\">"; 
      YouTube += "<param name=\"movie\" value=\"" + URL + "\"></param>"; 
      YouTube += "<param name=\"allowFullScreen\" value=\"true\"></param><param name=\"allowscriptaccess\" value=\"always\"></param>"; 
      YouTube += "<embed src=\"" + URL + "\" type=\"application/x-shockwave-flash\" "; 
      YouTube += "allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"" + width + "\" height=\"" + height + "\"></embed></object>"; 
      ytobj.innerHTML = YouTube; 
      //Add YouTube Div to YouTube Popup Div container 
      divobj.appendChild(ytobj); 
      
      //Add YouTube Popup Div container to HTML BODY 
      document.body.appendChild(divobj); 
} 
function closeYouTube(id){ 
      var divbg = document.getElementById('bg'); 
      divbg.style.visibility = "hidden"; 
      var divobj = document.getElementById(id); 
      var ytobj = document.getElementById("yt" + id); 
      divobj.removeChild(ytobj); //remove YouTube Div 
      document.body.removeChild(divobj); // remove Popup Div 
} 

</script>
    
  </head>
  <body <?php body_class(); ?> onLoad="openYouTube('l4UGudhrjrE');">
<!--test write by vanda-->
    <header>
      <div id="leafContainer">   </div>
     <!-- <div class="header_top">
        <div class="container webpage-container">
          <div class="col-md-12 no-padding top-header">
            <div class="col-md-7 col-sm-5"></div>                 
            <div class="col-md-3 col-sm-4">               
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
                  <li ><a href="<?php echo esc_url($laurels_options['googleplus']); ?>"> <i class="fa fa-google-plus"></i> </a></li>  
                <?php } ?>
                <?php if (!empty($laurels_options['rss'])) { ?>
                  <li ><a href="<?php echo esc_url($laurels_options['rss']); ?>"> <i class="fa fa-rss"></i></a></li>            
                <?php } ?> 
              </ul>                       
            </div>              
            <div class="col-md-2 col-sm-3  no-padding search-box">       	
              <form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/">
                <input type="text" class="input-medium search-query search-input" name="s" placeholder="<?php _e('Search..', 'laurels'); ?>" id="s" value="<?php the_search_query(); ?>">
                <button type="submit" class="add-on" id="searchsubmit">
                  <span class="fa fa-search"></span>
                </button>      
              </form>              
            </div>                				
          </div>            
        </div>
      </div>-->
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
                	<a href="#" onClick="openYouTube('l4UGudhrjrE');"><img class="egcg video" src="http://traxanhkhongdo.com.vn/wp-content/uploads/2017/03/video-2017.jpg" /></a>
                    
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
  
