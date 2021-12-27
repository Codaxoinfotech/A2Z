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
                                
                                <form  action="{{ route('user-profile-update') }}" method="post" autocomplete="off">
                                    @csrf
                                    <x-alert/>
                                    <div class="contact-form">
                                       
                                        <div class="contact-inner">
                                            <input name="name" type="text" placeholder="Enter Name" value="{{old('name', isset($user)?$user->name:'')}}">
                                        </div>

                                        <div class="contact-inner">
                                            <input name="email" type="email" placeholder="Enter Email" value="{{old('email', isset($user)?$user->email:'')}}">
                                        </div>

                                        <div class="contact-inner">
                                            <input name="mobile" type="number" placeholder="Enter Mobile" value="{{old('mobile', isset($user)?$user->mobile:'')}}">
                                        </div>

                                        <div class="contact-inner">
                                            <textarea name="address" placeholder="Address">{{old('address', isset($user)?$user->address:'')}}</textarea>
                                        </div>


                                        <div class="contact-inner">
                                            <select name="package" id="package" type="text">
                                                <option value=""> - Package Type - </option>
                                                @foreach($packages as $row)
                                                <option @php if($user->package == $row->id){ echo "selected"; } @endphp value="{{$row->id}}"> {{$row->name}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                                        
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Submit</button>
                                            
                                        </div>
                                    </div>
                                </form>
                                <br/>
                            </div>
                            
                        </div>
                        
                        
                        <div class="col-lg-4 col-lg-4">
                           
                        </div>
                        
                    </div>
                </div>
            </div>
             <!--====================  footer area ====================-->

    </div>
    </div>
  @endsection