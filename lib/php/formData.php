<?php
   	
   $myFile = "../../data/users.json";
   $arr_data = array(); // create empty array 

  try
  {
  		// chmod("../../data/users.json", 0774);
  		// echo substr(sprintf('%o', fileperms('../../data/users.json')), -4);
	   //Get form data
	   $formdata = array(
	      'name'=> $_POST['name'],
	      'type'=> $_POST['type'],
	      'email'=>$_POST['email'],
	      'classes'=> $_POST['classes']
	   );


	   //Get data from existing json file
	   $jsondata = file_get_contents($myFile);

	   // converts json data into array
	   $arr_data = json_decode($jsondata, true);

	   // Push user data to array
	   array_push($arr_data, $formdata);

       //Convert updated array to JSON
	   $jsondata1 = json_encode($arr_data, JSON_PRETTY_PRINT);

	   $temp = json_decode($jsondata1);
	   for($i=0; $i<count($temp); $i++){
				echo "<li>
				<strong>{$temp[$i]->name}</strong>
				<span>{$temp[$i]->type}</span>
				</li>";
			}
	   
	   //write json data into data.json file
		// $fh = fopen($myFile, 'w') or die("can't open file");
		// fwrite($fh, $jsondata1);

	   if(file_put_contents($myFile, $jsondata1)) {
	        echo "Data successfully saved";
	    }
	   else 
	        echo "error";

   }
   catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
   }

