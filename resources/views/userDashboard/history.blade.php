@extends('userDashboard.lay.app')

@section('content')

@php 
use App\Http\Controllers\WebsiteController;
@endphp
   
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
                            
                                <h3 class="heading">My History </h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ht-simple-job-listing move-up animate">
                                <div clas="list">
                                    
                                    @foreach($request_services as $row)
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="job-info">
                                                    <h5 class="job-name">
                                                        {{ WebsiteController::getValue('categories', 'id', $row->category_id, 'name') }} <br>
                                                        
                                                        {{ WebsiteController::getValue('sub_categories', 'id', $row->sub_category_id, 'subCategoryName') }}
                                                        
                                                    </h5>
                                                    <!--<span class="job-time">Full time</span>-->
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="job-description">
                                                    {{ $row->description }}<br>
                                                    Manual Address: {{ $row->manual_address }}
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="job-button text-md-center">
                                                    <a class="ht-btn ht-btn-md ht-btn--solid" href="#">
                                                        <span class="button-text">
                                                            @if($row->status == 0)
                                                            Started
                                                            @elseif($row->status == 1)
                                            Proccessing                
                                                            @else
                                                            Completed
                                                            @endif
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                               
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
             <!--====================  footer area ====================-->

</div>
       





           



        

    @endsection