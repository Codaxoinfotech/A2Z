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
                                            <input name="name" type="text" placeholder="Enter Name">
                                        </div>

                                        <div class="contact-inner">
                                            <input name="email" type="email" placeholder="Enter Email">
                                        </div>

                                        <div class="contact-inner">
                                            <input name="mobile" type="number" placeholder="Enter Mobile">
                                        </div>

                                        <div class="contact-inner">
                                            <textarea name="address" placeholder="Address"></textarea>
                                        </div>


                                        <div class="contact-inner">
                                            <select name="mobile" type="text">
                                                <option value=""> - Package Type - </option>
                                                <option value=""> Silver (1 Month)</option>
                                                <option value=""> Golden (3 Month)</option>
                                                <option value=""> Diamond (6 Month)</option>
                                                <option value="">Platinum (12 Year)</option>

                                            </select>
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