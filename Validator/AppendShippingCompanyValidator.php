<?php

namespace Modules\AppendShippingCompany\Validator; 


class AppendShippingCompanyValidator
{

	public function rule($data){
		return [
			'shipping_company_id' =>  'integer|min:1',
			'shipping_company_name' =>  'string|max:255'
		];
	}

	public function filterRules($data)
	{

	}

}
