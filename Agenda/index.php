<?php
 include("db/conexao.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Impacto</title>
</head>
<body>
      <header>
        <h1>Agenda de Contatos</h1>
          <nav>
          <a href="index.php?menuop=home">Home</a> |
          <a href="index.php?menuop=contatos">Contatos</a> |
          <a href="index.php?menuop=eventos">Eventos </a> |
          <a href="index.php?menuop=sobre">Sobre</a> |
          </nav>
      </header>
      <main>
      <hr>
          <?php
               $menuop =(isset($_GET["menuop"]))?$_GET["menuop"]:"home";
               switch ($menuop) {
                 case 'home':
                    include ("paginas/home/home.php");
                   break;

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

                 case 'eventos':
                  include ("paginas/eventos/eventos.php");
                   break;

                 case 'sobre':
                  include ("paginas/sobre/sobre.php");
                   break; 
                   
                 default:
                 include ("paginas/home/home.php");
                   break;
               }
          
            
          ?>

      </main>
</body>    
</html>