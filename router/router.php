<?php
// session_start();
$routes = [
    'default_controller' => 'homeController.php',
];
class App{
    private $__controller, $__action, $__params;

    public function __construct() {
        global $routes;
        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }
        $this->handleUrl();
    }

    public function getUrl() {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/Home';
        }
        return $url;
    }

    public function handleUrl() {
        $url = $this->getUrl(); 
        // $urlArr = array_filter(explode('/', $url));
    
        $routes = [
            '/' => 'homeController.php',
            '/Home' => 'homeController.php',
            '/AboutUs' => 'aboutUsController.php',
        ];
        if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin') {
            $routes = array_merge($routes, [
                '/AdminDashboard' => 'adminDashboardController.php',
                '/AdminUsers' => 'adminUsersController.php',
                '/AdminProducts' => 'adminProductsController.php',
                '/AdminOrders' => 'adminOrdersController.php',
            ]);
        }
    
        foreach ($routes as $route => $controllerFile) {
            if (isset($routes[$url])) {
                // Include the controller file based on the route
                require_once 'controllers/' . $routes[$url];
            } else {
                // Handle unknown routes or 404 page
                echo "404 - Page not found";
            }
        }
    }}
    

