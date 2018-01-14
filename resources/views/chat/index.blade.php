@extends('layouts.app')
@section('content')
<div class="container">
	<a href="" class="btn btn-primary">Create New Group</a>
	<a href="" class="btn btn-primary">Manage Your Groups</a>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					User
				</div>
				<div class="panle-body">
					<div class="container">
						Users
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Messages
				</div>
				<div class="panle-body">
						<ul class="list-group">
							@foreach($messages as $message)
							<li class="list-group-item">{{$message->body}}</li>
							@endforeach
						</ul>
						<hr>
				</div>
				<div class="panel-footer">
					<div class="input-group">
						<form action="{{url('chat/store')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="body" class="form-control" placeholder="Write something...">
							<input type="hidden" name="thread_id" value="{{$thread_id}}">
							<div class="input-group-btn">
								<button class="btn btn-primary">Add</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
