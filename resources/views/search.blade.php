<form action="{{route('search')}}" method="POST">
    @csrf
<div class="container mt-3 mb-3">
    <div class="row d-flex justify-content-center">
        <input type="text" class="col-10 col-sm-10 col-md-4 border p-2" name="keyword" autocomplete="off" placeholder="KEYWORDS">
        <input id="location" data-bs-toggle="dropdown" value="" autocomplete="off" onkeyup="SearchByLocation()" type="text" class="col-10 col-sm-10 col-md-3 border p-2 in-search" name="location" placeholder="AREA">
        <ul class="col-10 col-sm-10 col-md-4 dropdown-menu" id="loc_search" aria-labelledby="dropdownMenuLink">
        </ul>
        <button type="submit" class="col-10 col-sm-10 col-md-1 btn back-font-edit">
            <i class="fas fa-search"></i>
        </button>
    </div>
</div>
</form>