<table class="foodtable">
            <caption id="foodtable_caption">
               15 gr = 1 μονάδα ινσουλίνης <br>
               1 μονάδα ινσουλίνης = -50 πόντους ζαχάρου 
            </caption> 
           <tr>
                 <th id="title1">Φαγητά</th>
                  <th id="title2">Υδατάνθρακες</th>
           </tr>
           <tr>
               <td>Nescafe με ένα ποτήρι γάλα(240ml)</td>
                <td>15 gr</td>
           </tr>
           <tr>
                <td>60 gr κοτόπουλο φιλέτο με λευκή σάλτσα με 1 και 1/3 φλυτζάνι Ρύζι (200 gr) </td>
                <td>60 gr</td>
           </tr>
           <tr>
               <td>90 gr σολομό στον φούρνο με 1 και 1/3 φλυτζάνι Ρύζι (200 gr) </td>
                <td>60 gr</td>
           </tr>
           <tr>
            <td>1,5 φλυτζάνι Φακόρυζο (270 gr) </td>
            <td>45 gr</td>
           </tr>
            <tr>
             <td>1 μπάρα δημητριακών ολικής αλέσεως  </td>
              <td>15 gr</td>
           </tr>
           <tr>
            <td>Παϊδάκια στην σχάρα με 2 φλυτζάνια Πουργούρι(320 gr)   </td>
            <td>60 gr</td>
           </tr>
           <tr>
            <td>1 κεσεδάκι γιαούρτι φρούτου(200 gr)    </td>
            <td>18 gr</td>
           </tr>
           <tr>
            <td>2 φέτες ψωμί ολικής αλέσεως     </td>
            <td>30 gr</td>
           </tr>
          <tr>
            <td>2 μερίδες φρούτου      </td>
            <td>30 gr</td>
           </tr>
           <tr>
            <td>1 αλμυρή κρέπα    </td>
            <td>30 gr</td>
           </tr>
           <tr>
            <td>Παγωτό (φόρμα με 1 μπάλα)   </td>
            <td>30 gr</td>
           </tr>
           <tr>
            <td>Γύρο κοτόπουλο σε πίττα με τζατζίκι    </td>
            <td>30 gr</td>
           </tr>
           <tr>
            <td>Σαλάτα με 6 καβουροπόδαρα     </td>
            <td>15 gr</td>
           </tr>
           <tr>
            <td>Σαλάτα με 1 μικρό τόνο νερού ή 90 gr γαρίδες + 1/2 φλυτζάνι καλαμπόκι    </td>
            <td>30 gr</td>
           </tr>
           <tr>
            <td>1 μικρό μπιφτέκι κοτόπουλο με 1 μέτρια πατάτα jacket(180 gr)     </td>
            <td>30 gr</td>
           </tr>
           <tr>
            <td>90 gr καλαμαράκια κοκκινιστά με 1 φλυτζάνι Ρύζι(150 gr)      </td>
            <td>30 gr</td>
           </tr>
         </table>    















         <table>
        <tr>
          <th></th>
          <th><b>Φαγητά</b></th>
          <th><b>Υδατάνθρακες</b></th>
        </tr>

   <?php
    $conn = mysqli_connect("localhost","root","","diabeates");
    if($conn-> connect_error){
     die("Connection failed:". $conn-> connect_error);
      }

   $sql="SELECT id,food,ydat from food";
   $result =$conn-> query($sql);

   if ($result-> num_rows >0){
   while ($row = $result-> fetch_assoc()){
    echo "<tr><td>". $row["id"] . "</td><td>" . $row["food"] . "</td><td>". $row["ydat"] . "</td><td>";
    }

    echo "</table>";
  }
   else{
    echo "0 result";
   }

   $conn-> close();
  ?>





















.container { 
  height: 550px;
  position: relative;
  border: 4px solid rgb(21, 3, 78); 
  margin-top: 20px;
  background-color: rgb(248, 246, 246);
 margin-bottom:10px;
 transform: translate(0%, 0%);
}



.foodtable,td,#title1,#title2 {
  border: 2px solid black;

}

#title1,#title2{
  text-align: center;
}

.foodtable {
  margin-top: 30px;
  margin-bottom: 20px;
  width: 75%;
  border-collapse: collapse;
  background-color: rgb(186, 182, 182);
  text-align: center;
  margin-left:auto;
  margin-right:auto;
 color:black;
 text-align: left;
}
 
.caption{
  text-align: left;
  caption-side: bottom;
  color: black;
}


table{
  border-collapse: collapse;
  width:100%;
  color:rgb(0, 0, 0);
  font-family: monospace;
  font-size: 20px;
  text-align: left;
  background-color:gainsboro;
}

th{
  background-color: rgb(165, 161, 161);
  color:rgb(0, 0, 0);
  text-align: center;
}
tr:nth-child(even) {background-color:gainsboro};

