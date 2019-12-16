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
					<div class="card-header">All Course:<!-- Button trigger modal -->
			   {{Form::open(['url'=>"/addcourse",'method'=>'get'])}}
                                            <button class="button btn btn-danger">New Course</button>
                                            {{Form::close()}}</div>
					<div class="card-body">
									<table class="table table-bordered">
								<thead>
                  <tr>
                    <th>Name</th>
                    <th>Trainer Name</th>
                    <th>Course Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($course as $value)
                 <tr>
                    <td>{{$value->title}}</td>
                    <td>{{$value->trainer_name}}</td>
                    <td>{{$value->course_type}}</td>
                       <td>@if($value->status == 1 )
                      <a type="button" href="{{-- {{route('admin.slider.status',$value->slider_id)}} --}}" class="btn btn-info">Active</a>
                      @else
                      <a type="button" href="{{-- {{route('admin.slider.status',$value->slider_id)}} --}}" class="btn btn-warning">Unactive</a>
            @endif</td>
                    <td class="button-td">
                        <div class="row"> <div class="ml-2" >
                                            {{Form::open(['url'=>"/coursedel/$value->course_id",'method'=>'GET'])}}
                                            <button onclick="return confirm('Are you sure?')" class="button btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                            {{Form::close()}}
                                          </div>
                                          <div class="ml-2">
                                            {{Form::open(['url'=>"/courseedit/$value->course_id",'method'=>'GET'])}}
                                            <button class="button btn btn-info"><i class="far fa-edit"></i></button>
                                            {{Form::close()}}
                                          </div>
                        </div>
                                        </td>
                  </tr>
              @endforeach
						</table>
					</div>
				</div>
			</div>
		</div>	
		<!--end form---->	


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer ">
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
