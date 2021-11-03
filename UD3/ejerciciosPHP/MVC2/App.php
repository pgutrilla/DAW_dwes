<?php

class App
{

  private $numeros = [];
  private $arrErrores = [];
  private $cookieUser = '';
  private $cookiePassword = '';
  private $cookieDeseos = [];

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
    // echo "Estamos en el index<br>";
    if (isset($_COOKIE['user']) && isset($_COOKIE['password']) ) {
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
    if (isset($_COOKIE['user']) && isset($_COOKIE['password']) ) {   
      $this->cookieUser = json_decode($_COOKIE['user']);
      $this->cookiePassword = $_COOKIE['password'];

      if (isset($_COOKIE['deseos']) ) {   
        $this->cookieDeseos =  unserialize($_COOKIE['deseos']);
      } else {
        $this->cookieDeseos = 'No hay deseos.';
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

      setcookie("user", json_encode($user), time() + 3600);
      setcookie("password", hash( 'sha512', $password ), time() + 3600);

      return true;

    }
    
    return false;

  }
 

  public function saveDeseo( $arrParams ){
    $arrDeseos = [];
    $deseo = $arrParams['deseo'];

    if( $deseo != '' ){

      if( isset($_COOKIE['deseos'])){
        $arrDeseos = unserialize($_COOKIE['deseos']);
      }

      $arrDeseos[] = $deseo;

      setcookie("deseos", serialize($arrDeseos), time() + 3600);

      return true;

    }
    
    return false;

  }

  public function delete( ){
    if( isset($_COOKIE['deseos']) && isset($_GET['indice'])){
      $arrDeseos = unserialize($_COOKIE['deseos']);
      $indice =  intval($_GET['indice']);

      unset($arrDeseos[$indice]);

      $arrDeseos = array_values($arrDeseos);

      setcookie("deseos", serialize($arrDeseos), time() + 3600);

    }

    $this->indexReload();

  }

  public function empty(  ){
    setcookie("deseos", '', time() - 1 );
  }

  public function eraseCookiesLogin(  ){

      setcookie("user", null, time() - 1);
      setcookie("password", null, time() - 1);

  }

}