@extends('master')



@section('stuff')


    <div id="body">

        <div class="banner">&nbsp;</div>

        <div id="content">

            <div class="content">
                <ul>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/puppy.jpg')}}" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>What they need</h2>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="{{url('index')}}">View all</a></p>
                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/cat.jpg')}}" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Something good</h2>
                        <p>Gothica, quam nun c putamus parum claram, anteposuerit litterarum formas humani tatis per seacula. <a class="more" href="{{url('index')}}">View all</a></p>
                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/koi.jpg')}}" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Kinds of Fish</h2>
                        <p>Quam nunc putamus parum claram, antep osuerit litter arum formas humanitatis per seacula quarta. <a class="more" href="{{url('index')}}">View all</a></p>
                    </li>
                    <li>
                        <a href="{{url('index')}}"><img src="{{asset('asset/images/bird.jpg')}}" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
                        <h2>Fun birds</h2>
                        <p>Mirum est notare quam littera gothica , quam nunc putamus parum claram, anteposuerit. <a class="more" href="{{url('index')}}">View all</a></p>
                    </li>
                </ul>
            </div>

            <div id="sidebar">
                <div class="search">
                    <input type="text" name="s" value="Find"><button>&nbsp;</button>
                    <label for="articles"><input type="radio" id="articles"> Articles</label>
                    <label for="products"><input type="radio" id="products" checked> PetMart Products</label>
                </div>

                <div class="section">
                    <ul class="navigation">
                        <li class="active"><a href="{{url('index')}}">Shopping Guides</a></li>
                        <li><a href="{{url('index')}}">Discounted Items</a></li>
                    </ul>

                    <div class="aside">
                        <div>
                            <div>
                                <ul>
                                    <li><a href="{{url('index')}}">Pet Accesories </a> <a class="more" href="{{url('index')}}">see all</a></li>
                                    <li><a href="{{url('index')}}">Bath Essentials</a> <a class="more" href="{{url('index')}}">see all</a></li>
                                    <li><a href="{{url('index')}}">Pet Food</a> <a class="more" href="{{url('index')}}">see all</a></li>
                                    <li><a href="{{url('index')}}">Pet Vitamins</a> <a class="more" href="{{url('index')}}">see all</a></li>
                                    <li><a href="{{url('index')}}">Pet Needs</a> <a class="more" href="{{url('index')}}">see all</a></li>
                                    <li><a href="{{url('index')}}">Pet Toy and Treats</a> <a class="more" href="{{url('index')}}">see all</a></li>
                                    <li><a href="{{url('index')}}">Pet Supplies</a> <a class="more" href="{{url('index')}}">see all</a></li>
                                    <li><a href="{{url('index')}}">Pet Emergency Kit</a> <a class="more" href="{{url('index')}}">see all</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>



@endsection
