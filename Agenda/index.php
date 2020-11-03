<?php
 include("db/conexao.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Agenda Impacto</title>
    <br><br><br><br>
</head>
<body>
<br><br> <br><br> <br><br>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="background-color: #4169e1 !important">
    <a class="navbar-brand" href="index.php">Agenda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?menuop=addcont">Adicionar Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?menuop=contatos">Contatos</a>
      </li>
        </ul>
            <form action="index.php?menuop=contatos" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Contato" name="txt_pesquisa" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    </div>
  </nav>

<div class="container">
  
      <main>
          <?php
               $menuop =(isset($_GET["menuop"]))?$_GET["menuop"]:"contatos";
               switch ($menuop) {

                 case 'contatos':
                    include ("paginas/contatos/contatos.php");
                   break;
                   case 'addcont':
                    include ("paginas/contatos/addcont.php");
                   break;
                   case 'cadcont':
                    include ("paginas/contatos/cadcont.php");
                   break;
                   case 'editcont':
                    include ("paginas/contatos/editcont.php");
                   break;
                   case 'attcont':
                    include ("paginas/contatos/attcont.php");
                   break;
                   case 'dletcont':
                    include ("paginas/contatos/dletcont.php");
                   break;
                 default:
                 include ("paginas/home/contatos.php");
                   break;
               }
          
            
          ?>

      </main>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>   

</html>