
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


<style type="text/css">
  

a {
  text-decoration: none;
  color: inherit;
}

* {
  box-sizing: border-box;
}

.wazo11 {
  display: block;
  position: relative;
  cursor: pointer;
}

.wazo11-title {
  display: block;
  width: 150px;
  height: 40px;
  padding: 12px 0 0;
  background: #05b1c0;
  text-align: center;
  color: #ffffff;
  font-weight: bold;
  text-transform: uppercase;
  transition: 0.3s background-color;
}

.wazo11-title:before {
  content: "";
  display: block;
  height: 0;
  border-top: 5px solid #9dc852;
  border-left: 75px solid transparent;
  border-right: 75px solid transparent;
  border-bottom: 0 solid #dddddd;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 101;
  transition: 0.2s 0.2s border-top ease-out, 0.3s border-top-color;
}

.wazo11-title:hover {
  background: #8db842;
}

.wazo11-title:hover:before {
  border-top-color: #8db842;
}

.wazo11:hover > .wazo11-title:before {
  border-top-width: 0;
  transition: 0.2s border-top-width ease-in, 0.3s border-top-color;
}

.wazo11-title:after {
  content: "";
  display: block;
  height: 0;
  border-left: 75px solid transparent;
  border-right: 75px solid transparent;
  border-bottom: 0 solid #ebebeb;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 101;
  transition: 0.2s border-bottom ease-in;
}

.wazo11:hover > .wazo11-title:after {
  border-bottom-width: 5px;
  transition: 0.2s 0.2s border-bottom-width ease-out;
}

.wazo11-title_2nd {
  background: #05b1c0;
}

.wazo11-title_2nd:hover {
  background: #3e86a3;
}

.wazo11-title_2nd:before {
  border-top-color: #05b1c0;
}

.wazo11-title_2nd:hover:before {
  border-top-color: #3e86a3;
}

.wazo11-title_3rd {
  background: #05b1c0;
}

.wazo11-title_3rd:hover {
  background: #b96666;
}

.wazo11-title_3rd:before {
  border-top-color: #c97676;
}

.wazo11-title_3rd:hover:before {
  border-top-color: #b96666;
}

.wazo11-title_4th {
  background: #05b1c0;
}

.wazo11-title_4th:hover {
  background: #cb9b48;
}

.wazo11-title_4th:before {
  border-top-color: #dbab58;
}

.wazo11-title_4th:hover:before {
  border-top-color: #cb9b48;
}

.wazo11-dropdown {
  min-width: 100%;
  padding: 15px 0;
  position: absolute;
  background: #ebebeb;
  z-index: 100;
  transition: 0.5s padding, 0.5s background;
}

.wazo11-dropdown:after {
  content: "";
  display: block;
  height: 0;
  border-top: 5px solid #ebebeb;
  border-left: 75px solid transparent;
  border-right: 75px solid transparent;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 101;
  transition: 0.5s border-top;
}

.wazo11:not(:hover) > .wazo11-dropdown {
  padding: 4px 0;
  background: #dddddd;
  z-index: 99;
}

.wazo11:not(:hover) > .wazo11-dropdown:after {
  border-top-color: #dddddd;
}

.wazo11:not(:hover) > .wazo11-title:after {
  border-bottom-color: #dddddd;
}

.wazo11-dropdown > * {
  overflow: hidden;
  height: 30px;
  padding: 5px 10px;
  background: transparent;
  white-space: nowrap;
  transition: 0.5s height cubic-bezier(0.73, 0.32, 0.34, 1.5), 0.5s padding cubic-bezier(0.73, 0.32, 0.34, 1.5), 0.5s margin cubic-bezier(0.73, 0.32, 0.34, 1.5), 0.5s 0.2s color, 0.2s background-color;
}

.wazo11-dropdown > *:hover {
  background: rgba(0, 0, 0, 0.1);
}

.wazo11:not(:hover) > .wazo11-dropdown > * {
  visibility: hidden;
  height: 0;
  padding-top: 0;
  padding-bottom: 0;
  margin: 0;
  color: rgba(25, 25, 25, 0);
  transition: 0.5s 0.1s height, 0.5s 0.1s padding, 0.5s 0.1s margin, 0.3s color, 0.6s visibility;
  z-index: 99;
}

.hList > * {
  float: left;
}

.hList > * + * {
  margin-left: 0;
}




</style>


  <ul class="hList">
  <li>
    <a href="#click" class="wazo11">
      <h2 class="wazo11-title">animals</h2>
      <ul class="wazo11-dropdown">
        <li>cat</li>
        <li>dog</li>
        <li>horse</li>
        <li>cow</li>
        <li>pig</li>
      </ul>
    </a>
  </li>
  <li>
    <a href="#click" class="wazo11">
      <h2 class="wazo11-title wazo11-title_2nd">names</h2>
      <ul class="wazo11-dropdown">
        <li>Kevin</li>
        <li>Jim</li>
        <li>Andy</li>
      </ul>
    </a>
  </li>
  <li>
    <a href="#click" class="wazo11">
      <h2 class="wazo11-title wazo11-title_3rd">things</h2>
      <ul class="wazo11-dropdown">
        <li>bench</li>
        <li>pizza</li>
        <li>Honda CB125</li>
        <li>space</li>
        <li>black matter</li>
        <li>apple</li>
        <li>philodendron</li>
        <li>liver</li>
        <li>brass</li>
      </ul>
    </a>
  </li>
  <li>
    <a href="#click" class="wazo11">
      <h2 class="wazo11-title wazo11-title_4th">Movies</h2>
      <ul class="wazo11-dropdown">
        <li>Godzilla</li>
        <li>Man on Wire</li>
        <li>Spirited Away</li>
        <li>Interstellar</li>
      </ul>
    </a>
  </li>
</ul>