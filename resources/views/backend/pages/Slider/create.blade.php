@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Create New Slider</h4>
        </div>

        <div>
            <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Slider Tilte</label>
                <input type="text" id="name" name="title" placeholder="Enter The Category Name" class="form-control">
               </div>

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Slider Sub-Tilte</label>
                <input type="text" id="name" name="sub_title" placeholder="Enter The  button sub title  " class="form-control">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Slider Description</label>
                    <textarea type="text" id="description" name="description" placeholder="Enter The button Description" rows="5" class="form-control"> </textarea>
                </div>

               
                <div class="form-group mb-2">
                    <label for="name" class="fw-bold">Button Text</label>
                    <input type="text" id="name" name="button_text" placeholder="Enter The button text" class="form-control">
                   </div>


                   
               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Button URL</label>
                <input type="text" id="name" name="button_url" placeholder="Enter The button url" class="form-control">
               </div>


                <div class="form-group mb-3">
                    <label for="image" class="fw-bold">Category Image / Logo</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>


                <div class="form-group">
                    <input type="submit" name="addslider" value="Add New Slider" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
