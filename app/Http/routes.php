<?php

$app->get('/get/classes', 'ClasseViewsController@getAllClasses');

$app->get('/get', function () {
    return 'Hello World';
});