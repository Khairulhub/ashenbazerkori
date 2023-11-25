@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Create New District</h4>
        </div>

        <div>
            <form action="{{ route('district.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">District Name</label>
                <input type="text" id="name" name="name" placeholder="Enter The District Name" class="form-control">
                
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Division Name</label>
                   
                    <select name="divisions_id" id="" class="form-control">
                        <option value="">Select Division</option>
                        @foreach ($divisions as $division)
                            <option value="{{$division->id}}">{{$division->name}}</option>
                        @endforeach
                    </select>
                </div>

                

                <div class="form-group">
                    <input type="submit" name="addbrand" value="Add New Brand" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
