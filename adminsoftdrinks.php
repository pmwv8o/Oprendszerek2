<?php
require_once './protected/database.php';
    $query = "SELECT * FROM softdrinks ORDER BY id;";
    $records = select($query);
    $delivery = "SELECT * FROM delivery ORDER BY id;";
    $szallitas = select($delivery);
    ?>
<html>
<head>
<meta charset ="UTF-8"/>
</head>
<title>Főoldal</title>
<link href="style.css" rel="stylesheet">
<body>
    <!-- <div style="background-image: url('hatter.png');"> -->
<ul>
	<li><a href="admin.php" href="#home">Főoldal</a></li>
	<li><a href="adminalcohols.php">Alkoholok</a></li>
        <li><a href="admindiscount.php">Kedvezményes Termékek</a></li>
        <li><a href="adminsoldout.php">Elfogyott Termékek</a></li>
	<li><a class="active">Üdítők</a></li>	
        <li><a href="index.php?logout">Kijelentkezés</a></li>
</ul>
        <div style="margin-left:25%; margin-right:10%; padding:1px 16px;height:1000px;">
            <h1>Üdítők</h1>
            <br>
            <center>
        <table class="italok">
        <thead>
            <tr>
                <th>Név</th>
                <th>Darabszám</th>
                <th>Ár</th>
                <th>Törlés</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record): ?>
            <tr>
                <td><?=$record['name']?></td>
                <td><?=$record['stock']?> darab</td>
                <td><?=$record['price']?> Ft</td>
                <td><a href="http://localhost/beadando/deletesoftdrinks.php?id=<?=$record['id']?>"><button>Törlés</button></a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
                
                <a href="insertsoftdrinks.php"><button>Termék hozzáadása</button></a>
              
      <table class="szallitas">
        <thead>
            <th colspan="10">Szállítás</th>
            <tr>
                <th>Név</th>
                <th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($szallitas as $record): ?>
            <tr>
                <td><?=$record['name']?></td>
                <td><?=$record['price']?> Ft</td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
                </center>
        </div>
</body>
</html>