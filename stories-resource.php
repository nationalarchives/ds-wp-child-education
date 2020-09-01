<?php
/*
 * Template Name: Stories Resource Page
 *
 */
get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

    <div id="primary" class="content-area level-one outreach-resource">
        <div class="container">
            <div class="row" role="banner">
                <div class="col-md-12">
                    <?php
                    global $post;
                    $image      = make_path_relative_no_pre_path( get_feature_image_url( $post->ID, 'full-page-width', true ) );
                    $title      = get_the_title();
                    get_page_banner( 'level one', $title, $image, '', '', '' );
                    ?>
                </div>
            </div>

            <div class="row">
                <main role="main">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <article>
                                    <div class="row entry-content">
                                        <div class="col-md-12">
                                            <h2><?php echo get_post_meta( get_the_ID(), 'stories_resource_h2_1', true ) ?></h2>
                                            <?php echo get_post_meta( get_the_ID(), 'stories_resource_image_caption', true ) ?>
                                        </div>
                                    </div>

                                    <div class="row entry-content">
                                        <div class="col-md-12">
                                            <h2><?php echo get_post_meta( get_the_ID(), 'stories_resource_h2_2', true ) ?></h2>
                                            <?php echo get_post_meta( get_the_ID(), 'stories_resource_audio_link', true ) ?>
                                        </div>
                                    </div>

                                    <div class="row entry-content">
                                        <div class="col-md-12">
                                            <h2><?php echo get_post_meta( get_the_ID(), 'stories_resource_h2_3', true ) ?></h2>
                                            <div class="activity-container">
                                                <ul class="question-list">
                                                    <?php echo get_post_meta( get_the_ID(), 'stories_resource_questions', true ) ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row entry-content">
                                        <div class="col-md-12">
                                            <h2><?php echo get_post_meta( get_the_ID(), 'stories_resource_h2_4', true ) ?></h2>
                                            <p><?php echo get_post_meta( get_the_ID(), 'stories_resource_do_you_know', true ) ?></p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </main>

            </div>


        </div>
    </div>

<?php get_footer(); ?>
