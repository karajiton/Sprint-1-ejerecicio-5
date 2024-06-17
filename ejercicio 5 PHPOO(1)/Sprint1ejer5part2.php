<html>
    <head>
    </head>
    <body>
        <?php
        abstract class Shape{
            protected $ancho;
            protected $alto;
            
            public function __construct($an,$al){
                $this->ancho=$an;
                $this->alto=$al;
            }
            public abstract function area(); 

        }
        class Triangulo extends Shape{
            public function __construct($an,$al){
                Shape::__construct($an,$al);
            }
            public function area(){
                $resultado = (($this->ancho * $this->alto)/2);
                return $resultado;
            }
         
        }
        class Rectangulo extends Shape{
            public function __construct($an,$al){
                Shape::__construct($an,$al);
            }
                public function area(){
                    return ($this->ancho * $this->alto);
                }
        }

        $tri = new Triangulo(23,22);
         echo $tri-> area();
        echo "<br/>";
        $rec= new Rectangulo(20,23);
         echo $rec-> area();

        ?>
    </body>
</html>