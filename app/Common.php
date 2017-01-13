<?php

namespace Store;


class Common
{
    
    /**
    * Trata a string no padrão    nome_parametro1:valor_parametro1|nome_parametro2:valor_parametro2|nome_parametro3:valor_parametro13
    * e devolve um array[][] com cada par de parametrovalores
    *
    *
    * EX:  Array ( [0] => grupo_id_text_1 [1] => 8 ) [2] => Array ( [0] => grupo_id_2 [1] => 8 ) )
    *
    * @param string $strDados string atendendo ao padrão especificado
    * @access public
    * @author Sebastião Martins Pereira
    * @copyright NewprogSoftwares
    */
   public static function splitString(string $strDados){

        $arrDados = array();

        foreach (explode('|',$strDados) as $key => $value){
             array_push($arrDados,explode(':',$value));
        }
        
        return $arrDados;
    }
}
