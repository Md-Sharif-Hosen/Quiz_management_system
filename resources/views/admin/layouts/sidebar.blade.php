<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect" style="font-family: sans-serif;font-size:25px;font-weight: inherit;">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-chat" >Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('student_result') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-chat">Student Result</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('classes') }}" class="waves-effect"  style="font-family: sans-serif;font-size:25px;font-weight: inherit;">
                        <i class="bx bx-desktop"></i>
                        <span key="t-chat">Classes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('quiz') }}" class="waves-effect"  style="font-family: sans-serif;font-size:25px;font-weight: inherit;">
                        <i class="bx bx-bulb"></i>
                        <span key="t-chat">Quizz</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('questions') }}" class="waves-effect"  style="font-family: sans-serif;font-size:25px;font-weight: inherit;">
                        <i class="bx bx-question-mark"></i>
                        <span key="t-chat">Questions</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="" class="waves-effect" style="font-family: sans-serif;font-size:25px;font-weight: inherit;">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-chat">Quiz Topic & Question</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('options')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-chat">Quizz</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
