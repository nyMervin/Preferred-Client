<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-04 18:41:46 --> 404 Page Not Found: Assets/bank
ERROR - 2019-10-04 18:58:18 --> 404 Page Not Found: Assets/bank
ERROR - 2019-10-04 19:46:04 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request` as a,`clients` as b Where status = 1 AND a.client_id = b.id AND b.branch_code = '2' AND a.requested_on >= '' AND a.requested_on <= date_add('', INTERVAL 7 DAY)
ERROR - 2019-10-04 19:46:04 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\primeclient\admin\application\models\Branch_admin_panel_model.php 121
ERROR - 2019-10-04 19:47:51 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request` as a,`clients` as b Where status = 1 AND a.client_id = b.id AND b.branch_code = '2' AND a.requested_on >= '' AND a.requested_on <= date_add('', INTERVAL 7 DAY)
ERROR - 2019-10-04 19:47:51 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\primeclient\admin\application\models\Branch_admin_panel_model.php 121
