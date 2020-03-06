<?php

class CaesarDing {
  public $amount;
  const chars = array(
    //  $chars = "abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-=!@#$%^&*()_+<>?,./| ";  
   "charSet" => array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","-","=","!","@","#","$","%","^","&","*","(",")","_","+","<",">","?",",",".","/","|", " " )
  );
  public function __construct($amount = 0) {
    $this->amount = $amount % 84;
  }
  
  // doet encrypt dinges
  public function encrypt($input) {
    $result = str_split($input);
    for ($i = 0; $i < count($result); $i++) {
      for ($j = 0; $j < 84; $j++) {
        if ($result[$i] === CaesarDing::chars["charSet"][$j]) {
          $result[$i] = CaesarDing::chars["charSet"][($j + $this->amount) % 84];
          $j = 84;
        }
      }
    }
    $result = implode($result);
    return $result;
  }

  // doet decrypt dingen
  public function decrypt($input) {
    $result = str_split($input);
    for ($i = 0; $i < count($result); $i++) {
      for ($j = 0; $j < 84; $j++) {
        if ($result[$i] === CaesarDing::chars["charSet"][$j]) {
          $result[$i] = CaesarDing::chars["charSet"][($j + 84 - $this->amount) % 84];
          $j = 84;
        }
      }
    }
    $result = implode($result);
    return $result;
  }
}
 if(isset($_POST['area1']) && !empty($_POST['area1'])) {
   $encrypted = new CaesarDing(2);
  }else if(isset($_POST['area2']) && !empty($_POST['area2'])) {
       $decrypted = new CaesarDing(2);  
 }
?>

<!DOCTYPE html>
<html>
<head>
 <title>Challenge 1</title>
 <style>
   button, textarea { font-family:Trebuchet MS; }
   button { position:absolute; width:7%; height:7%; background-color:#0965ba; border:2px solid black; left:50%; top:2%; transform:translateX(-50%); font-size:18px; }
   button:hover { background-color:#1f89ed; cursor:pointer; }
   button:active { background-color:red; cursor:pointer; }
   textarea { position:absolute; display:block; padding:5px; width:42%; height:60%; top:2%; background-color:#e8dfdf; border:2px solid black; font-size:16px; }
   #area1 { left: 2%;  opacity:0.5; }
   #area2 { right: 2%; opacity:0.5; }
   h1#area1, h1#area2 { position:absolute; top:65%; display:block; }
   h1#area1 { left:2%;   }
   h1#area2 { right:2%;  }
   p#test { position:absolute; top:70%; display:block; }
 </style>
</head>
<body>
 <form action='' method='post'>
   <textarea name='area1' id='area1'><?php if(isset($decrypted)) echo $decrypted->decrypt($_POST['area2']); ?></textarea>
   <h1 id='area1'>Decrypted data (normal text)</h1>
   <button name='submit' type='submit'>Process</button>
   <textarea name='area2' id='area2'><?php if(isset($encrypted)) echo $encrypted->encrypt($_POST['area1']); ?></textarea>
   <h1 id='area2'>Encrypted data</h1>
   <p id='test'><?php if(isset($test)) echo $test; ?></p>
 </form>
</body>
</html>