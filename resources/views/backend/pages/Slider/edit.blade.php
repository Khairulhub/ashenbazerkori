@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Update Information of Slider</h4>
        </div>

        <div>
            <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Slider Title</label>
                <input type="text" id="name" name="title" value="{{$slider->title}}"  class="form-control">
               </div>

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Slider Sub-Title</label>
                <input type="text" id="name" name="sub_title" value="{{$slider->sub_title}}"  class="form-control">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Slider Description</label>
                    <textarea type="text" id="description" name="description" value="" rows="5" class="form-control">{{ $slider->description }} </textarea>
                </div>

                <div class="form-group mb-2">
                <label for="name" class="fw-bold">Slider Button Text</label>
                <input type="text" id="name" name="button_text" value="{{$slider->button_text}}"  class="form-control">
               </div>

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Slider Button URL</label>
                <input type="text" id="name" name="button_url" value="{{$slider->button_url}}"  class="form-control">
               </div>
               

                <div class="form-group mb-3">
                    <label for="image" class="fw-bold">Slider Image</label><br>

                    @if(!is_null($slider->image))
                    <img src="{{ asset('Backend/img/slider') }}/{{$slider -> image}}" alt="" width="40">
                    @else
                    No Thumbanil
                    @endif
                    <br> <br>
                    <span>plese select the image<span class="text-danger">*</span></span>
                    <input type="file" name="image" id="image" class="form-control" >

                   
                </div>


                <div class="form-group">
                    <input type="submit" name="updateslider" value="Save Changes" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
