<!-- <?= "this is the front page" ?> -->

<h1 class="title-home">Nous répondrons aux problématiques de l'éducation par la data</h1>
<p class="intro-text">Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo. <a href="http://" target="_blank" rel="noopener noreferrer">En savoir plus sur nous.</a></p>


<latest-posts>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        $postData = [
            'title' => get_the_title(),
            'link' => get_the_permalink()
        ];

    ?>


    <big-posts postcontent="<?= get_the_content() ?>" postdata="<?= htmlspecialchars(json_encode($postData), ENT_QUOTES, 'UTF-8') ?>"></big-posts>
    <small-posts-up postcontent="<?= get_the_content() ?>" postdata="<?= htmlspecialchars(json_encode($postData), ENT_QUOTES, 'UTF-8') ?>"></small-posts-up>

    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

    apprend à link les données batard
</latest-posts>

<sections></sections>