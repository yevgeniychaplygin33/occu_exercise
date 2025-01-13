<h2>Form</h2>
<form method="POST" action="{{ url('/save') }}">
    @csrf
    <div class="input-row d-flex">
        <div class="form-group">
            <label for="name">Name</label> 
            <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter Name Here" required value="{{ old('name') }}" >
        </div>
        <div class="form-group ml-2">
            <label for="title">Title</label>
            <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Enter Title Here" required value="{{ old('title') }}"> 
        </div>
        <div class="form-group ml-2"> 
            <label for="city">City</label> 
            <input type="text" class="form-control form-control-sm" id="city" name="city" placeholder="Enter City Here" required value="{{ old('city') }}"> 
        </div>
        <div class="form-group ml-2"> 
            <label for="state">State</label> 
            <input type="text" class="form-control form-control-sm" id="state" name="state" placeholder="Enter State Here" required value="{{ old('state') }}"> 
        </div>
        <div class="form-group">
            <button type="submit"  align="center" class="btn btn-primary ml-3" id="submitBtn">Submit</button>
        </div>
    </div>
</form>