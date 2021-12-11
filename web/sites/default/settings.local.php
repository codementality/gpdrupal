<?php
$CONFIG_DRUPAL_SYNC = '../config/drupal/sync';
// This specifies the default configuration sync directory.
// For D8 before 8.8.0, we set $config_directories[CONFIG_SYNC_DIRECTORY] if not set
if (version_compare(Drupal::VERSION, "8.8.0", '<') &&
  empty($config_directories[CONFIG_SYNC_DIRECTORY])) {
  $config_directories[CONFIG_SYNC_DIRECTORY] = $CONFIG_DRUPAL_SYNC;
}
// For D8.8/D8.9, set $settings['config_sync_directory'] if neither
// $config_directories nor $settings['config_sync_directory is set
if (version_compare(DRUPAL::VERSION, "8.8.0", '>=') &&
  version_compare(DRUPAL::VERSION, "9.0.0", '<') &&
  empty($config_directories[CONFIG_SYNC_DIRECTORY]) &&
  empty($settings['config_sync_directory'])) {
  $settings['config_sync_directory'] = $CONFIG_DRUPAL_SYNC;
}
// For Drupal9, it's always $settings['config_sync_directory']
if (version_compare(DRUPAL::VERSION, "9.0.0", '>=') &&
  empty($settings['config_sync_directory'])) {
  $settings['config_sync_directory'] = $CONFIG_DRUPAL_SYNC;
}
