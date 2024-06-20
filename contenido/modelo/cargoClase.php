<?php
class Cargo{
    private $id;
    private $cargo;

    public function __construct($i, $c) {
        $this->id = $i;
        $this->cargo = $c;
    }
    public function buscarCargo($n){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("select * from cargo where cargo like '%$n%'");
        return($sql);
    }
    public function lista(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("select * from cargo");
        return($sql);
    }
    public function listaCargo(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("select * from cargo where id_cargo='$this->id'");
        return($sql);
    }
    public function listarCargo(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("select * from cargo");
        return($sql);
    }
    public function grabarCargo(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("insert into cargo(cargo) values ('$this->cargo')");
        return($sql);
    }
    public function editarCargo($car,$co){
        $db=new Conexion();
        $sql=$db->query("UPDATE cargo set cargo='$car' where id_cargo='$co'");
        return($sql);

    } 
    public function listarCargoId(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("select * from cargo where id_cargo='$this->id'");
        return($sql);
    } 

    public function reporte(){
        $db = new Conexion();
        $sql = $db->query("SELECT * from cargo");
        return ($sql);
    } 


    // Método setter para el id
    public function setId($i) {
        $this->id = $i;
    }

    // Método getter para el id
    public function getId() {
        return $this->id;
    }

    // Método setter para el cargo
    public function setCargo($c) {
        $this->cargo = $c;
    }

    // Método getter para el cargo
    public function getCargo() {
        return $this->cargo;
    }

}
?>