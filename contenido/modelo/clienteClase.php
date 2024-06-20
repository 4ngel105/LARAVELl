<?php
class Cliente {
    private $id;
    private $nit;
    private $razon;
    private $estado;

    public function __construct($i, $n, $ra, $es) {
        $this->id = $i;
        $this->nit = $n;
        $this->razon = $ra;
        $this->estado = $es;
    }

    public function grabarCliente() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("insert into cliente(nit_ci,razonsocial,estado) values('$this->nit','$this->razon','$this->estado')");
        return $sql;
    }

    public function listarCliente() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("select * from cliente where estado='Activo'");
        return $sql;
    }

    public function listarClienteInactivo() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("select * from cliente where estado='Inactivo'");
        return $sql;
    }

    public function inactivarCliente() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("UPDATE cliente set estado='Inactivo' where id_cliente='$this->id'");
        return $sql;
    }

    public function eliminaCliente(){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("DELETE FROM cliente WHERE id_cliente='$this->id'");
        return $sql;
    }

    public function activarCliente() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("UPDATE cliente set estado='Activo' where id_cliente='$this->id'");
        return $sql;
    }

    public function buscarCliente($busqueda){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * from cliente where razonsocial like '%$busqueda%' and estado='Activo'");
        return $sql;
    }

    public function listarClienteId(){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * from cliente where estado='Activo' and id_cliente='$this->id'");
        return $sql;
    }

    public function editarCliente($co,$rs,$n){
        $db = new Conexion();
        $sql = $db->query("UPDATE cliente set razonSocial='$rs',nit_cli='$n' where id_cliente='$co'");
        return ($sql);
    }

    public function reporte(){
        $db = new Conexion();
        $sql = $db->query("SELECT * from cliente where estado='Activo'");
        return ($sql);
    } 
    
    public function reporteIna(){
        $db = new Conexion();
        $sql = $db->query("SELECT * from cliente where estado='Inactivo'");
        return ($sql);
    } 
    
    // Getter para id
    public function getId() {
        return $this->id;
    }

    // Setter para id
    public function setId($ide) {
        $this->id = $ide;
    }

    // Getter para nit
    public function getNit() {
        return $this->nit;
    }

    // Setter para nit
    public function setNit($n) {
        $this->nit = $n;
    }

    // Getter para razon
    public function getRazon() {
        return $this->razon;
    }

    // Setter para razon
    public function setRazon($ra) {
        $this->razon = $ra;
    }

    // Getter para estado
    public function getEstado() {
        return $this->estado;
    }

    // Setter para estado
    public function setEstado($es) {
        $this->estado = $es;
    }
    
}
?>