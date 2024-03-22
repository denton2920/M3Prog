<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $weer = ["maandag" => 15,"dinsdag" => 16, "woensdag" => 14, "donderdag" => 15, "vrijdag" => 13, "zaterdag" => 18, "zondag" => 16];
    print_r($weer);
    echo "<br>"
    ?>
   <table>
    <tr>
        <th>dag</th>
        <th>graden</th>
    </tr>

    <?php
       
        foreach($weer as $dag => $graden){
    ?>
            <tr>
            <td><?php echo $dag ?></td>
            <td> <?php echo $graden ?> </td>
        </tr>
    <?php  
    }
     ?>  
         <?php $vandaag = "woensdag";?>
         <p><?= $vandaag ?> is het <?= $weer[$vandaag];?>   graden</p>
  

   </table>
</body>
</html>