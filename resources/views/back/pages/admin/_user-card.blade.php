<!-- /.usercard -->
@foreach($users as $user)
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
		<div class="white-box">
			<div class="el-card-item">
				<div class="el-card-avatar el-overlay-1">
					<img src="{{ 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($user->email))).'?s=85&d=identicon' }}"/>
					<div class="el-overlay">
							<ul class="el-info">
								<li><a class="btn default btn-outline" data-toggle="tooltip" title="Edit" href="{{ route('admin.kelola-admin.edit', encrypt($user->id)) }}"><i class="icon-pencil"></i></a></li>
								<li><a class="btn default btn-outline" title="Delete" data-toggle="tooltip" href="#" id="delete-user" data-id="{{ encrypt($user->id) }}"><i class="icon-trash"></i></a></li>
							</ul>
					</div>
				</div>
				<div class="el-card-content">
						<h3 class="box-title">{{ $user->name }}</h3>
						<small>{{ $user->email }}</small><br/> 
				</div>
			</div>
		</div>
	</div>
@endforeach
{{-- /.usercard --}}