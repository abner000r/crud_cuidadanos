<?php
namespace App\Controllers;
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
     
        $region= new RegionesModel();
        $datos['datos']=$region->findAll();
        return view('regiones',$datos);
    }

    //agregar planes y nuevo planes
    public function nuevasRegiones():string 
    {
        return view('regiones_nuevas');
    }
    public function agregarRegiones()
    {
        $cod_regio = $this->request->getVar('txtCodRegion');
        //echo "<br>Id = ". $id;
        $nombre=$this->request->getVar('txtNombre');
        //echo "<br>nombre = ". $nombre;
        $descripcion = $this->request->getVar('txtDescripcion');
        //echo "<br>Pago =". $pago;
        
        $region = new RegionesModel();
        $datos=[
            'cod_region'=>$cod_region,
            'nombre'=>$nombre,
            'descripcion'=>$descripcion
            
        ];
        $region->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }
}