<!-- <?= "this is the front page" ?> -->

<h1 class="title-home">Nous répondrons aux problématiques de l'éducation par la data</h1>
<p class="intro-text">Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo. <a href="http://" target="_blank" rel="noopener noreferrer">En savoir plus sur nous.</a></p>

<?php

$postDatas = [];

if ( have_posts() ) : while ( have_posts() ) : the_post();

$question = [];
if (have_rows('questionreponse')) : while (have_rows('questionreponse')) {
    the_row();
    $question[] = [
        'question' => get_sub_field('question')
    ];
}
endif;

$postDatas[] = [
    'title' => get_the_title(),
    'link' => get_the_permalink(),
    'content' => get_the_content(),
    'excerpt' => get_the_excerpt(),
    'illu' => get_the_post_thumbnail_url(),
    'category' => get_the_category(),
    'author' => get_the_author(),
    'date' => get_the_date(),
    'question' => $question[0]
];

$latestPostsDatas = array_slice($postDatas, 0, 3);
$otherPostsDatas = array_slice($postDatas, 2);

?>

    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    
</latest-posts>

<div class="showcase">

    <latest-posts postsdata="<?= htmlspecialchars(json_encode($latestPostsDatas), ENT_QUOTES, 'UTF-8') ?>"></latest-posts>

    <sections></sections>

    <other-posts postsdata="<?= htmlspecialchars(json_encode($otherPostsDatas), ENT_QUOTES, 'UTF-8') ?>"></other-posts>


</div>

</div>
