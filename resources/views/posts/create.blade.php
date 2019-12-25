@extends('layouts.app')

@section('content')
<f class="container">
   <form action="/p" enctype="multipart/form-data" method="post">
   @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Posts</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">posts caption</label>
            
                    <input id="caption" 
                    type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" 
                    value="{{ old('caption') }}"  
                    autocomplete="caption" autofocus>
            
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  
                <div class="row " style="flex-direction: column;">
                    <label for="image" class="col-md-4 col-form-label ">posts image</label>
                    <input type="file" class="from-control-file" id="image" name="image"> 
                
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>     
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>     
            </div>
        </div>
   </form>
</div>
@endsection
