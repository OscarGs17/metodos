<?php
 require_once'../config/conexion.php';
 class consulta extends conexion{
    public function consultar() {
    
    
            $consulta = $this->obtener_conexion->prepare("SELECT * FROM t_producto");
            $consulta->execute();
            $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $this->cerrar_conexion();  
        echo json_encode($datos);
    }
}

    






$consulta = new productos();
$metodo =$_POST['metodo'];
$consulta->consultar();

?>