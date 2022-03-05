@extends('layouts.admin.master')
@section('content')


     <!-- row -->
<div class="col-lg-12">
     <div class="row tab-content">
          <div id="list-view" class="tab-pane fade active show col-lg-12">
               <div class="card" style="background-color:#f1dca7;">
               {!! Toastr::message() !!}
                    <div class="card-header">
                         <h4 class="card-title">All User List  </h4>
                         <a href="{{ route('register') }}" class="btn" style="background-color:#718355;"><li class=
                         "la la-user-plus"></li>Add new</a>
                         <!-- <a data-toggle="modal" data-target="#add-class-modal" class="btn btn-primary">
                                        <li class="la la-plus-circle"></li> Register
                         </a> -->
                         
                    </div>
                    <div class="card-body" style="background-color:white;">
                         <div class="table table-sm table-responsive">
                              <table id="example3" class="display" style="min-width: 845px">
                                   <thead>
                                        <tr>
                                             <th>#</th>
                                             <th>Name</th>
                                             <th>Email</th>
                                             <th>Role</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach ($users as $key => $user)
                                        <tr>
                                             <td class="id">{{ ++$key }}</td>
                                             <td class="name">{{ $user->name }} {{ $user->last_name }}</td>
                                             <td class="email">{{ $user->email }}</td>
                                             <td class="age">{{ $user->role }}</td>
                                             <td>
                                             <div class="row">
                                                       <button class="badge bg-primary" data-toggle="modal" data-target="#ModalView{{$user->id}}"><i class="la la-eye"></i></button> 
                                                       
                                                            
                                                       <form action="{{ route('user-edit', $user->id)}}" method="GET">  
                                                            @csrf  
                                                            
                                                            <button class="badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>  
                                                       </form>  
     
                                                       
                                                       <form action="{{ route('user-destroy', $user->id)}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf  
                                                       
                                                       <button class="badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>  
                                                  </form>  
                                                  </div>
                                             </td>
                                             @include('admin.user-management.view-modal')
                                        </tr>
                                        @endforeach
                                   <tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection