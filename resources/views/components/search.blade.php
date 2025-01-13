<div class="container x-data="{show: false}">
  <div class="row d-block m-0 float-right">
    <div class="col  m-3">
    <label class="" id="searchLabel" for="searchOption">Choose what to search by:</label>
    <select name="searchOption" id="searchBy" form="searchForm">
      <option value="Name" selected>Name</option>
      <option value="Title">Title</option>
      <option value="City">City</option>
      <option value="State">State</option>
      <option value="updated_at">Updated At</option>
    </select>
  </div>
    <div class="col-sm mr-3">
      <div class="container">
        <form method="GET" action="{{ url('/index') }}" id="searchForm">
        @csrf
        <div class="row">
          <div class="col">
            <input
          type="text"
          name="searchInput"
          class=""
          placeholder="Search a field..." 
          value="{{ old('searchInput') }}"
          required/>
          </div>
          <div class="col float-right">
            <button @click="show = !show"
              type="submit"
              class="btn btn-primary">
              Search
            </button>
          </div>
        </div>
        
        
        </form>
      </div>
      
      <button class="float-right m-3 mr-4 ">
        <a href="/index">Show All</a>
      </button>
    </div>
  </div>
</div>