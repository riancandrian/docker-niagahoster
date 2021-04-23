<?php 
return array (
  'debug' => true,
  'salt' => '695be2c6ab72cb2609ca9a051a930597',
  'url' => 'http://localhost:8004/boxbilling/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/var/www/public/boxbilling/bb-data',
  'path_logs' => '/var/www/public/boxbilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => getenv('DB_HOST') ?: '127.0.0.1',
    'name' => getenv('DB_NAME') ?: 'boxbilling',
    'user' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASS') ?: 'secretx',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/var/www/public/boxbilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);