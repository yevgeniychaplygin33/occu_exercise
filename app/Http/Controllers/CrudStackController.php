<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\SimpleDataSet;
use App\Http\Requests\SimpleDataRequest;
use Illuminate\Support\Facades\Redis;

class CrudStackController extends Controller
{
    private $inputs = [];

    public function index()
    {
        $inputs = SimpleDataSet::latest()
        ->filter(request(['searchOption', 'searchInput']))
        ->get();

        // json format
        $this->inputs = json_decode((string) $inputs);

        return view('crud_stack', ['dataSet' => $this->inputs]);
    }

    public function saveForm(SimpleDataRequest $request)
    {
        // save to file using orbit package

        $inputData = $request->validated();
        
        SimpleDataSet::create($inputData);

        return back()->with('success', 'Data created successfully!');
    }

    public function search(SearchRequest $request)
    {
        $searchParmas = $request->validated();
        $searchOption = $searchParmas['searchOption'];
        $searchInput = $searchParmas['searchInput'];
        $this->inputs = SimpleDataSet::where($searchOption, $searchInput)->get();
        
        return view('crud_stack', ['dataSet' => $this->inputs]);
    }

    public function delete($name)
    {
        SimpleDataSet::where('name', $name)->delete();
        return redirect('/index')->with('message', 'Data deleted.');
    }

    public function deleteAll(){
        SimpleDataSet::truncate();
        return redirect('/index')->with('message', 'All data deleted.');
    } 

    public function update(UpdateRequest $updateRequest, $name)
    {
        
        $updatedValues = $updateRequest->validated();


        // if updating name, check if its unique
        if ($name != $updateRequest['name'])
        {
            $updateRequest->validate(
                [
                'name' => 'unique:App\Models\SimpleDataSet,name'
                ], 
                [
                    $updateRequest['name']
                ]
            );
        }
       
        $data = SimpleDataSet::where('name', $name)->first();
        
        $data['name'] = $updatedValues['name'];
        $data['title'] = $updatedValues['title'];
        $data['city'] = $updatedValues['city'];
        $data['state'] = $updatedValues['state'];
        $data['updated_at'] = now('pst');

        $data->save();

        return redirect('/index')->with('success', 'Data updated successfully!');
    }

    public function copy(SimpleDataRequest $request, $originalName){
        $inputData = $request->validated();
        
        SimpleDataSet::create($inputData);

        return redirect('/index')->with('success', 'Data copied and edited successfully!');
    }
}
