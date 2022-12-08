@extends('emp.layouts.app')
@section('title','Home')
@section('body')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
      @foreach($data as $row)
            <div class="content-body">
                <section id="modal-examples">
                    <div class="row">
                            <!-- share project card -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <i data-feather="file-text" class="font-large-2 mb-1"></i>
                                        <h5 class="card-title">{{ $row->reason }}</h5>
                                        <p class="card-text">Request Date : {{ $row->apply_date }}</p>
                                        <p class="card-text">Finish Date : {{ $row->work_finish_date }}</p>

                                       
                                        <!-- modal trigger button -->
                                        <a href="{{ route('emp.service.show',$row->id) }}" type="submit" class="btn btn-primary" >
                                            View
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- / share project card -->
                      
                    </div>
                </section>
              

            </div>
                   
            @endforeach
       </div>
       </div>
       </div>
       </div>

@endsection