<?php
	//Establishing Connection with Server
	$connection = mysql_connect("localhost", "root", "");

	//Selecting Database from Server
	$db = mysql_select_db("colleges", $connection);
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
        $weight = $_POST['weight'];
        $calIntake = $_POST['calIntake'];   
        $calBurned = $_POST['calBurned'];
        $workType = $_POST['type'];
        $time = $_POST['time'];
    
        
    if($name !=''||$email !=''){
	//Insert Query of SQL
    $query = mysql_query("insert into dailyActivity(user_weight, user_calIntake, user_calBurned, user_workout_type) values ('$weight', '$calIntake', ' $calBurned', '$workType', '$workType' , '$time')");
	echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
        
    else{
       echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
    }
 
	}
	//Closing Connection with Server
	mysql_close($connection);
?>					

