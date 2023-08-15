   <?php
          $connect = mysqli_connect("localhost", "root", "", "coronadb"); //Connect PHP to MySQL Database
          $query = '';
          $table_data = '';
          $filename = "https://api.covid19api.com/summary";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
          foreach($array['Countries'] as $row) //Extract the Array Values by using Foreach Loop
          {
           $query .= "INSERT INTO gstat(country,code,t_con,t_dth,n_con,n_dth) VALUES ('".$row["Country"]."', '".$row["CountryCode"]."', '".$row["TotalConfirmed"]."','".$row["TotalDeaths"]."','".$row["NewConfirmed"]."','".$row["NewDeaths"]."'); ";  // Make Multiple Insert Query 
           $table_data .= '
            <tr>
       <td>'.$row["Country"].'</td>
       <td>'.$row["CountryCode"].'</td>
       <td>'.$row["TotalConfirmed"].'</td>
	   <td>'.$row["TotalDeaths"].'</td>
	   <td>'.$row["NewConfirmed"].'</td>
	   <td>'.$row["NewDeaths"].'</td>
      </tr>
           '; //Data for display on Web page
          }
          if(mysqli_multi_query($connect, $query)) //Run Mutliple Insert Query
    {
   
          }
 if($query){
	 ?>
	 <script>
	 alert("Saved successfully");
	 </script>
	 <?php 
 }else{
	 	 ?>
	 <script>
	 alert("Failed to save");
	 </script>
	 <?php
 }


         header('location:stat.php');
          ?>