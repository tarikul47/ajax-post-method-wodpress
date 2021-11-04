<?php get_header(); ?>
<main id="content" class="content">

    <?php while (have_posts()) : the_post(); ?>

        <?php do_action('basic_before_page_article'); ?>
        <article class="post page" id="pageid-<?php the_ID(); ?>">

            <?php do_action('basic_before_page_title');  ?>
            <h1><?php the_title(); ?></h1>
            <?php do_action('basic_after_page_title');  ?>

            <?php do_action('basic_before_page_content_box');  ?>
            <div class="entry-box clearfix">
                <?php do_action('basic_before_page_content');  ?>
                <?php //the_content(); 
                ?>
                <div class="row justify-content-center">
                    <div class="col-md-10 p-5 form-wrap">
                        <form action="#">
                            <?php wp_nonce_field('contact', 'contact'); ?>
                            <div class="row mb-4">
                                <div class="form-group col-md-4">
                                    <label for="name" class="label"><?php _e('Name', 'meal') ?></label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-person"></span>
                                        <input type="text" class="form-control" id="cname">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email" class="label"><?php _e('Email', 'meal') ?></label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-email"></span>
                                        <input type="email" class="form-control" id="cemail">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone" class="label"><?php _e('Phone', 'meal') ?></label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-call"></span>
                                        <input type="text" class="form-control" id="cphone">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="message" class="label"><?php _e('Message', 'meal') ?></label>
                                    <textarea name="message" id="cmessage" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <input type="submit" id="send-message" class="btn btn-primary btn-outline-primary btn-block" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php do_action('basic_after_page_content');  ?>
            </div>
            <?php do_action('basic_after_page_content_box');  ?>

        </article>
        <?php do_action('basic_after_page_article'); ?>


    <?php

        if (comments_open() || get_comments_number()) {
            do_action('basic_before_page_comments_area');
            comments_template();
            do_action('basic_after_page_comments_area');
        }

    endwhile; ?>

</main> <!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>