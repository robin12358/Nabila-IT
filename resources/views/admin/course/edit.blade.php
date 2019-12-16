@extends('admin.layouts.master')
@section('title','Course_edit')
@section('style')

@endsection
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Course Update:<!-- Button trigger modal -->
	</div>
					<div class="card-body">
{{Form::open(['url'=>"/courseupdate/$value->course_id",'method'=>'POST','files'=>true,'class'=>'forms-sample'])}}
  <div class="form-group">
    {{Form::label('title','Title')}}
	{{Form::text('title',$value->title,['class'=>'form-control','placeholder'=>'title'])}}
  </div>
  
  <div class="row">
  
     <div class="form-group col-sm-6">
                            {{Form::label('subject name','Subject Name')}}
                            <select name="subject_name" class="form-control">
                            	<option >Select Course Subject.</option>
                            	@foreach($subject as $val)
                            	@if($val->subject_id == $value->subject_name)
                                <option value="{{$val->subject_id}}" selected>{{$val->subject_name}}</option>
                                @else
                                <option value="{{$val->subject_id}}">{{$val->subject_name}}</option>
                                 @endif
                               @endforeach
                            </select>
                        </div>

 
     <div class="form-group col-sm-6">
                            {{Form::label('course type','Course Type')}}
                            <select name="course_type" class="form-control">
                                <option >Select Course Type.</option>
							
							@foreach($type as $valu)
							@if($valu == $value->course_type)
                                <option selected>{{$valu}}</option>
								@else
								<option>{{$valu}}</option>
                                @endif
                               @endforeach
                            </select>
                        </div>

</div>
 <div class="form-group">
 	{{Form::label('details','Details')}}
    {{Form::textarea('details',$value->details,['class'=>'form-control'])}}
  </div>

  <div class="row">
  	<div class="form-group col-sm-6">
  		 {{Form::label('course_duration_month','Course Duration Month')}}
	{{Form::number('course_duration_munth',$value->course_duration_munth,['class'=>'form-control'])}}
  	</div>
  	 	<div class="form-group col-sm-6">
  		     {{Form::label('course_duration_hour','Course Duration Hour')}}
	{{Form::number('course_duration_hour',$value->course_duration_hour,['class'=>'form-control'])}}
  	</div>
  </div>
 <div class="row">
 	<div class="form-group col-sm-8"> {{Form::label('trainer_name','Trainer Name')}}
	{{Form::text('trainer_name',$value->title,['class'=>'form-control'])}}</div>
 	<div class="form-group col-sm-4">  {{Form::label('trainer_image','Trainer Image')}}
		{{Form::file('trainer_image',['class'=>'form-control','id'=>'trainer-image'])}}
	{{form::hidden('trainer_image',asset($value->trainer_image))}}</div>
 </div>

  <div class="form-group">
    {{Form::label('course_fee','Course Fee')}}
	{{Form::text('course_fee',$value->course_fee,['class'=>'form-control'])}}
  </div>
    <div class="form-group">
        {{Form::label('course_image','Course Image')}}
		{{Form::file('course_image',['class'=>'form-control','id'=>'course_image'])}}
		{{form::hidden('course_image',asset($value->course_image))}}
  </div>

  <button type="submit" class="btn btn-success mx-3">Update</button>
 {{Form::close()}}
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
 <script>
                        CKEDITOR.replace( 'details' );
                        
                </script>
@endsection
