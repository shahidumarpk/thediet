@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<!-- some CSS styling changes and overrides -->
<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">{{$user->fname}} {{$user->lname}} Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            <div class="row">
              <div class="col-md-4 text-center">
                  <div class="kv-avatar">
                          <img src="{{ asset('public/img/staff/'.$user->avatar) }}" width="90%">
                  </div>
              </div> 
              <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                    <td><b>First Name</b></td>
                    <td>{{$user->fname}}</td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td>
                    <td>{{$user->lname}}</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td><b>Phone Number</b></td>
                    <td>{{$user->phonenumber}}</td>
                </tr>
                <tr>
                    <td><b>Created At</b></td>
                    <td>{{$user->created_at->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td><b>Updated At</b></td>
                    <td>{{$user->updated_at->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td><b>User Role</b></td>
                    <td>{{$user['role']['role_title']}}</td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>
                        @if ($user->status === 1)
                          <span class="text-green"><b>Active</b></span>
                        @else
                            <span class="text-red"><b>Deactive</b></span>
                        @endif
                    </td>
                </tr>
                
              </table>
                  

              </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/admins'); !!}" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->

</div>

<!-- Login Logs begins -->
<div class="box box-danger">
	<div class="box-header with-border">
		<h3 class="box-title">Login Logs</h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
		</div>
	</div>
	<!-- /.box-header -->
	{{--<div class="box-body" style="">
            @if(count($loginlogs) > 0)
              <table id="loginlogs" class="display responsive wrap" style="width:100%;">
                <thead>
                <tr>
                  <th>Login Date</th>
                  <th>IP</th>
                  <th>Device Info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($loginlogs as $loginlog)
                  <tr>
					<td>{{$loginlog->login_at !="" ? $loginlog->login_at->format('d-M-Y h:i:s') : "NA"}}</td>
                    <td>{{$loginlog->ip_address}}</td>
                    <td>{{$loginlog->user_agent}}</td>
                  </tr>
                  @endforeach			  
                </tbody>
                <tfoot>
                </tfoot>
              </table>
              @else
              <div>No Record found.</div>
              @endif

	</div>--}}
	<!-- /.box-body -->
	<div class="box-footer clearfix" style="">
	</div>
	<!-- /.box-footer -->
</div>
<!-- Login Logs ends -->

@endsection

