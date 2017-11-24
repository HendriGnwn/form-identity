<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function process(Request $request)
    {
        $model = new Identity();
        $requestData = $request->all();
        $requestData['company_start_date'] = $request->company_start_date_year . '-' . $request->company_start_date_month . '-01';
        $requestData['company_end_date'] = $request->company_end_date_year . '-' . $request->company_end_date_month . '-28';
        $requestData['expected_salary'] = str_replace('.', '', $request->expected_salary);
        $requestData['company_salary'] = str_replace('.', '', $request->company_salary);
        $model->fill($requestData);
        if (isset($request->photo)) {
			$files = $request->file('photo');
			$filename = $model->generateFilename($files->getClientOriginalExtension());
			$model->photo = $filename;
		}
        if (isset($request->cv)) {
			$files = $request->file('cv');
			$filename = $model->generateFilename($files->getClientOriginalExtension());
			$model->cv = $filename;
		}
        if (isset($request->certificate_document)) {
			$files = $request->file('certificate_document');
			$filename = $model->generateFilename($files->getClientOriginalExtension());
			$model->certificate_document = $filename;
		}
        $model->save();
        
        Session::flash('status', 'success');
        Session::flash('message', 'Sukses');

        return redirect(redirect()->getUrlGenerator()->previous());
    }
    
    public function checkEmailIsExist(Request $request)
    {
        $model = Identity::whereEmail($request->email)->first();
        if (!$model) {
            return json_encode([
                'status' => true,
            ]);
        }
        
        return json_encode([
            'status' => false,
        ]);
    }
}