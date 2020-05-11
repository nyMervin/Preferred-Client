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



$route['default_controller'] = 'gigs';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

####################################### ADMIN ####################################

$route['Admin/'] = 'Admin/dashboard';
$route['admin/home'] = 'admin/dashboard';
$route['Admin/home'] = 'Admin/dashboard';
$route['admin'] = 'admin/dashboard';
$route['admin/balance'] = 'admin/balance';

$route['admin/buy-dollar'] = 'admin/buyselldollar/buy';
// $route['admin/buy-sell-dollar/buy'] = 'admin/buyselldollar/buy';

// $route['admin/buy-sell-dollar/sell'] = 'admin/buyselldollar/sell';
$route['admin/sell-dollar'] = 'admin/buyselldollar/sell';

$route['admin/time-deposit'] = 'admin/timedeposit';
$route['admin/fixed-income'] = 'admin/fixedincome';
$route['admin/update-exchange-rate'] = 'admin/update_exchange_rate';
$route['admin/update-time-deposit-rate'] = 'admin/update_money_market_rate';
$route['admin/update-fixed-income-rate'] = 'admin/update_fixed_income_rate';
$route['admin/create-notifaction-for-one'] = 'admin/create_notifaction/for_one';
$route['admin/create-notifaction-for-all'] = 'admin/create_notifaction/for_all';

$route['admin/buy-dollar-query-all'] = 'admin/buyselldollar_query/all';
$route['admin/buy-dollar-query-all-by-date'] = 'admin/buyselldollar_query/query_by_date';

$route['admin/buy-dollar-query-branch'] = 'admin/buyselldollar_query/branch';
$route['admin/buy-dollar-query-by-branch-date'] = 'admin/buyselldollar_query/query_by_date_branch';

$route['admin/sell-dollar-query-all'] = 'admin/selldollar_query/all';
$route['admin/sell-dollar-query-by-date'] = 'admin/Selldollar_query/query_by_date';

$route['admin/sell-dollar-query-branch'] = 'admin/selldollar_query/branch';
$route['admin/sell-dollar-query-by-branch-date'] = 'admin/Selldollar_query/query_by_date_branch';

$route['admin/sell-dollar-query-depositor'] = 'admin/selldollar_query/depositor';
$route['admin/sell-dollar-query-by-depositor'] = 'admin/Selldollar_query/query_by_depositor';

$route['admin/time-deposit-queries-all'] = 'admin/time_deposit_queries/all';
$route['admin/time-deposit-queries-by-date'] = 'admin/Time_deposit_queries/query_by_date';


$route['admin/fixed-income-queries-all'] = 'admin/fixed_income_queries/all';
$route['admin/fixed-income-queries-by-branch'] = 'admin/fixed_income_queries/query_by_date';
$route['admin/fixed-income-queries-by-date-branch'] = 'admin/fixed_income_queries/branch';
$route['admin/fixed-income-queries-by-branch-date'] = 'admin/fixed_income_queries/query_by_date_branch';

$route['admin/time-deposit-queries-branch'] = 'admin/time_deposit_queries/branch';
$route['admin/time-deposit-queries-by-branch-date'] = 'admin/Time_deposit_queries/query_by_date_branch';

$route['admin/balances-request'] = 'admin/balances_request';
$route['admin/balances-request-query-by-date'] = 'admin/balances_request/query_date';

$route['admin/app-user-all'] = 'admin/app_user/all';

$route['admin/app-user-branch'] = 'admin/app_user/branch';
$route['admin/app-user-queries-by-branch-date'] = 'admin/app_user/branch_filter';

$route['admin/branch-code-list'] = 'admin/Branch_code_list';
$route['admin/update-bank-phone-number'] = 'admin/Numbers_update/bank_phone_number';
$route['admin/update-account-officer-cell-number'] = 'admin/Numbers_update/account_officer_cell_number';
$route['admin/update-inbount-phone-number'] = 'admin/Numbers_update/inbount_phone_number';

