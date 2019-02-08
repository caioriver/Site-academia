<?php
    require_once "listar_usuarios.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Alunos</title>

        <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">

        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/stylealuno.css">
        <link rel="stylesheet" href="../../css/alunoslista.css">

    </head>

    <body>
        <?php
            require_once "../../Templates/navbar.html"
        ?>
        
        <section class="text-center">        
            <h1 class="title text-center">Lista de alunos</h1>        
            
            <section>
                <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="container align-items-end">                                
                        <div class="inputBox align-items-end"> 
                            <div class="inputText form-inline">Pesquisa</div>
                            <input name="busca" type="text" name="nome" class="input">
                            <!-- <button class="lupa" type="submit"><img src="../../images/loupe.png"></button> -->
                        </div>                            
                    </div> <!--Fim da linha-->
                </form>
                
            </section>

            <section>
                <div class="table-control table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col" value = "1" class="table-nome">Nome</th>
                                <th scope="col" value = "2" class="table-matricula">Matricula</th>
                                <th scope="col" value = "3" class="table-cpf">CPF</th>
                                <th scope="col" value = "4" class="table-gender">Sexo</th>
                            </tr>
                        </thead>
                        <tbody>                        
                            <?php while ($list_1 = $stmt_1->fetch(PDO::FETCH_ASSOC)):?>
                                <tr>
                                    <td class="table-nome"> <a href="../Alunos/aluno_editar.php?id=<?php echo $list_1['nome'];?>"><?php echo($list_1['nome']);?> </td>
                                    <td class="table-id"> <a href="../Alunos/aluno_editar.php?id=<?php echo $list_1['matricula'];?>"><?php echo($list_1['matricula']);?> </td>
                                    <td class="table-date"> <a href="../Alunos/aluno_editar.php?id=<?php echo $list_1['cpf'];?>"><?php echo($list_1['cpf']);?> </td>
                                    <td class="table-date"> <a href="../Alunos/aluno_editar.php?id=<?php echo $list_1['gender'];?>"><?php echo($list_1['gender']);?> </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </section>

                <button  class="button inputBox" onclick="window.location.href='../principal/inicio.php'">Voltar</button>


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