<?php get_header(); ?>

<?php include get_template_directory() . '/includes/hero.php'; ?>
<?php include get_template_directory() . '/includes/internal-section.php'; ?>

<?php if ( is_front_page() ) {
    include get_template_directory() . '/includes/call-to-action.php';
} ?>

<?php get_footer(); ?>