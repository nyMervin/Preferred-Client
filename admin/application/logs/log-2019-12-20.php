<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-20 07:37:51 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 07:46:24 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 07:46:24 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 07:48:12 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 07:48:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 07:49:01 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 07:49:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 07:49:32 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 07:49:32 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 07:49:37 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 07:49:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 07:49:44 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 07:49:44 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 07:49:49 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 07:49:49 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 07:53:03 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 07:53:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 08:17:02 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 08:17:02 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 08:26:48 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 08:26:48 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 08:53:55 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 08:53:55 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 09:01:25 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 09:01:25 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 09:02:37 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `sell_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0 ORDER BY a.`id` DESC
ERROR - 2019-12-20 09:02:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 142
ERROR - 2019-12-20 10:03:13 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 10:03:13 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 10:03:27 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 10:03:27 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 10:03:30 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 10:03:30 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 10:38:20 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 10:38:20 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 10:38:22 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 10:38:22 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 10:38:25 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `time_deposit_request` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 ORDER BY a.`id` DESC
ERROR - 2019-12-20 10:38:25 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 150
ERROR - 2019-12-20 11:26:09 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:26:09 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 11:26:20 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 11:26:52 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:26:52 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:27:03 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:27:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:27:17 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.client_id = b.id ORDER BY a .`completed_on` DESC
ERROR - 2019-12-20 11:27:17 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 256
ERROR - 2019-12-20 11:27:37 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:27:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:27:42 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:27:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:27:47 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.client_id = b.id ORDER BY a .`completed_on` DESC
ERROR - 2019-12-20 11:27:47 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 256
ERROR - 2019-12-20 11:28:03 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:28:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 215
ERROR - 2019-12-20 11:28:15 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:28:15 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 209
ERROR - 2019-12-20 11:28:22 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:28:22 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 215
ERROR - 2019-12-20 11:28:33 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:28:33 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 209
ERROR - 2019-12-20 11:28:37 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:28:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:28:44 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:28:44 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:29:58 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:29:58 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:31:10 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:31:10 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 11:32:00 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:32:00 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 189
ERROR - 2019-12-20 11:32:37 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:32:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:33:11 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:33:11 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 209
ERROR - 2019-12-20 11:33:46 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 11:33:46 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 215
ERROR - 2019-12-20 11:34:16 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.client_id = b.id ORDER BY a .`completed_on` DESC
ERROR - 2019-12-20 11:34:16 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 256
ERROR - 2019-12-20 11:34:48 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.client_id = b.id ORDER BY a .`completed_on` DESC
ERROR - 2019-12-20 11:34:48 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 256
ERROR - 2019-12-20 11:34:55 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:34:55 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:35:37 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 11:35:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 11:35:42 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 11:35:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 11:35:46 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:35:46 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 11:35:51 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `sell_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0 ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:35:51 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 142
ERROR - 2019-12-20 11:35:54 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `time_deposit_request` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:35:54 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 150
ERROR - 2019-12-20 11:35:57 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `fixed_income_requests` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:35:57 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 157
ERROR - 2019-12-20 11:36:11 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 11:36:16 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 11:36:16 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 11:36:31 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:36:31 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 11:37:01 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 11:37:31 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 11:37:55 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 11:40:48 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 11:40:48 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 11:43:36 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 11:43:36 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 11:43:39 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:43:39 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 136
ERROR - 2019-12-20 11:43:42 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `time_deposit_request` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:43:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 150
ERROR - 2019-12-20 11:43:45 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `fixed_income_requests` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 ORDER BY a.`id` DESC
ERROR - 2019-12-20 11:43:45 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 157
ERROR - 2019-12-20 11:45:30 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 11:45:30 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 11:45:47 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT * from clients WHERE branch ='' AND  created_on >= '' AND created_on <= ' 23:59:59'
ERROR - 2019-12-20 11:45:47 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 123
ERROR - 2019-12-20 11:45:52 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:45:52 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:45:58 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.device_token FROM `clients` AS a,branches AS b WHERE a.device_type='Android' and a.branch = b.branch_code
ERROR - 2019-12-20 11:45:58 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 102
ERROR - 2019-12-20 11:46:00 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.device_token FROM `clients` AS a,branches AS b WHERE a.device_type='Android' and a.branch = b.branch_code
ERROR - 2019-12-20 11:46:00 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 102
ERROR - 2019-12-20 11:46:02 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.device_token FROM `clients` AS a,branches AS b WHERE a.device_type='Android' and a.branch = b.branch_code
ERROR - 2019-12-20 11:46:02 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 102
ERROR - 2019-12-20 11:46:03 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.device_token FROM `clients` AS a,branches AS b WHERE a.device_type='Android' and a.branch = b.branch_code
ERROR - 2019-12-20 11:46:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 102
ERROR - 2019-12-20 11:46:06 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code
ERROR - 2019-12-20 11:46:06 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 83
ERROR - 2019-12-20 11:51:51 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.client_id = b.id ORDER BY a .`completed_on` DESC
ERROR - 2019-12-20 11:51:51 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 256
ERROR - 2019-12-20 11:54:07 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 12:02:13 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 12:03:56 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 12:04:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 12:17:01 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 12:17:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 12:18:25 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:19:09 --> Query error: Duplicate entry '1' for key 'branch_code' - Invalid query: INSERT INTO `branches` (`branch_name`, `branch_code`) VALUES ('Prime', '1')
ERROR - 2019-12-20 12:19:10 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:20:03 --> Query error: Duplicate entry '1' for key 'branch_code' - Invalid query: INSERT INTO `branches` (`branch_name`, `branch_code`) VALUES ('Prime', '1')
ERROR - 2019-12-20 12:20:43 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:21:06 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:21:06 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:22:23 --> Query error: Table 'digimonk_primeclient.clients' doesn't exist - Invalid query: SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC
ERROR - 2019-12-20 12:22:23 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 250
ERROR - 2019-12-20 12:28:30 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/admin/modules/branch_code_list/index.php 36
ERROR - 2019-12-20 12:28:30 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/admin/modules/branch_code_list/index.php 36
ERROR - 2019-12-20 12:35:54 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:35:54 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 12:36:36 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:36:36 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 12:36:52 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:36:52 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 12:37:00 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:37:00 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 189
ERROR - 2019-12-20 12:37:18 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:37:18 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 209
ERROR - 2019-12-20 12:37:31 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:37:31 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 215
ERROR - 2019-12-20 12:37:53 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/admin/modules/branch_code_list/index.php 36
ERROR - 2019-12-20 12:37:53 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/admin/modules/branch_code_list/index.php 36
ERROR - 2019-12-20 12:39:32 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:39:32 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 12:39:42 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:39:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 189
ERROR - 2019-12-20 12:39:47 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:39:47 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 209
ERROR - 2019-12-20 12:39:54 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:39:54 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 215
ERROR - 2019-12-20 12:41:07 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:41:07 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 189
ERROR - 2019-12-20 12:41:10 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:41:10 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 189
ERROR - 2019-12-20 12:42:42 --> Query error: Table 'digimonk_primeclient.transactions' doesn't exist - Invalid query: SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC
ERROR - 2019-12-20 12:42:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/html/primeclient/admin/application/models/Admin_panel_model.php 169
ERROR - 2019-12-20 12:46:26 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/admin/modules/branch_code_list/index.php 36
ERROR - 2019-12-20 12:46:26 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/admin/modules/branch_code_list/index.php 36
ERROR - 2019-12-20 12:48:40 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:48:40 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:48:55 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:48:55 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:49:39 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 12:49:39 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 14:51:42 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:51:43 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:51:47 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:51:48 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:51:53 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:51:53 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:51:57 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:51:57 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:51:59 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:51:59 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:00 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:00 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:02 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:02 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:02 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:02 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:02 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:02 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:04 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:04 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:05 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:06 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:12 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:13 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:15 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:15 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:22 --> 404 Page Not Found: Assets/js
ERROR - 2019-12-20 14:52:23 --> 404 Page Not Found: Assets/js
ERROR - 2019-12-20 14:52:23 --> 404 Page Not Found: Assets/js
ERROR - 2019-12-20 14:52:24 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:24 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:27 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:27 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:29 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:29 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:32 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:32 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:52:34 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 14:52:35 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 14:56:51 --> 404 Page Not Found: Assets/img
ERROR - 2019-12-20 16:38:09 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:46:11 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:47:55 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:48:12 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:48:14 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:48:21 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:48:24 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:48:25 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:48:28 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:49:05 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:50:46 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 16:50:54 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 16:50:54 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 18:51:32 --> 404 Page Not Found: Assets/bank
ERROR - 2019-12-20 19:34:00 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
ERROR - 2019-12-20 19:34:00 --> Severity: Notice --> Undefined variable: new_date /var/www/html/primeclient/admin/application/views/super_admin/modules/branch_code_list/index.php 86
