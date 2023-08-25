<?php
/**
 * Main template file.
 * 
 * @package Kiante
 */
get_header();
?>

<div class="content">

    <!-- blog-area start -->
    <div class="blog-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    // Query for 'tech' posts
                    $wptech = array(
                        'post_type' => 'tech',
                        'post_status' => 'publish',
                        'posts_per_page' => 1, // Show only 1 post
                    );

                    $techquery = new WP_Query($wptech);
                    if ($techquery->have_posts()) {
                        $techquery->the_post();

                        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

                        // Get the categories for the post
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                    ?>
                    <div class="media-post-wrap pd-bottom-80 mb-0">
                        <div class="thumb mb-4">
                            <img class="w-100" src="<?php echo $imagepath[0]; ?>"/>
                        </div>
                        <div class="media-body pt-1 ms-0">
                            <a class="tag top-right tag-purple" href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <p><?php echo get_the_date(); ?>
                                <!-- Display the excerpt or content here -->
                                <?php the_excerpt(); ?>
                                <a class="btn btn-main mt-3" href="<?php the_permalink(); ?>">Read More</a>
                            </p>
                        </div>
                    </div>
                    <?php
                            } // End foreach
                        } // End if (!empty($categories))
                    } // End if ($techquery->have_posts())
                    ?>
                </div>
                <!-- Rest of your code -->
            </div>
        </div>
    </div>
    <!-- blog-area end -->

    <!-- Additional section for 'bussiness' posts -->
    <div class="blog-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    // Query for 'bussiness' posts
                    $wpbussiness = array(
                        'post_type' => 'bussiness',
                        'post_status' => 'publish',
                        'posts_per_page' => 1, // Show only 1 post
                    );

                    $bussinessquery = new WP_Query($wpbussiness);
                    if ($bussinessquery->have_posts()) {
                        $bussinessquery->the_post();

                        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

                        // Get the categories for the post
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                    ?>
                    <div class="media-post-wrap pd-bottom-80 mb-0">
                        <div class="thumb mb-4">
                            <img class="w-100" src="<?php echo $imagepath[0]; ?>"/>
                        </div>
                        <div class="media-body pt-1 ms-0">
                            <a class="tag top-right tag-purple" href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <p><?php echo get_the_date(); ?>
                                <!-- Display the excerpt or content here -->
                                <?php the_excerpt(); ?>
                                <a class="btn btn-main mt-3" href="<?php the_permalink(); ?>">Read More</a>
                            </p>
                        </div>
                    </div>
                    <?php
                            } // End foreach
                        } // End if (!empty($categories))
                    } // End if ($bussinessquery->have_posts())
                    ?>
                </div>
                <!-- Rest of your code -->

                <?php
$newsCat = get_terms(['taxonomy' => 'category', 'hide_empty' => false]);

if (!empty($newsCat)) {
    echo '<div class="card-deck">';
    foreach ($newsCat as $newsCatData) {
        $meta_image = get_wp_term_image($newsCatData->term_id);
        echo '<div class="card-cat">';
        echo '<img class="card-img-top" src="' . esc_url($meta_image) . '" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<a href="' . esc_url(get_category_link($newsCatData->term_id)) . '"><h3>' . esc_html($newsCatData->name) . '</h3></a>';

        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
?>



            </div>

     
        </div>
        
    </div>
    <!-- blog-area end -->





</div>



<?php get_footer(); ?>
