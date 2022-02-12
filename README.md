# WELCOME TO IGUID FRAMEWORK

## simple, fast and not security Framework

It is a framework created from scratch to develop my php skills based on laravel syntax

You can use this framework, but at your own risk in terms of safety

And you can develop it

### Advantages

+ Fast Route
+ Simple Facade Class


## view
you can use view function or Viewer Class
```php
<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{

	
	public function index()
	{
		return view('welcome');
	}
	
}
?>
```
If you want to render without displaying the data, use ```render()```
```php

$welcomeView = view('welcome')->render();
```
It's a way to store the page in a variable for use elsewhere