@extends('layout') 
@section('content')

<meta http-equiv="refresh" content="180">
<header class="header-area overlay small-header relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        
        </div>
    </header>
    <!--Header-area/-->
<div class="container">
  <div class="row">
    <br><br>
      <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
      </div>
        <h1>Result - {{ $task->id }}</h1>
        <h4>Submitter : {{ $task->name }}</h4>
        <h4>Date : {{ $task-> created_at }}</h4>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Proteins</h3>
          </div>
          <div class="panel-body">
            <table id="export_table" class="table table-striped">
    <tr>
      <td>#</td>
      <td><b>Protein Name</b></td>
      <td><b>Length</b></td>
      <td><b><span class="label label-primary">Family Class A</span></b></td>
      <td><b><span class="label label-success">Family Class B</span></b></td>
      <td><b><span class="label label-info">Family Class C</span></b></td>
    </tr>
    @foreach ($task_details as $emt)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#{{$loop->index+1}}">{{ str_limit($emt->name, $limit = 10) }}}</button>
      </td>
      <!-- Modal -->
      <div class="modal fade" id="{{$loop->index+1}}" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">{{ str_limit($emt->name, $limit = 10) }}</h4>
            </div>
            <div class="modal-body">
              <pre>{{ $emt->sequence }}</pre>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <td>{{ strlen($emt->sequence) }}</td>
      <td>@if ($emt->class_a=='')<span class="label label-default">In Process</span>@else{{$emt->class_a*100}} %@endif</td>
      <td>@if ($emt->class_a=='')<span class="label label-default">In Process</span>@else{{$emt->class_b*100}} %@endif</td>
      <td>@if ($emt->class_a=='')<span class="label label-default">In Process</span>@else{{$emt->class_c*100}} %@endif</td>
    </tr>
    @endforeach
</table>
        </div>
      </div>
    </div>
  </div>

@endsection