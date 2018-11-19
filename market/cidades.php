<?php
include_once 'model/clsCidade.php';
include_once 'dao/clsCidadeDAO.php';
include_once 'dao/clsConexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Cidades</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Cidades</h1>
        
        <br><br><br>
        
        <form action="controller/salvarCidade.php?inserir" method="POST" >
            <label>Nome: </label>
            <input type="text" name="txtNome" />
            <input type="submit" value="Salvar" />
        </form>
        
        <hr>
        
        <?php
            
            $lista = CidadeDAO::getCidades();
            
            if ( $lista->count()==0){
                echo '<h2><b>Nenhuma cidade cadastrada</b></h2>';
            }else {
                
            
        ?>
        
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <?php 
                foreach ($lista as $cidade) {
                    echo '<tr>
                        <td>'.$cidade->getId().'</td>
                        <td>'.$cidade->getNome().'</td>
                        <td> 
                            <a href="controller/salvarCidade.php?editar&idCidade='.$cidade->getId().'">
                            
                            <button>Editar</button></a>
                        </td>
                        <td>
                            <a href="controller/salvarCidade.php?excluir&idCidade='.$cidade->getId().'">
                            
                            <button>Excluir</button></a>
                            </td>
                          </tr> ';            
                }
            ?>
            
        </table>
        
        <br><br><br>
        <?php
          }
        ?>
        
    </body>
</html>
