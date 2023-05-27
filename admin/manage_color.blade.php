@extends('admin/layout')
@section('container')
@section('page_title','Manage_Color')
<h1 class="mb-10">Manage Category</h1>
<a href="{{route('admin/color')}}">
    <button type="button" class="btn btn-success">Back</button>
</a>
    <!-- MAIN CONTENT-->
            
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="row">
                                    
                               
                                <div class="col-lg-12">
                                    
                                
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <form action="{{route('insert-color')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Color-Name</label>
                                                <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$name}}" required>
                                                @error('name')
                                                <div class="alert alert-danger">
                                                   {{$message}} 
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="slug" class="control-label mb-1">Color-Slug</label>
                                                <input id="slug" name="slug" type="text" class="form-control cc-name valid" value="{{$slug}}" data-val="true" 
                                                  aria-required="true" aria-invalid="false" required>
                                                @error('slug')
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