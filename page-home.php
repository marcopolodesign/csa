<?php
/** Template Name: Home */
get_header();
?>

<style>

html {
    margin-top: 0px !important;
}
</style>

<div data-barba="container" class="home bg-black" data-barba-namespace="home">
    <div class="page-starter main-gradient-bg pv6">
        <div class="container pt4">
        <h1 class="black f0">Laying the foundation for<br><b>sustained success</b></h1>
        </div>
    </div>

    

    <?php get_template_part('template-parts/reusable'); ?>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>