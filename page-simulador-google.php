<?php get_header(); ?>

<!-- hero -->
<?php get_template_part('template-parts/simulator-google/simulator', 'hero'); ?>
<!-- end of hero -->

<!-- data -->
<?php get_template_part('template-parts/simulator-google/simulator', 'data'); ?>
<!-- end of data -->

<!-- result -->
<section class="result bg-gray-500 d-none">
    <h2 class="d-none">Veja o resultado da sua Simulação investindo no Google!</h2>
    <div class="result__container">
    </div>

    <!-- form -->
    <?php get_template_part('template-parts/simulator-google/simulator', 'form'); ?>
    <!-- end of form -->
</section>
    <!-- end of result -->

<!-- notes -->
<?php get_template_part('template-parts/simulator-google/simulator', 'notes'); ?>
<!-- end of notes -->

<?php get_footer(); ?>