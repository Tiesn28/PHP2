<?php
namespace Core\Modules;

class Route {
  private array $router;
  public function __construct(){
    $this->router = [];
  }

  public function addRouter($path,$handler) {
    $this->router[$path] = $handler;
  }
  public function getRouter($path){
    return $this->router[$path];
  }
}