<!-- <?= "this is the front page" ?> -->

<h1 class="title-home">Nous répondrons aux problématiques de l'éducation par la data</h1>
<p class="intro-text">Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo. <a href="http://" target="_blank" rel="noopener noreferrer">En savoir plus sur nous.</a></p>


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

<div class="latest-posts">

    <posts postcontent="<?= get_the_content() ?>" postdata='<?= json_encode($postData) ?>'></posts>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

</div>