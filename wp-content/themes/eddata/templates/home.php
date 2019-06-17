<?= "this is the front page" ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

$postData = [
    'title' => get_the_title(),
    'link' => get_the_permalink()
];

// echo '<pre>';
// print_r(
//     str_replace(
//      '"', '\\"',
//      json_encode($postData)
//     )
// );
// echo '</pre>';

?>
    <post-thumbnail postcontent="<?= get_the_content() ?>" postdata='<?= json_encode($postData) ?>'></post-thumbnail>
<?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>