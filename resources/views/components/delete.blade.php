<form action="/delete/{{ $currentData->name }}" method="POST"> 
  @csrf 
  @method('DELETE')
  <button x-show="!isEditable" id="deleteBtn" class="btn btn-danger" type="submit">Delete</button>
  <button type="button" x-show="isEditable"  class="btn btn-danger" id="deleteBtn" @click="isEditable = !isEditable">Cancel</button>
</form>