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
  <img class="w3-image" src="data:image/jpeg;base64,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" alt="" width="1500" height="700">
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


  ?>
  <!-- Contact -->
  <div class="w3-container">
    <h2>Dados do Cão</h2>
    <p></p>
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
        <th>Nível do Silo</th>
        <th>Momento da Refeição</th>
        </tr>
    </thead>
  <?php
  $msg     = $_GET["msg"];
$data    =$_GET["data"];   
$nome   = $_GET["nome"];
if(empty($nome)){
$msg = "Comeu";
}
echo $msg;
echo $nome;
  $stmt = $obj_mysqli->prepare("INSERT INTO `menssages` (`nome`,`msg`) VALUES (?,?)");
  $stmt->bind_param('ss', $nome, $msg); 
   if(!$stmt->execute())
      {
     echo 'Erro Insert';  
     $erro = $stmt->error;
      }
      
      $result = $obj_mysqli->query("SELECT * FROM `menssages`");
  while ($aux_query = $result->fetch_assoc()) 
    {
     
    echo '<tr>';
    echo '  <td>'.$aux_query["nome"].'</td>';
    echo '  <td>'.$aux_query["data"].'</td>';
    echo '</tr>';
  }
  ?>
  </table>

<!-- End page content -->
</div>

<!-- Footer -->


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
