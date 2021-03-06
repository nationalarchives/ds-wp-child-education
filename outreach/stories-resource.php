<?php
/*
 * Template Name: Five Photos Resource Page
 *
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post();
get_template_part( 'breadcrumb' ); ?>

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
                                        <?php the_content(); ?>
                                    </div>
                                </div>

                                <div class="row entry-content">
                                    <div class="col-md-12">
                                        <h2><?php echo get_post_meta( get_the_ID(), 'stories_resource_h2_1', true ) ?></h2>
                                        <div class="activity-container">
                                            <ul class="question-list">
                                                <?php echo get_post_meta( get_the_ID(), 'stories_resource_questions', true ) ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row entry-content did-you-know">
                                    <div class="col-md-12">
                                        <h2><?php echo get_post_meta( get_the_ID(), 'stories_resource_h2_2', true ) ?></h2>
                                        <?php echo get_post_meta( get_the_ID(), 'stories_resource_do_you_know', true ) ?>
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
<?php endwhile; ?>

<?php get_footer(); ?>
