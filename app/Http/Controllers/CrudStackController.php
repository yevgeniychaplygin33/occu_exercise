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

    public function update(UpdateRequest $updateRequest)
    {
        $updatedValues = $updateRequest->validated();
        $data = SimpleDataSet::find($updatedValues['name']);
        
        dd($data);

    }

}
