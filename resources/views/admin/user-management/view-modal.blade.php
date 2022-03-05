<div class="modal fade text-left" id="ModalView{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog" role="document">
          <div class="modal-content" style=" background-color: #F7F8FA">
               <div class="modal-header" style="background-color:#f1dca7;letter-spacing: 3px; color:black">
                    <h4 class="modal-title">{{ __('User Information') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div> 
                    <div class="modal-body">
                         <div class="form-body">
                              <div class="row">

                                   <div class="col-md-3">
                                        <label><small><strong>Full Name:</strong></small></label>
                                   </div>
                                   <div class="col-md-9">
                                        <div class="form-group has-icon-left">
                                             <div class="form-control form-control-sm position-relative" >
                                                  <div class="form-control-icon" >
                                                  <i class="la la-user" style="padding-right:5px"></i>
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $user->name }} {{ $user->last_name }} </span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-3">
                                        <label><small><strong>Role:</strong></small></label>
                                   </div>
                                   <div class="col-md-9">
                                        <div class="form-group has-icon-left">
                                             <div class="form-control form-control-sm position-relative" >
                                                  <div class="form-control-icon" >
                                                  <i class="la la-shield" style="padding-right:5px"></i>
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $user->role }}</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-3">
                                        <label><small><strong>Email:</strong></small></label>
                                   </div>
                                   <div class="col-md-9">
                                        <div class="form-group has-icon-left">
                                             <div class="form-control form-control-sm position-relative" >
                                                  <div class="form-control-icon" >
                                                  <i class="la la-envelope-o" style="padding-right:5px"></i>
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $user->email }}</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-3">
                                        <label><small><strong>Phone:</strong></small></label>
                                   </div>
                                   <div class="col-md-9">
                                        <div class="form-group has-icon-left">
                                             <div class="form-control form-control-sm position-relative" >
                                                  <div class="form-control-icon" >
                                                  <i class="la la-phone" style="padding-right:5px"></i>
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $user->phone_number }}</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" style="background-color: #718355" data-dismiss="modal">Close</button>
                    </div>
               </div>
          </div>
     </div>
</div>