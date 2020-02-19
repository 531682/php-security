<?php
if(isset($_POST['submit'])){
 $expected = array(
     'veld1'=>'string', 
     'veld2'=>'int', 
     'veld3'=>'boolean', 
     'veld4'=>'filename'
    );

if ($_POST['bool'] == 'bool') { echo "checkbox: TRUE"; } else { echo "checkbox: FALSE";}
if (isset($_POST['file'])) 
{ 
    $file = $_POST['file'];
    echo "<br>";
    echo "file: TRUE";
} else {
    echo "file: FALSE";
}
 // Controleer hier de vier velden van het formulier op de verschillende tests
 // Veld1
 // Veld2
 // Veld3
 // Veld4
 /*      NB Veld4 heeft speciale voorwaarden:
 //      - Maximaal 64 characters
 //      - Geen speciale characters (slashes omzetten naar alternatief)
 */
}
?>

<form method="post">
    <input type="text" name="string" placeholder="String.." required><br>
    <input type="number" name="int" placeholder="Integer.." required><br>
    <input type="checkbox" name="bool" value="bool"><code>bool</code><br>
    <input type="file" name="file"><br>
    <input type="submit" name="submit">
</form>

<!-- 
    Mitchell Ekelschot
    2MD1
-->