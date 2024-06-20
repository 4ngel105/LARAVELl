<?php
class Proveedor {
    private $id;
    private $empresa;
    private $contacto;
    private $mail;
    private $telefono;
    private $direccion;
    private $logo;

    public function __construct($id, $em, $co, $ea, $te, $di, $l) {
    $this->setId($id);
    $this->setEmpresa($em);
    $this->setContacto($co);
    $this->setMail($ea);
    $this->setTelefono($te);
    $this->setDireccion($di);
    $this->setLogo($l);
    }

    public function grabarProveedor(){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("INSERT INTO proveedor (empresa, contacto, mail, telefono, direccion, logo) values('$this->empresa','$this->contacto','$this->mail','$this->telefono','$this->direccion','$this->logo')");
        return $sql;
    }

    
    public function listarProveedor() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("select * from proveedor");
        return $sql;
    }

    public function obtenerProveedorPorId() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM proveedor WHERE id_proveedor = $this->id"); // Verifica la estructura SQL
        return $sql->fetch_assoc(); // Asegúrate de que devuelve datos válidos
    }
    
    public function modificarProveedor($id, $empresa, $contacto, $email, $telefono, $direccion,$logo) {
        
        $db = new Conexion();
        
        // Verifica que el SQL es correcto y actualiza datos adecuadamente
        $sql = $db->query("UPDATE proveedor
                            SET empresa = '$empresa', 
                                contacto = '$contacto', 
                                mail = '$email', 
                                telefono = '$telefono', 
                                direccion = '$direccion',
                                logo = '$logo'
                            WHERE id_proveedor = $id");
    
        return $sql; // Devuelve verdadero o falso dependiendo del éxito de la actualización
    }
    
    public function buscarProveedor($busqueda){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * from proveedor where empresa like '%$busqueda%'");
        return $sql;
    }

    public function eliProveedor($id){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("DELETE FROM proveedor WHERE id_proveedor = '$id'");
        return $sql;
    }
    
    public function reporte(){
        $db = new Conexion();
        $sql = $db->query("SELECT * from proveedor ");
        return ($sql);
    }


    //set y get
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }
    
    public function setContacto($contacto) {
        $this->contacto = $contacto;
    }
    
    public function setMail($mail) {
        $this->mail = $mail;
    }
    
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
    
    public function setLogo($logo) {
        $this->logo = $logo;
    }
    

}
?>