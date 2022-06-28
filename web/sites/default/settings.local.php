<?php
if (isset($_ENV['IS_CONTAINER_DOCKER']) && (bool) $_ENV['IS_CONTAINER_DOCKER']) {
  $host = 'database';

} else {
  $host = '127.0.0.1';

}


$databases['default']['default'] = [
  'database'  => 'origami', // TODO change according to MYSQL_DATABASE
  'username'  => 'root',
  'password'  => 'YourPwdShouldBeLongAndSecure', // TODO change according to MYSQL_ROOT_PASSWORD
  'prefix'    => '',
  'host'      => $host,
  'port'      => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver'    => 'mysql',
];

// Additional settings:
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$config['system.logging']['error_level'] = 'verbose';

$settings['rebuild_access'] = FALSE;

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';

$settings['update_free_access'] = TRUE;
