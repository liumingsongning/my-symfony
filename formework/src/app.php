<?php
 
// example.com/src/app.php
 
use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;
 
$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\\Controller\\LeapYearController::indexAction',
)));
$routes->add('liu', new Routing\Route('/Liu', array(
    'year' => null,
    '_controller' => 'Calendar\\Controller\\LiuController::index',
)));
 
return $routes;