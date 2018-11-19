<?php
include_once 'model/clsCategorias.php';
include_once 'dao/clsCategoriasDAO.php';
include_once 'dao/clsConexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Categorias</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Categorias</h1>
        
        <br><br><br>
        
        <form action="controller/salvarCategoria.php?inserir" method="POST" >
            <label>Nome: </label>
            <input type="text" name="txtNome" />
            <input type="submit" value="Salvar" />
        </form>
        
        <hr>
        
        <?php
            
            $lista = CategoriaDAO::getCategorias();
            
            if ( $lista->count()==0){
                echo '<h2><b>Nenhuma categoria cadastrada</b></h2>';
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
                foreach ($lista as $categoria) {
                    echo '<tr>
                        <td>'.$categoria->getId().'</td>
                        <td>'.$categoria->getNome().'</td>
                        <td> 
                            <a href="controller/salvarCategoria.php?editar&idCategoria='.$categoria->getId().'">
                            
                            <button>Editar</button></a>
                        </td>
                        <td>
                            <a href="controller/salvarCategoria.php?excluir&idCategoria='.$categoria->getId().'">
                            
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