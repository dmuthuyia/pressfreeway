<style type="text/css">



</style>


@if(!Auth::check())

<div class="wazo17c">
  
  <ul class="wazo17cmenu">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="">Our School</a>
      <ul class="wazo17csubmenu">
        <li><a href="">Security</a>
          <ul class="wazo17csubsubmenu">
            <li><a href="">Security guards</a></li>
            <li><a href="">Dog section patrolling</a></li>
            <li><a href="">CCTV solutions</a></li>
            <li><a href="">Alarm response </a></li>
            <li><a href="">Safes</a></li>
            <li><a href="">Electric fence</a></li>
          </ul>

        </li>
        <li><a href="">Our School</a>
          <ul class="wazo17csubsubmenu">
            <li><a href="">Residential</a></li>
            <li><a href="">Commercial</a></li>
            <li><a href="">Property management system</a></li>
          </ul>
        </li>
        <li><a href="">Waste management</a></li>
        <li><a href="">Moving & car hire</a></li>
        <li><a href="">Marketing & branding</a></li>
      </ul>

    </li>
    <li><a href="{{ route('contact') }}">Students</a></li>
    <li><a href="{{ route('contact') }}">Parents</a></li>
    <li><a href="{{ route('contact') }}">Employees</a></li>

    <li><a href="{{ route('contact') }}">Contact us</a></li>
    <li style="float: right; width: 200px;"><a href="{{ route('username') }}"><font style="font-size: 10px; line-height: 40px; vertical-align: middle;">(students,parents & staff)</font>SPS</a>
      
  
    </li>
  </ul>

</div>

@else

<div class="wazo17c">
  
  <ul class="wazo17cmenu">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="">Our School</a>
      <ul class="wazo17csubmenu">
        <li><a href="">Security</a>
          <ul class="wazo17csubsubmenu">
            <li><a href="">Security guards</a></li>
            <li><a href="">Dog section patrolling</a></li>
            <li><a href="">CCTV solutions</a></li>
            <li><a href="">Alarm response </a></li>
            <li><a href="">Safes</a></li>
            <li><a href="">Electric fence</a></li>
          </ul>

        </li>
        <li><a href="">Our School</a>
          <ul class="wazo17csubsubmenu">
            <li><a href="">Residential</a></li>
            <li><a href="">Commercial</a></li>
            <li><a href="">Property management system</a></li>
          </ul>
        </li>
        <li><a href="">Waste management</a></li>
        <li><a href="">Moving & car hire</a></li>
        <li><a href="">Marketing & branding</a></li>
      </ul>

    </li>
    <li><a href="{{ route('contact') }}">Students</a></li>
    <li><a href="{{ route('contact') }}">Parents</a></li>
    <li><a href="{{ route('contact') }}">Employees</a></li>

    <li><a href="{{ route('contact') }}">Contact us</a></li>
    <li style="float: right; width: 200px;"><a href="">Account</a>
    
          <ul class="wazo17csubmenu">
            <li><a href="{{ route('logout') }}">Log out</a></li>
            <li><a href="">To student</a></li>
            <li><a href="">To parent</a></li>
            <li><a href="">To mis</a></li>
          </ul>
      
  
    </li>
  </ul>

</div>
@endif