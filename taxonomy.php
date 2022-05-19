<?php get_header(); ?>
<main id="content" role="main">
<?php $term = get_queried_object(); 
var_dump($term);
?>
 
<h1 class="category-title"><?php echo $term->name; ?><span class="taxonomy-label"><?php echo $term->taxonomy; ?> (<?php echo $term->count; ?> articles)</span></h1>
 
<p class="category-description"><?php echo $term->description; ?><
</main>
<?php get_footer(); ?>