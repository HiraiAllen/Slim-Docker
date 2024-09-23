<?php
use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/vendor/autoload.php';

// Crear el contenedor de dependencias
$container = new Container();

// Agregar Twig al contenedor
$container->set('view', function () {
    return Twig::create(__DIR__ . '/templates', ['cache' => false]);
});

// Crear la aplicación usando el contenedor
AppFactory::setContainer($container);
$app = AppFactory::create();

// Agregar middleware de Twig
$app->add(TwigMiddleware::createFromContainer($app, 'view'));

// Definir la ruta home
$app->get('/', function (Request $request, Response $response, $args) {
    $view = $this->get('view');
    return $view->render($response, 'home.twig', [
        'name' => 'Felipe'
    ]);
});

// Ejecutar la aplicación
$app->run();