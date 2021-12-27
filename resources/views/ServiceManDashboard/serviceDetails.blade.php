@extends('userDashboard.lay.app')

@section('content')

   
    <!-- breadcrumb-area end -->
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="feature-images-wrapper bg-gray section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center">
                            
                                <h3 class="heading">Service Details </h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ht-simple-job-listing move-up animate">
                                <div clas="list">
                                    <div class="item">
                                        <div class="row">

                                            <br>
                                            <br>
                                            <div class="col-md-3">
                                            
                                            <div class="job-info">
                                                    <h5 class="job-name">IT Operations Specialist</h5>
                                                    <span class="job-time">Full time</span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="job-description">We are currently seeking a highly motivated individual to fill an I.T. This position will provide remote and onsite hands-on support to staff, vendors, and customers as well as, proactively identify issues.</div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="job-button text-md-center">
                                                    <a class="ht-btn ht-btn-md ht-btn--solid" href="#">
                                                        <span class="button-text">Get started </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
<br>
<br>
                                        <table>
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Amount</th>
                                            <th>Total</th>
                                        <tr>
                                        <tr>
                                            <th>#</th>
                                            <th><input name="product_name" id="product_name" type="text" placeholder="Enter Name"></th>
                                            <th><input name="price" type="text" placeholder="Enter Name"></th>
                                            
                                            <th><input name="qty" type="text" placeholder="Enter Name"></th>
                                            
                                            <th><input name="amount" type="text" placeholder="Enter Name"></th>
                                            
                                            <th><button name="name" type="sumit" placeholder="Enter Name" value="Add">Add</button></th>
                                           
                                        <tr>


                                    </thead>    
                                    </table>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
             <!--====================  footer area ====================-->

</div>
       





           



        

    @endsection