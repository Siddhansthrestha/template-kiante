<?php

get_header();
$catData = get_queried_object();
// print_r($catData);
?>

<div class="container">
    <div class="breadcrumb-area">
        <div class="row justify-content-center">
            <h1 class="theme-breacrumb-title"> Category : <?php echo $catData->name; ?></h1>
        </div>
    </div>
</div>

<?php
$tech_query_args = array(
    'post_type' => 'tech',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $catData->term_id,
        ),
    ),
);

$bussiness_query_args = array(
    'post_type' => 'bussiness',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $catData->term_id,
        ),
    ),
);

$tech_query = new WP_Query($tech_query_args);
$bussiness_query = new WP_Query($bussiness_query_args);

while ($tech_query->have_posts() || $bussiness_query->have_posts()) {
    if ($tech_query->have_posts()) {
        $tech_query->the_post();
        $post_type = 'tech';
    } else {
        $bussiness_query->the_post();
        $post_type = 'business';
    }

    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    $author_name = get_the_author(); // Get the author's display name
?>

<div class="blog-area pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="media-post-wrap pd-bottom-80 mb-0">
                    <div class="thumb mb-4">
                        <img class="w-100" src="<?php echo $imagepath[0] ?>" alt="img">
                    </div>
                    <div class="media-body pt-1 ms-0">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                    <div class="meta d-flex">
                        <div class="author">
                            <div class="thumb">
                                <img src="assets/img/banner/user.jpeg" alt="img">
                            </div>
                            <a href="#"><?php echo $author_name; ?></a>
                        </div>
                        <div class="date">
                            <i class="fa fa-clock-o"></i>
                            <?php echo get_the_date(); ?>
                        </div>
                    </div>
                    <p class="mb-3"><?php the_content(); ?></p>
                    <a class="btn btn-main mt-3" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<?php

get_footer();

?>
