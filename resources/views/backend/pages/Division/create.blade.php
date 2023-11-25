@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Create New Division</h4>
        </div>

        <div>
            <form action="{{ route('division.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Division Name</label>
                <input type="text" id="name" name="name" placeholder="Enter The Division Name" class="form-control" autocomplete="off" required="required">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Division Priority No.</label>
                    
                    <input type="text" id="priority" name="priority" placeholder="Enter The Division Priority" class="form-control">
                </div>

                
                

                <div class="form-group">
                    <input type="submit" name="addbrand" value="Add New Brand" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
