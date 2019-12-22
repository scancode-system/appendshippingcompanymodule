<?php

namespace Modules\AppendShippingCompany\Services;


class AppendShippingCompanyService {
	
	public function fields(){
		return config('appendshippingcompany.fields');
	}

	public function sample(){
		return config('appendshippingcompany.sample');
	}

}
