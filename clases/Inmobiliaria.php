<?php


class Inmobiliaria {
   
 
        private $id;
        private $fecha_alta;
        private $nombre_vivienda;
        private $provincia;
        private $direccion;
        private $telefono;
        private $mail;
        private $tipo;
        private $precio ;
        private $m2;
        private $n_hab;
        private $descripcion;
     //   private $img;


    function __construct($id=null, $fecha_alta=null, $nombre_vivienda=null, 
            $provincia=null, $direccion=null,$telefono=null, $mail=null, 
            $tipo="alquiler", $precio=0, $m2=0, $n_hab=0,
            $descripcion=null){
        
        $this->id=$id;
        $this->fecha_alta= $fecha_alta;
        $this->nombre_vivienda= $nombre_vivienda;
        $this->provincia=$provincia;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->mail=$mail;
        $this->tipo=$tipo;
        $this->precio=$precio ;
        $this->m2=$m2;
        $this->n_hab=$n_hab;
        $this->descripcion=$descripcion;
      //  $this->img=$img;
     
    }

    function set($datos, $inicio=0){    
       $this->id=$datos[0+$inicio];
        $this->fecha_alta= $datos[1+$inicio];
        $this->nombre_vivienda=$datos[2+$inicio];
        $this->provincia=$datos[3+$inicio];
        $this->direccion=$datos[4+$inicio];
        $this->telefono=$datos[5+$inicio];
        $this->mail=$datos[6+$inicio];
        $this->tipo=$datos[7+$inicio];
        $this->precio=$datos[8+$inicio];
        $this->m2=$datos[9+$inicio];
        $this->n_hab=$datos[10+$inicio];
        $this->descripcion=$datos[11+$inicio];
     //   $this->img=$datos[12+$inicio];
    }
   
    
    public function getId() {
        return $this->id;
    }

    public function getFecha_alta() {
        return $this->fecha_alta;
    }

    public function getNombre_vivienda() {
        return $this->nombre_vivienda;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getM2() {
        return $this->m2;
    }

    public function getN_hab() {
        return $this->n_hab;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

 /*   public function getImg() {
        return $this->img;
    }
*/
    public function setId($id) {
        $this->id = $id;
    }

    public function setFecha_alta($fecha_alta) {
        $this->fecha_alta = $fecha_alta;
    }

    public function setNombre_vivienda($nombre_vivienda) {
        $this->nombre_vivienda = $nombre_vivienda;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setM2($m2) {
        $this->m2 = $m2;
    }

    public function setN_hab($n_hab) {
        $this->n_hab = $n_hab;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

  /*  public function setImg($img) {
        $this->img = $img;
    }

*/


}

?>
