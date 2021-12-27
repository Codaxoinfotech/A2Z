@extends('website.web.app')

@section('content')

    <!-- breadcrumb-area end -->
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-lg-4">
                            
                        </div>

                        <div class="col-lg-4 col-lg-4 align-items-center">
                            <div class="contact-form-wrap">
                            
                            
                                <form  action="{{ route('userOtpSubmit') }}" method="post">
                                    @csrf
                                    <div class="contact-form">
                                       
                                        <div class="contact-inner">
                                            <input name="otp" type="text" required placeholder="Enter your 6 Digit OTP" value="{{old('otp', isset($sotp)?$sotp:'')}}">
                                            @if(Session::has('error_otp'))
                                            <div class="error text-danger">{{ Session::get('error_otp') }}</div>
                                            @endif
                                        </div>
                                       
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Submit</button>
                                            
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-lg-4">
                            
                        </div>
                    </div>
                </div>
            </div>
             <!--====================  footer area ====================-->

</div>
    





           



        

    @endsection