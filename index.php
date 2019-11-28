 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<?php
    class vehicle{

    	//declaring member variable here
    	var $vehicle;
    	var $fuel;
    	var $capacity;
    	var $speed;


    	//declaring member functions
    	function setVehicle($vehicle){
    		$this ->vehicle = $vehicle;
    	}


    	function getVehicle(){
    		echo "vehicle type: $this->vehicle.<br/>";

    	}
    	  function setFuel($fuel){

    	  	$this ->fuel = $fuel;
			
			}

			function getFuel(){

			echo "fuel type: $this->fuel.<br/>";
    	}

    		function setCapacity($cap){
    			$this ->capacity =$cap;

    	
    		}

    		function getCapacity(){
    			
    		echo"capacity type: $this->capacity.<br/>";
    		}

    		function setSpeed($speed){
    			$this ->speed =$speed;
    		}

    		function getSpeed(){
    			echo "speed type: $this->speed.<br/>";
    		}


    	}

    	

    	$type = new vehicle();
    	$type->setVehicle(" grandia");
    	$type->getVehicle();
    	$type = new vehicle();
    	$type->setFuel("teargaas");
    	$type->getFuel();
    	$type = new vehicle();
    	$type->setCapacity(2);
    	$type->getCapacity();
		$type->setSpeed(100);
    	$type->getSpeed();

        $type = new vehicle();
        $type->setVehicle(" aerox");
        $type->getVehicle();
        $type = new vehicle();
        $type->setFuel("premium");
        $type->getFuel();
        $type = new vehicle();
        $type->setCapacity(1);
        $type->getCapacity();
        $type->setSpeed(80);
        $type->getSpeed();

    	
    	


    	
?>

</center>
</body>
</html>
