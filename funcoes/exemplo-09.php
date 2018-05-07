<?php 

	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinado' => array(
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinado' => array(
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
				)
			)
		)
		),

		array(
			'nome_cargo' => 'CEO',
			'subordinado' => array(
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinado' => array(
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
				)
			)
		)
		),

		array(
			'nome_cargo' => 'CEO',
			'subordinado' => array(
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinado' => array(
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
				)
			)
		)
		),

		array(
			'nome_cargo' => 'CEO',
			'subordinado' => array(
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinado' => array(
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
				)
			)
		)
		),

		);

	function exibe ($cargos){

		$html = '<ul>';

		foreach ($cargos as $cargo) {
			$html .= '<li>';
			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinado']) && count($cargo['subordinado'])) {

				$html .= exibe($cargo['subordinado']);

			}

			$html .= "</li>";
		}

		$html .= '</ul>';

		return $html;

	}

	echo exibe($hierarquia);

 ?>