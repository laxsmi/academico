<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ url('/') }}"><i class="fa fa-book"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li><a href="{{ url('/courses') }}"><i class="fa fa-book"></i> <span>{{ ucfirst(trans_choice('academico.courses', 2)) }}</span></a></li>

<li><a href="{{ url('/students') }}"><i class="fa fa-user"></i> <span>{{ ucfirst(trans_choice('academico.students', 2)) }}</span></a></li>

<li class="treeview">
  <a href="#"><i class="fa fa-link"></i> <span>@lang_u('academico.settings')</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
  <ul class="treeview-menu">
      <li><a href='{{ backpack_url('period') }}'><i class='fa fa-calendar'></i> <span>{{ ucfirst(trans_choice('academico.periods', 2)) }}</span></a></li>
      <li><a href='{{ backpack_url('course') }}'><i class='fa fa-graduation-cap'></i> <span>{{ ucfirst(trans_choice('academico.courses', 2)) }}</span></a></li>
      <li><a href='{{ backpack_url('event') }}'><i class='fa fa-star'></i> <span>{{ ucfirst(trans_choice('academico.events', 2)) }}</span></a></li>
      <li><a href='{{ backpack_url('level') }}'><i class='fa fa-star'></i> <span>{{ ucfirst(trans_choice('academico.levels', 2)) }}</span></a></li>
      <li><a href='{{ backpack_url('room') }}'><i class='fa fa-star'></i> <span>{{ ucfirst(trans_choice('academico.rooms', 2)) }}</span></a></li>
      <li><a href='{{ backpack_url('campus') }}'><i class='fa fa-star'></i> <span>{{ ucfirst(trans('academico.campuses')) }}</span></a></li>
      <li><a href='{{ backpack_url('rythm') }}'><i class='fa fa-star'></i> <span>{{ ucfirst(trans_choice('academico.rythms', 2)) }}</span></a></li>
      <li><a href='{{ backpack_url('year') }}'><i class='fa fa-star'></i> <span>{{ ucfirst(trans_choice('academico.years', 2)) }}</span></a></li>
  </ul>
</li>

<li><a href='{{ backpack_url('user') }}'><i class='fa fa-user'></i> <span>@lang_u('academico.users')</span></a></li>

<!-- Users, Roles Permissions -->
<li class="treeview">
  <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
    <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
    <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
  </ul>
</li>
