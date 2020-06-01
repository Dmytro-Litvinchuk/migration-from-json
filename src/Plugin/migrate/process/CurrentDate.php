<?php

namespace Drupal\custom_migration\Plugin\migrate\process;

use Drupal\migrate\Annotation\MigrateProcessPlugin;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Class CurrentDate
 *
 * @MigrateProcessPlugin(
 *   id = "current_date",
 * )
 *
 * @code
 * field_import_date:
 *   plugin: current_date
 * @endcode
 *
 */
class CurrentDate extends ProcessPluginBase {

  // Return current date for date field in format 2013T16:39:57.
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    // +0 because it save in iso format.
    date_default_timezone_set("UTC");
    // Example 2020-12-01T08:36:00.
    return date("Y-m-d\TH:i:s");
  }

}
