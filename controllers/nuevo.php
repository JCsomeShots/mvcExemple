<?

class Nuevo extends Controller{

  function __construct()
  {
    parent::__construct();
    $this->view->render('nuevo/index'); 
  }


  function registrarNuevoAlumno(){
    echo "Alumno Creado";
  }
}



?>