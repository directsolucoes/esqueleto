<?php

/* * ****************************************************************
 * Projeto:              Grupo Financeiro
 * Módulo:              Kernell
 * 
 * 
 * **************************************************************** */

class kernel {

    function __construct() {
        
    }

    function __clone() {
        
    }

    public static function titulosApp($opt_titulos) {
        switch ($opt_titulos) {
            case "tituloA1":
                $rs_opt_titulos =   "Grupo Amity Finance";
                break;
            case "tituloA2":
                $rs_opt_titulos =   "Grupo Amity";
                break;
            case "tituloSloganA1":
                $rs_opt_titulos =   "Se torne mais um Empreendedor de Sucesso.<br>Soluções em Tecnologia para pequenas empresas e profissional autonomo,<br>que se adaptam a necessidade de seus clientes! ";
                break;
            default:
                break;
        }
        echo $rs_opt_titulos;
    }

}
