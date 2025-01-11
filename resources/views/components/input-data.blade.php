<tr x-data="{ isEditable: false, isChecked: false }">
    <td class="flex-center"><input id="checkBox" type="checkbox" x-model="isChecked" x-bind:disabled="isChecked ? false : (checkedCount >= 2)" @change="checkedCount = isChecked ? checkedCount + 1 : checkedCount - 1"></td>
    <td id='tableRow'>
        <input type="text" x-bind:disabled="!isEditable" value="{{ $currentData->name }}">
    </td>
    <td id='tableRow'>
        <input type="text" x-bind:disabled="!isEditable" value="{{ $currentData->title }}">
    </td>
    <td id='tableRow'>
        <input type="text" x-bind:disabled="!isEditable" value="{{ $currentData->city }}">
    </td>
    <td id='tableRow'>
        <input type="text" x-bind:disabled="!isEditable" value="{{ $currentData->state }}">
    </td>
    <td id='tableRow'>{{ $currentData->updated_at }}</td>
    <td class="flex-center">@include('components.edit')</td>
    <td id="deleteBtn">@include('components.delete')</td>
</tr>