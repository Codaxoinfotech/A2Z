@extends('website.web.app')

@section('content')

   
    <!-- breadcrumb-area end -->
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- <div class="col-lg-12 col-lg-12 align-items-center" >
                           <center> <h4 class="section-title ">User Sign<h4></center>
                        </div> -->
                        <div class="col-lg-4 col-lg-4">
                           
                        </div>

                        <div class="col-lg-4 col-lg-4">
                           
                            <div class="contact-form-wrap">
                            
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="fab fa-facebook social-link-icon"></i></span> Facebook</a>
                                <br>
                                <p> OR </p>
                                <br>
                                <a href="#" class="btn btn-two " style="background-color: #b70861;"><span class="btn-icon me-2"><i class="fab fa-google"></i></span> Google </a>
                            </div>
                            <div class="cta-button-group--two text-center">
                            <p> OR </p>

                                <form  action="{{ route('userLoginSubmit') }}" method="post">
                                    @csrf
                                    <div class="contact-form">
                                       
                                        <div class="contact-inner">
                                            <input name="mobile" type="text" placeholder="Enter Mobile Number">
                                            @error('mobile')
                                            <div class="error text-danger">{{ $message }}</div>
                                            @enderror
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