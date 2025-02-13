<?php

namespace Config;

use Config\Route;
use App\Controllers\ContollerTemplate;
use App\Controllers\UserController;

class Routes{

    public static  $routes = [];
    public static function load(){
        self::$routes = [
            'GET' => [
                new Route(uri:'/', contoller:ContollerTemplate::class ,method:'Home'),
                new Route(uri:'/test', contoller:ContollerTemplate::class ,method:'Test', parametres:[
                    'name' => 'int'
                ]),
                new Route(uri:'/dashboard', contoller:ContollerTemplate::class,method:'Dashboard'),
                new Route(uri:'/dbconnection', contoller:ContollerTemplate::class,method:'Dbconnection'),
                new Route(uri:'/events', contoller:ContollerTemplate::class,method:'Events'),
                new Route(uri:'/signin',contoller:ContollerTemplate::class,method:'Signin'),
                new Route(uri:'/signup',contoller:ContollerTemplate::class,method:'Signup'),
                new Route(uri:'/forgotpassword',contoller:ContollerTemplate::class,method:'Forgotpassword')
            ],
            'POST' => [
                new Route(uri:'/login',contoller:UserController::class,method:'login', parametres: [
                    'email' => 'email',
                    'password' => 'string'
                    ])
            ] ,
            'PUT' => [] ,
            'DELETE' => [] ,
            'PATCH' => [] ,
        ];
    }
    public static function getRoutes(){
        return self::$routes;
    }
}

?>