<?php
namespace App\Controllers;
use App\Models\DepartamentosModel;

class DepartamentosController extends BaseController
{
    public function index(): string
    {
     
        $departamentos= new DepartamentosModel();
        $datos['datos']=$departamentos->findAll();
        return view('departamentos',$datos);
    }


    //agregar planes y nuevo planes
    public function nuevosDepartamentos():string 
    {
        return view('regiones_nuevas');
    }
    public function agregarDepartamentos()
    {
        $cod_dep = $this->request->getVar('txtCodDepa');
        //echo "<br>Id = ". $id;
        $nombreDep=$this->request->getVar('txtNombreDep');
        //echo "<br>nombre = ". $nombre;
        $codRegion = $this->request->getVar('txtCodRegion');
        //echo "<br>Pago =". $pago;
        
        $departamentos = new RegionesModel();
        $datos=[
            'cod_depto'=>$cod_dep,
            'nombre_depto'=>$nombreDep,
            'cod_regio'=>$codRegion
            
        ];
        $departamentos->insert($datos);
        echo "Datos guardados";
        return redirect()->route('departamentos');
    }

}