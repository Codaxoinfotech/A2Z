@extends('user.layouts.app')
@section('body')
 <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            
            <div class="content-body">
                <section id="modal-examples">
                    <div class="row">
                        <form action="{{ route('user.pay',$apply->id) }}" method="get" >
                            <!-- share project card -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <i data-feather="file-text" class="font-large-2 mb-1"></i>
                                        <h5 class="card-title">Apply No. {{ $apply->apply_no }}</h5>
                                        <p class="card-text">{{ $apply->reason }}</p>

                                        <!-- modal trigger button -->
                                        <button type="submit" class="btn btn-primary" >
                                            300 Pay
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- / share project card -->
                        </form>
                    </div>
                </section>
              

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection