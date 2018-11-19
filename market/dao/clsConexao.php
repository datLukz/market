<?php

/**
 * Description of clsConexao
 *
 * @author assparremberger
 * 25/10/2018
 */
class Conexao {
    
    private static function abrir(){
        $banco = "market_m171";
        $local = "localhost";
        $usuario = "root";
        $senha = "";
        
        $conn = mysqli_connect($local, $usuario, $senha, $banco);
        
        if ( $conn )
            return $conn;
        else 
            return NULL;
        
    }
    
    private static function fechar( $conn ){
        mysqli_close( $conn );
    }
    
    public static function executar( $sql ){
        $conn = self::abrir();
        if( $conn ){
            mysqli_query($conn, $sql);
            self::fechar( $conn );
        }
    } 
    
    public static function consultar( $sql ){
        $conn = self::abrir();
        if( $conn ){
            $result = mysqli_query($conn, $sql);
            self::fechar( $conn );
            return $result;
        } else {
            return NULL;
        }
    } 
    
}










