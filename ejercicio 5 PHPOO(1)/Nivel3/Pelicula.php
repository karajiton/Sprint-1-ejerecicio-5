<?php
Class Pelicula {
    public string $nombre;
    public int $duracion;
    public string $director;

public function __construct(string $nombre,int $duracion,string $director){
    $this->nombre = $nombre;
    $this->duracion = $duracion;
    $this->director = $director;
}
public function getNombre() {
    return $this->nombre;
}
public function getDuracion() {
    return $this->duracion;
}
public function getdirector() {
    return $this->director; 
}
}