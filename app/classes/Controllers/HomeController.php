<?php
/**
 * Created by PhpStorm.
 * User: oshry
 * Date: 5/12/15
 * Time: 8:51 PM
 */
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class HomeController {

    public function index()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'test2',
            'username'  => 'oshry',
            'password'  => 'oshry81',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        // Set the event dispatcher used by Eloquent models... (optional)

        $capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
        $users = Capsule::table('cars')->where('price', '>', 0)->get();
        echo "<pre>",print_r($users),"</pre>";
        return 'piddling php - pathetically trivial; trifling - index';
    }

    public function example()
    {
        return 'piddling php - a silly little example route :) - example';
    }

}