<?php

namespace App\Http\Controllers;

use Asciisd\Zoho\Facades\ZohoManager;
use Illuminate\Http\Request;

class PotentialController extends Controller
{
    public function lists(){
        $potentials = ZohoManager::useModule('Potentials');
        $data = $potentials->getRecords();




        return view('potentials.list',compact('data'));
    }
    public function create(){
        return view('potentials.create',[]);
    }

    public function create_post(Request $request) {
        $potentials = ZohoManager::useModule('Potentials');
        $record = $potentials->getRecordInstance();
        $record->setFieldValue('Deal_Name', $request->all()['Deal_Name']);
        $record->setFieldValue('Expected_Revenue', (float)$request->all()['Expected_Revenue']);
        $record->setFieldValue('Stage', $request->all()['Stage']);
        $record->setFieldValue('Amount', $request->all()['Amount']);
        $record->setFieldValue('Probability', $request->all()['Probability']);
        $record->setFieldValue('Next_Step', $request->all()['Next_Step']);
        $record->setFieldValue('Type', $request->all()['Type']);
        $record->setFieldValue('Lead_Source', $request->all()['Lead_Source']);
        $record->setFieldValue('Closing_Date', $request->all()['Closing_Date']);
        $record->setFieldValue('Description', $request->all()['Description']);
        $record->create()->getData();
        return redirect()->route('potentials')->with('success', 'Deal добавлен');
    }

}
