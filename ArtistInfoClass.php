<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ArtistInfoClass{
   function getArtistInfo($artistId)
   {
        require_once 'config/dbConnect.php';
        $conn = dbConnect();
        echo "connectionDone";
        $sql = "select * FROM Artists where Artist_Id =$artistId";
        $res=mysqli_query($conn,$sql);
        
      
     //   if (mysqli_num_rows($res) != 0) { //count the number of rowss
        //   while ($rowData = mysqli_fetch_array($res)) {
               
            //echo  var_dump($rowData); //get the row data and store in variables.
              
              
        // }
       // }
        dbConClose($conn);
        return $res;
}

}
//$artistInfo= new ArtistInfoClass; //uncomment to test
//$artistInfo->getArtistInfo('52');
?>