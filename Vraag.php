<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleheader.css">
  <link rel="stylesheet" href="stylehome.css">
        <link rel="stylesheet" href="stylefooter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 
<title>Quiz</title>
</head>
<body>
<?php
include "DBvraag.php";
$db = new DBvraag();

if(isset($_POST["Delete"])){
$db ->VerwijderVraag($_POST['ID']);
}

if(isset($_POST["create"])){
    $db->MaakVraag($_POST["Vraag"], $_POST["Antwoord"], $_POST["Plaatje"]);
}
$vraagdata = $db->SelecteerVraag();
?>
<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Antwoord</th>
        <th>Plaatje</th>
        <th>Acties</th>
    </tr>
    <?php
    foreach($vraagdata as $vraag_type){
        $ID = $vraag_type['ID'];

        echo "<tr>";
        // echo "<td>1</td>";
        // echo "<td>2</td>";
        // echo "<td>3</td>";
        foreach($vraag_type as $kolom){
            echo "<td>" . $kolom . "</td>";
        }
        echo "<td><form method='POST'><input  type='submit' name='Delete' value='Delete'><input value='$ID' name='ID' type='hidden'/></form></td>";
        echo "</tr>";
    }
        ?>
</table>
<form action="Create.php">
    <button>Create</button>
</form>