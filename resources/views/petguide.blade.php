@extends('master')



@section('stuff')


    <div id="body">

        <div id="content">

            <div class="content">
                <h2>Pet Guide</h2>
                <div>
                    <p>
                        Here are some useful pet quide tips for your pets. Easy and convenient for you to learn more on how to understand them. basic intructions to useful information not just for your pet but also for other animals.
                    </p>
                </div>

                <ul class="section">
                    <li>
                        <h2>Pet Training Guides</h2>
                        <p>
                            Donec a purus sit amet risus consectetur lacinia et ut libero. Vestibulum tempus fauscibus sagittis. Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante.
                        </p>
                    </li>
                    <li>

                        <h2>Make them Behave</h2>
                        <p>
                            Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. porta. Duis risus augue, sollicitudin sit amet enim.
                        </p>
                    </li>

                    </li>
                    <li>

                        <h2>Food tht They Need</h2>
                        <p>
                            Donec a purus sit amet risus consectetur lacinia et ut libero. Vestibulum tempus fauscibus sagittis. Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante.
                        </p>
                    </li>
                    <li>
                        <h2>Do's and Don'ts</h2>
                        <p>
                            Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. porta. Duis risus augue, sollicitudin sit amet enim.
                        </p>
                    </li>
                    <li>

                        <h2>Pet Foods</h2>
                        <p>
                            Donec a purus sit amet risus consectetur lacinia et ut libero. Vestibulum tempus fauscibus sagittis. Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante.
                        </p>
                    </li>

                    </li>
                    <li>

                        <h2>healthy Recipes for Pets</h2>
                        <p>
                            Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. porta. Duis risus augue, sollicitudin sit amet enim.
                        </p>
                    </li>
                </ul>
                <div class="paging">
                    <a class="active" href="{{url('petguide')}}">1</a>
                    <a href="{{url('petguide')}}">2</a>
                    <a href="{{url('petguide')}}">3</a>
                    <a href="{{url('petguide')}}">4</a>
                    <a class="next" href="{{url('petguide')}}">NEXT</a>
                </div>

            </div>

            <div id="sidebar">

                <div id="section">
                    <div>
                        <div>
                            <h2>Pet Guide Overview</h2>
                            <ul>
                                <li><a href="{{url('petguide')}}">Pet Trainging Guides <span>(1)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Behavior Training <span>(11)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Pet Recipes <span>(3)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Do's and Don'ts <span>(8)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Pet Foods <span>(3)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Cosplay Pets <span>(2)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Shopping Guides <span></span> </a></li>
                                <li><a href="{{url('petguide')}}">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Medications <span>(7)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Excercise <span>(7)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Diet <span>(10)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Grooming <span>(1)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Cosplay Pets <span>(2)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Shopping Guides <span></span> </a></li>
                                <li><a href="{{url('petguide')}}">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Medications <span>(7)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Excercise <span>(7)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Diet <span>(10)</span> </a></li>
                                <li><a href="{{url('petguide')}}">Grooming <span>(1)</span> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    @endsection
