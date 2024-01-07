@extends('backend.layout.template')


@section('body')




<div class="mx-3">
   
    <div class="card p-4">
        <div>
            <h4 class=" mb-3">Update Information of Category</h4>
        </div>

        <div>
            <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-group mb-2">
                <label for="name" class="fw-bold">Category Name</label>
                <input type="text" id="name" name="name" value="{{$category->name}}"  class="form-control">
               </div>

            
                <div class="form-group mb-2">
                    <label for="description" class="fw-bold">Category Description</label>
                    <textarea type="text" id="description" name="description" value="" rows="5" class="form-control">{{ $category->description }} </textarea>
                </div>

                {{-- <div class="form-group mb-2">
                    <label for="is_parent" class="fw-bold">Is Featured  </label>
                    <span class="text-warning">Change the Primary category first<span class="text-danger">*</span></span>
                    <select name="is_parent" id="is_parent"  class="form-select">

                       
                        <option value="0"> Please select the Parent Category if any</option>

                        @foreach ( App\Models\Backend\Category::orderBy('name','asc')->where('is_parent', 0)->get() as $parentcategory )
                        <option value="{{$parentcategory->is_parent}}"
                             @if ($parentcategory->is_parent==0 && $category->id==$parentcategory->id)
                                selected
                            @endif
                            > {{ $parentcategory->name}}
                            </option>


                            @foreach ( App\Models\Backend\Category::orderBy('name','asc')->where('is_parent', $parentcategory->id)->get() as $childcategory )
                                <option value="{{$childcategory->id}}" 
                                    @if ( $category->id==$childcategory->id)
                                        selected
                                    @endif
                            >- {{ $childcategory->name}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div> --}}

                {{-- copy form chat gpt.  --}}
                <div class="form-group mb-2">
                    <label for="is_parent" class="fw-bold">Is Featured</label>
                    <span class="text-warning">Change the Primary category first<span class="text-danger">*</span></span>
                    <select name="is_parent" id="is_parent" class="form-select" >  {{--@if(!$category->is_parent) disabled @endif--}}
                        <option value="0"> Please select the Parent Category if any</option>
                        @foreach (App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', 0)->get() as $parentcategory)
                            <option value="{{ $parentcategory->is_parent }}"
                                @if ($category->id == $parentcategory->id)
                                selected
                                @endif
                            > {{ $parentcategory->name }}
                            </option>
                
                            @foreach (App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', $parentcategory->is_parent)->get() as $childcategory)
                                <option value="{{ $childcategory->id }}"
                                    @if ($category->is_parent == $childcategory->id)
                                    selected
                                    @endif
                                >- {{ $childcategory->name }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                



                <div class="form-group mb-2">
                    <label for="status" class="fw-bold">Status</label>
                    <select name="status" id="status"  class="form-select">

                        <option selected> Please select the  status</option>
                        <option value="1" @if($category->status==1) selected @endif> Active</option>
                        <option value="0" @if($category->status==0) selected @endif> InActive</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="image" class="fw-bold">Category Image / Logo</label><br>

                    @if(!is_null($category->image))
                    <img src="{{ asset('Backend/img/category') }}/{{$category -> image}}" alt="" width="40">
                    @else
                    No Thumbanil
                    @endif
                    <br> <br>
                    <span>plese select the image<span class="text-danger">*</span></span>
                    <input type="file" name="image" id="image" class="form-control" >

                   
                </div>


                <div class="form-group">
                    <input type="submit" name="updatecategory" value="Save Changes" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
