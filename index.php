<?php 

$nick = addcslashes($_POST [ 'name' ])
$message = addcslashes($_POST [ 'message'])

$to = "019ceifador@gmail.com";
$subjet = "ideias pra vídeo";
$body = "NICK: ".$nick."\n"
"MESSAGE: ".$message;
$heador = "019ceifador@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$heador)){
  echo("sua ideia de vídeo ta na mão do 019 ?")
} else {
  echo("sua ideia de video deu problema tenta mais tarde");
}
?>
