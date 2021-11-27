
<?php
include('config.php');

$sql = "SELECT * FROM dados_usuarios";
$result = mysqli_query($mysqli, $sql) or die("Bad Query: $sql");



?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
<BR><BR>


    <div class="container">

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="img/confirma.png" alt="" width="300">
      <h1 class="h4 mb-3 font-weight-normal">Verifique seus dados e confirme sua consulta</h1>
 
      <?php


while($row = mysqli_fetch_array($result)){
  echo "<HR> <Br>";
  echo "<b> Paciente: </b> {$row['nome']} <Br>";
  echo "<b> E-mail: </b> {$row['email']} <Br>";
  echo "<b> CPF: </b> {$row['cpf']} <Br>";
  echo "<b> RG: </b> {$row['rg']} <Br>";
  echo "<b> Cartão SUS: </b> {$row['cartao_sus']} <Br>";
  echo "<b> Unidade: </b> {$row['unidade']} <Br>";
  echo "<b> Especialidade: </b> {$row['especialidade']} <Br>";
  echo "<b> Data: </b> {$row['data_consulta']} <Br>";
  echo "<b> Horário: </b> {$row['horario']} <Br>";

}

?>



      <!-- OS DADOS DESTA PAGINA DEVEM VIR PREENCHIDOS POIS JA FORAM ADICIONADOS MA PAGINA DE CADASTRO -->


      <BR><BR>
      <div id="liveAlertPlaceholder"></div>
      <button type="button" class="btn btn-primary" id="liveAlertBtn">Confirmar Agendamento</button><BR>

      <BR><a href="login.php"  class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sair</a>

      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>

</div>





<script>

var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger) {
  alertTrigger.addEventListener('click', function () {
    alert('Sua consulta foi confirmada com sucesso !', 'success')
  })
}



</script>


  </body>
</html>



