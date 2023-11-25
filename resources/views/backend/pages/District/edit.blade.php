@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Update Information of District</h4>
        </div>

        <div>
            <form action="{{ route('district.update',$district->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">District Name</label>
                <input type="text" id="name" name="name" value="{{$district->name}}"  class="form-control">
               </div>

            
                

                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Division Name</label>
                   
                    <select name="divisions_id" id="" class="form-control">
                        <option value="">Select Division</option>
                        @foreach ($divisions as $division)
                            <option value="{{$division->id}}" @if ($division->id == $district->divisions_id ) selected @endif  >{{$division->name}}</option>
                        @endforeach
                    </select>
                </div>

                

                <div class="form-group">
                    <input type="submit" name="updatedistrict" value="Save Changes" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
