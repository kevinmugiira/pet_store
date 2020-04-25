@extends('master')



@section('stuff')


    <div id="body">

        <div id="content">

            <div class="content">
                <div class="about">
                    <h2>ABOUT US</h2>
                    <ul>
                        <li>
                            <h2><a href="{{url('about')}}">We Have Free Templates for Everyone</a></h2>
                            <p>
                                Our website templates are created with inspiration, checked for quality
                                and originality and meticulously sliced and coded. Whats more, theyre
                                absolutely free! You can do a lot with them. You can modify them. You
                                can use them to design websites for clients, so long as you agree with
                                the <a href="http://www.freewebsitetemplates.com/about/termsofuse/">Terms of Use.</a> You can even remove all our links if you want to.
                            </p>
                        </li>
                        <li>
                            <h2><a href="{{url('about')}}">We Have More Templates for You</a></h2>
                            <p>
                                Looking for more templates? Just browse through all our <a href="http://www.freewebsitetemplates.com/">Free Website
                                    Templates</a> and find what youre looking for. But if you dont find any
                                website template you can use, you can try our <a href="http://www.freewebsitetemplates.com/">Free Web Design</a> service
                                and tell us all about it. Maybe youre looking for something different,
                                something special. And we love the challenge of doing something
                                different and something special.
                            </p>
                        </li>
                        <li>
                            <h2><a href="{{url('about')}}">Be Part of Our Community</a></h2>
                            <p>
                                If youre experiencing issues and concerns about this website template,
                                join the discussion <a href="http://www.freewebsitetemplates.com/forum">on our forum</a> and meet other people in the
                                community who share the same interests with you.
                            </p>
                        </li>
                        <li>
                            <h2><a href="{{url('about')}}">Template details</a></h2>
                            <p>
                                <span>Version 19</span>
                                Website Template details, discussion and updates for this <a href="http://www.freewebsitetemplates.com/forum/f18/pet-shop-web-template-18806">Petshop Template</a>.
                                Website Template design by <a href="http://www.freewebsitetemplates.com/">Free Website Templates.</a>
                                Please feel free to remove some or all the text and links of this page and
                                replace it with your own About content.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="sidebar">


                <div class="featured">
                    <h2>Featured Topic</h2>
                    <ul>
                        <li>
                            <a href="{{url('about')}}"><img src="{{asset('asset/images/puppy2.jpg')}}" width="115" height="155" alt="Pet Shop" title="Pet Shop"></a>
                            <h2><a href="{{url('about')}}">What they need</a></h2>
                            <p>
                                Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="{{url('about')}}">read more</a>
                            </p>

                        </li>
                        <li>
                            <a href="{{url('about')}}"><img src="{{asset('asset/images/bird2.jpg')}}" width="115" height="155" alt="Pet Shop" title="Pet Shop"></a>
                            <h2><a href="{{url('about')}}">Fun birds</a></h2>
                            <p>
                                Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="{{url('about')}}">read more</a>
                            </p>

                        </li>
                        <li class="last">
                            <a href="{{url('about')}}"><img src="{{asset('asset/images/cat2.jpg')}}" width="115" height="155" alt="Pet Shop" title="Pet Shop"></a>
                            <h2><a href="{{url('about')}}">Something good</a></h2>
                            <p>
                                Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="{{url('about')}}">read more</a>
                            </p>

                        </li>
                    </ul>
                </div>


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


@endsection
