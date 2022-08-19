<?php

require_once 'modelo/documento.php';
require_once 'modelo/obrasocial.php';
require_once 'modelo/persona.php';
require_once 'modelo/tipodocumento.php';

$ob = new ObraSocial();
$ob->setId(1);
$ob->setRazonSocial('OSDE');
$ob->setCuit('20465465-2');
$ob->setSitioWeb('https://www.osde.com.ar');

$td = new TipoDocumento();
$td->setId(1);
$td->setDescripcion('DNI');
$td->setHabilitado(true);

$td1 = new TipoDocumento();
$td1->setId(2);
$td1->setDescripcion('Pasaporte');
$td1->setHabilitado(true);

$doc = new Documento();
$doc->setId(1);
$doc->setNumero('40123123');
$doc->setHabilitado(true);
$doc->setTipodocumento($td);

$doc1 = new Documento();
$doc1->setId(2);
$doc1->setNumero('50123123');
$doc1->setHabilitado(true);
$doc1->setTipodocumento($td1);

$p = new Persona();
$p->setId(8);
$p->setNombre('Agustin');
$p->setApellido('Vargas');
$p->setFechaNacimiento('20/10/92');
$p->setObraSocial($ob);
$p->setDocumento($doc);
$p->setDocumento($doc1);

$p->MostrarDatos();



