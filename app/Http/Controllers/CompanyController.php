<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function view($id){
        $company = Company::withTranslations()->where('id', $id)->first();
        return view('company.view')
        	->with('company', $company);
    }
}
