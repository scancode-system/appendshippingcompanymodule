<?php

namespace Modules\AppendShippingCompany\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		return [
'shipping_company_id' =>  'integer|min:1',
			'shipping_company_name' =>  'string|max:255'
		];
	}

	public function modifiers()
	{
		return [];
	}


	public function columnsFormat($header)
	{
		return  [];
	}

}