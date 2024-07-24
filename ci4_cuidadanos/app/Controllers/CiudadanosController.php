<?php
namespace App\Controllers;
use App\Models\CiudadanosModel;

class CiudadanosController extends BaseController
{
    public function index(): string
    {
     
        $ciudadanos= new CiudadanosModel();
        $datos['datos']=$ciudadanos->findAll();
        return view('ciudadanos',$datos);
    }



    //agregar planes y nuevo planes
    public function nuevosCiudadanos():string 
    {
        return view('ciudadanos_nuevos');
    }
    public function agregarCiudadanos()
    {
        $dpi = $this->request->getVar('txtDpi');
        //echo "<br>Id = ". $id;
        $apellido=$this->request->getVar('txtApellido');
        //echo "<br>nombre = ". $nombre;
        $nombre = $this->request->getVar('txtNombre');
        //echo "<br>Pago =". $pago;
        $direccion = $this->request->getVar('txtDireccion');
        //echo "<br>Id = ". $id;
        $tel_casa=$this->request->getVar('txtTelCasa');
        //echo "<br>nombre = ". $nombre;
        $tel_movil = $this->request->getVar('txtTelMovil');
        //echo "<br>Pago =". $pago;
        $email = $this->request->getVar('txtEmail');
        //echo "<br>Id = ". $id;
        $codmuni = $this->request->getVar('txtMunicipio');
        //echo "<br>Id = ". $id;
        $fechanac=$this->request->getVar('txtFechaNac');
        //echo "<br>nombre = ". $nombre;
        $codacad = $this->request->getVar('txtAcademico');
        //echo "<br>Pago =". $pago;
        $contra = $this->request->getVar('txtContra');
        //echo "<br>Id = ". $id;
      
        

        $ciudadanos = new CiudadanosModel();
        $datos=[
            'dpi'=>$dpi,
            'apellido'=>$apellido,
            'nombre'=>$nombre,
            'direccion'=>$direccion,
            'tel_casa'=>$tel_casa,
            'tel_movil'=>$tel_movil,
            'email'=>$email,
            'fechanac'=>$codmuni,
            'cod_nivel_acad'=>$fechanac,
            'cod_muni'=>$codacad,
            'contra'=>$contra
            
            
        ];
        $ciudadanos->insert($datos);
        echo "Datos guardados";
        return redirect()->route('ciudadanos');
    }
}