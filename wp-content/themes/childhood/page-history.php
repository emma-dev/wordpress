<?php
/*
Template Name: Our history
*/
?>

<?php get_header(); ?>





<div class="aboutus">
    <div class="container">
        <h1 class="title">Our history</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('heading') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('paragraph_1') ?>
                </div>
            </div>
            <div class="col-lg-6">

                <?php $image = get_field('image');

                if (!empty($image)) : ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aboutus__img">

                <?php endif;

                ?>


            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">

                <?php $image = get_field('image_2');

                if (!empty($image)) : ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aboutus__img">

                <?php endif;

                ?>


            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('heading_2') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('paragraph_2') ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('heading_3') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('paragraph_3') ?>
                </div>
            </div>
            <div class="col-lg-6">

                <?php $image = get_field('image_3');

                if (!empty($image)) : ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aboutus__img">

                <?php endif;

                ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer();?>