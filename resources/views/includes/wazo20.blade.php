
<style type="text/css">
  


*, *:before, *:after {
    padding: 0;
    margin: 0;
    border: none;
    outline: none;
    -moz-box-sizing: border-box;
    box-sizing: border-box
    }

.wazo20wrapper {
  /*margin: 30px auto;*/
  max-width: 600px;
}
.wazo20dropdownbox {
  margin: 0 auto;
  width: 200px;
  /*margin-top: 40px;*/
  background: rgb(129,111,127);
  color: rgb(254,238,223);
  cursor: pointer;
}

.wazo20dropdownbox > p {
  padding: 5px 10px;
  font-size: 1.25em;
  line-height: 1.4em;
  user-select: none;
  -moz-user-select:none;
  /* Safari */
  -khtml-user-select: none;
}

ul.wazo20menu {
  position: relative;
  margin: 0 auto;
  width: 200px;
  overflow: hidden;
  height: 0;
  margin-top: 10px;
     -webkit-transition: all 0.3s ease-in; 
   -moz-transition: all 0.3s ease-in;
     -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
  /*-moz-transform:scale(0); */
  background: rgb(129,111,127);
  color: rgb(254,238,223);
  cursor: pointer;
  user-select: none;
  -moz-user-select:none;
  /* Safari */
  -khtml-user-select: none;
}

ul.wazo20menu li {
  padding: 2px 10px;
    font-size: 1.25em;
  line-height: 1.4em;
       -webkit-transition: all 0.3s ease-in; 
   -moz-transition: all 0.3s ease-in;
     -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
  border-bottom: 1px dotted rgb(254,238,223);
}
ul.wazo20menu li:hover {
  padding-left: 20px;
  color: rgb(129,111,127);
  background: rgb(254,238,223);
}

.wazo20menu.showMenu {
  /*-moz-transform:scale(1);*/
  height: 165px;
}

</style>
  


  <div class="wazo20wrapper">
<div class="wazo20dropdownbox">
  <p>where do you live?</p>
</div> 
<ul class="wazo20menu">
    <li>Gera</li>
    <li>Berlin</li>
    <li>Melbourne</li>
    <li>New York</li>
    <li>Dresden</li> 
</ul>
</div>


  

<script type="text/javascript">
  
$(document).ready(function(){
  $(".wazo20dropdownbox").click(function(){
    $(".wazo20menu").toggleClass("showMenu");
      $(".wazo20menu > li").click(function(){
        $(".wazo20dropdownbox > p").text($(this).text());
        $(".wazo20menu").removeClass("showMenu");
      });
  });
  
});

</script>

