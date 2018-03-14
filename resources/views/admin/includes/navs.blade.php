<div class="navs">
    <ul>
        <a href="{{ route('dashboard') }}"><li class="{{ $data['page'] == 'Dashboard' ? 'active' : '' }}"><span class="fa fa-dashboard" style="font-size:22px;margin-right:8px;"></span>Dashboard</li></a>
        <a href="{{ route('members') }}"><li class="{{ $data['page'] == 'Members' ? 'active' : '' }}"><span class="fa fa-users" style="font-size:22px;margin-right:8px;"></span>Members</li></a>
        <a href="{{ route('disputes') }}"><li class="{{ $data['page'] == 'Disputes' ? 'active' : '' }}"><span class="fa fa-table" style="font-size:22px;margin-right:8px;"></span>Disputes</li></a>
        <a href="{{ route('users') }}"><li class="{{ $data['page'] == 'Users' ? 'active' : '' }}"><span class="fa fa-users" style="font-size:22px;margin-right:8px;"></span>Administrators</li></a>
    </ul>
</div><!-- close div .navs -->