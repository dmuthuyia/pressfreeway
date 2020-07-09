<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Only CSS3 Dropdown Menu</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
<style type="text/css">
  


*, *:before, *:after {
  -webkit-border-sizing: border-box;
  -moz-border-sizing: border-box;
  border-sizing: border-box;
}

.wazo19mobile {
  width: 100%;
 /* margin: 50px auto;**/
}
.wazo19mobile > ul {
  list-style: none;
  padding: 0;
  margin: 0 0 20px 0;
}

.title {
  font-family: 'Pacifico';
  font-weight: norma;
  font-size: 40px;
  text-align: center;
  line-height: 1.4;
  color: #8c69e5;
}

.wazo19mobiledropdown {
  position: relative;
}
.wazo19mobiledropdown a {
  text-decoration: none;
}
.wazo19mobiledropdown [data-toggle="wazo19mobiledropdown"] {
  display: block;
  color: white;
  background: #8c69e5;
  -moz-box-shadow: 0 1px 0 #8c69e5 inset, 0 -1px 0 #8c69e5 inset;
  -webkit-box-shadow: 0 1px 0 #8c69e5 inset, 0 -1px 0 #8c69e5 inset;
  box-shadow: 0 1px 0 #d65548 inset, 0 -1px 0 #8c69e5 inset;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
  padding: 10px;
}
.wazo19mobiledropdown [data-toggle="wazo19mobiledropdown"]:hover {
  background: #8c69e5;
}
.wazo19mobiledropdown [data-toggle="wazo19mobiledropdown"]:before {
  position: absolute;
  display: block;
  content: '\25BC';
  font-size: 0.7em;
  color: #fff;
  top: 13px;
  right: 10px;
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  -webkit-transition: -webkit-transform 0.6s;
  transition: transform 0.6s;
}
.wazo19mobiledropdown > .wazo19mobiledropdown-menu {
  max-height: 0;
  overflow: hidden;
  list-style: none;
  padding: 0;
  margin: 0;
  -moz-transform: scaleY(0);
  -ms-transform: scaleY(0);
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -moz-transform-origin: 50% 0%;
  -ms-transform-origin: 50% 0%;
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -moz-transition: max-height 0.6s ease-out;
  -o-transition: max-height 0.6s ease-out;
  -webkit-transition: max-height 0.6s ease-out;
  transition: max-height 0.6s ease-out;
  animation: hideAnimation 0.4s ease-out;
  -moz-animation: hideAnimation 0.4s ease-out;
  -webkit-animation: hideAnimation 0.4s ease-out;
}
.wazo19mobiledropdown > .wazo19mobiledropdown-menu li {
  padding: 0;
}
.wazo19mobiledropdown > .wazo19mobiledropdown-menu li a {
  display: block;
  color: #6f6f6f;
  background: #EEE;
  -moz-box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  -webkit-box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  text-shadow: 0 -1px 0 rgba(255, 255, 255, 0.3);
  padding: 10px 10px;
}
.wazo19mobiledropdown > .wazo19mobiledropdown-menu li a:hover {
  background: #f6f6f6;
}
.wazo19mobiledropdown > input[type="checkbox"] {
  opacity: 0;
  display: block;
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
}
.wazo19mobiledropdown > input[type="checkbox"]:checked ~ .wazo19mobiledropdown-menu {
  max-height: 9999px;
  display: block;
  -moz-transform: scaleY(1);
  -ms-transform: scaleY(1);
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  animation: showAnimation 0.5s ease-in-out;
  -moz-animation: showAnimation 0.5s ease-in-out;
  -webkit-animation: showAnimation 0.5s ease-in-out;
  -moz-transition: max-height 2s ease-in-out;
  -o-transition: max-height 2s ease-in-out;
  -webkit-transition: max-height 2s ease-in-out;
  transition: max-height 2s ease-in-out;
}
.wazo19mobiledropdown > input[type="checkbox"]:checked + a[data-toggle="wazo19mobiledropdown"]:before {
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  -webkit-transition: -webkit-transform 0.6s;
  transition: transform 0.6s;
}

@keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@-moz-keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@-webkit-keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}
@-moz-keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}
@-webkit-keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}





</style>

  
</head>

<body>

  <div class="wazo19mobile">
  <ul>
    <li class="wazo19mobiledropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="wazo19mobiledropdown">Dashboard</a>
      <ul class="wazo19mobiledropdown-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </li>
    <li class="wazo19mobiledropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="wazo19mobiledropdown">Second Menu</a>
      <ul class="wazo19mobiledropdown-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </li>
    <li class="wazo19mobiledropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="wazo19mobiledropdown">Third Menu</a>
      <ul class="wazo19mobiledropdown-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </li>
  </ul>
</div>
  
  

</body>

</html>
