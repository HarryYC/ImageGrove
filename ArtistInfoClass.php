<?php

/* 
 * This class consists of methods to fetch data pertaining to an artist from the database.
 * 
 */
class ArtistInfoClass{
  public function getArtistInfo($artistId)
   {
        require_once 'dbConnect.php';
        $conn = dbConnect();
        $sql = "select * FROM Artists where Artist_Id =$artistId";
        $res=mysqli_query($conn,$sql);
        dbConClose($conn);
        return $res;
}
}
/*
 * use the follwing example as reference to make use of the above method.
$artistInfo= new ArtistInfoClass; //uncomment to test
$res=$artistInfo->getArtistInfo('52');
if (mysqli_num_rows($res) != 0) { //count the number of rows
           while ($rowData = mysqli_fetch_array($res)) {
               echo $rowData[0];
           }
}

?>
 */