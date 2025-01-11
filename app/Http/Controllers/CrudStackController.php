<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\SimpleDataSet;
use App\Http\Requests\SimpleDataRequest;

class CrudStackController extends Controller
{
    private $inputs = [];

    public function index()
    {
        $this->inputs = SimpleDataSet::all();
        return view('crud_stack', ['dataSet' => $this->inputs]);
    }

    public function saveForm(SimpleDataRequest $request)
    {
        // save to file using orbit

        // $inputData = [ 'name' => $request->input('name'),
        // 'title' => $request->input('title'),
        // 'city' => $request->input('city'),
        // 'state' => $request->input('state'),
        // 'updated_at' => null,
        // ];

        $inputData = $request->validated();
        
        SimpleDataSet::create($inputData);

        array_push($this->inputs, (object)$inputData);

        return back()->with('success', 'Data created successfully!');
        // return view('crud_stack', ['inputs' => $this->inputs]);
    }

    public function search(SearchRequest $request)
    {
        $searchParmas = $request->validated();
        $searchBy = $searchParmas['searchOption'];
        $searchFor = $searchParmas['searchInput'];
        $this->inputs = SimpleDataSet::where($searchBy, $searchFor)->get();
        
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
        // make sure that we can update the name 
        // if it's different that what was the original
        // but still unique in db
        
        $updatedValues = $updateRequest->validated();

        if ($name != $updateRequest['name']){
            $valid = $updateRequest->validate([
                'name' => 'unique:App\Models\SimpleDataSet,name'
            ], [$updateRequest['name']]);
        }

       
        $data = SimpleDataSet::where('name', $name)->first();
        
        $data['name'] = $updatedValues['name'];
        $data['title'] = $updatedValues['title'];
        $data['city'] = $updatedValues['city'];
        $data['state'] = $updatedValues['state'];

        // $data->name = $updatedValues['name'];
        // $data->title = $updatedValues['title'];
        // $data->city = $updatedValues['city'];
        // $data->state = $updatedValues['state'];

        $data->save();

        return back()->with('success', 'Data updated successfully!');

    }

}
