<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Φαγητά</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="food.css">

</head>
<?php
  include 'navbar.php';
?>
<body style="background-color: lightblue;">

<p>
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
</p>

</body>
<footer>
    <p class="p-3 bg-dark text-white text-center position:absolute bottom:0">&copy; Copyrights 2021<br>
    All rights reserved
    <br>
    | Powered by -dia.beat.es Team- |
    </p>
</footer>

</html>