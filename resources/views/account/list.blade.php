@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@forelse($users as $user)
                        <li>{{$user->name}}: {{$user->email}}</li>
                    @empty
                        <p>No users</p>
                    @endforelse
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
