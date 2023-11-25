@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Update Information of Division</h4>
        </div>

        <div>
            <form action="{{ route('division.update',$division->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Division Name</label>
                <input type="text" id="name" name="name" value="{{$division->name}}"  class="form-control">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Brand Description</label>
                  
                    <input type="text" id="name" name="priority" value="{{$division->priority}}"  class="form-control">
                </div>




                <div class="form-group">
                    <input type="submit" name="updatedivision" value="Save Changes" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
