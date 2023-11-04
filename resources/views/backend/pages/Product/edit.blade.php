@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Update Information of Brand</h4>
        </div>

        <div>
            <form action="{{ route('brand.update',$brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Brand Name</label>
                <input type="text" id="name" name="name" value="{{$brand->name}}"  class="form-control">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Brand Description</label>
                    <textarea type="text" id="description" name="description" value="" rows="5" class="form-control">{{ $brand->description }} </textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="is_featured" class="fw-bold">Is Featured</label>
                    <select name="is_featured" id="is_featured"  class="form-select">

                        <option selected> Please select the featured status</option>
                        <option value="1" @if($brand->is_featured==1) selected @endif> Yes Featured</option>
                        <option value="0" @if($brand->is_featured==0) selected @endif> Not Featured</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="status" class="fw-bold">Status</label>
                    <select name="status" id="status"  class="form-select">

                        <option selected> Please select the  status</option>
                        <option value="1" @if($brand->status==1) selected @endif> Active</option>
                        <option value="0" @if($brand->status==0) selected @endif> InActive</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="image" class="fw-bold">Brand Image / Logo</label><br>

                    @if(!is_null($brand->image))
                    <img src="{{ asset('Backend/img/brand') }}/{{$brand -> image}}" alt="" width="40">
                    @else
                    No Thumbanil
                    @endif
                    <br> <br>
                    <input type="file" name="image" id="image" class="form-control">
                </div>


                <div class="form-group">
                    <input type="submit" name="updatebrand" value="Save Changes" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
