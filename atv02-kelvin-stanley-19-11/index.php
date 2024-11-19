<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cabecario">
        <h1 id="titulo">Formulário</h1>
        <div class="links">
            <ul>
                <li><a href="https://www.w3schools.com">W3Schools</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
        </div>
    </div>

    <div class="interacao">
        <div class="interacao">
            <form action="/action_page.php">
              <input type="text" id="fname" name="firstname" placeholder="Primeiro nome">
              <input type="text" id="lname" name="lastname" placeholder="Segundo nome">
              <input type="text" id="Endereco" name="endereco" placeholder="Endereço">
              <input type="text" id="rua" name="Rua" placeholder="Rua">
              <input type="number" id="idade" name="idade" placeholder="Idade">
              <input type="date" id="birthday" name="birthday">
              <input type="submit" value="Enviar">
              <input type="reset" value="Reset">
            </form>
          </div>
          
    </div>
</body>
</html>