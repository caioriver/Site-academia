<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Administração</title>
        <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/home.css">
    </head>

    <body>
        <?php
            require_once "../../Templates/navbar.html"
        ?>
        
        <section class="container text-center justify-content-center">        
            <h1 class="title">Área Administrativo</h1>        
            
            <div class="row justify-content-center">
        
                <div class="cards col-7 col-sm-6 col-lg col-md-6">                
                    <a href="../Alunos/aluno_criar.php"><div class="card text-center border-lowblue" style="max-width: 20rem;">
                        <div class="card-body text-success">
                            <div class="mt-3">
                                <img class="d-flex justify-content-center card-img-top plus-card-img" src="../../images/add-user.png" alt="Adicionar Aluno">  
                            </div>
                            <div id="card-foot" class="card-foot">
                                Adicionar Aluno
                            </div>    
                        </div> <!--fim card col-->                    
                    </div></a> <!--Fim card-->
                </div> <!--fim coluna-->
        
                <div class="cards col-7 col-sm-6 col-lg col-md-6">                
                    <a href="../Alunos/alunos.php"><div class="card text-center border-lowblue" style="max-width: 20rem;">
                        <div class="card-body text-success">
                            <div class="mt-3">
                                <img class="d-flex justify-content-center card-img-top plus-card-img" src="../../images/users.png" alt="Alunos">  
                            </div>
                            <div id="card-foot" class="card-foot">
                                Alunos
                            </div>    
                        </div> <!--fim card col-->                    
                    </div></a> <!--Fim card-->
                </div> <!--fim coluna-->

                <div class="cards col-7 col-sm-6 col-lg col-md-6">                
                    <a href="#"><div class="card text-center border-lowblue" style="max-width: 20rem;">
                        <div class="card-body text-success">
                            <div class="mt-3">
                                <img class="d-flex justify-content-center card-img-top plus-card-img" src="../../images/remove-user.png" alt="Bloquear Acesso">  
                            </div>
                            <div id="card-foot" class="card-foot">
                                Bloquear Acesso
                            </div>    
                        </div> <!--fim card col-->                    
                    </div></a> <!--Fim card-->
                </div> <!--fim coluna-->

            </div>

        </section>
        <!-- Footer -->
        <!-- <footer>
        <?php
            require_once "../../Templates/footer.php";
            ?>
        </footer> -->
        <!-- Fim do Footer -->

    </body>
</html>