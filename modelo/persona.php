<?php   

class persona
{
    public $nombre;
    public $direccion;
    public $numeroDeDocumento;
    public $edad;
    public $nacionalidad;

    public function MostrarDatos()
    {
        echo 'Nombre: '.$this->nombre.'<br>';
        echo 'Dirección: '.$this->direccion.'<br>';
        echo 'DNI: '.$this->numeroDeDocumento.'<br>';
        echo 'Nacionalidad Id: '.$this->nacionalidad->Id.'<br>';
        echo 'Nacionalidad Descripcion: '.$this->nacionalidad->Descripcion;
    }
    
}