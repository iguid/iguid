<?php


/**
 * format Route::get('/getTo', [AppController::class, 'method']);
 * format Route::get('/getTo', function() {});
 * format Route::get('/getTo', "AppController@method")
 */
class test
{


    protected array $routes;
    public function __construct()
    {
        $this->routes = [];
    }


    protected function appendRoute($data)
    {
        $this->routes[] = [
            'type' => $data['type'],
            'route' => $data['route'],
            'action' => $data['action'],
        ];
    }

    protected function pattern()
    {
        foreach ($this->routes as $key => $route) {
            $route_match = preg_replace("/\{(.*?)\}/", '(?P<$1>[\w-]+)', $route['route']);
            $route_match = "#^" . ltrim($route_match) . "$#";
            if (preg_match($route_match, $_SERVER['REQUEST_URI'], $matches)) {
                return [
                    'method' => $key,
                    'match' => $matches,
                ];
            }
        }
    }

    public function get(string $route, mixed $action)
    {
        $this->appendRoute([
            'type' => 'GET',
            'route' => $route,
            'action' => $action
        ]);
    }

    public function post($route, mixed $action)
    {
    }

    public function delete($route, mixed $action)
    {
    }

    public function update($route, mixed $action)
    {
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    protected function getAction($key)
    {
        return $this->routes[$key]['action'];
    }

    protected function getActionMethod($class, $method, $args = [])
    {
        extract($args);
        return (new $class)->$method();
    }

    public function run()
    {
        $route = $this->pattern();
        $action = $this->getAction($route['method']);
        $this->getActionMethod($action[0], $action[1], $route['match']);
        exit;
    }
}
