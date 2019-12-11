<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//Rutas iniciales del sistema
$route['default_controller'] = 'welcome';
$route['index'] = 'welcome/index';
$route['registrar'] = 'welcome/registrar';
$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
$route['crearUsuario'] = 'welcome/crearUsuario';
//------------------------------------------------------------------

//Menu de interfaces para el Administrador
$route['menuAdministrador'] = 'administrador/menuAdministrador';
$route['usuario'] = 'administrador/usuario';
$route['perfil'] = 'administrador/perfil';
$route['mascota'] = 'administrador/mascota';
$route['dueno'] = 'administrador/dueno';
$route['estado'] = 'administrador/estado';
$route['caracter'] = 'administrador/caracter';
$route['sexo'] = 'administrador/sexo';
$route['especie'] = 'administrador/especie';
$route['raza'] = 'administrador/raza';
$route['ficha'] = 'administrador/ficha';

//Modulo de gestion de usuario
$route['crearUsuarioAdministrador'] = 'administrador/crearUsuario';
$route['editarUsuario'] = 'administrador/editarUsuario';
$route['eliminarUsuario'] = 'administrador/eliminarUsuario';
$route['usuarios'] = 'administrador/usuarios';
$route['crearPerfil'] = 'administrador/crearPerfil';
$route['crearMascota'] = 'administrador/crearMascota';
$route['crearEstado'] = 'administrador/crearEstado';
$route['crearCaracter'] = 'administrador/crearCaracter';
$route['crearSexo'] = 'administrador/crearSexo';
$route['crearEspecie'] = 'administrador/crearEspecie';

//Menu de interfaces para el Veterinario

$route['menuVeterinario'] = 'veterinario/menuVeterinario';

//Menu de interfaces para el Usuario

$route['menuUsuario'] = 'usuario/menuUsuario';

//Mensajes de error
$route['404_override'] = 'Error404';
$route['translate_uri_dashes'] = FALSE;