$route['logout'] = 'auth/logout';
$route['reset-password'] = 'auth/reset_password';


######################################### Admin End ##################################

########################################Branch Admin #################################
$route['branch-admin'] = 'branchadmin/dashboard';
$route['branch-admin/home'] = 'branchadmin/dashboard';
$route['branch-admin/balance'] = 'branchadmin/balance';
// $route['branch-admin/buy-sell-dollar/buy'] = 'branchadmin/buyselldollar/buy';
$route['branch-admin/buy-dollar'] = 'branchadmin/buyselldollar/buy';
$route['branch-admin/sell-dollar'] = 'branchadmin/buyselldollar/sell';
// $route['branch-admin/buy-sell-dollar/sell'] = 'branchadmin/buyselldollar/sell';
$route['branch-admin/time-deposit'] = 'branchadmin/timedeposit';
$route['branch-admin/fixed-income'] = 'branchadmin/fixedincome';

$route['branch-admin/create-notification-for-one'] = 'branchadmin/create_notifaction/for_one';

$route['branch-admin/create-notification-for-all'] = 'branchadmin/create_notifaction/for_all';

$route['branch-admin/buy-dollar-query-by-depositors'] = 'branchadmin/buydollar_query/depositors';
$route['branch-admin/buy-dollar-query-by-depositors-date'] = 'branchadmin/buydollar_query/query_by_depositor';

$route['branch-admin/sell-dollar-query-depositors'] = 'branchadmin/Selldollar_query/depositor';
$route['branch-admin/sell-dollar-query-by-depositors-date'] = 'branchadmin/Selldollar_query/query_by_depositor';

$route['branch-admin/time-deposit-queries'] = 'branchadmin/time_deposit_queries/all';
$route['branch-admin/time-deposit-queries-by-depositor-date'] = 'branchadmin/Time_deposit_queries/query_by_date_branch';

$route['branch-admin/fixed-income-queries-all'] = 'branchadmin/fixed_income_queries/all';
$route['branch-admin/fixed-income-queries-by-branch'] = 'branchadmin/fixed_income_queries/query_by_date';

$route['branch-admin/branch-user'] = 'branchadmin/App_user/branch/';

$route['branch-admin/branch-user-edit'] = 'branchadmin/App_user/edit';
$route['branch-admin/branch-user-edit-user/(:any)'] = 'branchadmin/App_user/edit_user';

$route['branch-admin/balances-request'] = 'branchadmin/balances_request';
$route['branch-admin/balances-request-query-deposit-by-date'] = 'branchadmin/balances_request/query_date';

$route['branch-admin/account-officer-query'] = 'branchadmin/Account_officer_query';

######################################## END Branch Admin #################################

######################################## Super Admin #################################
$route['super-admin'] = 'superadmin/Dashboard';
$route['super-admin/home'] = 'superadmin/Dashboard';
$route['super-admin/manage-admin-users'] = 'superadmin/Manage_admin_users';
$route['super-admin/manage-admin-users/profile/(:any)'] = 'superadmin/Manage_admin_users/profile/$1';
$route['super-admin/manage-admin-users-admin'] = 'superadmin/Manage_admin_users/admin/';
$route['super-admin/manage-admin-users-branch-admin'] = 'superadmin/Manage_admin_users/branch_admin/';
$route['super-admin/create-admin'] = 'superadmin/Create_admin';
$route['super-admin/branchs'] = 'superadmin/Branch_code_list';
$route['super-admin/admin-approve'] = 'superadmin/Admin_approve_history';
$route['super-admin/admin-approve-branch-admin'] = 'superadmin/Admin_approve_history/branch_admin';
$route['super-admin/admin-approve/admin-history'] = 'superadmin/Admin_approve_history/admin_history';
$route['super-admin/admin-approve/branch-admin'] = 'superadmin/Admin_approve_history/branch_admin';
$route['super-admin/admin-approve/branch-admin-history'] = 'superadmin/Admin_approve_history/branch_admin_history';

######################################## END Super Admin #################################

