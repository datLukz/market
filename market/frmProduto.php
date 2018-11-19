<?php
    include_once 'model/clsCategorias.php';
    include_once 'model/clsProdutos.php';
    include_once 'dao/clsProdutosDAO.php';
    include_once 'dao/clsCategoriasDAO.php';
    include_once 'dao/clsConexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Cadastrar Produto</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
         <h1 align="center">Cadastrar Produto</h1>
        
        <br><br><br>
        
        <form action="controller/salvarProduto.php?inserir <?php echo $action; ?>" method="POST" 
              enctype="multipart/form-data">
            <label>Nome: </label>
            <input type="text" name="txtNome" value="<?php echo $nome; ?>"required maxlength="100" /> <br><br>
            <label>Preço: </label>
            <input type="text" name="txtPreco" value="<?php echo $preco; ?>" maxlength="30" /> <br><br>
            <label>Quantidade: </label>
            <input type="text" name="txtQuantidade" value="<?php echo $quantidade; ?>" required /> <br><br>
           
            <label>Categoria: </label>
            <select name="categoria" >
                <option value="0">Selecione...</option>
                
                <?php
                    $lista = CategoriasDAO::getCategorias();
                    
                    foreach ($lista as $cat){
                        echo '<option value="'.$cat->getId().'" >'.
                                $cat->getNome().'</option>';
                    }
                ?>
                
            </select>
            
            <br><br>
            <label>Foto: </label>
            <input type="file" name="foto" /> <br><br>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
            
        </form>
        
        
    </body>
</html>