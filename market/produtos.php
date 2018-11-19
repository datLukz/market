<?php
    include_once 'model/clsCategorias.php';
    include_once 'model/clsProdutos.php';
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsProdutosDAO.php';


    $nome = "";
    $preco = "";
    $quantidade = "";
    $idCategoria = 0;
    $foto = "sem_foto.png";
    $action = "inserir";
    
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idProduto'];
        $produto = ProdutosDAO::getProdutoById($id);
        $nome = $produto->getNome();
        $preco = $produto->getPreco();
        $quantidade = $produto->getQuantidade();
        $foto = $produto->getFoto();
        $idCategoria = $produto->getCategoria()->getId();
        $action = "editar&idProduto=".$produto->getId();
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Produtos</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Produtos</h1>
        
        <br><br><br>
        
        <a href="frmProduto.php">
            <button>Cadastrar novo produto</button></a>
        
        <br><br>
        <?php
            $lista = ProdutosDAO::getProdutos();
            
            if( $lista->count() == 0 ){
                echo '<h3><b>Nenhum produto cadastrado!</b></h3>';
            } else {
              
        ?>
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Foto</th>
                <th>Nome do Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <?php
                    foreach ($lista as $pro){
                        echo '<tr> ';
                        echo '   <td>'.$pro->getId().'</td>';
                        echo '   <td><img src="fotos_produtos/'.$pro->getFoto().'" width="30px" /></td>';
                        echo '   <td>'.$pro->getNome().'</td>';
                        echo '   <td>'.$pro->getPreco().'</td>';
                        echo '   <td>'.$pro->getQuantidade().'</td>';
                        echo '   <td>'.$pro->getCategoria()->getNome().'</td>';
                        
                        echo '   <td><a href="frmProduto.php?editar&idProduto='.$pro->getId().'" ><button>Editar</button></a></td>';
                        echo '   <td><a href="controller/salvarProduto.php?excluir&idProduto='.$pro->getId().'" ><button>Excluir</button></a></td>';
                        echo '</tr>';
                        
                    }
            ?>
            
        </table>
        
        <?php
        
            }
            
        ?>
        
    </body>
</html>