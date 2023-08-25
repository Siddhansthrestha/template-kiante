<?php
/**
 * 404 Page Template
 *
 * @package YourThemeName
 */

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-page text-center">
                <h1 class="error-code">404</h1>
                <h2 class="error-message"><?php esc_html_e( 'Oops! Page not found', 'yourthemename' ); ?></h2>
                <p class="error-description">
                    <?php esc_html_e( 'Sorry, but the page you are looking for does not exist.', 'yourthemename' ); ?>
                </p>
                <div class="error-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">


                        <?php esc_html_e( 'Go back to homepage', 'yourthemename' ); ?>
            
                    </a>
                </div>
            </div><!-- .error-page -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
?>
