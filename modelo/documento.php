<?php

class Documento
{
    private $id;
    private $numero;
    private $habilitado;
    private $tipodocumento;

        
    public function getId()
    {
        return $this->id;
    }

     
    public function setId($id)
    {
        $this->id = $id;

    }

    

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

    }
    
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

    }

    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

    }
}
