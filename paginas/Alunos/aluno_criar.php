<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Adicionar Aluno</title>

        <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">

        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/stylealuno.css">

    </head>

    <body>
        <?php
            require_once "../../Templates/navbar.html"
        ?>
        
        <section class="container text-center justify-content-center">        
            <h1 class="title">Adicionar Aluno</h1>
            
                <form class="row justify-content-center" action="validar_cadastro.php" method="POST">

                    <div class="inputBox col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="inputText">Nome</div>
                        <input required type="text" name="nome" class="input">
                    </div>

                    <div class="inputBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <label class="inputText">Matricula</label>
                        <input required type="text" name="matricula" class="input">
                            
                    </div>

                    <div class="inputBox col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="inputRadio"> Sexo:
                        <input type="radio" name="gender" value="Masculino" checked> Masculino
                        <input type="radio" name="gender" value="Feminino"> Feminino</div>
                    </div>

                    <div class="inputBox col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label class="inputText">CPF</label>
                        <input type="text" name="cpf" class="input">
                    </div>

                    <div class="inputBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <label class="inputText">Data de Nascimento</label>
                        <input type="text" name="nascimento" class="input">
                    </div>

                    <div class="inputBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <label class="inputText">E-mail</label>
                            <input type="email" name="email" class="input">
                    </div>

                    <div class="inputBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <label class="inputText">Telefone</label>
                        <input type="text" name="telefone" class="input">
                    </div>

                    <div class="inputBox col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <label class="inputText">País</label>
                        <input type="text" name="pais" class="input">
                    </div>

                    <div class="inputBox col-4">
                        <input class="button" type="submit" value="Salvar">
                    </div>
                    
                    <div class="inputBox col-4">
                        <button type="reset" class="button">Limpar</button>
                    </div>
                    <div class="inputBox col-4">
                        <button  class="button" onclick="window.location.href='../principal/inicio.php'">Voltar</button>
                    </div>                    

                </form>

        </section>

        <!-- Footer -->
        <!-- <footer>
        <?php
            require_once "../../Templates/footer.php";
            ?>
        </footer> -->
        <!-- Fim do Footer -->
        
        <script src="../../js/jquery.js"></script>
        <script src="../../js/popper.js"></script>
        <script src="../../js/bootstrap.js"></script>
        <script src="../../js/functions.js"></script>
        
    </body>
</html>