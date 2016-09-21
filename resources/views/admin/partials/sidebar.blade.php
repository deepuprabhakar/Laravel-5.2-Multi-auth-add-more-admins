<div class="col-md-3">
    <div class="list-group">
      	<a href="{{ route('admin.dashboard') }}" class="list-group-item
      	{{ Request::is('admin/dashboard') ? ' active' : '' }}">
	        <i class="fa fa-tachometer pull-right" aria-hidden="true"></i>
	        Dashboard
      	</a>
      	<a href="{{ route('admin.admins.index') }}" class="list-group-item
      	{{ Request::is('admin/admins*') ? ' active' : '' }}">
	        <i class="fa fa-user-plus pull-right" aria-hidden="true"></i>
	        Admins
      	</a>
    </div>

    {{-- <div class="list-group">
        <a href="{{ route('users.index') }}" class="list-group-item
        {{ Request::is('admin/users*') ? ' active' : '' }}">
          <i class="fa fa-user pull-right" aria-hidden="true"></i>
          Users
        </a>
    </div> --}}
</div>