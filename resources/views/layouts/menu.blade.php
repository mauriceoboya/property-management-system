<li class="{{ Request::is('roomtypes*') ? 'active' : '' }}">
    <a href="{{ route('roomtypes.index') }}"><i class="fa fa-institution"></i><span>Roomtypes</span></a>
</li>

<li class="{{ Request::is('roomnumbers*') ? 'active' : '' }}">
    <a href="{{ route('roomnumbers.index') }}"><i class="fa fa-edit"></i><span>Roomnumbers</span></a>
</li>

