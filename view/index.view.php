<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<table>
  <tr>
    <th>Klase</th>
    <th>Kodas</th>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Kontroliniu darbu vidurkis</th>
    <th>Duomenu formavimo data</th>
  </tr>
  <?php foreach($students as $class => $student):?>
    <?php foreach($student as $infoKey => $studentInfo):?>
    <tr>
        <td><?=$class; ?></td>
        <td><?=$infoKey; ?></td>
        <td><?=$studentInfo['name']; ?></td>
        <td><?=$studentInfo['surname']; ?></td>
        <td><?=number_format(array_sum($studentInfo['grades'])/count($studentInfo['grades']), 2); ?></td>
        <td><?=$studentInfo['date']; ?></td>
    </tr>
    <?php endforeach;?> 
    <?php endforeach;?> 

</table>



</body>
</html>