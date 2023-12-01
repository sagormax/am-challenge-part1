<?php

namespace App;

/**
 * File log
 */
class FileLog
{
  /**
   * Write new log
   */
  public function write($log, $filePath)
  {
    $file = fopen($filePath, 'w');

    fwrite($file, $log);
    fclose($file);
  }

  /**
   * Read existing log
   */
  public function read($filePath)
  {
    $file = fopen($filePath, 'r');

    $contents = fread($file, filesize($filePath));
    fclose($file);

    return $contents;
  }
}