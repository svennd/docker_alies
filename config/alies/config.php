<?php
defined('BASEPATH') or exit('No direct script access allowed');

# autoloader hack
spl_autoload_register(function ($class) {
	if (strpos($class, 'CI_') !== 0) {
		$file = APPPATH . 'libraries/' . $class . '.php';
		if (file_exists($file) && is_file($file)) {
			include_once($file);
		}
	}
});


// $config['base_url'] = 'http://localhost/alies';
$config['base_url'] = '';

$config['index_page'] = '';

$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = false;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = false;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = false;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = true;
$config['log_threshold'] = 1;
$config['log_path'] = '';
$config['log_file_extension'] = '';

$config['log_file_permissions'] = 0644;

$config['log_date_format'] = 'Y-m-d H:i:s';

$config['error_views_path'] = '';

$config['cache_path'] = '';

$config['cache_query_string'] = false;
$config['encryption_key'] = '';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'alies_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = null;
$config['sess_match_ip'] = false;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = false;

$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= false;
$config['cookie_httponly'] 	= false;

$config['standardize_newlines'] = false;

$config['global_xss_filtering'] = false;

$config['csrf_protection'] = false;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = true;
$config['csrf_exclude_uris'] = array();

$config['compress_output'] = false;

$config['time_reference'] = 'local';

$config['rewrite_short_tags'] = false;

$config['proxy_ips'] = '';

/*
	mail config
*/
$config['smtp_host'] = "";
$config['smtp_user'] = "";
$config['smtp_pasw'] = "";
$config['smtp_port'] = 465;

$config['mail_from_user'] = "";
$config['mail_from_email'] = "";

// set replyto
$config['mail_reply_to'] = "";

// bcc
$config['mail_bcc'] = "";