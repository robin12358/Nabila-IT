@extends('admin.layouts.master')
@section('title','team view page')
@section('style')

@endsection
@section('content')

  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">

			<div class="col-md-10">
				<div class="card">
					<div class="card-header">This is about {{$value->title}}</div>
					<div class="card-body">
									<table class="table table-bordered">
								
                  <tr>
                    <th>Image</th>
                    <th><img src="{{env('PUBLIC_PATH')}}/{{$value->course_image}}" style="width: 100px; height: 100px;"></th>
                  </tr>
                  <tr>
                    <th>Name</th>
                    <th style="font-size: 12px;">{{$value->title}}</th>
                  </tr>
                  <tr>
                    <th>Detail</th>
                    <th style="font-size: 12px;"> {!! $value->details !!} </th>
                  </tr>
                  <tr>
                    <th>Subject Name</th>
                    <th style="font-size: 12px;">   	@foreach($subject as $val)
                            	@if($val->subject_id == $value->subject_name)
                       {{$val->subject_name}}
                                
                                 @endif
                               @endforeach</th>
                  </tr>
                  <tr>
                    <th>Course Type</th>
                    <th style="font-size: 12px;">		@foreach($type as $valu)
							@if($valu == $value->course_type)
                                {{$valu}}
								
                                @endif
                               @endforeach
                  </tr>
                  <tr>
                    <th>Course Duration Munth</th>
                    <th style="font-size: 12px;">{{$value->course_duration_munth}} Munth</th>
                  </tr>
                  <tr>
                    <th>Course Duration Hour</th>
                    <th style="font-size: 12px;">{{$value->course_duration_hour}} Hour</th>
                  </tr>
                  <tr>
                    <th>Trainer Name</th>
                    <th style="font-size: 12px;">{{$value->trainer_name}}</th>
                  </tr>
                  <tr>
                    <th>Trainer Image</th>
                    <th style="font-size: 12px;"><img src="{{env('PUBLIC_PATH')}}/{{$value->trainer_image}}" style="width: 100px; height: 100px;"></th>
                  </tr>
                   <tr>
                    <th>Course Fee</th>
                    <th style="font-size: 12px;">{{$value->course_fee}}.Tk</th>
                  </tr>
                 
                  	
                
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
