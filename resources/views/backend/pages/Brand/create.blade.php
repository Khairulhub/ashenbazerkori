@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Create New Brand</h4>
        </div>

        <div>
            <form action="{{ route('brand.store') }}" method="" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name">Brand Name</label>
                <input type="text" id="name" name="name" placeholder="Enter The Brand Name" class="form-control">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description">Brand Description</label>
                    <textarea type="text" id="description" name="description" placeholder="Enter The Brand Description" class="form-control"> </textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="is_featured">Is Featured</label>
                    <select name="is_featured" id="is_featured"  class="form-select">

                        <option selected> Please select the featured status</option>
                        <option value="1"> Yes Featured</option>
                        <option value="0"> Not Featured</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="status">Status</label>
                    <select name="status" id="status"  class="form-select">

                        <option selected> Please select the  status</option>
                        <option value="1"> Active</option>
                        <option value="0"> InActive</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="image">Brand Image / Logo</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>


                <div class="form-group">
                    <input type="submit" value="Add Brand" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
