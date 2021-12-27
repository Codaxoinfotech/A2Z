<div class="alert">
    @if(session()->has('success'))
     <h6 style="background: #177905;padding: 8px;color: white;"><center>{{session()->get('success')}}</center></h6>
    @elseif(session()->has('error'))
     <h6 style="background: #c00303;padding: 8px;color: white;"><center>{{session()->get('error')}}</center></h6>
    @endif


    @if($errors->any())
    	@foreach($errors->all() as $error)
    		<p style="background: #c00303;padding: 8px;color: white;"><b>{{ $error }}</b></p>
    		<?php break; ?>
    	@endforeach
    @endif
</div>