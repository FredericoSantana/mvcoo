<?php

namespace Source\Core;

use League\Plates\Engine;

/**
 * Class View
 * @package Source\Core
 */
class View
{
  /** @var Engine */
  private $engine;

  /**
   * View constructor.
   * @param string $path
   */
  public function __construct(string $path = CONF_VIEW_PATH)
  {
    $this->engine = new \League\Plates\Engine($path);
  }

//  public function __construct(Engine $engine)
//  {
//    $this->engine = $engine;
//  }

  /**
   * @param string $name
   * @param string $path
   * @return $this
   */
  public function path(string $name, string $path): View
  {
    $this->engine->addFolder($name, $path);
    return $this;
  }

  /**
   * @param string $template_name
   * @param array $data
   * @return string
   */
  public function render(string $template_name, array $data): string
  {
    return $this->engine->render($template_name, $data);
  }

  /**
   * @return Engine
   */
  public function engine(): Engine
  {
    return $this->engine();
  }
}