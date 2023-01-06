<?php 
// parsing json prepare site data
$site_setup = json_decode(file_get_contents('site_setup.txt'), true);

// information
$company_name = $site_setup['data'][0]['company_name'];
$company_alt = $site_setup['data'][0]['company_alt'];
$company_address = $site_setup['data'][0]['address'];
$app_name = $site_setup['data'][0]['app_name'];
$title_tags = $site_setup['data'][0]['title_tags'];
$description = $site_setup['data'][0]['description'];
$logo = $site_setup['data'][0]['logo'];
$favicon = $site_setup['data'][0]['favicon'];
$copyright = $site_setup['data'][0]['copyright'];
$created = $site_setup['data'][0]['created'];
$phone = $site_setup['data'][0]['phone'];
$email = $site_setup['data'][0]['email'];
$openoffice = $site_setup['data'][0]['openoffice'];

// settings
$loading = $site_setup['settings'][0]['loading'];

?>