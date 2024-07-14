<?php
require_once('Pelicula.php');

Class Cine{
    public string $nombreCine;
    public string $poblacion;
    public array $peliculas = [];
public function __construct (string $nombreCine, string $poblacion ){
    $this->nombreCine = $nombreCine;
    $this->poblacion = $poblacion;
    $this->peliculas = []; 
}
public function addPeliculas(Pelicula $pelicula) {
    return $this->peliculas[] = $pelicula;
}
public function mostrarPeliculas(){
    return print_r($this->peliculas);
}
public function mostrarPeliMayorDura(){
    $mayorDuracion = $this->peliculas[0]->duracion;
    $peliculaLarga = '';
    foreach ($this->peliculas as $pelicula){
        
        if($pelicula->duracion >= $mayorDuracion){ 
         $mayorDuracion = $pelicula->duracion;
         $peliculaLarga= $pelicula;
        }
    }
    
    echo 'la pelicual con mayor duracion en este cine es :' . $peliculaLarga->nombre . PHP_EOL;

}
public function peliculaRepetida($peliculas,$nombrePelicula) :bool{
    foreach($peliculas as $pelicula){
         if($pelicula->nombre === $nombrePelicula){
             return false;
         }
     }
     return true;
 }
}
