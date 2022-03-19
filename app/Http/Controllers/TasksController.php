<?php

namespace App\Http\Controllers;

use Asciisd\Zoho\Facades\ZohoManager;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function lists(){
        $tasks = ZohoManager::useModule('Tasks');
        $data = $tasks->getRecords();







        return view('tasks.list',compact('data'));
    }
    public function create(){
        $potentials = ZohoManager::useModule('Potentials');
        $deal = $potentials->getRecords();
        $deal_data = [];
        foreach($deal as $item){
            $deal_data[$item->getEntityId()] =  $item->getData()['Deal_Name'];
        }
        return view('tasks.create',compact('deal', 'deal_data'));
    }



    public function create_post(Request $request) {
        $potentials = ZohoManager::useModule('Tasks');
        $record = $potentials->getRecordInstance();


        $record->setFieldValue('Subject', $request->all()['Subject']);
        $record->setFieldValue('Priority', $request->all()['Priority']);
        $record->setFieldValue('Due_Date', $request->all()['Due_Date']);
        $record->setFieldValue('$se_module', "Potentials");
        $record->setFieldValue('What_Id', $request->all()['What_Id']);
        $record->setFieldValue('Status', $request->all()['Status']);
        $record->setFieldValue('Description', $request->all()['Description']);

        $record->create()->getData();
        return redirect()->route('tasks')->with('success', 'Task добавлен');
    }
}
