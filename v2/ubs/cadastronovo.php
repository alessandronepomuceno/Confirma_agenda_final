<?php




include_once('config.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cartao_sus = filter_input(INPUT_POST, 'cartao_sus', FILTER_SANITIZE_STRING);
$unidade = filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING);
$especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);
$data_consulta = filter_input(INPUT_POST, 'data_consulta', FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);


//echo " Nome: $nome <BR>";
//echo " Email: $email <BR>";

$result_usuario = "INSERT INTO dados_usuarios(nome,email,endereco,cpf,rg,cartao_sus,unidade,especialidade,data_consulta,horario) 
VALUES ('$nome','$email','$endereco','$cpf','$rg','$cartao_sus','$unidade','$especialidade','$data_consulta','$horario')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);


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
    <form class="form-signin" action="" method="POST">
      <img class="mb-4" src="img/confirma.png" alt="" width="300">
      <h1 class="h3 mb-3 font-weight-normal">Cadastro de Consultas !</h1><br>


        <label > Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo"><br>

        <label> E-mail: </label>
        <input type="email" name="email" placeholder="Melhor email"><br>

        <label> Endereco: </label>
        <input type="text" name="endereco" placeholder="Enderço completo"><br>

        <label> CPF: </label>
         <input type="text" name="cpf" placeholder="CPF com . e -"><br>

         <label>RG: </label>
         <input type="text" name="rg" placeholder="RG com . e -"><br>

         <label>Cartão SUS: </label>
         <input type="text" name="cartao_sus" placeholder=""><br>

            <label for="unidade" >Selecione a unidade de atendimento:</label>
             <select name="unidade">
            <option value="UBS AE CARVALHO">UBS AE CARVALHO</option>
            </select><br>

            <label for="especialidade" >Selecione a especialidade desejada:</label>
          <select name="especialidade">
         <option value="Psicólogo">Psicólogo</option>
         <option value="Clínico Geral">Clínico Geral</option>
         <option value="Pediatra">Pediatra</option>
          </select><br>


          <label>Data Desejada: </label>
         <input type="date" name="data_consulta" placeholder=""><br>

         
         <label>Horário: </label>
         <input type="time" name="horario" placeholder=""><br><br><br>





        
        <button class="btn btn-lg btn-primary btn-block" input type="submit" value="Cadastrar">Cadastrar</button><BR>




    


      <div class="checkbox mb-3">
 
      </div>
     

      <BR><a href="javascript:history.back()"  class="btn btn-primary btn-lg active" role="button" aria-pressed="true">SAIR</a>


      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>

</div>

  </body>
</html>
