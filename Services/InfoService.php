<?php

namespace Modules\AppendShippingCompany\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		return [
			'shipping_company_id' =>  'nullable|integer|min:1',
			'shipping_company_name' =>  'nullable|string|max:255'
		];
	}

	public function modifiers($data)
	{
		return [];
	}


	public function columnsFormat($header)
	{
		return  [];
	}

}