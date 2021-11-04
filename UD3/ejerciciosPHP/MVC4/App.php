<?php

class App
{

  private $numeros = [];
  private $arrErrores = [];
  private $sessionUser = '';
  private $sessionPassword = '';
  private $sessionDeseos = [];

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
    session_start();

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
    // echo "Estamos en el index<br>";
    if (isset($_SESSION['user']) && isset($_SESSION['password']) ) {
      $this->home();  
    } else {
      $this->login();
    }
    
  }

  public function indexReload()
  {
    header('location:index.php');
  }

  public function login()
  {
    include('views/login.php');
  }

  public function home()
  {
    if (isset($_SESSION['user']) && isset($_SESSION['password']) ) {   
      $this->sessionUser = json_decode($_SESSION['user']);
      $this->sessionPassword = $_SESSION['password'];

      if (isset($_SESSION['deseos']) ) {   
        $this->sessionDeseos =  unserialize($_SESSION['deseos']);
      } else {
        $this->sessionDeseos = 'No hay deseos.';
      }

      include('views/home.php');
    } else {
      $this->indexReload();
    }
    
  }

  public function errorHtml( $arrParams ){

    include( 'views/error.php' );

  }

  public function logout()
  {
    $this->eraseCookiesLogin();
    $this->indexReload();
  }

  
  public function auth()
  {

    $user = $_POST['user'];
    $password = $_POST['password'];

    if( $user != '' && $password != '' ){
        
      $arrParams['user'] = $user;
      $arrParams['password'] = $password;

      $bResult = $this->saveCookiesLogin( $arrParams );

      if( $bResult ){
        
        $this->indexReload();

      } else {

        if( $user != '' ){
          $this->arrErrores[] = 'Debes introducir nombre de usuario';
        }

        if( $user != '' ){
          $this->arrErrores[] = 'Debes introducir una contraseña';
        }

        $this->errorHtml( $this->arrErrores );

      }

    }
  }
  
  public function new()
  {

    $deseo = $_POST['deseo'];

    if( $deseo != '' ){
        
      $arrParams['deseo'] = $deseo;

      $bResult = $this->saveDeseo( $arrParams );

      if( $bResult ){
        
        $this->indexReload();

      }

    }
  }


  public function saveCookiesLogin( $arrParams ){

    $user = $arrParams['user'];
    $password = $arrParams['password'];

    if( $user != '' && $password != '' ){

      $_SESSION["user"];
      $_SESSION["password"];

      return true;

    }
    
    return false;

  }
 

  public function saveDeseo( $arrParams ){
    $arrDeseos = [];
    $deseo = $arrParams['deseo'];

    if( $deseo != '' ){

      if( isset($_SESSION['deseos'])){
        $arrDeseos = unserialize($_SESSION['deseos']);
      }

      $arrDeseos[] = $deseo;

      $_SESSION["deseos"];

      return true;

    }
    
    return false;

  }

  public function delete( ){
    if( isset($_SESSION['deseos']) && isset($_GET['indice'])){
      $arrDeseos = unserialize($_SESSION['deseos']);
      $indice =  intval($_GET['indice']);

      unset($arrDeseos[$indice]);

      $arrDeseos = array_values($arrDeseos);

      $_SESSION["deseos"];

    }

    $this->indexReload();

  }

  public function empty(  ){
    $_SESSION["deseos"];
  }

  public function eraseCookiesLogin(  ){

      $_SESSION["user"];
      $_SESSION["password"];

  }

}