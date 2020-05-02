@extends('layouts.base')
@section('content')
@include('layouts.home_banner')      
        <!--================Courses Area =================-->
        <section class="courses_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Apply to Nyari Senior School</h2> <br>
					<p>Interested in getting a world-class education <br>
					The application process is simple. <br>
					Just collect our application form fill in your details, submit it and our admission’s contact will be in touch with you.
				</p>
				</div>
				<div class="main_title">
					<a href="/about-us" class="btn submit_btn">About Us</a>
				</div>
        	</div>
        </section>
        <!--================End Courses Area =================-->
        
        <!--================Pagkages Area =================-->
        <section class="packages_area p_120">
        	<div class="container">
				<h3 class="mb-30 title_color">Fee Structure</h3>
				<div class="row">
					<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">Period</div>
									<div class="visit">Fees</div>
								</div>
								<div class="table-row">
									<div class="serial">Term 1</div>
									<div class="visit">15,500</div>
								</div>
								<div class="table-row">
									<div class="serial">Term 2</div>
									<div class="visit">15,500</div>
								</div>
								<div class="table-row">
									<div class="serial">Term 3</div>
									<div class="visit">13,500</div>
								</div>
							</div>
						</div>
				</div>
				<br>
				<div>
				<p>School uniform cost is <b>Ksh. 9,000</b></p>
				</div>
        	</div>
        </section>
        <!--================End Pagkages Area =================-->

@endsection