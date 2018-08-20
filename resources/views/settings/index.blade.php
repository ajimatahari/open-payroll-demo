@extends('layouts.open-payroll')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
				<h4>
					Payroll Settings
				</h4>
			</div>
		</div>
		<hr>
		<div class="row">
		  <div class="col-2">
		    <div class="list-group bg-transparent shadow-sm border-0" id="list-tab-open-payroll-setting" role="tablist">
		      <a class="list-group-item list-group-item-action active border-0" id="list-earning-types-list" data-toggle="list" href="#list-earning-types" role="tab" aria-controls="home">
		      	Earning
		      </a>
		      <a class="list-group-item list-group-item-action  border-0" id="list-deduction-types-list" data-toggle="list" href="#list-deduction-types" role="tab" aria-controls="deduction-types">
		      	Deduction
		      </a>
		    </div>
		  </div>
		  <div class="col-10 card border-0 bg-white shadow-sm rounded">
		    <div class="tab-content card-body border-0" id="nav-tabContent">
		      <div class="tab-pane fade show active" id="list-earning-types" role="tabpanel" aria-labelledby="list-earning-types-list">
				<h5>Earning</h5>
				<table class="table table-hover table-condensed">
					<tr>
						<th class="text-center">Name</th>
						<th class="text-center">Code</th>
						<th class="text-center">Is Locked?</th>
						<th class="text-center">Actions</th>
					</tr>
					@foreach($earning_types as $type)
						<tr>
							<td class="text-center">{{ $type->name }}</td>
							<td class="text-center">
								<pre>{{ $type->code }}</pre>
							</td>
							<td class="text-center">
								<span class="badge badge-{{ getYesNoClassName($type->is_locked) }}">
									{{ $type->is_locked ? 'Yes' : 'No' }}
								</span>
							</td>
							<td class="text-center">
								
							</td>
						</tr>
					@endforeach
				</table>
		      </div>
		      <div class="tab-pane fade" id="list-deduction-types" role="tabpanel" aria-labelledby="list-deduction-types-list">
		      	<h5>Deduction</h5>
		      	<table class="table table-hover table-condensed">
					<tr>
						<th class="text-center">Name</th>
						<th class="text-center">Code</th>
						<th class="text-center">Is Locked?</th>
						<th class="text-center">Actions</th>
					</tr>
					@foreach($deduction_types as $type)
						<tr>
							<td class="text-center">{{ $type->name }}</td>
							<td class="text-center">
								<pre>{{ $type->code }}</pre>
							</td>
							<td class="text-center">
								<span class="badge badge-{{ getYesNoClassName($type->is_locked) }}">
									{{ $type->is_locked ? 'Yes' : 'No' }}
								</span>
							</td>
							<td class="text-center">
								
							</td>
						</tr>
					@endforeach
				</table>
		      </div>
		    </div>
		  </div>
		</div>

	</div>
@endsection