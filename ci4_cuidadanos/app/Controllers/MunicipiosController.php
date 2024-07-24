<?php
namespace App\Controllers;
use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    public function index(): string
    {
     
        $municipios= new MunicipiosModel();
        $datos['datos']=$municipios->findAll();
        return view('municipios',$datos);
    }



    //agregar planes y nuevo planes
    public function nuevosMunicipios():string 
    {
        return view('municipios_nuevos');
    }
    public function agregarMunicipios()
    {
        $cod_muni = $this->request->getVar('txtCodRegion');
        //echo "<br>Id = ". $id;
        $nombre_muni=$this->request->getVar('txtNombre');
        //echo "<br>nombre = ". $nombre;
        $cod_depto = $this->request->getVar('txtDescripcion');
        //echo "<br>Pago =". $pago;
        
        $municipios = new RegionesModel();
        $datos=[
            'cod_muni'=>$cod_muni,
            'nombre_municipio'=>$nombre_muni,
            'cod_depto'=>$cod_depto
            
        ];
        $municipios->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }
}