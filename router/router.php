<?php
class Router {
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
        if(isset($_SESSION['user'])&& $_SESSION['user']['role']=='admin'){
            $routes = [
            '/' => 'homeController.php',
            '/Home' => 'homeController.php',
            '/AboutUs' => 'aboutUsController.php',];       
         }
    
        foreach ($routes as $route => $controllerFile) {
            if ($route == $url) {
                require_once 'controllers/' . $controllerFile;
                break;
            }
        }
    }}
    

