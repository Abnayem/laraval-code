@extends('admin/layout')
@section('page_title','Category')
@section('category_select','active')
@section('container')
{{session('message')}}
<h1 class="mb-10">Category</h1>
                                
<a href="{{url('category/ad-category')}}">
 <button type="button" class="btn btn-success">Add Category</button>
</a>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>name</th>
                                                <th>slug</th>
                                                <th>image</th>
                                                <th>description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category as $list)
                                            <tr>
                                            <td>{{$list->id}}</td>
                                             <td>{{$list->name}}</td>
                                              <td>{{$list->slug}}</td>
                                              <td><img src="{{asset('admin-assets/category/images/'.$list->image)}}" style="height: 100px;" ></td>
                                              <td>{{$list->description}}</td>
                                             
                                              <td>
                                            <a href="{{url('category/ad-category')}}/{{$list->id}}">
                                                     <button class="btn btn-success">Edit</button>
                                                 </a>
                                                 <a href="{{url('admin/category/delete')}}/{{$list->id}}">
                                                     <button class="btn btn-danger">Delete</button>
                                                 </a>  
                                              </td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                             
                            </div>
                        </div>
                        
                 

    
    @endsection

   