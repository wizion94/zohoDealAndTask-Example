<?php

namespace App\Http\Controllers;

use Asciisd\Zoho\Facades\ZohoManager;
use Illuminate\Http\Request;

class ZohoCrmAuthController extends Controller
{
    public function index(){
        $potentials = ZohoManager::useModule('Potentials');

        $record = $potentials->getRecordInstance();
        $record->setFieldValue('Deal_Name', 'TestData');
        $record->setFieldValue('Expected_Revenue', (float)2444.4);
        $record->setFieldValue('Stage', 'Требуется анализ');
        $record->setFieldValue('Amount', 10000);
        $record->setFieldValue('Probability', 10);
        $record->setFieldValue('Next_Step', '???');
        $record->setFieldValue('Type', 'Существующая коммерческая деятельность');
        $record->setFieldValue('Lead_Source', '???');



        $record->setFieldValue('Closing_Date', '2022-03-19');
        $record->setFieldValue('Description', 'Чат');


        $potential = $record->create()->getData();
    }
}
