<?php
    require_once "../../fun/init.php";
    $conect = db_connect();


    if (empty($_POST['type']))
    {
        $tipo = " ";
        $texto = " ";
        $orderby = " ";
        $query_1 = "SELECT nome,matricula,cpf,gender FROM alunos ORDER BY `alunos`.`nome` ASC;";
        $stmt_1 = $conect->prepare($query_1);
        $stmt_1->execute();
        

    } else $tipo = $_POST['type'];

    if (empty($_POST['order'])) {

        $order = 'ORDER BY id ASC';

    } else {
        
        switch ($_POST['order']) {
            case '1':
                $order = "ORDER BY dadd  DESC";
            break;
            
            case '2':
                $order = "ORDER BY dadd ASC";
            break;

            case '3':
                $order = "ORDER BY nome ASC";
            break;

            // case '4':
            //     $order = "ORDER BY debit ASC";
            // break;

            // case '5':
            //     $order = "ORDER BY debit DESC";
            // break;
            default:
                # code...
                break;
        }
    }
        
    if ($tipo == "nome") {

        if (empty($_POST['busca'])) {
            $query_1 = 'SELECT nome,matricula,cpf,gender FROM alunos '.$order.';';
            $stmt_1 = $conect->prepare($query_1);
            $stmt_1->execute();

        } 
        else {
            $texto = '"%'.$_POST['busca'].'%"'; 
            $query_1 = 'SELECT nome,matricula,cpf,gender FROM alunos WHERE nome LIKE '.$texto.' '.$order.';';
            
            $stmt_1 = $conect->prepare($query_1);
            // $stmt_1->bindValue('text',$texto);
            $stmt_1->execute();

        }
    } else if ($tipo == "id") {
        


            if (empty($_POST['busca'])) {
                $query_1 = 'SELECT nome,matricula,cpf,gender FROM alunos '.$order.';';
                $stmt_1 = $conect->prepare($query_1);
                $stmt_1->execute();
        
            } 
            else {

                $texto = '"%'.$_POST['busca'].'%"'; 
                $query_1 = 'SELECT nome,matricula,cpf,gender FROM alunos WHERE id LIKE '.$texto.' '.$order.';';
                $stmt_1 = $conect->prepare($query_1);
                $stmt_1->execute();
        
            }
    }
    // IMPRESSÃO DE TESTE
    //  echo $query_1;
?>
