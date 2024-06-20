<?php
class Producto {
    private $id;
    private $idprov;
    private $nombre;
    private $descripcion;
    private $estado;
    private $precio;
    private $stock;
    private $tipo;
    private $imagen;

    public function __construct($id, $ip, $nom, $des, $es, $pre, $st, $tipo, $img) {
        $this->setId($id);
        $this->setIdprovedor($ip);
        $this->setNombre($nom);
        $this->setDescripcion($des);
        $this->setEstado($es);
        $this->setPrecio($pre);
        $this->setStock($st);
        $this->setTipo($tipo);
        $this->setImagen($img);
    }

    public function grabarProducto(){
        include("conexion.php");
        $db = new Conexion();
        //aumentar el ide del provedor
        $sql = $db->query("INSERT INTO producto (id, id_prov, nombre, descripcion, estado, precio, stock, tipo, imagen) 
                           values ('$this->id',/*AQUI */ '$this->nombre', '$this->descripcion', '$this->estado', '$this->precio', '$this->stock', '$this->tipo', '$this->imagen')");
        return $sql;
    }

    
    public function listarProducto() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("select * from producto");
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


// Getters
public function getId() {
    return $this->id;
}

public function getIdprovedor() {
    return $this->idprov;
}

public function getNombre() {
    return $this->nombre;
}

public function getDescripcion() {
    return $this->descripcion;
}

public function getEstado() {
    return $this->estado;
}

public function getPrecio() {
    return $this->precio;
}

public function getStock() {
    return $this->stock;
}

public function getTipo() {
    return $this->tipo;
}

public function getImagen() {
    return $this->imagen;
}

// Setters
public function setId($id) {
    $this->id = $id;
}

public function setIdprovedor($idprov) {
    $this->idprov = $idprov;
}

public function setNombre($nombre) {
    $this->nombre = $nombre;
}

public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}

public function setEstado($estado) {
    $this->estado = $estado;
}

public function setPrecio($precio) {
    $this->precio = $precio;
}

public function setStock($stock) {
    $this->stock = $stock;
}

public function setTipo($tipo) {
    $this->tipo = $tipo;
}

public function setImagen($imagen) {
    $this->imagen = $imagen;
}
}
?>