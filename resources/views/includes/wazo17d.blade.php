<style type="text/css">

.wazo17 {
  width: 100%;
  height: 40px;
  background-color: #e58069;
  position: absolute;
  margin-top: 0px;
  z-index:99;


  
}

.wazo17 li {
  float: left;

 width: 200px;
  height: 40px;

  
  text-align: center;

  /*border-right: black 1px solid;*/
  text-decoration: none;
  list-style-type: none;
  line-height: 40px;
  


}



.wazo17menu li a {
  text-decoration: none;
  display: block;
  height: 100%;
  width: 100%;
  cursor: pointer;
  color: white;
  font-size: 18px;



}

.wazo17menu li a:hover {
  background-color: #e58060;
  color: white;

}

.wazo17submenu {
  display: none;
}

.wazo17submenu li a {
  background-color: #e58069;
  border: gray 1px solid;
  width: 200px;
  text-align: left;
  border-top: black 1px solid;
  padding: 5px;
  font-size: 16px;

}

.wazo17 ul li:hover > ul
{
  display:block;
}

.wazo17subsubmenu {
  display: none;

}

.wazo17submenu ul {

  position: absolute;
  margin-left: 200px;
  margin-top: -40px;

}

.wazo17subsubmenu li a {
  background-color: #e58069;
  border: gray 1px solid;

  text-align: left;
  border-top: black 1px solid;
  padding: 5px;
  font-size: 16px;
}

.wazo17 ul li:hover > ul li:hover > ul
{
  display:block;
}

</style>






<div class="wazo17">
  
  <ul class="wazo17menu">
    <li style="width: 300px"><a href="{{ route('home') }}">Shuleh School management system</a></li>

    <li style="width: 300px"><a href="{{ route('contact') }}">Precious brooks academy</a></li>




    <li style="float: right; width: 200px;"><a href="">Account</a>
    
          <ul class="wazo17submenu">
            <li><a href="{{ route('logout') }}">Log out</a></li>
            <li><a href="">To student</a></li>
            <li><a href="">To parent</a></li>
            <li><a href="">To mis</a></li>
          </ul>
      
  
    </li>
    <li style="float: right; width: 150px;"><a href="">To school website
    </a>
    </li>
    <li style="float: right; width: 200px;"><a href="">
    <b id="timetext" class="timetextcap" style=""></b></a>
    </li>



  </ul>

</div>
