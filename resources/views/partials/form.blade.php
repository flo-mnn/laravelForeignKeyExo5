<form action="/pokemon" method="POST" enctype="multipart/form-data" class="my-5 p-3 bg-danger text-light font-weight-bold">
    @csrf
    <div class="form-group">
      <label>Pokemon Name</label>
      <input type="text" class="form-control" placeholder="Pikachue" name="name" value="{{old('name')}}">
    </div>
    <div class="form-group">
      <label>Level <span class="text-muted" style="font-size: 10px"> 0 - 100</span></label>
      <input type="number" class="form-control" name="level" value="{{old('level')}}">
    </div>
    <div class="form-group">
      <label for="image" class="btn btn-dark rounded-0"> + Pokemon Image</label>
      <input type="file" class="form-control d-none"  name="src" id="image">
    </div>
    <div class="form-row">
        <div class="col-7">
            <label>Select a type</label>
            <select class="form-control" name="type_id">
                @if (count($types)==0)
                    <option value="null">Please add a type before adding a pokemon</option>
                @else
                    @foreach ($types->sortBy('type') as $type)
                    <option value="{{$type->id}}">{{$type->type}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="col mt-auto">
            <button class="btn btn-light font-weight-bold rounded-0" type="button" data-toggle="modal" data-target="#createType">Add a type</button>
            {{-- modal with form --}}
        </div>
    </div>
    <div class="form-row justify-content-end">
      <button type="submit" class="btn btn-light text-danger rounded-0 my-2 mr-2 font-weight-bold ">Add a Pokemon</button>
    </div>
  </form>

<!-- Modal -->
<div class="modal fade rounded-0 font-weight-bold text-dark" id="createType" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-danger font-weight-bold" id="createModalLabel">Add a type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/types" method="POST" id="addType">
          @csrf
          <input type="text" name="type">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark rounded-0" form="addType">Add a type</button>
      </div>
    </div>
  </div>
</div>