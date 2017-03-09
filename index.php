<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>
     <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
            </div>
        </nav>


    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h1 class="page-header">Olá a todos</h1>


                <form>
                     <div class="form-group">
                         <label for="nome">Nome</label>
                         <input type="text" class="form-control" name="nome" id="nome" placeholder="Coloque seu nome"><br>
                     </div>

                     <div class="form-group">
                         <label for="sobrenome">Sobrenome</label>
                         <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Coloque seu nome"><br>
                     </div>

                     
                     <div class="form-group">
                         <label for="senha">Senha</label>
                         <input type="text" class="form-control" name="senha" id="senha" placeholder="Coloque seu nome"><br>
                     </div>

                    <input type="button" class="btn btn-primary" name="Enviar" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>