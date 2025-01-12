<form action="/delete/{{ $currentData->name }}" method="POST"> 
  @csrf 
  @method('DELETE')
  <button x-cloak x-show="!isEditable" id="deleteBtn" class="btn btn-danger" type="submit">Delete</button>
  <button onclick="resetFormByName('updateForm')" type="button" x-cloak x-show="isEditable"  class="btn btn-danger" id="deleteBtn" @click="isEditable = !isEditable">Cancel</button>
</form>