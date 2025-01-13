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
    
    <div>
        @include('create-form')
    </div>
    <div class="container searchComp">
        @include('components.search')
    </div>

    <div class="container p-0" x-data="{ editing: true, selected: [] }">
       @include('data-table')
    </div>   
    <div class="container" >
        <form method="GET" x-bind:action="">
            @csrf 
            <!-- <input type="hidden" id="selected" name="selected" x-model="selected">
            <button type="submit" class="btn btn-info" id='compareBtn'>Compare</button> -->
        </form>
        <form method="POST" action="/delete/all" >
            @csrf 
            @method('DELETE')
            <button class=" btn btn-danger mt-4 float-right" id='deleteAllBtn'>Delete All</button>
        </form>
    </div>

        
</div>
@endsection