<?php

class App
{

  private $color = "";

  public function __construct($name = "Aplicación PHP")
  {
    // echo "Construyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Pablo Gracia Utrilla";
    $this->student = "A2";
  }

  public function run()
  {
    if (isset($_GET['method'])) {
      $metodo = $_GET['method'];
    } else {
      $metodo = 'index';
    }
  
    try {
      $this->$metodo();      
    } catch (Throwable $th) {
      if (method_exists($this, $metodo)) {
        header("HTTP/1.0 500 Internal Server Error");
        return http_response_code(500);
        echo "Error en el servidor";
      } else {
        header("HTTP/1.0 404 Not Found");
        echo "No encontrado";      
      }  
    }
  }

  public function index()
  {
    $this->home();   
  }

  public function indexReload()
  {
    header('location:index.php');
  }

  public function home()
  {
    if (isset($_COOKIE['color'])) {   
      $this->color = unserialize($_COOKIE['color']);
    }

    include('views/home.php');
    include('views/colores.php');
    
  }

  
  public function cambio(){

    if (isset($_GET['color'])) {   
      $color = $_GET['color'];
      setcookie("color", serialize($color), time() + 3600);
    }

    $this->indexReload();

  }

}