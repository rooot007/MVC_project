<?php 

class Router
{
	private $routes;
	 public function __construct()
	{
		$routesPath = __DIR__. '/../config/routes.php';
		$this->routes = include($routesPath);
	}
	// return request string
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		//получит строку запроса
		$uri = $this->getURI();
		// Проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {
			// echo "<br>$uriPattern->$path";
		//сравниваем строку запроса с данными из routes.php
			if (preg_match("~$uriPattern~", $uri)) {
				//--------------------------------------------------------------------------

			// $uri = substr_replace($uri, '', 0, 20);
			//------------------------------------------------------------------------------
			// echo '<br>ищем запрос который набрал пользователь :' .$uri;
			// echo '<br> что ищем по шаблону' . $uriPattern;
			// echo '<br> кто обрабатывает'  . $path;

			//получаем внутренний путь из внешнего согласно правилу.
			$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

			//определить контроллер, экшен, параметры
			$segments = explode('/', $internalRoute);
			$controllerName = ucfirst(array_shift($segments). 'Controller');
			$actionName = 'action'. ucfirst(array_shift($segments));

			// echo '<br> controller Name: ' . $controllerName;
			// echo '<br> action Name: ' . $actionName;
			$parameters = $segments;
			
			# подключение файла класса контроллера
				$controllerFile = __DIR__ .'/../controllers/'. $controllerName.'.php';
				if (file_exists($controllerFile)) {
						include_once($controllerFile);
					}
				
				# create object, request method - action
				$controllerObject = new $controllerName;

				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				
				if ($result != null) {
						break;
					}	
			}
		}
	}
}