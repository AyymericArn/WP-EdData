<?php

$questionsreponses = [];
if (have_rows('questionreponse')) : while (have_rows('questionreponse')) {
    the_row();
    $questionsreponses[] = [
        'question' => get_sub_field('question'),
        'reponse' => get_sub_field('reponse')
    ];
}
endif;

$content = '';
while (have_posts()) {
    the_post();
    $content = get_the_content();
}

$data = [
    'title' => get_the_title(),
    'description' => get_the_excerpt(),
    'author' => get_the_author(),
    'content' => $content,
    'illu' => get_the_post_thumbnail_url(),
    'category' => get_the_category(),
    'questions' => $questionsreponses
];

$postData = json_encode($data);

?>

<article-wrapper
    postdata="<?= htmlspecialchars($postData, ENT_QUOTES, 'UTF-8') ?>"
></article-wrapper>