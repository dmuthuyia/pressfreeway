<style type="text/css">

.wazo17mobile {
  width: 100px;

  background-color: #0744bf;
  position: absolute;
  top: 75px;

  
}

.wazo17mobile li {
  float: left;

  width: 100%;


  background-color:#0744bf; 
  text-align: center;

  border-bottom: black 1px solid;
  padding: 2px;


}





</style>


@if(!Auth::check())

<div class="wazo17mobile">
  
  <ul class="wazo17mobilemenu">
    <li><a href="{{ route('home') }}">Home</a></li>
    

        @foreach($categories as $category)
            <?php 
                $catnames = substr($category->name, 0, 20)
            ?>
            <li><a href="{{url('/', [$category->url]; ?>">{{$catnames}}</a>

            </li>
        @endforeach
      



    <li><a href="{{ route('contact') }}">Contact us</a></li>

    

            <li><a href="{{ route('registration form') }}">Sign up</a></li>
            <li><a href="{{ route('signin') }}">login</a></li>

      
  
    </li>
  </ul>

</div>

@else


<div class="wazo17mobile">
  
  <ul class="wazo17mobilemenu">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="">Our Services</a>

        @foreach($categories as $category)
            <?php 
                $catnames = substr($category->name, 0, 20)
            ?>
            <li><a href="{{url('/', [$category->url]; ?>">{{$catnames}}</a>

            </li>
        @endforeach
      


    </li>
    <li><a href="{{ route('contact') }}">Contact us</a></li>
  
    

            <li><a href="{{ route('logout') }}">Log out</a></li>

      
  
    </li>
  </ul>

</div>


@endif