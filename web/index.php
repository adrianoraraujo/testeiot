<!DOCTYPE html>
<html>
<title>Alimentador Monitor</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="images/demo/backgrounds/01.jpg" alt="Itapua" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">Alimentador Monitor</span></span>
  </div>
</div>

    <!-- Tabs -->
    
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  
  <?php
$obj_mysqli = new mysqli("remotemysql.com", "jcaFjprH2v", "eROH7TJR5t", "jcaFjprH2v");
 
if ($obj_mysqli->connect_errno)
{
  echo "Ocorreu um erro na conexão com o banco de dados.";
  exit;
}
 
mysqli_set_charset($obj_mysqli, 'utf8');

$msg     = $_GET["msg"];
$data    =$_GET["data"];   
$nome   = $_GET["nome"];
  ?>
  <!-- Contact -->
  <div class="w3-container">
    <h2>Estatísticas</h2>
    <p>Tudo</p>
    <!--
     <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="nome"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="msg"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">Enviar</button></p>
    </form>
  -->
  </div>
  <br>
  <table class="w3-table-all">
    <thead>
      <tr class="w3-black">
        <th>Nome</th>
        <th>Data</th>
        <th>Mensagem</th>
      </tr>
    </thead>
  <?
  $stmt = $obj_mysqli->prepare("INSERT INTO `menssages` (`nome`,`msg`) VALUES (?,?)");
  $stmt->bind_param('ss', $nome, $msg); 
   if(!$stmt->execute())
      {
        $erro = $stmt->error;
      }
      
      $result = $obj_mysqli->query("SELECT * FROM `menssages`");
  while ($aux_query = $result->fetch_assoc()) 
    {
     
    echo '<tr>';
    echo '  <td>'.$aux_query["nome"].'</td>';
    echo '  <td>'.$aux_query["data"].'</td>';
    echo '  <td>'.$aux_query["msg"].'</td>';
    echo '</tr>';
  }
  ?>
  </table>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Itapuã nas Redes Sociais</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
  </div>
  <p>Site desenvolvido por: <a href="#" target="_blank" class="w3-hover-text-green">Nova Sala de Aula - UCSAL</a></p>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
