@extends('layouts.admin_panel')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <h1>Events <small>Create event</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> create event</li>
            </ol>
          </div>
</div><!-- /.row -->
<div class="row">
        <div class="col-lg-6">
        
        {!! Form::open(['route' => 'events.store'], ['class' => 'form']) !!}


              <div class="form-group">
              {!! Form::label('title', 'Title') !!}
              {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title']) !!}
              </div>

              <div class="form-group">
              {!! Form::label('body', "Body") !!}
              {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter body']) !!}
              </div>
              {!! Form::submit('Add Event', ['class' => 'btn btn-primary']) !!}
 

        {!! Form::close() !!}

        </div>
</div><!-- /.row -->
@endsection

