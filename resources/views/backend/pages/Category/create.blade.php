@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Create New Category</h4>
        </div>

        <div>
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Categotry Name</label>
                <input type="text" id="name" name="name" placeholder="Enter The Category Name" class="form-control">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Category Description</label>
                    <textarea type="text" id="description" name="description" placeholder="Enter The Category Description" rows="5" class="form-control"> </textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="is_parent" class="fw-bold">Is Parent</label>
                    <select name="is_parent" id="is_parent"  class="form-select">

                        <option value="0"> Please select the Parent Category if any</option>

                        @foreach ( App\Models\Backend\Category::orderBy('name','asc')->where('is_parent', 0)->get() as $parentcategory )
                        <option value="{{$parentcategory->id}}"> {{ $parentcategory->name}}</option>
                            @foreach ( App\Models\Backend\Category::orderBy('name','asc')->where('is_parent', $parentcategory->id)->get() as $childcategory )
                                <option value="{{$childcategory->id}}">- {{ $childcategory->name}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="status" class="fw-bold">Status</label>
                    <select name="status" id="status"  class="form-select">

                        <option selected> Please select the  status</option>
                        <option value="1"> Active</option>
                        <option value="0"> InActive</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="image" class="fw-bold">Category Image / Logo</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>


                <div class="form-group">
                    <input type="submit" name="addcategory" value="Add New Category" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
