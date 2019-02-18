<?php

$databases['default']['default'] = array (
  'database' => 'd8_live',
  'username' => 'root',
  'password' => 'Rainford1993',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/config/sync';

$settings['trusted_host_patterns'] = array(
  '^d8-first-site\.local$',
  '^d8-first-site\.local\.com$',
);

$config['system.logging']['error_level'] = 'verbose';
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

require_once DRUPAL_ROOT . '/modules/devel/kint/kint/Kint.class.php';
Kint::$maxLevels = 4;

// $conf['raven_enabled'] = FALSE;
// $config['raven.settings']['client_key'] = '';
// $config['raven.settings']['public_dsn'] = '';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
