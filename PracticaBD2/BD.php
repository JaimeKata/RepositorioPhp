<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BD
 *
 * @author jaimekata
 */
class BD {
    private $con;//conexion
    private $info; 
    private $host;
    private $user;
    private $pass;
    private $bd;
            
            
    public function __construct(string $host ="localhost", string $user="root", string $pass="root", string $bd="dwes") {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->bd = $bd;
        $this->con = $this->conexion;
    }
    
    private function conexion(): mysqli{
        $con = new mysqli($this->host, $this->user, $this->pass, $this->bd);
        if($con->connect_errno){
            $this->info = "Error conectando ... <strong>". $con->connect_errno ."</strong>";
        }
        return $con;
    }
    public function select(string $c): array{
        $filas = [];
        if($this->con ==null){
            $this->con = $this->conexion();
        }
        $resultado = $this->con->query($c);
        while($fila = $resultado->fetch_row()){//mientras fila sea distinto de null cogemos el siguiente valor
            $filas[] = $fila; 
        }
        return $filas;
    }
    
    public function cerrar(){//cerramos la conexion con la bbdd 
        $this->con->close();
    }
}
