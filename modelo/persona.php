<?php
require_once 'match.php';
class Persona
{
    public $Id;
    public $ApellidoNombre;
    public $ListMatcheos = array();

    public function GenerarSolicitudDeMatcheo($idPersonaAMatchear)
    {
        //codigo q guarda la solictud en la db
        //ejecuta todas las validaciones

        $p = new Persona();
        $p->ApellidoNombre = 'Escamoso, pedro';
        $p->Id = $idPersonaAMatchear;

        $matchGenerado = new Matcheo();
        $matchGenerado->Id = 1;
        $matchGenerado->Estado = 'No matcheado';
        $matchGenerado->Persona = $p;
        return $matchGenerado;
    }

    public static function getPersona($idPersona)
    {
        //codigo q busca la persona en la db
        $p = new Persona();
        $p->ApellidoNombre = 'Juarez, Alejandro';
        $p->Id = $idPersona;
        return $p;
    }

    public function Agregar()
    {
        //codigo q agrega la persona en la db
        $p = new Persona();
        $p->Id =
            $p->ApellidoNombre = $this->ApellidoNombre;
        return $p;
    }


    public static function ConsultarTodas()
    {
        $listPersonas = array();

        $p = new Persona();
        $p->Id = '4545';
        $p->ApellidoNombre = 'Juan';

        $p1 = new Persona();
        $p1->Id = '3030';
        $p1->ApellidoNombre = 'Pedro';

        $p2 = new Persona();
        $p2->Id = '1010';
        $p2->ApellidoNombre = 'Luis';

        $p3 = new Persona();
        $p3->Id = '5453';
        $p3->ApellidoNombre = 'Jose';

        $p4 = new Persona();
        $p4->Id = '3000';
        $p4->ApellidoNombre = 'Lucas';

        $listPersonas[] = $p;
        $listPersonas[] = $p1;
        $listPersonas[] = $p2;
        $listPersonas[] = $p3;
        $listPersonas[] = $p4;

        return $listPersonas;
    }
}
