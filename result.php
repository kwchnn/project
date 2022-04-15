<?php
require 'vendor/autoload.php';
use plsr\Classes\Query;

$data = new Query('', '', '');
?>
<header>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="components/css/main.css">
</header> 
<div class="main-container">
<table class="table table-hover" style="width: 70%; margin: 0 auto; text-align: center;">
    <tr style="background-color: grey;">
        <td> First Name </td>
        <td> Last Name  </td>
        <td> Room </td>
        <td> Date/Time </td>
    </tr>
<?php foreach($data->getDatabase($data->getData()) as $data)
{ ?>
<tr style="background-color: aliceblue;">
    <td><?= $data['first'] ?></td>
    <td> <?= $data['last'] ?> </td>
    <td> <?= $data['room'] ?> </td>
    <td> <?= $data['date'] ?> </td> 
</tr>
<?php } ?>
</table>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>