
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


<style type="text/css">
  

.wazo10 {
  display: inline-block;
  -webkit-box-shadow: 0 0 70px #fff;
  -moz-box-shadow: 0 0 70px #fff;
  box-shadow: 0 0 70px #fff;
  margin-top: 0px;
}

/* a little "umph" */
.decorr {
  background: #6EAF8D;
  background: -webkit-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -moz-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -o-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: linear-gradient(left, white 50%, #6EAF8D 50%);
  background-size: 50px 25%;;
  padding: 2px;
  display: block;
}

a {
  text-decoration: none;
  color: #05b1c0;
  display: block;
}

ul {
  list-style: none;
  position: relative;
  text-align: left;
}

li {
  float: left;
}

/* clear'n floats */
ul:after {
  clear: both;
}

ul:before,
ul:after {
    content: " ";
    display: table;
}

nav {
  position: relative;
  background: #2B2B2B;
  background-image: -webkit-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -moz-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -o-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  text-align: center;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px #0E0E0E;
  -webkit-box-shadow: 2px 2px 3px #888;
  -moz-box-shadow: 2px 2px 3px #888;
  box-shadow: 2px 2px 3px #888;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

/* prime */
ul.primary li a {
  display: block;
  padding: 20px 30px;
  border-right: 1px solid #3D3D3D;
}

ul.primary li:last-child a {
  border-right: none;
}

ul.primary li a:hover {
  
  color: #000;
}

/* wazo10subs */
ul.wazo10sub {
  position: absolute;
  z-index: 200;
  box-shadow: 2px 2px 0 #BEBEBE;
  width: 35%;
  display:none;
}

ul.wazo10sub li {
  float: none;
  margin: 0;
}

ul.wazo10sub li a {
  border-bottom: 1px dotted #ccc;
  border-right: none;
  color: #000;
  padding: 15px 30px;
}

ul.wazo10sub li:last-child a {
  border-bottom: none;
}

ul.wazo10sub li a:hover {
  color: #000;
  background: #eeeeee;
}

/* wazo10sub display*/
ul.primary li:hover ul {
  display: block;
  background: #fff;
}

/* keeps the tab background white */
ul.primary li:hover a {
  background: #fff;
  color: #666;
  text-shadow: none;
}

ul.primary li:hover > a{
  color: #000;
} 

@media only screen and (max-width: 600px) {
  .decor {
    padding: 3px;
  }
  
  .wazo10 {
    width: 100%;
    margin-top: 0px;
  }
  
   li {
    float: none;
  }
  
  ul.primary li:hover a {
    background: none;
    color: #8B8B8B;
    text-shadow: 1px 1px #000;
  }

  ul.primary li:hover ul {
    display: block;
    background: #272727;
    color: #fff;
  }
  
  ul.wazo10sub {
    display: block;  
    position: static;
    box-shadow: none;
    width: 100%;
  }
  
  ul.wazo10sub li a {
    background: #272727;
    border: none;
    color: #8B8B8B;
  }
  
  ul.wazo10sub li a:hover {
    color: #ccc;
    background: none;
  }
}



</style>


<div class="wazo10">
<span class="decor"></span>
<nav>
  <ul class="primary">
    <li>
      <a href="">Dog</a>
      <ul class="wazo10sub">
        <li><a href="">Bulldog</a></li>
        <li><a href="">Mastiff</a></li>
        <li><a href="">Labrador</a></li>
        <li><a href="">Mutt</a></li>
      </ul>
    </li>
    <li>
      <a href="">Cat</a>
      <ul class="wazo10sub">
        <li><a href="">Tabby</a></li>
        <li><a href="">Black Cat</a></li>
        <li><a href="">Wrinkly Cat</a></li>
      </ul>
    </li>
    <li>
      <a href="">Bird</a>
      <ul class="wazo10sub">
        <li><a href="">Humming Bird</a></li>
        <li><a href="">Hawk</a></li>
        <li><a href="">Crow</a></li>
      </ul>  
    </li>
    <li>
      <a href="">Horse</a>
      <ul class="wazo10sub">
        <li><a href="">Brown Horse</a></li>
        <li><a href="">Race Horse</a></li>
        <li><a href="">Tall Horse</a></li>
      </ul>  
    </li>
    <li>
      <a href="">Burger</a>
      <ul class="wazo10sub">
        <li><a href="">Cheesy</a></li>
        <li><a href="">More Ketchup</a></li>
        <li><a href="">Some Mustard</a></li>
        <li><a href="">Extra Butter</a></li>
      </ul>  
    </li>
  </ul>
</nav>
</div>

