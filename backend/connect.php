<?php

    include "crip.php";

    $usuario = decrip('0Y25N2V3)3+=MP2B6V238",1Q2GI3-L=-;!8[2""E23z@S/0');
    $senha= decrip('5258Q5Y:Y"IIPS5E9]56;7m,T5JL@F!A"@PKa5U8H5N*5VSg');
    $servidor = decrip('k0kn-k5F)()f,/kyo*klqmC-0k#(LzAuAtHA_k1n!k*J%2/(');
    $banco = decrip(')Yx :xD")3@=9=x.!+xy#w,0?x353/L:3)-8[x@ 1x/z=A/0');
	$conexao = new mysqli($servidor, $usuario, $senha, $banco);

	if (!$conexao){
        die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    }

?>