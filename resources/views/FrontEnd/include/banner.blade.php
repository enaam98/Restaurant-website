<!-- banner -->
<div class="banner">
    <!-- header -->
    <div class="header">
        <div class="w3ls-header"><!-- header-one --> 
            <div class="container">
                <div class="w3ls-header-left">
                    <p>Free home delivery at your doorstep For Above $30</p>
                </div>
                <div class="w3ls-header-right">
                    <ul> 
                        <li class="head-dpdn">
                            <i class="fa fa-phone" aria-hidden="true"></i> Call us: +01 222 33345 
                        </li> 
                        <li class="head-dpdn">
                            <a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                        </li> 
                        <li class="head-dpdn">
                            <a href="signup.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
                        </li> 
                        <li class="head-dpdn">
                            <a href="offers.html"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
                        </li> 
                        <li class="head-dpdn">
                            <a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div> 
            </div>
        </div>
        <!-- //header-one --> 
       <!-- navigation -->
        <div class="navigation agiletop-nav">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header w3l_logo">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>  
                        <h1><a style="color:orangered" href="{{url('/home')}}">Otlob<span>Best Food Collection</span></a></h1>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav navbar-right">
                            @foreach ($categories as $category)
                                
                            <li><a style="color:orangered" href="{{route('category_dish',['category_id'=>$category->category_id])}}" >{{$category->category_name}}</a></li>	

                            @endforeach
                         
                            <li><a style="color:orangered" href="#">About</a></li> 
                            
                            <li><a style="color:orangered" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="cart cart box_1"> 
                        <form action="#" method="post" class="last"> 
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="display" value="1" />
                            <button class="w3view-cart" type="submit" name="submit" value=""><i style="color:orangered"  class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>   
                    </div> 
                </nav>
            </div>
        </div>
        <!-- //navigation --> 
    </div>
    <!-- //header-end --> 
    <!-- banner-text -->
    <div class="banner-text">	
        <div class="container">
            <h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2>
            <div class="agileits_search">
                <form action="#" method="post">
                    <input name="Search" type="text" placeholder="Enter Your Area Name" required="">
                    <select id="agileinfo_search" name="agileinfo_search" required="">
                        <option value="">Popular Cities</option>
                        <option value="navs">New York</option>
                        <option value="quotes">Los Angeles</option>
                        <option value="videos">Chicago</option>
                        <option value="news">Phoenix</option>
                        <option value="notices">Fort Worth</option>
                        <option value="all">Other</option>
                    </select>
                    <input type="submit" value="Search">
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- //banner -->   