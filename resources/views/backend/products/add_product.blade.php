@extends('backend.back_master')
@section('content')

<div class="wrapper">
       <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Product > <span>Add Product</span></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h5 class="text-color">Add Product</h5>
                                        </div>
                                        <form action="{{url('/admin/products/store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
                                        </div>
                                        <div class="form-group">
                                            <label></label>
                                            <select class="form-control select2" name="under_cat" style="width: 100%;">
                                                <option >Select Category</option>
                                                @foreach($cat as $all_cat)  
                                                <option value="{{$all_cat->cat_name}}">{{$all_cat->cat_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="details" name="details" placeholder="Enter Product Details">
                                        </div>
                                        <div class="form-group">
                                            <label></label>
                                            <select class="form-control select2" name="size" style="width: 100%;">
                                                <option >Select Size</option> 
                                                <option value="20">20</option>
                                                <option value="22">22</option>
                                                <option value="24">24</option>
                                                <option value="26">26</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="color" name="color" placeholder="Enter Product Color">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Product Brand">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Product Type">
                                        </div><br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="radio" id="active" name="product_status" value="Available">
                                                    <label for="active">Available</label>
                                                    <input type="radio" id="inactive" name="product_status" value="Not Available">
                                                    <label for="inactive">Not Available</label>
                                                    <br><br>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Cover Image</label>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary btn-custom">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





