<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth\LoginController');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth\LoginController::login');

/**
 * --------------------------------------------------------------------
 * Custom Routing 
 * --------------------------------------------------------------------
 */
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
	// Registration
	$routes->get('register', 'Auth\RegistrationController::register', ['as' => 'register']);
    $routes->post('register', 'Auth\RegistrationController::attemptRegister');

	// Activation
	$routes->get('activate-account', 'Auth\RegistrationController::activateAccount', ['as' => 'activate-account']);

	// Login-out
	$routes->get('login', 'Auth\LoginController::login', ['as' => 'login']);
	$routes->post('login', 'Auth\LoginController::attemptLogin');
    $routes->get('logout', 'Auth\LoginController::logout');

	// Forgotten password
	$routes->get('forgot-password', 'Auth\PasswordController::forgotPassword', ['as' => 'forgot-password']);
    $routes->post('forgot-password', 'Auth\PasswordController::attemptForgotPassword');
	
    // Reset password
    $routes->get('reset-password', 'Auth\PasswordController::resetPassword', ['as' => 'reset-password']);
    $routes->post('reset-password', 'Auth\PasswordController::attemptResetPassword');

    // Account settings
    $routes->get('account', 'Auth\AccountController::account', ['as' => 'account']);
    $routes->post('account', 'Auth\AccountController::updateAccount');
    $routes->post('change-email', 'Auth\AccountController::changeEmail'); // not used
    $routes->get('confirm-email', 'Auth\AccountController::confirmNewEmail'); // not used
    $routes->post('change-password', 'Auth\AccountController::changePassword'); // new
    $routes->post('delete-account', 'Auth\AccountController::deleteAccount'); // new

    // Profile
    $routes->get('profile', 'Auth\AccountController::profile', ['as' => 'profile']); // new 
    $routes->post('update-profile', 'Auth\AccountController::updateProfile'); // new

    // Users
    $routes->get('users', 'Auth\UsersController::users', ['as' => 'users']); // new
    $routes->get('users/enable/(:num)', 'Auth\UsersController::enable'); // new
    $routes->get('users/edit/(:num)', 'Auth\UsersController::edit'); // new
    $routes->post('users/update-user', 'Auth\UsersController::update'); // new
    $routes->get('users/delete/(:num)', 'Auth\UsersController::delete'); // new
    $routes->post('users/create-user', 'Auth\UsersController::createUser');
    $routes->get('users/logs', 'Auth\UsersController::userLogs', ['as' => 'userlogs']); // new

    // Settings
    $routes->get('settings', 'Auth\SettingsController::settings', ['as' => 'settings']); // new
    $routes->post('settings-update-system', 'Auth\SettingsController::updateSystem'); // new
    $routes->post('settings-update-email', 'Auth\SettingsController::updateEmail'); // new
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
