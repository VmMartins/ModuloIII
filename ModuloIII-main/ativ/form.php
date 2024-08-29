<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
<style>
          form{
                    position: absolute;
                    left: 40%;
                    top: 30%;
                    padding: 8px;
                    background: teal;
                    font-size: 22px;
                    border-radius: 8px;
                    color: white;
          }
          body{
                    background-color: aquamarine;
          }
          input{
                    padding: 6px;   
                    font-size: 15px;
                    border-radius: 15px;
                    border: none;
                    width: 100%;
          }
          .enviar{
                    width: 50%;
                    border-radius: 8px;
                    background: lightseagreen;
                    color: white;
                    font-size: 18px;
          }
          fieldset{
                    border-color: aliceblue; 
          }
</style>

</head>
<body>
          <form action="testePaciente.php" method="get">
                    <fieldset>
                              <legend>Cadastro de Pacientes</legend>
                    <br>
                              Nome:<br>
                               <input type="text" name="nome" placeholder="Insira seu nome"><br>
                              Idade:<br>
                               <input type="text" name="idade" placeholder="Insira sua idade""><br><br>

                              <center><input class=enviar type="submit"></center>
                    </fieldset>

          </form>
</body>
</html>