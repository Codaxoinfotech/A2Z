@extends('userDashboard.lay.app')

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
                            
                            

                                <form  action="{{ route('userLoginSubmit') }}" method="post">
                                    @csrf
                                    <div class="contact-form">
                                       
                                        <div class="contact-inner">
                                            <select name="mobile" type="text">
                                                <option value=""> - Select - </option>
                                                <option value=""> Fire </option>
                                                <option value=""> Light </option>
                                            </select>
                                        </div>

                                        <div class="contact-inner">
                                            <textarea name="mobile" type="text" placeholder="Service Description"></textarea>
                                        </div>
                                        Address

<br>
                                        <div class="cta-button-group--two text-center">
                                       
                                         <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="fab fa-facebook social-link-icon"></i></span> Get Location</a>
                                        <br>
                                        <p> OR </p>
                                        <br>
                                        <div class="contact-inner">
                                            <textarea name="address" type="text" placeholder="Mannual Type Address"></textarea>
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