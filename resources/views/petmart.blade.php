@extends('master')



@section('stuff')


    <div id="body">

        <div id="content">


            <div class="search">
                <input type="text" name="s" value="Find"><button>&nbsp;</button>
                <label for="articles"><input type="radio" id="articles"> Articles</label>
                <label for="products"><input type="radio" id="products" checked> PetMart Products</label>
            </div>

            <div class="content">


                <ul>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/koi2.jpg')}}" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Food Area</h2>
                        <span><a href="{{url('petmart')}}">Dog Food</a></span>
                        <span><a href="{{url('petmart')}}">Cat Food</a></span>
                        <span><a href="{{url('petmart')}}">Bird Food</a></span>
                        <span><a href="{{url('petmart')}}">Fish Food</a></span>
                        <span><a href="{{url('petmart')}}">Reptile Food</a></span>
                        <span><a href="{{url('petmart')}}">Small Pet Food</a></span>
                        <span><a href="{{url('petmart')}}">Large Pet Food</a></span>
                        <span><a class="more" href="{{url('index')}}">View all</a></span>

                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/cat3.jpg')}}" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Accesories</h2>
                        <span><a href="{{url('petmart')}}">Oder Control</a></span>
                        <span><a href="{{url('petmart')}}">Liners</a></span>
                        <span><a href="{{url('petmart')}}">Scoops & Mats</a></span>
                        <span><a href="{{url('petmart')}}">Collars</a></span>
                        <span><a href="{{url('petmart')}}">Harnesses</a></span>
                        <span><a href="{{url('petmart')}}">ID Tags</a></span>
                        <span><a href="{{url('petmart')}}">Leashes</a></span>
                        <span><a class="more" href="{{url('index')}}">View all</a></span>
                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/dog2.jpg')}}" width="140" height="240" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Training & Behavior</h2>
                        <span><a href="{{url('petmart')}}">Dog Food</a></span>
                        <span><a href="{{url('petmart')}}">Cat Food</a></span>
                        <span><a href="{{url('petmart')}}">Bird Food</a></span>
                        <span><a href="{{url('petmart')}}">Fish Food</a></span>
                        <span><a href="{{url('petmart')}}">Reptile Food</a></span>
                        <span><a href="{{url('petmart')}}">Small Pet Food</a></span>
                        <span><a class="more" href="{{url('index')}}">View all</a></span>
                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/bird3.jpg')}}" width="140" height="240" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Health Center</h2>
                        <span><a href="{{url('petmart')}}">Multivitamins</a></span>
                        <span><a href="{{url('petmart')}}">Dental Care</a></span>
                        <span><a href="{{url('petmart')}}">First Aid Kits</a></span>
                        <span><a href="{{url('petmart')}}">Medications</a></span>
                        <span><a href="{{url('petmart')}}">Supplements</a></span>
                        <span><a href="{{url('petmart')}}">Eye & Ear Care</a></span>
                        <span><a href="{{url('petmart')}}">Hip & Joint Health</a></span>
                        <span><a class="more" href="{{url('index')}}">View all</a></span>
                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/bird-in-cage.jpg')}}" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Travel Essentials</h2>
                        <span><a href="{{url('petmart')}}">Car Barriers</a></span>
                        <span><a href="{{url('petmart')}}">Car Seat Covers</a></span>
                        <span><a href="{{url('petmart')}}">Car Seats</a></span>
                        <span><a href="{{url('petmart')}}">ramps</a></span>
                        <span><a href="{{url('petmart')}}">Seat Belts & Harnesses</a></span>
                        <span><a href="{{url('petmart')}}">Strollers</a></span>
                        <span><a href="{{url('petmart')}}">Travel Creates & Carrier</a></span>
                        <span><a class="more" href="{{url('index')}}">View all</a></span>
                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/puppy3.jpg')}}" width="140" height="240" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Grooming</h2>
                        <span><a href="{{url('petmart')}}">Brushes & Combs</a></span>
                        <span><a href="{{url('petmart')}}">Deodorizers</a></span>
                        <span><a href="{{url('petmart')}}">Cologne</a></span>
                        <span><a href="{{url('petmart')}}">Ear & Eya Cleaners</a></span>
                        <span><a href="{{url('petmart')}}">Nail Clippers</a></span>
                        <span><a href="{{url('petmart')}}">Shampoo</a></span>
                        <span><a href="{{url('petmart')}}">Conditioners</a></span>
                        <span><a href="{{url('petmart')}}">Shed Controls</a></span>
                        <span><a class="more" href="{{url('index')}}">View all</a></span>
                    </li>
                </ul>
            </div>

            <div id="sidebar">


                <a href="{{url('petmart')}}"><img src="{{asset('asset/images/discount.jpg')}}" width="300" height="790" alt="Pet Shop" title="Pet Shop"></a>


            </div>
        </div>

        <div class="featured">
            <ul>
                <li><a href="{{url('index')}}"><img src="{{asset('asset/images/organic-and-chemical-free.jpg')}}" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
                <li><a href="{{url('index')}}"><img src="{{asset('asset/images/good-food.jpg')}}" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
                <li class="last"><a href="{{url('index')}}"><img src="{{asset('asset/images/pet-grooming.jpg')}}" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
            </ul>

        </div>


    </div>



@endsection
