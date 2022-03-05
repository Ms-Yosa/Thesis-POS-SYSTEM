<!--  SIDE BAR-->

<div class="dlabnav">
        <div class="dlabnav-scroll">
            
            <ul class="metismenu" id="menu">

                <li class="nav-label first">Hi Admin: {{ Auth::user()->name }} {{ Auth::user()->last_name }}</li>
                <li class="nav-label">
                    <span class="nav-text">
                        <?php

                            date_default_timezone_set('Asia/Kuala_Lumpur');

                            echo "Date: ";
                            $myDate = date("Y-m-d");
                            echo $myDate;

                        ?>
                    </span>


                    <br>

                    <span class="nav-text">
                        <?php
                        echo "Time: ";
                        $myTime = date("H:i:s");
                        echo $myTime;

                        ?>
                    </span>

                    

                </li>
                <li>
                    <a class="nav-label" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="la la-arrow-circle-right"></i>
                        <span class="nav-text">{{ __('Logout') }}</span>
                    </a>
                    <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                </li>



            </ul>
        </div>
    </div>
