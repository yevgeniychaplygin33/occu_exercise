<!-- <form action="/update/{{ $currentData->name }}" method="POST">
  @csrf
  @method('PUT') -->
<button x-show="!isEditable" @click="isEditable = !isEditable" id="editBtn" type="button" class="btn btn-warning" id="editBtn">
<!-- <span x-text="isEditable ? 'Save' : 'Edit'"></span> -->
 Edit
</button>
<button x-show="isEditable" type="submit" class="btn btn-warning" id="editBtn">Save</button>

<!-- </form> -->

