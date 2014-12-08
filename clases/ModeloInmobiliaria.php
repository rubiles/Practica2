<?php

class ModeloInmobiliaria {

    private $bd = null;
    private $tabla = "inmobiliaria";

    function __construct(BaseDatos $bd) {
        $this->bd = $bd;
    }


    function add(Inmobiliaria $objeto) {
        $sql = "insert into $this->tabla values (null, curdate(), :nombre_vivienda, :provincia, 
            :direccion,  :telefono, :mail, :tipo, :precio, :m2, :n_hab, :descripcion);";
        $parametro["nombre_vivienda"] = $objeto->getNombre_vivienda();
        $parametro["provincia"] = $objeto->getProvincia();
        $parametro["direccion"] = $objeto->getDireccion();
        $parametro["telefono"] = $objeto->getTelefono();
        $parametro["mail"] = $objeto->getMail();
        $parametro["tipo"] = $objeto->getTipo();
        $parametro["precio"] = $objeto->getPrecio();
        $parametro["m2"] = $objeto->getM2();
        $parametro["n_hab"] = $objeto->getN_hab();
        $parametro["descripcion"] = $objeto->getDescripcion();
//        $parametro["img"] = $objeto->getImg();

        $result = $this->bd->setConsulta($sql, $parametro);

        var_dump($this->bd->getError());
        if (!$result)
            return -1;
         return $this->bd->getAutonumerico();
    }

    /* BORRAR */

    function delete(Inmobiliaria $objeto) {
        $sql = "delete from $this->tabla where id = :id;";
        $parametro["id"] = $objeto->getId();
        $result = $this->bd->setConsulta($sql, $parametro);
        if (!$result)
            return -1;

        return $result;
    }

    function deletePorId($id) {
        return $this->delete(new Inmobiliaria($id));
    }

   function edit(Inmobiliaria $objeto) {
        $sql = "update $this->tabla SET nombre_vivienda= :nombre_vivienda, provincia= :provincia, 
            direccion= :direccion,  telefono= :telefono, mail= :mail, tipo= :tipo, precio= :precio, m2= :m2, n_hab= :n_hab, descripcion= :descripcion WHERE id= :id;";
        
        $parametro["id"]=$objeto->getId();
        $parametro["nombre_vivienda"] = $objeto->getNombre_vivienda();
        $parametro["provincia"] = $objeto->getProvincia();
        $parametro["direccion"] = $objeto->getDireccion();
        $parametro["telefono"] = $objeto->getTelefono();
        $parametro["mail"] = $objeto->getMail();
        $parametro["tipo"] = $objeto->getTipo();
        $parametro["precio"] = $objeto->getPrecio();
        $parametro["m2"] = $objeto->getM2();
        $parametro["n_hab"] = $objeto->getN_hab();
        $parametro["descripcion"] = $objeto->getDescripcion();
   
        $result = $this->bd->setConsulta($sql, $parametro);
          var_dump($this->bd->getError());
     
        if (!$result)
            return -1;
        return $this->bd->getNumeroFilas();
    }

    function editPK(Inmobiliaria $objeto, $idPK) {
        $sql = "update $this->tabla SET nombre_vivienda=:nombre_vivienda, provincia=:provincia, 
            direccion=:direccion,  telefono=:telefono, mail=:mail, tipo=:tipo, precio=:precio, m2=:m2, n_hab=:n_hab, descripcion=:descripcion WHERE id= :idPK);";
       echo $sql;

        $parametro["id"]=$objeto->getId();
        $parametro["nombre_vivienda"] = $objeto->getNombre_vivienda();
        $parametro["provincia"] = $objeto->getProvincia();
        $parametro["direccion"] = $objeto->getDireccion();
        $parametro["telefono"] = $objeto->getTelefono();
        $parametro["mail"] = $objeto->getMail();
        $parametro["tipo"] = $objeto->getTipo();
        $parametro["precio"] = $objeto->getPrecio();
        $parametro["m2"] = $objeto->getM2();
        $parametro["n_hab"] = $objeto->getN_hab();
        $parametro["descripcion"] = $objeto->getDescripcion();
        $parametro["idPK"] = $idPK;
        $result = $this->bd->setConsulta($sql, $parametro);

        echo "<hr/> $result";

        if (!$result)
            return -1;
        return $this->bd->getNumeroFilas();
    }

    /* GET OBJETO COMPLETO=SELECT */

    function get(Inmobiliaria $objeto) {
        $sql = "SELECT * FROM $this->tabla WHERE id= :id;";
        $parametro["id"] = $objeto->getId();
        $result = $this->bd->setConsulta($sql, $parametro);
        if (!$result)
            return null;
        else {
            $inmobiliaria = new Inmobiliaria();
            $inmobiliaria->set($this->bd->getFila());
            return $inmobiliaria;
        }
    }

    function count($condicion = "1=1", $parametros = array()) {
        $sql = "SELECT count(*) FROM $this->tabla WHERE $condicion";
        $result = $this->bd->setConsulta($sql, $parametros);
        if ($result)
        // return $this->bd->getFila()[0];     //en vez de devolver un array con un numero, devuelvo directamente una variable entera normal con el numero
            return $this->bd->getFila();
        return -1;
    }

    function getList($condicion = "1=1", $parametros = array(), $orderBy = "1") {
        $list = array();
        $sql = "SELECT * FROM $this->tabla WHERE $condicion order by $orderBy";
        $result = $this->bd->setConsulta($sql, $parametros);
        if ($result) {
            while ($fila = $this->bd->getFila()) {
                $inmobiliaria = new Inmobiliaria();
                $inmobiliaria->set($fila);
                $list[] = $inmobiliaria;
            }
            return $list;
        }
        return null;
    }



}

?>
