@if(!Auth::check())


<ul id="wazo6">
    
    <li><a href="{{ route('home') }}" class="drop">Home</a></li>

    <li><a href="#" class="drop">Sell vehicle</a>

    <li> <a href="" class="drop">Browse vehicles</a>
        <div class="dropdown_3columns">
            <div class="col_1">
    
                <ul class="greybox">

                <div class="browseheader" >By Make:</div> 

                    @foreach($producers as $producer)
                        <li><a href="#">{{$producer -> name}}</a></li>
                    @endforeach
                </ul>   
    
            </div>
            
            <div class="col_1">
    
                <ul class="greybox">

                <div class="browseheader" >By Body style:</div> 
                    <li><a href="#">Sedan / Saloon</a></li>
                    <li><a href="#">Station wagon</a></li>
                    <li><a href="#">Hatchback</a></li>
                    <li><a href="#">SUV</a></li>
                    <li><a href="#">Vans / pick ups</a></li>
                </ul>   
    
            </div>
            
            <div class="col_1">
    
                <ul class="greybox">

                <div class="browseheader" >By Year:</div> 
                    <li><a href="#">Below 1990</a></li>
                    <li><a href="#">Below 1996</a></li>
                    <li><a href="#">Below 2000</a></li>
                    <li><a href="#">Below 2010</a></li>
                    <li><a href="#">Below 2018</a></li>
                </ul>   
    
            </div>
            <div class="col_3">
                    <h2></h2>
                <div class="col_1">
        
                    <ul class="greybox">

                    <div class="browseheader" >By Price Ksh:</div> 
                        <li><a href="#">Below 300,000</a></li>
                        <li><a href="#">Below 600,000</a></li>
                        <li><a href="#">Below 1,000,000</a></li>
                        <li><a href="#">Below 6,000,000</a></li>
                        <li><a href="#">Above 6,000,000</a></li>
                    </ul>   
        
                </div>

                <div class="col_1">
        
                    <ul class="greybox">

                    <div class="browseheader" >Also:</div> 
                        <li><a href="#">Disel</a></li>
                        <li><a href="#">petrol</a></li>
                        <li><a href="#">left hand drive</a></li>
                    </ul>   
        
                </div>


                <div class="col_1">
        
                    <ul class="greybox">

                    <div class="browseheader" >External links:</div> 
                        <li><a href="#">Customized and Salvage vehicles</a></li>

                    </ul>   
        
                </div>
                

            </div>
        </div>

   </li> 

    <li><a href="#" class="drop">import</a>
    
        <div class="dropdown_5columns">
        
            <div class="col_5">
                <h2>This is an example of a large container with 5 columns</h2>
            </div>
            
            <div class="col_1">
                <p class="black_box">This is a dark grey box text. Fusce in metus at enim porta lacinia vitae a arcu. Sed sed lacus nulla mollis porta quis.</p>
            </div>
            
            <div class="col_1">
                <p>Phasellus vitae sapien ac leo mollis porta quis sit amet nisi. Mauris hendrerit, metus cursus accumsan tincidunt.</p>
            </div>
            

        
        </div>
    
    </li>

    
    
    </li>

    <li><a href="#" class="drop">Get vehicle insurance</a>
    
    </li>

    <li class="wazo6_right"><a href="#" class="drop">Account</a>
    
        <div class="dropdown_1column align_right">
        
                <div class="col_1">
                
                    <ul class="simple">
                        <li><a href="{{ route('signin') }}">Login</a></li>
                        <li><a href="{{ route('registration form') }}">Sign up</a></li>
                    </ul>   
                     
                </div>
                
        </div>
        
    </li>




</ul>

@else

<ul id="wazo6">
    
    <li><a href="{{ route('home') }}" class="drop">Home</a></li>

    <li><a href="#" class="drop">Sell vehicle</a>

    <li> <a href="" class="drop">Browse vehicles</a>
        <div class="dropdown_3columns">
            <div class="col_1">
    
                <ul class="greybox">

                <div class="browseheader" >By Make:</div> 
                    @foreach($producers as $producer)
                        <li><a href="#">
                        <img width="20" class="magesize" src="<?php echo asset("uploads/producers/$producer->producer_img")?>"></img>
                        {{$producer -> name}}</a></li>
                    @endforeach
                </ul>   
    
            </div>
            
            <div class="col_1">
    
                <ul class="greybox">

                <div class="browseheader" >By Body style:</div> 
                    <li><a href="#">Sedan / Saloon</a></li>
                    <li><a href="#">Station wagon</a></li>
                    <li><a href="#">Hatchback</a></li>
                    <li><a href="#">SUV</a></li>
                    <li><a href="#">Vans / pick ups</a></li>
                </ul>   
    
            </div>
            
            <div class="col_1">
    
                <ul class="greybox">

                <div class="browseheader" >By Year:</div> 
                    <li><a href="#">Below 1990</a></li>
                    <li><a href="#">Below 1996</a></li>
                    <li><a href="#">Below 2000</a></li>
                    <li><a href="#">Below 2010</a></li>
                    <li><a href="#">Below 2018</a></li>
                </ul>   
    
            </div>
            <div class="col_3">
                    <h2></h2>
                <div class="col_1">
        
                    <ul class="greybox">

                    <div class="browseheader" >By Price:</div> 
                        <li><a href="#">Below 300,000</a></li>
                        <li><a href="#">Below 600,000</a></li>
                        <li><a href="#">Below 1,000,000</a></li>
                        <li><a href="#">Below 6,000,000</a></li>
                        <li><a href="#">Above 6,000,000</a></li>
                    </ul>   
        
                </div>

                <div class="col_1">
        
                    <ul class="greybox">

                    <div class="browseheader" >Also:</div> 
                        <li><a href="#">Disel</a></li>
                        <li><a href="#">petrol</a></li>
                        <li><a href="#">left hand drive</a></li>
                    </ul>   
        
                </div>

                <div class="col_1">
        
                    <ul class="greybox">

                    <div class="browseheader" >External links:</div> 
                        <li><a href="#">Customized and Salvage vehicles</a></li>

                    </ul>   
        
                </div>


            </div>
        </div>

   </li> 

    <li><a href="#" class="drop">import</a>
    
        <div class="dropdown_5columns">
        
            <div class="col_5">
                <h2>This is an example of a large container with 5 columns</h2>
            </div>
            
            <div class="col_1">
                <p class="black_box">This is a dark grey box text. Fusce in metus at enim porta lacinia vitae a arcu. Sed sed lacus nulla mollis porta quis.</p>
            </div>
            
            <div class="col_1">
                <p>Phasellus vitae sapien ac leo mollis porta quis sit amet nisi. Mauris hendrerit, metus cursus accumsan tincidunt.</p>
            </div>
            

        
        </div>
    
    </li>

    
    
    </li>

    <li><a href="#" class="drop">Get vehicle insurance</a>
    
    </li>

    <li class="wazo6_right"><a href="#" class="drop">Account</a>
    
        <div class="dropdown_1column align_right">
        
                <div class="col_1">
                
                    <ul class="simple">
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li><a href="{{ route('logout') }}">Log out</a></li>
                    </ul>   
                     
                </div>
                
        </div>
        
    </li>




</ul>

@endif