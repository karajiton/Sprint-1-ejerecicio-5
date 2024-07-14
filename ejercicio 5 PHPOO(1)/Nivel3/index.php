<?php
require_once('Cinex.php');

$pelicula1 = new Pelicula('Vengadores',180,'Jonathan');
$pelicula2 = new Pelicula('Thor',150,'Ruben');
$pelicula3 = new Pelicula('Iron Man',120,'Jonathan');
$pelicula4 = new Pelicula('Hulk',190,'Maria');
$pelicula5 = new Pelicula('Spiderman',210,'Jonathan');
$pelicula6 = new Pelicula('Ant-Man',165,'Ruben');
$pelicula7 = new Pelicula('Black-Widow',140,'Maria');
$pelicula8 = new Pelicula('Deadpool',230,'Jonathan');
$pelicula9 = new Pelicula('Scarlet Witch',200,'Maria');

$cine1 = new Cine('Cines Unidos','Tenerife');
$cine2 = new Cine('Glorias','Malaga');
$cine3 = new Cine('Multiplex','Barcelona');
$cine4 = new Cine('Sambil','Madrid');

$cine1 -> addPeliculas($pelicula1);
$cine2 -> addPeliculas($pelicula1);
$cine3 -> addPeliculas($pelicula1);
$cine4 -> addPeliculas($pelicula1);
$cine1 -> addPeliculas($pelicula2);
$cine1 -> addPeliculas($pelicula3);
$cine2 -> addPeliculas($pelicula4);
$cine2 -> addPeliculas($pelicula5);
$cine3 -> addPeliculas($pelicula6);
$cine3 -> addPeliculas($pelicula7);
$cine4 -> addPeliculas($pelicula8);
$cine4 -> addPeliculas($pelicula9);

$cinex = new Cinex;

$cinex->agregarCine($cine1);
$cinex->agregarCine($cine2);
$cinex->agregarCine($cine3);
$cinex->agregarCine($cine4);

$cine1->mostrarPeliculas();
echo PHP_EOL;
$cine2->mostrarPeliculas();
echo PHP_EOL;
$cine3->mostrarPeliculas();
echo PHP_EOL;
$cine4->mostrarPeliculas();
echo PHP_EOL;
$cine1->mostrarPeliMayorDura();
echo PHP_EOL;
$cine2->mostrarPeliMayorDura();
echo PHP_EOL;
$cine3->mostrarPeliMayorDura();
echo PHP_EOL;
$cine4->mostrarPeliMayorDura();
echo PHP_EOL;
$cinex->buscarPelisporDirector('Jonathan');