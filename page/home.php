<?php

// Query que obtém a lista de artigos:
$sql = "

SELECT 
	art_id, art_title, art_thumb, art_intro
FROM `articles`
WHERE art_status = 'on'
	AND art_date <= NOW()
ORDER BY art_date DESC;

";

// Debug
// print_r($sql); exit;

$res = $conn->query($sql);

while ($res->fetch_assoc()) :

    $page_article = <<<HTML

<div>
        <img src="" alt="">
        <div>
        <h3></h3>
        <span></span>
    </div>
</div>
HTML;

endwhile;

$page_article = <<<HTML

<h2>Oba!</h2>
<p>Página inicial.</p>

HTML;

$page_aside = <<<HTML

<h3>Barra lateral</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

HTML;
