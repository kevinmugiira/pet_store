@extends('master')




@section('stuff')





<div id="body">

    <div id="content">

        <div class="content">


            <ul class="articles">
                <li>
                    <div>
                        <span>Dec 3</span>
                        <h2>New Pupps in the Shop</h2>

                        <a class="heart" href="{{url('blog')}}">&nbsp;</a>
                        <a class="twitter" href="{{url('blog')}}">&nbsp;</a>
                        <a class="facebook" href="{{url('blog')}}">&nbsp;</a>

                    </div>
                    <p>
                        Lorem ipsum sot amet, consec teteur adipis cing elitsed diam non ummy nibh euismod tincidunt ut laoreet dolore magna. Aliquam erat volutpat. ut wisi enim ad veniam, quis nostrud excerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. Duis autem eum iruire dolor in hendrerit in vulputate vellit essemolestie consequat, velillum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim ui
                        blandit praesent luptatum zzril delenit augue duis dolore te feugiat nulla facilisi. Nam liner tempor cum soluta nobis eleifend option congue nihil imperdiet doming id uod mazim placerat facer posim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit
                        eorum claritatem. investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etaim procesus dynamicus.
                    </p>
                </li>
                <li>
                    <div>
                        <span>Nov 29</span>
                        <h2>How about let's Celebrate!</h2>

                        <a class="heart" href="{{url('blog')}}">&nbsp;</a>
                        <a class="twitter" href="{{url('blog')}}">&nbsp;</a>
                        <a class="facebook" href="{{url('blog')}}">&nbsp;</a>

                    </div>
                    <p>
                        Lorem ipsum sot amet, consec teteur adipis cing elitsed diam non ummy nibh euismod tincidunt ut laoreet dolore magna. Aliquam erat volutpat. ut wisi enim ad veniam, quis nostrud excerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem eum iruire dolor in hendrerit in vulputate vellit essemolestie consequat, velillum dolore eu feugiat nulla facilisis at vero eros et accumsan
                    </p>
                </li>
                <li>
                    <div>
                        <span>Nov 11</span>
                        <h2>Sport with you Pet's</h2>

                        <a class="heart" href="{{url('blog')}}">&nbsp;</a>
                        <a class="twitter" href="{{url('blog')}}">&nbsp;</a>
                        <a class="facebook" href="{{url('blog')}}">&nbsp;</a>

                    </div>
                    <p>
                        Lorem ipsum sot amet, consec teteur adipis cing elitsed diam non ummy nibh euismod tincidunt ut laoreet dolore magna. Aliquam erat volutpat. ut wisi enim ad veniam, quis nostrud excerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem eum iruire dolor in hendrerit in vulputate vellit essemolestie consequat, velillum dolore eu feugiat nulla facilisis at vero eros et accumsan
                    </p>
                </li>

            </ul>
            <div>
                <a class="new" href="{{url('blog')}}">New Post</a>
                <a class="old" href="{{url('blog')}}">Old Post</a>
            </div>

        </div>

        <div id="sidebar">

            <div id="section">
                <div>
                    <div>
                        <h2>Archives</h2>
                        <ul class="archive">
                            <li><a class="active" href="{{url('petguide')}}">2011 <span>(60)</span> </a>
                                <ul>
                                    <li><a href="">December <span>(1)</span></a></li>
                                    <li><a href="">November <span>(11)</span></a></li>
                                    <li><a href="">October <span>(3)</span></a></li>
                                    <li><a href="">September <span>(8)</span></a></li>
                                    <li><a href="">August <span>(3)</span></a></li>
                                    <li><a href="">July <span>(2)</span></a></li>
                                    <li><a href="">June <span></span></a></li>
                                    <li><a href="">May <span>(8)</span></a></li>
                                    <li><a href="">April <span>(7)</span></a></li>
                                    <li><a href="">March <span>(7)</span></a></li>
                                    <li><a href="">Febuary <span>(10)</span></a></li>
                                    <li><a href="">January <span>(1)</span></a></li>
                                </ul>

                            </li>
                            <li><a href="{{url('petguide')}}">2010 </a></li>
                            <li><a href="{{url('petguide')}}">2009</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>




</div>


@endsection
