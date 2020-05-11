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







$route['default_controller'] = 'home';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;





$route['sign-up'] = 'auth/sign_up';

$route['forget-password'] = 'auth/forget_password';
$route['reset-password'] = 'auth/reset_password';
$route['user-reset-password/(:any)'] = 'auth/confirm_reset_password';

$route['help'] = 'auth/help';

$route['agree-privacy-policy'] = 'auth/privacy_policy';

$route['confirmation'] = 'auth/otp_confirmation';

$route['check-otp'] = 'auth/check_otp';

$route['set-password'] = 'auth/set_password';

$route['resent-code'] = 'auth/reset_otp';

$route['reset-user-password'] = 'auth/check_confirm_reset_password';

$route['logout'] = 'auth/logout';



$route['home'] = 'Home';

$route['transaction'] = 'transaction';

$route['inbox'] = 'inbox';

$route['user'] = 'user';

$route['edit'] = 'user/edit';

$route['buy-dollar'] = 'buy_sell_dollar/buy_dollar';

$route['buy-dollar-confirm'] = 'buy_sell_dollar/confirm_buy_dollar';

$route['sell-dollar'] = 'buy_sell_dollar/sell_dollar';

$route['sell-dollar-confirm'] = 'buy_sell_dollar/confirm_sell_dollar';

$route['time-deposit-confirm'] = 'time_deposit/confirm_time_deposit';
$route['time-deposit'] = 'time_deposit';


$route['fixed-income'] = 'fixed_income';

$route['fixed-income-confirm'] = 'fixed_income/confirm_fixed_income';

$route['change-password'] = 'setting';

$route['change-password/update'] = 'setting/change';

$route['user-edit-phone'] = 'user/edit_phone';

$route['update-user-edit-phone'] = 'user/update_edit_phone';

$route['balance-request'] = 'balance';

$route['balance-request-send'] = 'balance/request_send';






