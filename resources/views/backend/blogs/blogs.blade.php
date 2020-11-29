@extends('backend.back_master')
@section('content')

<div class="wrapper">
<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Blog > <span>Blog Management</span></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-color">Blog</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                             @foreach($blog as $all_blog)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$all_blog->title}}</td>
                                                <td>{{$all_blog->body}}</td>
                                                <td><img src="{{ asset($all_blog->image) }}" alt="image" width="100" height="100" class="img-responsive post-image" />
                                                </td>
                                                <td>{{$all_blog->date}}</td>
                                                <td><a href="{{url('/admin/blog/update',$all_blog->id)}}" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$all_blog->id}}"><i class="far fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                    <a href="{{url('/admin/blog/destroy',$all_blog->id)}}" type="submit" id="del" onclick="myFunction()" class="action-btn"><i class="fas fa-times"></i></a></td></tr>



                <div class="modal fade" id="exampleModal{{$all_blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                             </button>
                                                 </div>
                                                <div class="modal-body">

                    <form action="{{ url('/admin/blog/update', $all_blog->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Edit Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Edit Title" value="{{$all_blog->title}}">
                        </div>
                        <div class="form-group">
                            <label>Edit Body</label>
                            <input type="text" name="body" class="form-control" placeholder="Edit Body" value="{{$all_blog->body}}">
                        </div>
                        <div class="form-group">
                            <label>Edit Date</label>
                            <input type="text" name="date" class="form-control" placeholder="Edit Date" value="{{$all_blog->date}}">
                        </div>
                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Edit file</label>
                                            </div>
                                        </div>
                        
                        <div class="modal-image text-center">
                            <img src="{{asset('public/backend/assets/img-icon/logo.png')}}" class="img-fluid">
                        </div>
                        <div class="modal-btn text-center">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
                                            
                </tbody>
                    </table>
                        </div>
                            </div>
                             </div>
                              <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                    <h5 class="text-color">Add Blog</h5>
                                        </div>
                                        <form action="{{url('/admin/blog/store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="body" name="body" placeholder="Enter Body">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
                                        </div><br>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div><br>
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
        
    <script>

function myFunction() {
  
  if (confirm("Are you sure to delete this item ?")) 
  {
   return true;
  } else {
    return false;
  }
  document.getElementById("del");
}
 </script>


@endsection





