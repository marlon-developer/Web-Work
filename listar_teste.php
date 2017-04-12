<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Trabalho 1</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Navegação</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">Consultar</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <!--BOTAO <a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>-->
    <li><a href="#">Início</a></li>
    <li><a href="#">Listar</a></li>
   </ul>
  </div>
 </div>
</nav>
<br><br>
<div id="main" class="container-fluid">
<br><br>
 <div id="main" class="container-fluid">
     <div id="top" class="row">
    <div class="col-md-3">
        <h2>Item</h2>
    </div>

    <div class="col-md-6">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div>
 
    <div class="col-md-3">
        <a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
    </div>
</div> 
 
     <hr />
     <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
 
            <button onclick="myFunction()">Try it</button>
                  <th>


                <tr>
                    
                        
                  
                </tr>
                </th>
 
            </tbody>
         </table>
 
     </div>
 </div> 

</div> 
 </div>  
</div>


<p>Click the button to display a time-based greeting:</p>



<p id="demo"></p>

<script>
  function myFunction() {
      if (onclick == "true") {
          <?php
              $pasta = "arquivos";
              $listar = new RecursiveDirectoryIterator($pasta);
              $recursivo = new RecursiveIteratorIterator($listar);

              //Printando o nome dos Arquivos existentes na pasta
              foreach ($recursivo as $value) $arquivo[] = $value -> getFilename();
              for ($i = 4; $i < count($arquivo); $i++) echo $arquivo[$i] ."<br>";
          ?>
      }
      document.getElementById("demo").innerHTML = greeting;
}
</script>

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>