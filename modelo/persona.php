<?php

class Persona
{
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $obraSocial;
    private $ListDocumentos = array();

    

    
    public function getId()
    {
        return $this->id;
    }
   
    public function setId($id)
    {
        $this->id = $id;

    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }
    

    
    public function getApellido()
    {
        return $this->apellido;
    }

   
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

    }

    
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

    }

    
    public function getObraSocial()
    {
        return $this->obraSocial;
    }

    public function setObraSocial($obraSocial)
    {
        $this->obraSocial = $obraSocial;

    }

    public function getListDocumentos()
    {
        return $this->ListDocumentos;
    }

  
    public function setDocumento($doc)
    {
        $this->ListDocumentos[] = $doc;

    }

    public function MostrarDatos(){

        echo 'Datos de la persona : ' . '<br>';
        echo 'Nombre : ' . $this->getNombre() . '<br>';
        echo 'Apellido : ' . $this->getApellido() . '<br>';
        echo 'Fecha Nacimiento : ' . $this->getFechaNacimiento() . '<br>';
        echo 'Razon Social : ' .$this->getObraSocial()->getRazonSocial() . '<br>';
        echo 'Sitio Web De La Obra Social : ' . $this->getObraSocial()->getSitioWeb() . '<br>';
        



        foreach($this->getListDocumentos() as $doc)
    {
        echo 'Datos del Documento' . '<br>';
        echo 'Descripcion del tipo de Documento : ' . $doc->getTipoDocumento()->getDescripcion() . '<br>';
        echo 'Numero de Documento : ' . $doc->getNumero() . '<br>';

    }
    }

    
}
