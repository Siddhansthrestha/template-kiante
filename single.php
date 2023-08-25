<?php

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
                        // 'posts_per_page' => 1, 
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
                            </p>

                        </div>
                        <?php comments_template(); ?>

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






<?php

get_footer();

?>