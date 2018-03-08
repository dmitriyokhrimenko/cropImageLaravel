<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{asset('/css/croppic/croppic.css')}}" rel="stylesheet">
		<link href="{{asset('/css/main.css')}}" rel="stylesheet">
		

        <title>Laravel</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        <!--    <div class="col-lg-6 cropHeaderWrapper">
				<div id="croppic">
					<div class="cropControls cropControlsUpload">
					</div>
					<form class="croppic_imgUploadForm" style="visibility: hidden;">
						<input name="img" id="get_img_url" type="file">
					</form>
				</div>
			</div>
		-->
		
		<div class="col-xs-12 text-center cropHeaderWrapper">
			<div id="croppic"></div>
			<span class="btn" id="cropContainerHeaderButton">Browse</span>
			<input type="hidden" id="get_img_url">
		</div>

        </div>
    </body>
	<script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
	<script src="{{asset('/js/croppic/croppic.js')}}"></script>
	<script src="{{asset('/js/crop.js')}}"></script>
</html>
