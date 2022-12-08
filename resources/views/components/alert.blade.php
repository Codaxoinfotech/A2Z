<div>
@if(session()->has('message'))
        <div class="demo-spacing-0">
            <div class="alert alert-success mt-1 alert-validation-msg" role="alert">
              <div class="alert-body d-flex align-items-center">
                <i data-feather="info" class="me-50"></i>
                <span><strong>{{session()->get('error')}}</strong></span>
              </div>
            </div>
        </div>
    	<h6 style="background: #177905;padding: 8px;color: white;" ><b>{{session()->get('message')}}</b></h6>
    @elseif(session()->has('error'))
        <div class="demo-spacing-0">
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
              <div class="alert-body d-flex align-items-center">
                <i data-feather="info" class="me-50"></i>
                <span><strong>{{session()->get('error')}}</strong></span>
              </div>
            </div>
        </div>
    @endif




    @if ($errors->any())
    
            @foreach ($errors->all() as $error)
                <div class="demo-spacing-0">
                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                        <div class="alert-body d-flex align-items-center">
                            <i data-feather="info" class="me-50"></i>
                            <span><strong>{{ $error }}}</strong></span>
                        </div>
                    </div>
                </div>             
            @php break; @endphp
            @endforeach
       
    @endif
</div>