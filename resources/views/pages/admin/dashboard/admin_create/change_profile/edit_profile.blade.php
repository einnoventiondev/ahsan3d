@extends('layouts.admin.master')

@section('title')
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Basic DataTables</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Data Tables</li>
		<li class="breadcrumb-item active"></li>
	@endcomponent
	<div class="container-fluid">
	    <div class="user-profile">
	        <div class="row justify-content-center">
	            <!-- user profile header start-->
	            <div class="col-sm-12 col-md-6">
	                <div class="card profile-header">
	                    <div class="userpro-box">
							<form method="Post" action="{{ route('admin.profile.update',$user->id) }}" enctype="multipart/form-data" >
								@csrf
								<div class="row mb-2">
									<div class="profile-title">
										<div class="media">
											<img class="img-70 rounded-circle" src="{{$user->profile_image ? asset('uploads/profile/' .$user->profile_image) : asset('assets/images/dashboard/1.png')}}" alt="profile_image">
											<div class="badge-bottom"><span class="badge badge-primary"></span></div>
										</div>


									</div>
								</div>
                                <div class="mb-3">
									<label class="form-label">profile</label>
									<input class="form-control admin-file" name="profile"  type="file">
								</div>
								<div class="mb-3">
									<label class="form-label">اسم</label>
									<input class="form-control" name="name" value="{{ $user->name }}" placeholder="Admin" value="admin">
								</div>
								<div class="mb-3">
									<label class="form-label">بريد الالكتروني</label>
									<input class="form-control" name="email"value="{{ $user->email }}" placeholder="your-email@domain.com" value="admin@admin.com">
								</div>
								<div class="mb-3">
									<label class="form-label">كلمة المرور</label>
									<input class="form-control" name="password" value="{{ $user->password }}" type="password" value="password">
								</div>

								<div class="form-footer">
									<button class="btn btn-primary btn-block">تحديث </button>
								</div>
							</form>
							{{-- <div class="social-media">
								<ul class="user-list-social">
									<li>
										<a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-rss"></i></a>
									</li>
								</ul>
							</div> --}}
							{{-- <div class="follow">
								<ul class="follow-list">
									<li>
										<div class="follow-num counter">325</div>
										<span>Follower</span>
									</li>
									<li>
										<div class="follow-num counter">450</div>
										<span>Following</span>
									</li>
									<li>
										<div class="follow-num counter">500</div>
										<span>Likes</span>
									</li>
								</ul>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@push('scripts')
	<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
	@endpush

@endsection
