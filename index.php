<?php
/**
 * Main template file.
 * 
 * @package Kiante
 */
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <!-- Main Content -->
            <!-- blog-area start -->
            <div class="blog-area pd-top-20 pd-bottom-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
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
                                <div class="thumb">
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

        </div>
            <?php get_sidebar(); ?>

       
    </div>
</div>
    <!-- Additional section for 'bussiness' posts -->
    <div class="blog-area pd-top-20 pd-bottom-20">
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
                        <div class="thumb ">
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

               
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="title left-line">Don't Miss</h4>
                    </div>
                </div>

<?php
$newsCat = get_terms(['taxonomy' => 'category', 'hide_empty' => false]);

if (!empty($newsCat)) {
    echo '<div class="pd-top-10 pd-bottom-30">';
    echo '<div class="container">';
    echo '<div class="row">';

    foreach ($newsCat as $newsCatData) {
        $meta_image = get_wp_term_image($newsCatData->term_id);
        ?>

        <div class="col-lg-4 col-md-6">
            <div class="media-post-wrap">
                <div class="thumb mb-4">
                    <img class="w-100" src="<?php echo esc_url($meta_image); ?>" alt="Card image cap">
                </div>
                <div class="media-body ms-0">
                <h4><a href="<?php echo esc_url(get_category_link($newsCatData->term_id)); ?>"><?php echo category_description($newsCatData->term_id); ?></a></h4>

                    <a class="tag top-right tag-yellow" href="<?php echo esc_url(get_category_link($newsCatData->term_id)); ?>"><?php echo esc_html($newsCatData->name); ?></a>
                </div>
                <div class="meta d-flex">
                    <div class="author">
                      
                    </div>
                   
                  
                </div>
            
              </div>
            
        </div>
        
        <?php
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
        </div>

     
        </div>

      

    </div>
    <!-- blog-area end -->


</div>



<?php get_footer(); ?>
