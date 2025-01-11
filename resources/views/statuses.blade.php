@extends('app')

@section('content')
<div class="container">
    <h1 class="my-4">Status List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($statuses as $status)
            <tr>
                <td>{{ $status->id }}</td>
                <td>{{ $status->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
