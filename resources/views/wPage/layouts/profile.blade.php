<ul class="nav nav-tabs">
    <li class="nav-item"><a href="{{ Route('history') }}" class="{{ Request::is('profile/history') ? 'active' : '' }} nav-link text-dark">Donation History</a></li>
    <li class="nav-item"><a href="{{ Route('status') }}" class="{{ Request::is('profile/status') ? 'active' : '' }} nav-link text-dark">Volunteer Status</a></li>
</ul>