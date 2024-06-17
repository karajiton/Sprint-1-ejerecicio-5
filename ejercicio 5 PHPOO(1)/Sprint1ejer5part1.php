<html>
    <head>
    </head>
    <body>
        <?php
        class Employee{
            private $nombre ="";
            private $sueldo=0;

            public function recibeParametros ($nom,$suel){
                    $this->nombre=$nom;
                    $this->sueldo=$suel;
            }
            public function imprime (){
                if($this->sueldo > 6000){
                    echo $this->nombre . " tiene que pagar impuestos";
                }else{
                    echo $this->nombre . " no tiene que pagar impuestos";
                }
            }

        }

        $empleado1 = new Employee;
        $empleado1->recibeParametros ("Jonathan",7000);
        $empleado1->imprime();
        ?>
    </body>
</html>