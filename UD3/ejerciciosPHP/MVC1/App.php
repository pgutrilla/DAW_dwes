<?php

class App
{

  private $numeros = [];

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
    if (isset($_GET['m'])) {
      $metodo = $_GET['m'];
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
    } finally {
      echo "<pre>";
      print_r($th);
    }
  }

  public function index()
  {
    // echo "Estamos en el index<br>";
    include('views/index.php');
  }

  public function printArray()
  {
    // echo "Estamos en el index<br>";
    include('views/arraInfo.php');
  }

  public function fibonacci() {
    $arrResult = [];

    $this->index();
    $this->getFibonacci( 0, 1, $arrResult );
    $this->numeros = $arrResult;

    $this->printArray();
  }

  public function potencias() {
    $arrResult = [];

    $this->index();
    $this->getPotencias( 2, 24, $arrResult );
    $this->numeros = $arrResult;

    $this->printArray();
  }

  public function factoriales() {
    $arrResult = [];

    $this->index();
    $this->getFactoriales( 1, $arrResult );
    $this->numeros = $arrResult;

    $this->printArray();
  }

  public function primos() {
    $arrResult = [];

    $this->index();
    // $this->getPrimos( 1, $arrResult );
    $this->getPrimosNoRecursiva( 1, $arrResult );
    $this->numeros = $arrResult;

    $this->printArray();
  }
  
  public function getFibonacci( $uno = 0, $dos = 1, &$arrResult ){
    $total = $uno + $dos;
    if ( $total < 1000000 ) {
        $arrResult[] = $total;      
        $this->getFibonacci( $dos, $total,$arrResult );
    }
  }

  public function getPotencias( $numero = 2 , $grado = 24, &$arrResult ){
    $nPotencias =count( $arrResult );
    $anterior = ($nPotencias == 0) ? $numero : $arrResult[$nPotencias - 1];
    if( $nPotencias < $grado-1 ){
      $total = $numero * $anterior;
      $arrResult[] = $total;
      $this->getPotencias( $numero, $grado, $arrResult );
    }
  }

  public function getFactoriales( $numero1 = 1, &$arrResult ){
    $nFactoriales = count( $arrResult ) + 1;
    if( $numero1 < 1000000 ){
      $numero1 = $numero1 * $nFactoriales;
      $arrResult[] = $numero1;
      $this->getFactoriales( $numero1, $arrResult );
    }
  }

  public function esPrimo( $numero ){
    $i = 0;
    $contador = 0;
    for($i = 1; $i <= $numero; $i++){
      if( $numero % $i == 0 ){
        $contador++;
      } 
    }
    return ($contador == 2 ) ? true : false; 
  }

  public function getPrimos( $n ,&$arrResult ){
    if( $n < 10000 ){
      if( $this->esPrimo( $n ) ){
        $arrResult[] = $n;
      }
      $n++;
      $this->getPrimos( $n, $arrResult );
    }
  }

  public function getPrimosNoRecursiva( $n ,&$arrResult ){
    for( $n = 1; $n < 10000; $n++ ){
      if( $this->esPrimo( $n ) ){
        $arrResult[] = $n;
      }
    }
  }
  
}
