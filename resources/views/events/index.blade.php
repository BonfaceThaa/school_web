@extends('layouts.admin_panel')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <h1>Events <small>List of events</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> events</li>
            </ol>
          </div>
</div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
            <h2>Events & Anouncement details</h2>
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th>Title <i class="fa fa-sort"></i></th>
                    <th>Body <i class="fa fa-sort"></i></th>
                    <th>Actions </th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($events as $event)
                  <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->body }}</td>
                    <td>
                    <a href="#"><span class="btn btn-warning btn-sm">Edit</span></a>
                    <td>
                    <form action="{{ route('events.destroy', $event->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                    </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
</div><!-- /.row -->
@endsection