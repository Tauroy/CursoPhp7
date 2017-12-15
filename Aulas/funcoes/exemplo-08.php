<?php
	/*/////////////
		seção 7
	///////////////*/
	//funções
		//Funções Recursivas --> é quando uma função chama a si mesmo.
		$hieraquia = array (
			array(
				'nomeCargo'=>'CEO',
				'subordinados'=> array(
				//Inicio: Diretor cormecial
					array(
						'nomeCargo'=>'Diretor cormecial',
						'subordinados'=>array(
							//Inicio: Gerente de Vendas
							array(
								'nomeCargo'=>'Gerente de Vendas'
							)
							//Termino: Gerente de Vendas
						)
					),
				//Termino: Diretor comercial
				//Inicio: Diretor Financeiro
					array(
						'nomeCargo' => 'Diretor Financeiro',
						'subordinados' => array(
							//Inicio: Gerente de contas a Pagar
							array(
								'nomeCargo'=>'Gerente de Contas a Pagar',
								'subordinados'=> array(
									//Inicio: Supervisor de Pagamentos
									array(
										'nomeCargo' => 'Supervisor de Pagamentos'
									)
									//Termino: Supervisor de Pagamentos
								)
							),
							//Termino: gerente de contas a pagar
							//Início: Gerente de compras
							array(
								'nomeCargo'=>'Gerente de Compras',
								'subordinados'=> array(
									//Início: Supervisor de suprimentos
									array(
										'nomeCargo'=>'Supervisor de suprimentos',
										'subordinados'=>array(
											array(
											'nomeCargo'=>'Funcionário'
											
											)
										)

									)
									//Término: Supervisor de suprimentos
								)
							)
							//Termino: Gerente de compras
						)
					)
				//Termino: Diretor Financeiro
				)
			)
		);

		//Fuction Recursivas
		function exibe($cargos){

			$html = '<ul>';

			foreach ($cargos as $cargo) {
				$html .= "<li>";
				$html .= $cargo['nomeCargo'];
				if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
					$html .= exibe($cargo['subordinados']);
				}
				$html .= "</li>";
			}

			$html .= '</ul>'; // .= para ir acumulando.

			return $html;
		}
		echo exibe($hieraquia);
?>