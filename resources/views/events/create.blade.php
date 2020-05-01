@extends('layouts.admin_panel')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <h1>Events <small>Create event</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> create event</li>
            </ol>
            @if ($errors->any())
            <div class="alert alert-dismissable alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
            </div>
            @endif
          </div>
</div><!-- /.row -->
<div class="row">
<div class="col-lg-6">

<form method="post" action="{{ route('events.store') }}">
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" placeholder="Enter title" name="title"/>
  </div>


  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="summernote" class="form-control" rows="6" placeholder="Enter body" name="body"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Add event</button>

</form>

</div>
</div><!-- /.row -->
<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
@endsection

