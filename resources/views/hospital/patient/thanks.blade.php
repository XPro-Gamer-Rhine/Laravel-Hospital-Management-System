@extends('hospital.layouts.design')

@section('extra_css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />
@endsection

@section('content')
	
	<div class="page-ttl">
        <div class="layer-stretch" style="margin-top: 150px;">
            <div class="page-ttl-container">
                <h1>Successful</h1>
                <p><a href="#">Home</a> &#8594; <span>Thanks</span></p>
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Register Section -->
    <div class="layer-stretch" >
        <div class="layer-wrapper" >
            <div class="form-container" >
               <h1>Thank You For Your Appoinment</h1>
                	<a id="popuplink" href="#inline" style="display:none;"></a>
					<div id="inline" style="display:none;text-align:center;">
					  
					  <h3 style="margin-top:20px;">Thank you for Reserving An Appoinment . </h3>
					  <p>{!!session('flash_message_success')!!}</p>
					  <p><a href="javascript:;" onclick="jQuery.fancybox.close();" style="background-color:#333;padding:5px 10px;color:#fff;border-radius:5px;text-decoration:none;">Close</a></p>
					</div>
            </div>
        </div>
    </div>

@endsection

@section('extra_script')

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>
<script >
	jQuery(document).ready(function () {
    function openFancybox() {
        setTimeout(function () {
            jQuery('#popuplink').trigger('click');
        }, 500);
    };
    var visited = jQuery.cookie('visited');
    if (visited == 'yes') {
         // second page load, cookie active
    } else {
        openFancybox(); // first page load, launch fancybox
    }
    jQuery.cookie('visited', 'yes', {
        expires: 365 // the number of days cookie  will be effective
    });
    jQuery("#popuplink").fancybox({modal:true, maxWidth: 400, overlay : {closeClick : true}});
});
</script>
@endsection