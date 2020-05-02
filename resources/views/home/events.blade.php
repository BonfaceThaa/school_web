@extends('layouts.base')
@section('content')
		<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30 title_color">School Events and Announcements</h3>
						@foreach ($events as $event)
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">{{ $event->title }}</h4>
									<p>{!! $event->body !!}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
@endsection