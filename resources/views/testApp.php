@extends ('layouts.testApp')


@section('content')
	<div class="container" ng-controller="mainController">
		

		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>name</th>
					<th>email</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="user in users">
					<td>{{ user.id }}</td>
					<td>{{ user.name }}</td>
					<td>{{ user.email }}</td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection
