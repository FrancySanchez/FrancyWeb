<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Acme Themes
 * @subpackage Read More
 */
get_header();
global $read_more_customizer_all_values;
?>

			
<?php if((is_front_page())) { ?>
<div id="content" class="site-content container clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--ABOUT ME ON-->
			<div class="section-about" id="about-me">
				<div class="c-tittle"> 
					<h1>About me</h1> 
				</div>
					<div class="row">
						<div class="col-sm-6 about-text">
							<p>Hello there!! I am Francy and this is my personal website. I am from Venezuela but I am living in Ireland since 2013 and what began as a 6 month adventure ended un being my new life. <br> </p>

							<p>I am an IT Engineer with a strong technical background and over 5 years of experience working in IT projects. <br> </p>

							<p>I CEO of viviendoenotropais.com (living abroad) this a blog, the idea is create a comunity of the peolple who is living abroad, to share experiencia, tip and motivate to other people at least live in other country for a short time.
							</p>

						</div>
						<div class="col-sm-6">
							<div class="about-skills"><h2> My Skills <h2></div>
							<div>
								<ul class= "skills" id="skills">	
									<li>
										Web developer
										<div class="bar_container">
											<span class="bar" data-bar='{ "color": "#19f" }'>
												<span class="pct">85%</span>
											</span>
										</div>
									</li>
									<li>
										WordPress
										<div class="bar_container">
											<span class="bar" data-bar='{ "color": "#27ae60", "delay": 600 }'>
												<span class="pct">80%</span>
											</span>
										</div>
									</li>
									<li>
										.NET
										<div class="bar_container">
											<span class="bar" data-bar='{ "color": "#9b59b6", "delay": 1200 }'>
												<span class="pct">75%</span>
											</span>
										</div>
									</li>
									<li>
										SQL
										<div class="bar_container">
											<span class="bar" data-bar='{ "color": "#ae8a33", "delay": 1800 }'>
												<span class="pct">70%</span>
											</span>
										</div>
									</li>
									<li>
										HTML5 and CSS3
										<div class="bar_container">
											<span class="bar" data-bar='{ "color": "#e84467", "delay": 1800 }'>
												<span class="pct">90%</span>
											</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
				<div> <h2>My interests</h2> </div>
					<div class="c-interests">
						<div class="row">
							<div class="col-sm-3">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/transport.svg">
								Travel
							</div>
							<div class="col-sm-3">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/people-1.svg">
								Dancing
							</div>
							<div class="col-sm-3">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/video.svg">
								Edition Video
							</div>
							<div class="col-sm-3">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/technology-1.svg">
								Digital Marketing
							</div>	
						</div>
					</div>
			</div>	
			<!--ABOUT ME OFF-->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->


			<!--PORTFOLIO ON-->
			<div class="section-portfolio" id="portfolio">
				<div id="content" class="site-content container clearfix">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<div class="c-tittle"> <h1>Portfolio</h1> </div>
								<div class="portfolio-text">
									<p>Check some of the online project where I have worked </p>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="view view-first">
											<img src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/fullidiomas.png">
											 <div class="mask">
											      <h2>Full Idiomas</h2>
											      <p>A cool description of some sort between these tags. I am so cool and awesomely awesome.</p>
											      <a href="full-idiomas" class="info">Read More</a>
    										</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="view view-first">
											<img src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/atlas1.png">
											<div class="mask">
											      <h2>Atlas</h2>
											      <p>A cool description of some sort between these tags. I am so cool and awesomely awesome.</p>
											      <a href="portfolio-atlas" class="info">Read More</a>
    										</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="view view-first">
											<img src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/viviendo.png">
											<div class="mask">
											      <h2>Viviendo en otro pais</h2>
											      <p>A cool description of some sort between these tags. I am so cool and awesomely awesome.</p>
											      <a href="#" class="info">Read More</a>
    										</div>
										</div>
									</div>	
								</div>
							</main><!-- #main -->
						</div><!-- #primary -->
					</div><!-- #content -->
			</div>
			<!--PORTFOLIO OFF-->
			

<div id="content" class="site-content container clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!--CONTACT ON-->
			<div class="section-contact" id="contact">
				<div class="c-tittle"> <h1>Contact me</h1> </div>
				<div class="row">
					<div class="col-sm-6">
						<h2 class="sub-tittle"> Visit my blog in Spanish</h2>
						<a  href="http://viviendoenotropais.com/ " target="blank">	<img class="link-blog" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/viviendo_en_otro_pais.png" width="50%"></a>
						<h2 class="sub-tittle">Follow me on instagram </h2>
						<!-- SnapWidget -->
						<iframe src="https://snapwidget.com/embed/325517" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:520px; height:130px"></iframe>
					</div>
					<div class="col-sm-6">
					<h2 class="sub-tittle">Get in Touch </h2>
					<?php echo do_shortcode( '[contact-form-7 id="37" title="Contact form 1"]' );?>
					</div>
				</div>
			</div>
			<!--CONTACT OFF-->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->

<?php } ?>


<!-- SINGLE PAGE -->
			
<?php if(!(is_front_page())) { ?>
<div id="content" class="site-content container clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> 
			 <div class="wrapper inner-main-title">
				 <div class="entry-header port-title"> 	
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>  <!-- .entry-header --> 
			 </div> 

		<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
		//If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :comments_template();
					endif;
			endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary   --> 
</div><!-- #content -->  
<?php } ?>
		

<?php 
get_sidebar( 'left' );
get_sidebar();
?>

<?php get_footer();