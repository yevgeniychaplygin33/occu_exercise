<div x-data="{show: false}" class="search-box">
  <div class="item">
    <label id="searchLabel" for="searchOption">Choose what to search by:</label>
    <select name="searchOption" id="searchBy" form="searchForm">
      <option value="Name" selected>Name</option>
      <option value="Title">Title</option>
      <option value="City">City</option>
      <option value="State">State</option>
      <option value="updated_at">Updated At</option>
    </select>
  </div>
  <div class="item">
    <form method="GET" action="{{ url('/index') }}" id="searchForm">
    @csrf

      <input
        type="text"
        name="searchInput"
        class="searchInput"
        placeholder="Search a field..." 
        value="{{ old('searchInput') }}"
        required/>
      <div class="">
        <button @click="show = !show"
          type="submit"
          class="">
          Search
        </button>
      </div>
    </form>
    <button>
      <a href="/index">Show All</a>
    </button>
  </div>

</div>