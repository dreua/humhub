<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=humhub_testing',
      'username' => 'humhub',
      'password' => '#g4wj2t]mE5i',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_SmtpTransport',
        'host' => 'mxe812.netcup.net',
        'username' => 'humhub-noreply@filmz-mainz.de',
        'password' => '4kDcWaXJbG6pSBfn?bP6!',
        'encryption' => 'tls',
        'port' => '587',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\ApcCache',
      'keyPrefix' => 'humhub',
      'useApcu' => true,
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'Europe/Berlin',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1623786277,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'HumHub Testing',
  'language' => 'en-US',
  'timeZone' => 'Europe/Berlin',
); ?>