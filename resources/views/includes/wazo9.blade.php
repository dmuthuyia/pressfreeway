
<style>



    </style>

  

@if(!Auth::check())

  <ul class="wazo9 cf">
  <li><a href="{{ route('home') }}">Home</a></li>
  
  <li>
    <a href="{{ route('hair.care') }}">Hair care</a>
    <ul class="subwazo9">
      <li><a href="{{ route('hair.care') }}">All</a></li>
      <li><a href="">Shea butter</a></li>
      <li><a href="">Hair Lotion</a>
      <li><a href="">Hair spray</a>
      <li><a href="">gel</a>
      <li><a href="">Hair conditional</a>
      <li><a href="">Hair shampoo</a>
      <li><a href="">Hair treatment</a></li>
    </ul>           
  </li>
  <li>
  <a href="{{ route('skin.care') }}">Skin care</a>

    <ul class="subwazo9">
      <li><a href="{{ route('skin.care') }}">All</a></li>
      <li><a href="">Skin lotion</a></li>
    </ul>   

  </li>
  <li><a href="{{ url('/magazine') }}">Blog</a></li>
  <li><a href="{{ route('contact') }}">Contact us</a></li>
  <li>
    <a href="">Account</a>
    <ul class="subwazo9">
      <li><a href="{{ route('signin') }}">Login</a></li>
      <li><a href="{{ route('registration form') }}">sign up</a></li>
    </ul>           
  </li>

</ul>
  
@else 

  <ul class="wazo9 cf">
  <li><a href="{{ route('home') }}">Home</a></li>
  
  <li>
    <a href="{{ route('hair.care') }}">Hair care</a>
    <ul class="subwazo9">
      <li><a href="{{ route('hair.care') }}">All</a></li>
      <li><a href="">Shea butter</a></li>
      <li><a href="">Hair Lotion</a>
      <li><a href="">Hair spray</a>
      <li><a href="">gel</a>
      <li><a href="">Hair conditional</a>
      <li><a href="">Hair shampoo</a>
      <li><a href="">Hair treatment</a></li>
    </ul>           
  </li>
  <li>
  <a href="{{ route('skin.care') }}">Skin care</a>

    <ul class="subwazo9">
      <li><a href="{{ route('skin.care') }}">All</a></li>
      <li><a href="">Skin lotion</a></li>
    </ul>   

  </li>
  <li><a href="{{ url('/magazine') }}">Blog</a></li>
  <li><a href="{{ route('contact') }}">Contact us</a></li>
  <li>
    <a href="">Account</a>
    <ul class="subwazo9">
      <li><a href="{{ route('profile') }}">profile</a></li>
      <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>           
  </li>
</ul>


@endif