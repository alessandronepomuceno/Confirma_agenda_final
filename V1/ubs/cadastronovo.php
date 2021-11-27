
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>Confirma Agenda V1</title>

    
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
