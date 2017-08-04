<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
//    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->get('/maandroid', function ($request, $response, $args){
    return $this->renderer->render($response, 'menteabertajs.php', $args);
});

$app->get('/appjs/s', function ($request, $response, $args){
//    return $this->renderer->render($response, 'menteabertajs.php', $args);
//    dd("");
//    echo 'here!';
    return $this->renderer->render($response, 'appjs.html', $args);
});
