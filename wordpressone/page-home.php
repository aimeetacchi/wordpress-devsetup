<?php
/*
    Template Name: Home Page
 */
get_header(); 

// ACF VARIABLES ================
$about_info = get_field('about_info');
$about_img = get_field('about_image');
?>

<div class="content">
    
    <!-- =====  ABOUT SECTION ===== -->
    <section class="home-about">
        <div class="about-info">
            <?php echo $about_info; ?>
        </div>
        <div class="about-img">
            <img src="<?php echo $about_img['url']; ?>" alt="<?php echo $about_img['alt']; ?>">
        </div>
    </section>
    
    <section class="home-gallery">
        <div class="item">
            <img src="http://localhost/wordpress/wp-content/uploads/2018/09/enrapture-captivating-media-1062960-unsplash.jpg" alt="image">
        </div>
        <div class="item">
            <img src="http://localhost/wordpress/wp-content/uploads/2018/09/enrapture-captivating-media-1062960-unsplash.jpg" alt="image">
        </div>
        <div class="item">
            <img src="http://localhost/wordpress/wp-content/uploads/2018/09/enrapture-captivating-media-1062960-unsplash.jpg" alt="image">
        </div>
    </section>

</div>
	

<?php get_footer(); ?>
