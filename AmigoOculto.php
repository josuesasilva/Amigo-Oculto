<?php 

/**
 * Realiza o sorteio para uma brincadeira de amigo oculto,
 * a partir de um array com o nome dos participantes.
 *
 * @return uma lista indicando que deve enviar para quem.
 * @author Josué Santos Silva
 **/
function sorteio($amigos) {

	$listaaux = $amigos;
	$lista = array();
	shuffle($listaaux);

	foreach ($amigos as $i) { // envia

		foreach ($listaaux as $j => $value) { // recebe mediante as condições

			if ($i != $value) {
				$lista[$i] = $value;
				unset($listaaux[$j]);
				break;
			}

		}

	}

	if (sizeof($listaaux) != 0)
		return sorteio($amigos);
	else
		return $lista;
}

