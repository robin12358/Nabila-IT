@extends('admin.layouts.master')
@section('title','team_edit')
@section('style')

@endsection
@section('content')

  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">

			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Edit Team Member info:<!-- Button trigger modal -->
			</div>
					<div class="card-body">

					     <!--::::::::validation msg:::::::-->
  {{Form::open(['url'=>"/team/$value->team_id",'method'=>'put','files'=>true,'class'=>'forms-sample'])}}
  <div class="form-group">
    {{Form::label('name','Name')}}
	{{Form::text('name',$value->name,['class'=>'form-control','placeholder'=>'Name'])}}
  </div>
  <div class="form-group">
    {{Form::label('email','Email')}}
	{{Form::text('email',$value->email,['class'=>'form-control','placeholder'=>'Email...'])}}
  </div>
  <div class="form-group">
    {{Form::label('phone','Phone')}}
	{{Form::text('phone',$value->phone,['class'=>'form-control','placeholder'=>'phone..'])}}
  </div>
  <div class="form-group">
    {{Form::label('expertise','Expart on:')}}
	{{Form::text('expertise',$value->expertise,['class'=>'form-control','placeholder'=>'expart on..'])}}
  </div>
  <div class="form-group">
    {{Form::label('designation','Designation:')}}
	{{Form::text('designation',$value->designation,['class'=>'form-control','placeholder'=>'designation'])}}
  </div>
  <div class="form-group">
    {{Form::label('address','Address:')}}
	{{Form::text('address',$value->address,['class'=>'form-control','placeholder'=>'address....'])}}
  </div>
 <div class="form-group">
 	{{Form::label('details','Details')}}
    {{Form::textarea('details',$value->details,['class'=>'form-control','placeholder'=>'details'])}}
  </div>
  <div class="form-group">
        {{Form::label('image','Member Image')}}
		{{Form::file('image',['class'=>'form-control','id'=>'profile-img'])}}
		{{form::hidden('image',asset($value->image))}}
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





<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add A New Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection
