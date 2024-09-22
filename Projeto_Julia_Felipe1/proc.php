<?php
  include('banco.php');
  // variaveis vinda na url

  $cep = $_GET['cep'];
  $rua = $_GET['endereco'];
  $numero = $_GET['numero'];
  $comp = $_GET['complemento'];
  $cidade = $_GET['cidade'];
  $bairro = $_GET['bairro'];
  $uf =$_GET['uf'];
  $nome =$_GET['nome'];
  $email =$_GET['email'];
  $telefone =$_GET['telefone'];
  $assunto =$_GET['assunto'];
  $mensagem =$_GET['mensagem'];
  $cpf =$_GET['cpf'];
  $rg =$_GET['rg'];
  $senha =$_GET['senha'];
  $nasc =$_GET['nasc'];

   // fazer um string sql 

   $sql = " INSERT INTO TB_CEP ( 
            CEP,
            RUA,
            NUMERO,
            COMP,
            BAIRRO,
            CIDADE,
            UF,
            NOME,
            EMAIL,
            TEL,
            ASS,
            MENS,
            CPF,
            RG,
            NASC,
            SENHA
            ) 
            VALUES('$cep',
                   '$rua',
                   '$numero',
                   '$comp',
                   '$bairro',
                   '$cidade',
                   '$uf',
                   '$nome',
                   '$email',
                   '$telefone',
                   '$assunto',
                   '$mensagem',
                   '$cpf',
                   '$rg',
                   '$nasc',
                   '$senha'
                   ) ";
    
    // executa o sql
    
   if(mysqli_query($conn, $sql)){
      echo "
         <h2>Foi para o banco de dados com sucesso!</h2>
      
      ";
   }else{
       echo "não escola não é lugar de dormir!!!";
   }

   //
   mysqli_close($conn);


  



?>