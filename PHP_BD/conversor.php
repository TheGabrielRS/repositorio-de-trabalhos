<?php
    
    function converteMateria ($idmateria)
    {
        switch ($idmateria)
        {
            case 1 : echo 'Matemática';
                     break;
            case 2 : echo 'Geografia';
                     break;
            case 3 : echo 'Português';
                     break;
        }
    }
    
    function nomeUsuario ($usuarios, $idtrabalho)
    {
        foreach($usuarios as $usuario)
        {
            if($idtrabalho == $usuario['id'])
                echo $usuario['username'];
        }
    }