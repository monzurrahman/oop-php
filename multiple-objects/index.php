<?php 

	class Vehicle   {
					public $name="Default name";
					public $color="Default coloir";
					public $price;
				
					function set(string $name, string $color, int $price = 1000): void
						{ 
						$this-> name   =$name;
						$this -> color = $color;
						$this-> price  = $price;
						}

					function display(): void
									   {
										echo "Name is: {$this-> name}"."<br/>";
										echo "Color is: {$this-> color}"."<br/>";
										echo "Price is : {$this-> price}"."<br/>";
									  }
					function getName()
									  {
										return $this->name; 
									  }
					}


		$vehicle =  new Vehicle;

		$vehicle-> set("BMW", "Black", 2000);
		$vehicle -> display();
		echo "This is end of first application of the first object <br/><hr><br/>";
		$vehicle -> set("Corolla", "White"); // Price will show 1000 as default
		$vehicle -> display();
		echo "This is end of first  object.. <br/><hr><br/>";
		$obj = new Vehicle;
		$obj -> display(); // Default value will be displayed

		/*
			This will be output
				Name is: BMW
				Color is: Black
				Price is : 2000
				This is end of first application of the first object

				Name is: Corolla
				Color is: White
				Price is : 1000
				This is end of first object..

				Name is: Default name
				Color is: Default coloir
				Price is :

		*/
