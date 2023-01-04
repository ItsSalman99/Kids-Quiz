<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backoffice/assets/images/icons/korean.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <!-- <div>
            <h4 class="logo-text">Amdash</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div> -->
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard.index')}}">
                <div class=" active parent-icon"><i class="lni lni-dashboard"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.exam.index')}}">
                <div class="parent-icon"><i class="fadeIn animated bx bx-book-add"></i>
                </div>
                <div class="menu-title">Exams</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.question.index')}}">
                <div class="parent-icon"><i class="lni lni-question-circle"></i>
                </div>
                <div class="menu-title">Questions</div>
            </a>

        </li>
        <li>
            <a class="" href="{{route('admin.batch.index')}}">
                <div class="parent-icon"><i class='bx bx-group'></i>
                </div>
                <div class="menu-title">Batches</div>
            </a>
        </li>
        <li>
            <a class="" href="{{route('admin.student.index')}}">
                <div class="parent-icon"> <i class="lni lni-graduation"></i>
                </div>
                <div class="menu-title">Students</div>
            </a>
        </li>
        <li>
            <a class="" href="{{route('admin.schedule.index')}}">
                <div class="parent-icon"><i class="fadeIn animated bx bx-time-five"></i>
                </div>
                <div class="menu-title">Schedule Exam</div>
            </a>
        </li>
        <li>
            <a class="" href="{{route('admin.user.index')}}">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>