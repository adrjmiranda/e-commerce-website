<?php

namespace App\Core\Template;

use Latte\Engine;
use Latte\Loaders\FileLoader;

/**
 * Class View
 * 
 * Responsible for providing the method responsible for providing the template string rendered by latte.
 * 
 * @package App\Core\Template
 */
class View
{
  private static ?Engine $latte = null;

  /**
   * Returns the latte instance that generates the templates.
   * @return \Latte\Engine
   */
  private static function getInstance(): Engine
  {
    if (is_null(self::$latte)) {
      $path = __DIR__ . '/../../views';
      $tempPath = __DIR__ . '/../../temp/views';

      $autoRefresh = $_ENV['APP_ENV'] === 'local' ? true : false;

      self::$latte = new Engine();
      self::$latte->setLoader(new FileLoader($path));
      self::$latte->setAutoRefresh($autoRefresh);
      self::$latte->setTempDirectory($tempPath);
    }

    return self::$latte;
  }

  /**
   * Returns a string from the redesigned template.
   * @param string $template
   * @param array $params
   * @return string
   */
  public static function render(string $template, array $params = []): string
  {
    $latte = self::getInstance();
    $params['base_url'] = $_ENV['BASE_URL'];

    return $latte->renderToString($template, $params);
  }
}