@extends('backend.back_master')
@section('content')

<div class="wrapper">
<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="content-header">
                        <h6 class="m-0 text-color">Home > Contact > <span>Manage Contact</span></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-color">Contact</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Opening Hours</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                             @foreach($cont as $all_contact)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$all_contact->phone}}</td>
                                                <td>{{$all_contact->email}}</td>
                                                <td>{{$all_contact->location}}</td>
                                                <td>{{$all_contact->open_hour}}</td>
                                                <td><a href="{{url('/admin/contact/update',$all_contact->id)}}" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$all_contact->id}}"><i class="far fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                    <a href="{{url('/admin/contact/destroy',$all_contact->id)}}" type="submit" id="del" onclick="myFunction()" class="action-btn"><i class="fas fa-times"></i></a></td></tr>



                <div class="modal fade" id="exampleModal{{$all_contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                             </button>
                                                 </div>
                                                <div class="modal-body">

                    <form action="{{ url('/admin/contact/update', $all_contact->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Edit Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Edit Phone Number" value="{{$all_contact->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Edit Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Edit Email" value="{{$all_contact->email}}">
                        </div>
                        <div class="form-group">
                            <label>Edit Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Edit Location" value="{{$all_contact->location}}">
                        </div>
                        <div class="form-group">
                            <label>Edit Opening Hours</label>
                            <input type="text" name="open_hour" class="form-control" placeholder="Edit Opening Hours" value="{{$all_contact->open_hour}}">
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
                              <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                    <h5 class="text-color">Add Contact</h5>
                                        </div>
                                        <form action="{{url('/admin/contact/store')}}" method="POST">
                                            @csrf
                                        <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="open_hour" name="open_hour" placeholder="Enter Opening Hours">
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





