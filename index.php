<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'Pessoa.php';
           require_once 'Aluno.php';  
           require_once 'Professor.php';  
           require_once 'Funcionario.php';  
             
           $p1 = new Pessoa();
           $p2 = new Aluno();
           $p3= new Professor();
           $p4 = new Funcionario();
           
           $p1->setNome("Maria");
           $p2->setNome("Claudin");
           $p3->setNome("Jurandir");
           $p4->setNome("Clevissu");
           
           $p2->setCurso("Informática");
           $p1->setSexo("Feminino");
           $p3->setSalario(1500);
           $p3->ReceberAum(5000);
           $p4->setSetor("Solda e Fundição");
           $p1->setIdade(25);
                            
           print_r($p1);
           print_r($p2);
           print_r($p3);
           print_r($p4);
           
           
               
       
        ?>
        </pre>
    </body>
</html>
