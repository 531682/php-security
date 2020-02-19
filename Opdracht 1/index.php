<?php
if(isset($_POST['submit'])){
    $expected = array(
        'veld1'=>'string', 
        'veld2'=>'int', 
        'veld3'=>'boolean', 
        'veld4'=>'filename'
    );
    
 // Controleer hier de vier velden van het formulier op de verschillende tests
 // Veld1
if (isset($_POST['string']) && $_POST['string'] != null) 
{ 
    echo "<br>";
    echo "string: TRUE"; 
} else { 
    echo "<br>";
    echo "string: FALSE"; 
} 

 // Veld2
if (isset($_POST['int']) && $_POST['int'] != null) 
{ 
    echo "<br>"; 
    echo "int: TRUE"; 
} else { 
    echo "<br>";
    echo "int: FALSE"; 
} 

 // Veld3
if (isset($_POST['bool']) == 'bool') 
{ 
    echo "<br>";
    echo "checkbox: TRUE"; 
} else { 
    echo "<br>";
    echo "checkbox: FALSE";
} 

 // Veld4
if (isset($_POST['file']) && $_POST['file'] != null) 
{ 
    $file = $_POST['file'];
    echo "<br>";
    echo "file: TRUE";
} else {
    echo "<br>";
    echo "file: FALSE";
}




 /*      NB Veld4 heeft speciale voorwaarden:
 //      - Maximaal 64 characters
 //      - Geen speciale characters (slashes omzetten naar alternatief)
 */
}
?>

<form method="post">
    <input type="text" name="string" placeholder="String.."><br>
    <input type="number" name="int" placeholder="Integer.."><br>
    <input type="checkbox" name="bool" value="bool"><code>bool</code><br>
    <input type="file" name="file"><br>
    <input type="submit" name="submit">
</form>

<!-- 
    Mitchell Ekelschot
    2MD1
-->