<?php
class Empleado {
    private $id_empleado;
    private $ci;
    private $nombre;
    private $paterno;
    private $materno;
    private $direccion;
    private $telefono;
    private $fechanacimiento;
    private $genero;
    private $intereses;
    private $id_cargo;

    public function __construct($i, $ic, $ci, $nom, $pat, $mat, $dir, $tel, $fec, $gen, $inte) {
    $this->id_empleado = $i;
    $this->id_cargo = $ic;
    $this->ci = $ci;
    $this->nombre = $nom;
    $this->paterno = $pat;
    $this->materno = $mat;
    $this->direccion = $dir;
    $this->telefono = $tel;
    $this->fechanacimiento = $fec;
    $this->genero = $gen;
    $this->intereses = $inte;
    
    }

    public function grabarEmpleado() {
        $db = new Conexion();
        $sql = $db->query("INSERT INTO empleado(id_cargo,ci,nombre,paterno,materno,direccion,telefono,fechanacimiento,genero,intereses) values('$this->id_cargo','$this->ci','$this->nombre','$this->paterno','$this->materno','$this->direccion','$this->telefono','$this->fechanacimiento','$this->genero','$this->intereses')");
        return $sql;
    }

    public function lista(){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("select e.*,c.cargo from empleado e inner join cargo c on c.id_cargo=e.id_cargo order by e.nombre asc");
        return $sql;
    }
    
    public function listarEmpleado() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("select * from empleado");
        return $sql;
    }

    public function listaEmpleadoId() {
        
        $db = new Conexion();
        $sql = $db->query("select * from empleado where id_empleado='$this->id_empleado'");
        return $sql;
    }
    
    public function buscarEmpleado($id) {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("select * from empleado where id_empleado='$id'");
        return $sql;
    }
    
    public function editarEmpleado($i, $c, $ced, $n, $p, $m, $d, $t, $f, $g, $is){
        
        $db = new Conexion();
        $sql = $db->query("update empleado set ci='$ced',nombre='$n',paterno='$p',materno='$m',direccion='$d',telefono='$t',fechanacimiento='$f',genero='$g',intereses='$is',id_cargo='$c' where id_empleado='$i'");
        return $sql;
    }
    
    public function eliEmpleado($id){
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("DELETE FROM empleado WHERE id_empleado = '$id'");
        return $sql;
    }
    
    public function reporte(){
        $db = new Conexion();
        $sql = $db->query("SELECT * from empleado ");
        return ($sql);
    } 

}
?>