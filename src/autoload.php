<?php

require __DIR__ . '/../vendor/autoload.php';

class ClassLoader
{
  private static $classes;

  public static function loadClass($class)
  {
    if (self::$classes === null) {
      self::$classes = self::loadClasses(__DIR__);
    }
    if (array_key_exists($class, self::$classes)) {
      require __DIR__ . DIRECTORY_SEPARATOR . self::$classes[$class];
    }
  }

  private static function loadClasses($basedir, $namespace = '')
  {
    $dh = opendir($basedir);
    if (!$dh) {
      return [];
    }
    $files = [];
    while (false !== ($f = readdir($dh))) {
      if (in_array($f, ['.', '..'])) {
        continue;
      }
      $path = $basedir . DIRECTORY_SEPARATOR . $f;
      if (is_dir($path)) {
        $baseNamespace = ($namespace !== '') ? $namespace . "\\" . $f : $f;
        $files = array_merge($files, self::loadClasses($path, $baseNamespace));
      } elseif ($namespace !== '') {
        $files[$namespace . "\\" . pathinfo($path, PATHINFO_FILENAME)] = str_replace("\\", '/', $namespace) . DIRECTORY_SEPARATOR . $f;
      }
    }
    closedir($dh);

    return $files;
  }
}

spl_autoload_register(['ClassLoader', 'loadClass']);
