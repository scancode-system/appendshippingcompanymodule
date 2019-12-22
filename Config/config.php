<?php

return [
    'name' => 'AppendShippingCompany', 
	'fields' => ['shipping_company_id', 'shipping_company_name'],
	'sample' => [
		[
			'name' => 'shipping_company_id',
			'observation' => 'Coloque aqui o código da filial, caso queira que a transportadora seja cadastrada com um código específico e não aleatório.',
			'sample_1' => '45',
			'filled' => false
		],
		[
			'name' => 'shipping_company_name',
			'observation' => 'Coloque o nome da filial do produo aqui.',
			'sample_1' => 'AJAX Expresso',
			'filled' => false
		]
	]
];
