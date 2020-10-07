    <?php
    include 'db.php';
    if(isset($_POST["kem"])){

     $type = "";
     if(isset($_POST['type'])){
		 foreach($_POST['type'] as $key){
			 $type = $key;
			 
			 }
		 
		 }
		 
		 
		     $kem = "";
     if(isset($_POST['kem'])){
		 foreach($_POST['kem'] as $key){
			 $kem = $key;
			 
			 }
		 
		 }

     


     $tab = "CREATE TABLE IF NOT EXISTS data(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     weight TEXT NOT NULL,
     density TEXT NOT NULL ,
     area TEXT NOT NULL,
     time TEXT NOT NULL,
	 crt TEXT NOT NULL,
	 test_cat TEXT NOT NULL
     
     )";
     
     $query = mysql_query($tab);
     if(!$query){
		 echo "failed to submit";
		 exit();
		 }
		 
		      $tab = "CREATE TABLE IF NOT EXISTS data_branch(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 corrosion_c TEXT NOT NULL,
	 test_cat TEXT NOT NULL
     
     )";
     
     $query = mysql_query($tab);
     if(!$query){
		 echo "failed to submit";
		 exit();
		 }
				function chk($valh){
						
						$valh = @trim($valh);
						
						if(get_magic_quotes_gpc()){
							
							$valh = stripslashes($valh);
							
							}
							
							return mysql_real_escape_string($valh);
						
						
						}
     
    		$filename=$_FILES["file"]["tmp_name"];
     
     
    		 if($_FILES["file"]["size"] > 0)
    		 {
     
    		  	$file = fopen($filename, "r");
    		  	
    		  	$counter = 0;
    		  	
    	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
    	         {					
					$counter++;
						
					if($counter == 1)
					{									 
						continue;
					}

						$w = $emapData[0];
						$d = $emapData[1];
						$a = $emapData[2];
						$t = $emapData[3];
						$crt = 8.76*($w/($d*$a*$t));
    
                   
    	           $sql = "INSERT into data (weight ,density ,area ,time ,crt,test_cat) 
    	            	values('$w' , '$d' , '$a' , '$t','$crt', '$type')";
    	         
    	          $result = mysql_query( $sql, $conn );
    				if(!$result)
    				{
    					echo "<script type=\"text/javascript\">
    							alert(\"Invalid File:Please Upload CSV File.\");
    							window.location = \"result.php\"
    						</script>";
     
    				}
					
				
     
    	         }
				 	  $sql = "INSERT into data_branch (corrosion_c ,test_cat) 
    	            	values('$kem' , '$type')";
    	         
    	          $result = mysql_query( $sql, $conn );
    				if(! $result )
    				{
    					echo "<script type=\"text/javascript\">
    							alert(\"Invalid File:Please Upload CSV File.\");
    							window.location = \"result.php\"
    						</script>";
     
    				}
    	         fclose($file);
    	         $tr = mysql_affected_rows();
    	         echo "<script type=\"text/javascript\">
    						alert(\"CSV File has been successfully Imported $tr.\");
    						window.location = \"result.php\"
    					</script>";
     
                 
    			 //close of connection
    			mysql_close($conn); 
     
     
     
    		 }
    	}	 
    ?>		
