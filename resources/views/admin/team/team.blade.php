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
					<div class="card-header">All Team Member:<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
				New Member
			</button></div>
					<div class="card-body">
									<table class="table table-bordered">
								<thead>
                  <tr>
                    <th>Name</th>
                    <th>designation</th>
                    <th>expart on</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($member as $value)
                  <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{$value->designation}}</td>
                    <td>{{$value->expertise}}</td>
                      <td class="button-td">
                        <div class="row">
                                            {{Form::open(['url'=>"/team/$value->team_id",'method'=>'GET'])}}
                                            <button  class="button btn btn-success ml-3"><i class="far fa-eye"></i></button>
                                            {{Form::close()}}

                                            {{Form::open(['url'=>"/team/$value->team_id",'method'=>'DELETE'])}}
                                            <button onclick="return confirm('Are you sure?')" class="button btn btn-danger ml-3"><i class="far fa-trash-alt"></i></button>
                                            {{Form::close()}}

                                            {{Form::open(['url'=>"/team/$value->team_id/edit",'method'=>'GET'])}}
                                            <button class="button btn btn-info ml-3"><i class="far fa-edit"></i></button>
                                            {{Form::close()}}
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
          <!--::::::::validation msg:::::::-->
  {{Form::open(['url'=>'/team','files'=>true,'class'=>'forms-sample'])}}
  <div class="form-group">
    {{Form::label('name','Name')}}
	{{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
  </div>
  <div class="form-group">
    {{Form::label('email','Email')}}
	{{Form::text('email','',['class'=>'form-control','placeholder'=>'Email...'])}}
  </div>
  <div class="form-group">
    {{Form::label('phone','Phone')}}
	{{Form::text('phone','',['class'=>'form-control','placeholder'=>'phone..'])}}
  </div>
  <div class="form-group">
    {{Form::label('expertise','Expart on:')}}
	{{Form::text('expertise','',['class'=>'form-control','placeholder'=>'expart on..'])}}
  </div>
  <div class="form-group">
    {{Form::label('designation','Designation:')}}
	{{Form::text('designation','',['class'=>'form-control','placeholder'=>'designation'])}}
  </div>
  <div class="form-group">
    {{Form::label('address','Address:')}}
	{{Form::text('address','',['class'=>'form-control','placeholder'=>'address....'])}}
  </div>
 <div class="form-group">
 	{{Form::label('details','Details')}}
    {{Form::textarea('details','',['class'=>'form-control','placeholder'=>'details'])}}
  </div>
  <div class="form-group">
        {{Form::label('image','Member Image')}}
		{{Form::file('image',['class'=>'form-control','id'=>'profile-img'])}}
  </div>
  <button type="submit" class="btn btn-success mx-3">Submit</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 {{Form::close()}}
      </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection
