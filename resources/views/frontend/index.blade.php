@extends('frontend.layouts.main')

@section('content')
    <div class="wrapper">
        <div class="wizard-content-1 pos-flex clearfix">
            <div class="steps d-inline-block clearfix">
                <span class="bg-shape"></span>
                <ul class="tablist multisteps-form__progress">
                    <li class="multisteps-form__progress-btn js-active current">
                        <div class="step-btn-icon-text">
                            <span>1</span>
                            <div class="step-btn-icon float-left position-relative">
                                <img src="{{ asset('assets/frontend/assets/img/bt1.png') }}" alt="">
                            </div>
                            <div class="step-btn-text">
                                <h2 class="text-uppercase">Sign Up</h2>
                                <span class="text-capitalize">Create Account</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="step-inner-content clearfix position-relative">
                <span class="bg-shape"></span>
                <form class="multisteps-form__form"
                    action="{{ route('register') }}" id="wizard"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-area position-relative">
                        <div class="multisteps-form__panel js-active" data-animation="scaleIn">
                            <div class="wizard-forms position-relative">
                                <span class="step-no position-absolute">Step 1</span>
                                <div class="wizard-progress">
                                    <span>1 of 3 Completed</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 33%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-inner-box">
                                    <div class="inner-title text-center">
                                        <h2>Select Your Account Type ?</h2>
                                        <p>Create account as a parent, teacher, or student. </p>
                                    </div>
                                    <div id="need-job-slide-id" class="need-job-slide owl-carousel">
                                        <label class="need-job-icon-text text-center">
                                            <input type="radio" name="job_title" value="Ux designer label"
                                                class="j-checkbox" checked>
                                            <span class="need-job-text-inner">
                                                <span class="checkbox-circle-mark position-absolute"> </span>
                                                <span class="need-job-icon">
                                                    <img src="{{ asset('assets/frontend/assets/img/bt1.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="need-job-text">
                                                    <span class="text-uppercase need-job-title">Teacher</span>
                                                    <span class="text-capitalize need-job-text">Teacher Account</span>
                                                </span>
                                            </span>
                                        </label>
                                        <label class="need-job-icon-text text-center">
                                            <input type="radio" name="job_title" value="Front Developer"
                                                class="j-checkbox">
                                            <span class="need-job-text-inner">
                                                <span class="checkbox-circle-mark position-absolute"> </span>
                                                <span class="need-job-icon">
                                                    <img src="{{ asset('assets/frontend/assets/img/bt2.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="need-job-text">
                                                    <span class="text-uppercase need-job-title">Student</span>
                                                    <span class="text-capitalize need-job-text">Student Account</span>
                                                </span>
                                            </span>
                                        </label>
                                        <label class="need-job-icon-text text-center">
                                            <input type="radio" name="job_title" value="Php Developer" class="j-checkbox">
                                            <span class="need-job-text-inner">
                                                <span class="checkbox-circle-mark position-absolute"> </span>
                                                <span class="need-job-icon">
                                                    <img src="{{ asset('assets/frontend/assets/img/bt3.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="need-job-text">
                                                    <span class="text-uppercase need-job-title">Parent</span>
                                                    <span class="text-capitalize need-job-text">Parent Account</span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="actions">
                                    <ul>
                                        <li><span class="js-btn-next" title="NEXT">NEXT</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-vector position-absolute">
                                <img src="assets/img/sd1.png" alt="">
                            </div>
                        </div>
                        <!-- step 1 -->
                        <div class="multisteps-form__panel" data-animation="scaleIn">
                            <div class="wizard-forms form-step-2">
                                <span class="step-no position-absolute">Step 2</span>
                                <div class="wizard-progress">
                                    <span>2 of 3 Completed</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 66%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-inner-box">
                                    <div class="inner-title text-center">
                                        <h2>Please Fill Details ?</h2>
                                        <p>To create an account </p>
                                    </div>
                                </div>
                                <div class="details-form-area">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-input-inner position-relative has-float-label">
                                                <input type="text" name="first_name" placeholder="First Name"
                                                    class="form-control" required>
                                                <label>First Name</label>
                                                <div class="icon-bg text-center">
                                                    <i class="fas fa-user"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-inner position-relative has-float-label">
                                                <input type="text" name="last_name" placeholder="Last Name"
                                                    class="form-control">
                                                <label>Last Name</label>
                                                <div class="icon-bg text-center">
                                                    <i class="fas fa-user"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-inner position-relative has-float-label">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control required" required>
                                                <label>Email</label>
                                                <div class="icon-bg text-center">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-inner position-relative has-float-label">
                                                <input type="text" name="phone" placeholder="Phone"
                                                    class="form-control" required>
                                                <label>Phone</label>
                                                <div class="icon-bg text-center">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-input-inner select-option-area position-relative">
                                                <select name="country_list">
                                                    <option>Select Country</option>
                                                    <option>England</option>
                                                    <option>Australia</option>
                                                    <option>Brazil</option>
                                                    <option>USA</option>
                                                    <option>Canada</option>
                                                    <option>UAE</option>
                                                    <option>Spain</option>
                                                </select>
                                                <div class="icon-bg text-center">
                                                    <i class="fas fa-flag-checkered"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-filed-innerbox">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="form-input-inner select-option-area position-relative">
                                                                <select name="city_list">
                                                                    <option>Select City</option>
                                                                    <option>Barlin</option>
                                                                    <option>Sydney</option>
                                                                    <option>Madrid</option>
                                                                    <option>NY</option>
                                                                    <option>Toronto</option>
                                                                    <option>Dubai</option>
                                                                    <option>Chennai</option>
                                                                </select>
                                                                <div class="icon-bg text-center">
                                                                    <i class="fas fa-handshake"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-input-inner position-relative date-of-birth">
                                                                <input data-date-format="dd/mm/yyyy"
                                                                    placeholder="Birth Day" class="datepicker">
                                                                <div class="icon-bg text-center">
                                                                    <i class="fas fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div
                                                                class="form-input-inner position-relative has-float-label">
                                                                <input type="text" name="address"
                                                                    placeholder="Address 2" class="form-control">
                                                                <label>Address</label>
                                                                <div class="icon-bg text-center">
                                                                    <i class="fas fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-input-inner gender-select position-relative">
                                                        <h3>Gender</h3>
                                                        <label>
                                                            <input type="radio" name="gender" value="Male" checked
                                                                required>
                                                            <span class="checkmark">Male</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="gender" value="Female">
                                                            <span class="checkmark">Female</span>
                                                        </label>
                                                        <div class="icon-bg text-center">
                                                            <i class="fas fa-transgender"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input-inner add-textarea  position-relative">
                                            <div class="col-lg-12">
                                                <textarea name="add_info" placeholder="Additional-info"></textarea>
                                                <div class="icon-bg text-center">
                                                    <i class="fas fa-edit"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-document-upload">
                                            <div class="custom-file form-input-inner position-relative">
                                                <input type="file" class="custom-file-input" name="file_upload"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Add Your Profile
                                                    Image:</label>
                                                <div class="icon-bg text-center">
                                                    <i class="fas fa-edit"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <ul>
                                        <li><span class="js-btn-prev" title="BACK"> Back</span></li>
                                        <li><button type="submit" name="submit"><span class="js-btn-next"
                                                    title="NEXT">
                                            Register
                                                </span></button></li>
                                    </ul>
                                </div>
                                <div class="bottom-vector position-absolute">
                                    <img src="assets/img/sd1.png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
