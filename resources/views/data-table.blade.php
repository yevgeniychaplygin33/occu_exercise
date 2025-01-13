<h2 class="subData">Submitted Data</h2>
<table class="table table-striped table-sm">
<thead class="thead-dark">
    <tr>
        <!-- <th id="cmprTxt">Select 2 to compare</th> -->
        <th>Name</th>
        <th>Title</th>
        <th>City</th>
        <th>State</th>
        <th>Updated At</th>
        <th id="editBtn"></th>
        <th id="deleteBtn"></th>
        <th id="copyHeader"></th>
    </tr>
</thead>
<tbody> @foreach($dataSet as $currentData) 
    <tr x-data="{ isEditable: false  }">
        <!-- <td class="flex-center">
            <input id="checkBox" type="checkbox" x-model="selected"  @change="if (selected.length > 2) selected.pop()" value="{{ $currentData->name }}" >
        </td> -->
        <form action="/update/{{ $currentData->name }}" method="POST" name="updateForm" id="updateForm" class="updateForm">
            @csrf
            @method('PUT')
            <td id='tableRow'><input name="name" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->name }}"></td>
            <td id='tableRow'><input name="title" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->title }}"></td>
            <td id='tableRow'><input name="city" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->city }}"></td>
            <td id='tableRow'><input name="state" type="text" x-bind:disabled="!isEditable" value="{{ $currentData->state }}"></td>
            <td id='tableRow'>{{ $currentData->updated_at }}</td>
            <td>@include('components.edit') </td>
    </form>
        <td id="deleteBtn">@include('components.delete')</td>
        <td id="copyBtn">@include('components.copy-edit-modal')</td>
    </tr>
    @endforeach 
</tbody>
</table>