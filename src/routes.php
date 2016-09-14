<?php
// Routes


// Render Twig template in route
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'pages/homepage.phtml');
});

/**
 * dummy route to test
 */
$app->get('/users', function () {
    $data =  array(array("name" => "orange"), array("name" => "banana"),array("name" => "apple"));
    header("Content-Type: application/json");

    echo json_encode($data);
});
