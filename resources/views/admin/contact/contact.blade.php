@extends('admin.layouts.master')
@section('title','Contact list')
@section('style')

@endsection
@section('content')

  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		

		<!--table---->	
		<div class="row mt-3">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">All Contact list</div>
					<div class="card-body">
						<table class="table table-bordered">
								<thead>
                  <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($contact as $value)
                  <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->subject }}</td>
                    <td>{{ $value->phone }}</td>
                {{--     <td>@if($value->status == 1 )
                    	<a type="button" href="{{route('admin.course.subject.status',$value->contact_id)}}" class="btn btn-info">Active</a>
                    	@else
                    	<a type="button" href="{{route('admin.course.subject.status',$value->contact_id)}}" class="btn btn-warning">Unactive</a>
						@endif
                    </td> --}}
                    <td>
                      <div class="row">

                       {{Form::open(['url'=>"/contact/$value->contact_id",'method'=>'DELETE'])}}
                               <button onclick="return confirm('Are you sure?')" class="button btn btn-danger mx-2"><i class="far fa-trash-alt"></i></button>
                        {{Form::close()}}

                     {{--    {{Form::open(['url'=>"/team/$value->contact_/edit",'method'=>'GET'])}}
                              <button class="button btn btn-info mx-2"><i class="far fa-edit"></i></button>
                        {{Form::close()}} --}}
                        </div>
                    </td>
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
