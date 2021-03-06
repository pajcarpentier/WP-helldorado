<?php
/*
* Template Name: Home Page
*/

get_header(); ?>
 <div class="banner-section">
	 	  	   	    <span class="top-border"></span>
	 	  	   	    <span class="right-border"></span>
	 	  	   	    <span class="bottom-border"></span>
	 	  	   	    <span class="left-border"></span>
	 	  	   	    <div class="banner-image">
	 	  	   	    	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/middle-banner.jpg" alt="">
	 	  	   	    	 <div class="banner-text">
	 	  	   	    	 	  <span class="xbox-label">Xbox One</span>
	 	  	   	    	 	  <h1>Lorem ipsum dolor<br>
                                 Sit Amet Consectetuer</h1>
                               <i>by admin</i>  
	 	  	   	    	 </div>
	 	  	   	    </div>
	 	  	   	    
	 	  	   	    <div class="latest-blog-main clearfix">
	 	  	   	    <?php $midBlogs = CFS()->get('news_blogs');	
	 	  	   	    			if($midBlogs) { ?>
	 	  	   	    	 		<div class="news-blog">
	 	  	   	    	 	  		<h1><?php echo CFS()->get('news_blogs_title'); ?></h1>
	 	  	   	    	 	  		<div class="news-blog-wrapper">
	 	  	   	    	 	  		<?php foreach($midBlogs as $midBlog) {   ?>
		 	  	   	    	 	  	   <div class="news-blog-box">
		 	  	   	    	 	  	   	<?php  $terms = get_the_terms( $midBlog , 'blog_category' );
		 	  	   	    	 	  	   			if($terms) {	
		 	  	   	    	 	  	   			foreach($terms as $term) { ?>
		 	  	   	    	 	  	   				<span class="xbox-label"><?php echo $term->name; ?></span>
													<?php } } ?>		 	  	   	    	 	  	   		
		 	  	   	    	 	  	   	    <h2><?php echo get_the_title($midBlog); ?></h2>
		 	  	   	    	 	  	   	    <?php $post_author_id = get_post_field( 'post_author', $midBlog ); ?>
		 	  	   	    	 	  	   	    <span class="sub-lbl">On <?php echo get_the_date('',$midBlog); ?> <?php echo get_the_time('',$midBlog); ?>, by <?php echo get_the_author_meta('first_name',$post_author_id); ?></span>
		 	  	   	    	 	  	   	    <p><?php echo get_the_excerpt($midBlog); ?></p>
													<a href="<?php echo get_permalink($midBlog); ?>" title="Continue Reading" class="continue-btn">Continue Reading</a>
		 	  	   	    	 	  	   </div>
		 	  	   	    	 	  	   <?php } ?>
	 	  	   	    	 	  </div>
	 	  	   	    	 </div>
	 	  	   	    	 <?php } //News blog if completed ?>
	 	  	   	    	 <div class="twitter-blog">
	 	  	   	    	 	  <h1><?php echo CFS()->get('twit_title'); ?></h1>
	 	  	   	    	 	  <div class="twitter-blog-wrapper">
	 	  	   	    	 	  	   <h3>Tweets <span>by @helldorado</span></h3>
	 	  	   	    	 	  	   
	 	  	   	    	 	  	   <?php echo do_shortcode('[statictweets skin="" resource="usertimeline" user="" list="" query="" id="" count="5" retweets="off" replies="off" ajax="off" show="username,screenname,avatar,time,actions,media"/]'); ?>
	 	  	   	    	 	  	   <!--<div class="twitter-box">
	 	  	   	    	 	  	   	    <div class="person-img">
	 	  	   	    	 	  	   	    	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/user-img.png" alt="">
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   	    <div class="twitter-box-text">
	 	  	   	    	 	  	   	    	 <h4>John Doe <span>@john</span> <a href="#" title="twitter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twit-ic2.png" alt=""></a></h4>
	 	  	   	    	 	  	   	    	 <p>Ullamcorper ultricies nisi nam eget dui<br>
												maecenas tempus tellus eget condimentu<br>
												sem duam semper libero.</p>
											<div class="twitter-box-text-bottom">
												 <div class="fav-ic">
												 	  <a href="#" title="Favourite"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav-ic.png" alt=""></a>
												 	  <a href="#" title="Download"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/download-ic.png" alt=""></a>
												 </div>
												 <div class="fav-text">
												 	  31 Aug
												 </div>
											</div>
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   </div>
	 	  	   	    	 	  	   <div class="twitter-box bg">
	 	  	   	    	 	  	   	    <div class="person-img">
	 	  	   	    	 	  	   	    	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/user-img.png" alt="">
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   	    <div class="twitter-box-text">
	 	  	   	    	 	  	   	    	 <h4>John Doe <span>@john</span> <a href="#" title="twitter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twit-ic2.png" alt=""></a></h4>
	 	  	   	    	 	  	   	    	 <p>Ullamcorper ultricies nisi nam eget dui<br>
												maecenas tempus tellus eget condimentu<br>
												sem duam semper libero.</p>
											<div class="twitter-box-text-bottom">
												 <div class="fav-ic">
												 	  <a href="#" title="Favourite"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav-ic.png" alt=""></a>
												 	  <a href="#" title="Download"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/download-ic.png" alt=""></a>
												 </div>
												 <div class="fav-text">
												 	  31 Aug
												 </div>
											</div>
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   </div>
	 	  	   	    	 	  	   <div class="twitter-box">
	 	  	   	    	 	  	   	    <div class="person-img">
	 	  	   	    	 	  	   	    	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/user-img.png" alt="">
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   	    <div class="twitter-box-text">
	 	  	   	    	 	  	   	    	 <h4>John Doe <span>@john</span> <a href="#" title="twitter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twit-ic2.png" alt=""></a></h4>
	 	  	   	    	 	  	   	    	 <p>Ullamcorper ultricies nisi nam eget dui<br>
												maecenas tempus tellus eget condimentu<br>
												sem duam semper libero.</p>
											<div class="twitter-box-text-bottom">
												 <div class="fav-ic">
												 	  <a href="#" title="Favourite"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav-ic.png" alt=""></a>
												 	  <a href="#" title="Download"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/download-ic.png" alt=""></a>
												 </div>
												 <div class="fav-text">
												 	  31 Aug
												 </div>
											</div>
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   </div>
	 	  	   	    	 	  	   <div class="twitter-box bg">
	 	  	   	    	 	  	   	    <div class="person-img">
	 	  	   	    	 	  	   	    	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/user-img.png" alt="">
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   	    <div class="twitter-box-text">
	 	  	   	    	 	  	   	    	 <h4>John Doe <span>@john</span> <a href="#" title="twitter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twit-ic2.png" alt=""></a></h4>
	 	  	   	    	 	  	   	    	 <p>Ullamcorper ultricies nisi nam eget dui<br>
												maecenas tempus tellus eget condimentu<br>
												sem duam semper libero.</p>
											<div class="twitter-box-text-bottom">
												 <div class="fav-ic">
												 	  <a href="#" title="Favourite"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav-ic.png" alt=""></a>
												 	  <a href="#" title="Download"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/download-ic.png" alt=""></a>
												 </div>
												 <div class="fav-text">
												 	  31 Aug
												 </div>
											</div>
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   </div>-->
	 	  	   	    	 	  	   <!--<div class="twitter-box">
	 	  	   	    	 	  	   	    <div class="person-img">
	 	  	   	    	 	  	   	    	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/user-img.png" alt="">
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   	    <div class="twitter-box-text">
	 	  	   	    	 	  	   	    	 <h4>John Doe <span>@john</span> <a href="#" title="twitter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twit-ic2.png" alt=""></a></h4>
	 	  	   	    	 	  	   	    	 <p>Ullamcorper ultricies nisi nam eget dui<br>
												maecenas tempus tellus eget condimentu<br>
												sem duam semper libero.</p>
											<div class="twitter-box-text-bottom">
												 <div class="fav-ic">
												 	  <a href="#" title="Favourite"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav-ic.png" alt=""></a>
												 	  <a href="#" title="Download"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/download-ic.png" alt=""></a>
												 </div>
												 <div class="fav-text">
												 	  31 Aug
												 </div>
											</div>
	 	  	   	    	 	  	   	    </div>
	 	  	   	    	 	  	   </div>-->
	 	  	   	    	 	  </div>
	 	  	   	    	 </div>
	 	  	   	    </div>
	 	  	   </div>
	 	  </div>
	 	  <div class="right-sidebar">
	 	  		<?php echo get_sidebar('right'); ?>
	 	  </div>
     </div>
</div>
<?php get_footer(); ?>