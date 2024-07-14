<?php
require_once('Cine.php');
Class Cinex{
    public $cines = [];

public function agregarCine(Cine $cine){
    $this->cines[] = $cine;
}

public function buscarPelisporDirector(string $director){
    $peliculasMismoDirector = [];
    foreach($this->cines as $cine){
        foreach($cine->peliculas as $this->pelicula){
            if($this->pelicula->director == $director){
                if($cine->peliculaRepetida($peliculasMismoDirector,$this->pelicula->nombre)){
              $peliculasMismoDirector[] = $this->pelicula; }
                    
            }
        }
    }
    print_r($peliculasMismoDirector);
    
}
}