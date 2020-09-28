@extends('layouts.app')

@section('title', 'Vehicles')

@section('content')


<div class="col-lg-12">
	<h1 class="page-header">All Vehicles</h1>
</div>
<section class="content">
<div class="row">
	<div class="col-lg-12">
		@include('msgs.success')
		<div class="panel panel-default">
			<div class="panel-heading">
                List of vehicles
                <?php if(Auth::user()->can('create_vehicle')){?>
                <a href="{{ url('/view-vehicles/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Add Vehicle</a>
                <?php }?>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				@if(!empty($vehicleDatas))

                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Plate/Horse Number</th>
                      <th>Driver Name</th>

                      <?php if(Auth::user()->can('show_vehicle')){?>
                        <th>Show</th>
                        <?php }?>

                        <?php if(Auth::user()->can('edit_vehicle')){?>
                        <th>Edit</th>
                        <?php }?>

                        <?php if(Auth::user()->can('delete_vehicle')){?>
                        <th>Delete</th>
                        <?php }?>

                        <?php if(Auth::user()->can('download_vehicle')){?>
                      <th>Vehicle regn cards</th>
                      <?php }?>

                      <th>Duration</th>
                    </tr>
                    </thead>
                    <tbody>
                            @foreach($vehicleDatas as $key=>$vehicleData)
                            <tr class="odd gradeX">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $vehicleData->plate_horse_number }}</td>
                                    <td class="center">{{ $vehicleData->first_name }} {{ $vehicleData->last_name }}</td>

                                    <?php if(Auth::user()->can('show_vehicle')){?>
                                    <td>
                                            <a class="btn btn-info" data-toggle="modal" href='#{{ $vehicleData->id."show" }}'><i class="fa fa-bullseye" arial-hidden="true"></i></a>
                                            <div class="modal fade" id="{{ $vehicleData->id."show" }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title">Vehicle Details</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                             <div class="center-block">
                                                                <div class="form-group">
                                                                    <label>Plate Number: </label>
                                                                </div>
                                                            </div>
                                                            </div>

                                                            <div class="col-sm-9">
                                                               <div class="center-block">
                                                                <div class="form-group">
                                                                    {{ $vehicleData->plate_number }}
                                                                </div>
                                                            </div>
                                                            </div>
                                                          </div>
                                                          <hr/>

                                                          <div class="row">
                                                                <div class="col-sm-3">
                                                                 <div class="center-block">
                                                                    <div class="form-group">
                                                                        <label>Trailer Number: </label>
                                                                    </div>
                                                                </div>
                                                                </div>

                                                              </div>
                                                              <hr/>

                                                          <div class="row">
                                                            <div class="col-sm-3">
                                                             <div class="center-block">
                                                                <div class="form-group">
                                                                    <label>Horse Number: </label>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                               <div class="center-block">
                                                                <div class="form-group">
                                                                    {{ $vehicleData->whorse_number }}
                                                                </div>
                                                            </div>
                                                            </div>
                                                          </div>
                                                          <hr/>

                                                          <div class="row">
                                                            <div class="col-sm-3">
                                                             <div class="center-block">
                                                                <div class="form-group">
                                                                    <label>Body Type: </label>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                               <div class="center-block">
                                                                <div class="form-group">
                                                                    {{ $vehicleData->body_type_name }}
                                                                </div>
                                                            </div>
                                                            </div>
                                                          </div>
                                                          <hr/>

                                                          <div class="row">
                                                                <div class="col-sm-3">
                                                                 <div class="center-block">
                                                                    <div class="form-group">
                                                                        <label>Driver Names: </label>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                   <div class="center-block">
                                                                    <div class="form-group">
                                                                        {{ $vehicleData->first_name }}
                                                                    </div>
                                                                </div>
                                                                </div>
                                                              </div>
                                                          </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                    <?php }?>

                                         <?php if(Auth::user()->can('edit_vehicle')){?>

                                    <td>
                                            <a href="{{ url('/view-vehicles/'.$vehicleData->id.'/edit') }}" type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" arial-hidden="true"></i></a>
                                    </td>
                                    <?php }?>

                                    <?php if(Auth::user()->can('delete_vehicle')){?>
                                    <td>
                                                <a href='#{{ $vehicleData->id }}' data-toggle="modal" type="button" class="btn btn-danger"><i class="fa fa-trash" arial-hidden="true"></i></a>
                                                <div class="modal fade" id="{{ $vehicleData->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title"><strong>Delete</strong></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete Plate/Horse Number? <h9 style="color: blue;">{{ $vehicleData->plate_horse_number }}</h9>
                                                            </div>
                                                            <form action="/view-vehicles/{{ $vehicleData->id  }}" method="POST" role="form">

                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>

                                                                    <button type="submit" class="btn btn-danger">Yes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                    </td>
                                    <?php }?>

                              <?php if(Auth::user()->can('download_vehicle')){?>
                                <td><a href="{{ Storage::url($vehicleData->attachments_path) }}" target="_blank" type="button" class="btn btn-danger"><i class="fa fa-download" arial-hidden="true"></i></a>
                                </td>
                               <?php }?>

                               {{--  <td class="center">{{ \Carbon\Carbon::parse($vehicleData->created_at)->diffForHumans() }}</td>  --}}
                               <td class="center">{{date("F jS, Y", strtotime($vehicleData->created_at))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                  </table>
                </div>
				@else
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>No New Vehicle found</strong>
				</div>
				@endif
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>

</section>
<!-- /.row -->

@endsection
