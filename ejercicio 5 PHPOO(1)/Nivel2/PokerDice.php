<?php
class PokerDice { 
        private $ladosDelDado;
            
         public function __construct($ladosDelDado = NULL) {
            $this->ladosDelDado = array ('AS','K','Q','J','7','8');
            
        }
    
        public function throw (){
          return $numAleatorio = rand (0,5);
       
       } 
        
        public function shapeName (): string{
            $numAleatorio = $this -> throw();
            $arra = $this-> ladosDelDado;
            $caraDelDado = '';
            for ($i = 0; $i < count($arra);$i++){
            if ($i == $numAleatorio){
              
            return $caraDelDado = $arra[$i];
                
            }
            
          }
         
            
        }
        static public function getToltalThrows () : int {
         static $contador = 0;
         return $contador++ ;
        }
}
 
$dados = new PokerDice;
 for ($i = 1;$i <= 5;$i++){
  $dados -> shapeName() . '<br/>';
   $dados -> getToltalThrows();
    
 }
 echo 'se han lanzado ' . PokerDice::getToltalThrows() . ' veces';
?>