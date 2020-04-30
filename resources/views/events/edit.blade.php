@extends('layouts.admin_panel')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <h1>Events <small>Update event</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> update event</li>
            </ol>
          </div>
</div><!-- /.row -->
<div class="row">
        <div class="col-lg-6">
        
        <form method="post" action="{{ route('events.update', $event->id) }}">
@method('PATCH')
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value={{ $event->title }}/>
  </div>


  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" rows="6" name="body">{{ $event->body }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Update event</button>

</form>

        </div>
</div><!-- /.row -->
@endsection

