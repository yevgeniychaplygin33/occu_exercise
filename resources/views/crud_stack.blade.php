@extends('app')

@section('content')

<div class="container mt-5">
<x-flash-message />

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h2>Form</h2>
    <form method="POST" action="{{ url('/save') }}">
        @csrf
        <div class="input-row d-flex">
            <div class="form-group">
                <label for="name">Name</label> 
                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter Name Here" required value="{{ old('name') }}" >
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Enter Title Here" required value="{{ old('title') }}"> 
            </div>
            <div class="form-group"> 
                <label for="city">City</label> 
                <input type="text" class="form-control form-control-sm" id="city" name="city" placeholder="Enter City Here" required value="{{ old('city') }}"> 
            </div>
            <div class="form-group"> 
                <label for="state">State</label> 
                <input type="text" class="form-control form-control-sm" id="state" name="state" placeholder="Enter State Here" required value="{{ old('state') }}"> 
            </div>
            <button type="submit" class="btn btn-primary btn-sm btn-custom">Submit</button>
        </div>
    </form>
            <div class="heading"> 
                @include('components.search')
                <h2 class="subDataH" class="mt-3">Submitted Data</h2>
            </div>
    <div x-data="{ editing: true }">
        <table class="table table-striped table-sm mt-5">
            <thead class="thead-dark">
                <tr>
                    <th id="cmprTxt">Select 2 to compare</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Updated At</th>
                    <th id="editBtn"></th>
                    <th id="deleteBtn"></th>
                </tr>
            </thead>
            <tbody> @foreach($dataSet as $currentData) 

                <tr x-data="{ isEditable: false, isChecked: false }">
                    <td class="flex-center"><input id="checkBox" type="checkbox" x-model="isChecked" x-bind:disabled="isChecked ? false : (checkedCount >= 2)" @change="checkedCount = isChecked ? checkedCount + 1 : checkedCount - 1"></td>
                    <td id='tableRow'>
                        <input name="name" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->name }}">
                    </td>
                    <td id='tableRow'>
                        <input name="title" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->title }}">
                    </td>
                    <td id='tableRow'>
                        <input name="city" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->city }}">
                    </td>
                    <td id='tableRow'>
                        <input name="state" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->state }}">
                    </td>
                    <td id='tableRow'>{{ $currentData->updated_at }}</td>
                    <td class="flex-center">@include('components.edit')</td>
                    <td id="deleteBtn">@include('components.delete')</td>
                </tr>
               @endforeach 
            </tbody>
        </table>
    </div>
        <button id='cmprBtn'>Compare</button>
        <form method="POST" action="/delete/all" >
            @csrf 
            @method('DELETE')
            <button id='cmprBtn'>Delete All</button>
        </form>
@endsection