


<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
    <title>Pet Shop</title>
    <meta  charset=iso-8859-1" />
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <link href="{{asset('asset/css/ie6.css')}}" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 7]>
    <link href="{{asset('asset/css/ie7.css')}}" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>

<body>


<div id="header">
    <a href="{{url('index')}}" id="logo"><img src="{{asset('asset/images/logo.gif')}}" width="310" height="114" alt="" title=""></a>
    <ul class="navigation">
        <li class="active"><a href="{{url('index')}}">Home</a></li>
        <li><a href="{{url('petmart')}}">PetMart</a></li>
        <li><a href="{{url('about')}}">About us</a></li>
        <li><a href="{{url('blog')}}">Blog</a></li>
        <li><a href="{{url('petguide')}}">PetGuide</a></li>
        <li><a href="{{url('contact')}}">Contact us</a></li>
    </ul>
</div>


@yield('stuff')

<div class="featured">
    <ul>
        <li><a href="{{url('index')}}"><img src="{{asset('asset/images/organic-and-chemical-free.jpg')}}" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
        <li><a href="{{url('index')}}"><img src="{{asset('asset/images/good-food.jpg')}}" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
        <li class="last"><a href="{{url('index')}}"><img src="{{asset('asset/images/pet-grooming.jpg')}}" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
    </ul>

</div>

<div id="footer">
    <div class="section">
        <ul>
            <li>
                <img src="{{asset('asset/images/friendly-pets.jpg')}}" width="240" height="186" alt="Pet Shop" title="Pet Shop">
                <h2><a href="{{url('index')}}">Friendly Pets</a></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonummy nib. <a class="more" href="{{url('index')}}">Read More</a>
                </p>
            </li>
            <li>
                <img src="{{asset('asset/images/pet-lover2.jpg')}}" width="240" height="186" alt="Pet Shop" title="Pet Shop">
                <h2><a href="{{url('index')}}">How dangerous are they</a></h2>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="{{url('index')}}">Read More</a>
                </p>
            </li>
            <li>
                <img src="{{asset('asset/images/healthy-dog.jpg')}}" width="240" height="186" alt="Pet Shop" title="Pet Shop">
                <h2><a href="{{url('index')}}">Keep them healthy</a></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonu mmy. <a class="more" href="{{url('index')}}">Read More</a>
                </p>
            </li>
            <li>

                <h2><a href="{{url('index')}}">Love...love...love...pets</a></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diameusim. <a class="more" href="{{url('index')}}">Read More</a>
                </p>
                <img src="{{asset('asset/images/pet-lover.jpg')}}" width="240" height="186" alt="Pet Shop" title="Pet Shop">
            </li>
        </ul>
    </div>
    <div id="footnote">
        <div class="section">
            &copy; 2011 <a href="{{url('index')}}">Petshop</a>. All Rights Reserved.
        </div>
    </div>
</div>


</body>
</html>
