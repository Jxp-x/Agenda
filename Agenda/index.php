<?php
 include("db/conexao.php");
 ?>

<style>   
  .container {
          width: 100vw;
      height: 100vh;
         display: flex;
        flex-direction: row;
        justify-content: center;
         align-items: center
    }
    .box {
        width: 300px;
        height: 300px;
    }
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>  
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <title>Agenda Impacto</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#4169E1; !important" >
  <a class="navbar-brand">Agenda Impacto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
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
</body>    
</html>