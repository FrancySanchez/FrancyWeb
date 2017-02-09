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
							<p>	Hello there! 
							<br>My name is Francy and this is my personal site,<br>
							<br>I’m an IT girl, I like the sun and I love the sea, I enjoy traveling and discovering new places very much too.<br>

							<br>In 2013, I left my beloved country (Venezuela) for a 6 month adventure that ended un being my new life in Ireland (Great country!). <br>

							<br>I’ve been working in IT projects for over 5 years now so I have a strong technical background, and here, on this site, I share my projects and experiences with you. Feel free to navigate around to know more about me and drop me a line if you are interested in my profile. 
							</p>
						</div>
						<div class="col-sm-6">
							<div class="about-skills"><h2> My Skills <h2></div>
							<div class="skills-list">
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
									<li>
										Project Management
										<div class="bar_container">
											<span class="bar" data-bar='{ "color": "#c0e844", "delay": 1800 }'>
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
						
							<div class="c-interests__item">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/Plane.svg"
							>
								<p class="interest-text">Travel</p>
							</div>
							<div class="c-interests__item">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/Dancing.svg" >
								<p class="interest-text">Dancing</p>
							</div>
							<div class="c-interests__item">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/Camera.svg" >
								<p class="interest-text">Photography</p>
							</div>
							<div class="c-interests__item">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/Stats.svg" >
								<p class="interest-text">Digital Marketing</p>
							</div>	
							<div class="c-interests__item">
							<img class="img-interests" src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/Video.svg" >
								<p class="interest-text">Video Editing</p>
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
									<p>Check out some of the online projects I've worked on 
									</p>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="view view-first">
											<img src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/fullidiomas.png">
											 <div class="mask">
											      <h2>Full Idiomas</h2>
											      <p>As co-founder of this Startup Website, I had the opportunity to apply my experience in project management and software development.</p>
											      <a href="full-idiomas" class="info">Read More</a>
    										</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="view view-first">
											<img src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/atlas1.png">
											<div class="mask">
											      <h2>Atlas</h2>
											      <p>Given my background as a web developer and my familiarity with the company, I was given the task to work on the 2 main properties of Atlas Language school.</p>
											      <a href="portfolio-atlas" class="info">Read More</a>
    										</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="view view-first">
											<img src="http://localhost:8888/francysanchezweb/wp-content/themes/read-more/assets/img/viviendo.png">
											<div class="mask">
											      <h2>Viviendo en otro pais</h2>
											      <p>Working on</p>
											      <!-- <a href="#" class="info">Read More</a> -->
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




