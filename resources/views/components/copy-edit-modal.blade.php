<div x-cloak x-show="!isEditable" id="copyModal">
        <!-- Button to Open the Modal --> 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{str_replace(' ', '', $currentData->name)}}">
            Copy
        </button>
        <!-- Modal -->
        <div class="modal fade" id="myModal-{{str_replace(' ', '', $currentData->name)}}">
            <div class="modal-dialog">
            
            <form action="/copy/{{$currentData->name}}" method="POST">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit and save the data
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        @csrf
                        <label for="name">Name:</label><br>
                        <input name="name" type="text" value="{{$currentData->name}} - Copy"><br><br>
                        <label for="title">Title:</label><br>
                        <input  name="title" type="text" value="{{$currentData->title}}"><br><br>
                        <label for="city">City:</label><br>
                        <input  name="city" type="text" value="{{$currentData->city}}"><br><br>
                        <label for="state">State:</label><br>
                        <input  name="state" type="text" value="{{$currentData->state}}"><br><br>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" >Save Edited Copy</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>