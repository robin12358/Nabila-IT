@extends('admin.layouts.master')
@section('title','Course_Subject')
@section('style')

@endsection
@section('content')

  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Update Course</div>
					<div class="card-body">
						  <!--::::::::validation msg:::::::-->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
						<form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.course.subject.add')}}">
							@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">New Subject Name</label>
    <input type="subject" class="form-control" name="subject"  placeholder="Enter New Subject Name...">
  </div>
 
  <button type="submit" class="btn btn-success">Submit</button>
</form>
					</div>
				</div>
			</div>
		</div>	
		<!--end form---->	

		<!--table---->	
		<div class="row mt-3">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">All Subjects</div>
					<div class="card-body">
						<table class="table table-bordered">
								<thead>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($subject as $value)
                  <tr>
                    <td>{{ $value->subject_name }}</td>
                    <td>@if($value->status == 1 )
                    	<a type="button" href="{{route('admin.course.subject.status',$value->subject_id)}}" class="btn btn-info">Active</a>
                    	@else
                    	<a type="button" href="{{route('admin.course.subject.status',$value->subject_id)}}" class="btn btn-warning">Unactive</a>
						@endif
                    </td>
                    <td><a type="button" href="{{route('admin.course.subject.remove',$value->subject_id)}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  	@endforeach
                   
                 
                </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	<!--end table---->
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

@endsection

@section('script')

@endsection
