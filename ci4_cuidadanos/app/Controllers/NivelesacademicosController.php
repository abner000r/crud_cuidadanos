<?php
namespace App\Controllers;
use App\Models\NivelesacademicosModel;

class NivelesacademicosController extends BaseController
{
    public function index(): string
    {
     
        $niveles= new NivelesacademicosModel();
        $datos['datos']=$niveles->findAll();
        return view('nivelesacademicos',$datos);
    }



    //agregar planes y nuevo planes
    public function nuevosNiveles():string 
    {
        return view('nivelesacademicos_nuevos');
    }
    public function agregarNiveles()
    {
        $codNivel = $this->request->getVar('txtCodNivel');
        //echo "<br>Id = ". $id;
        $nombre=$this->request->getVar('txtNombre');
        //echo "<br>nombre = ". $nombre;
        $descripcion = $this->request->getVar('txtDescripcion');
        //echo "<br>Pago =". $pago;
        
        $niveles = new NivelesacademicosModel();
        $datos=[
            'cod_nivel_acad'=>$codNivel,
            'nombre'=>$nombre,
            'descripcion'=>$descripcion
            
        ];
        $niveles->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }
}