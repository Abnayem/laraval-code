@extends('admin/layout')
@section('container')
@section('page_title','Manage_Category')
<h1 class="mb-10">Manage Category</h1>
<a href="{{route('admin/category')}}">
    <button type="button" class="btn btn-success">Back</button>
</a>
    <!-- MAIN CONTENT-->
            
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="row">
                                    
                               
                                <div class="col-lg-12">
                                    
                                
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <form action="{{route('insert-category')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Name</label>
                                                <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$name}}" required>
                                                @error('name')
                                                <div class="alert alert-danger">
                                                   {{$message}} 
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="slug" class="control-label mb-1">Category_Slug</label>
                                                <input id="slug" name="slug" type="text" class="form-control cc-name valid" value="{{$slug}}" data-val="true" 
                                                  aria-required="true" aria-invalid="false" required>
                                                @error('slug')
                                                <div class="alert alert-danger">
                                                   {{$message}} 
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group has-success">
                                                <label for="description" class="control-label mb-1">Category_Description</label>
                                                <input id="description" name="description" type="text" class="form-control cc-name valid" value="{{$description}}" data-val="true" 
                                                  aria-required="true" aria-invalid="false" required>
                                                @error('description')
                                                <div class="alert alert-danger">
                                                   {{$message}} 
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="image" class="control-label mb-1">Category_Image</label>
                                                <input id="image" name="image" type="file" class="form-control cc-name valid" value="{{$image}}" data-val="true" 
                                                  aria-required="true" aria-invalid="false" required>
                                                @error('image')
                                                <div class="alert alert-danger">
                                                   {{$message}} 
                                                </div>
                                                @enderror
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                   Submit
                                                </button>
                                            </div>
                                            <input type="hidden" name="id" value="{{$id}}">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
    @endsection