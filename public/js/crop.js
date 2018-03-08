var croppicHeaderOptions = {
		uploadUrl:'upload',
		cropUrl:'crop',
        outputUrlId: 'get_img_url',
        customUploadButtonId:'cropContainerHeaderButton',
        modal:false,
		zoom: false,
		doubleZoomControls:false,
		rotateControls:false,
        onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
        onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
        onImgDrag: function(){ console.log('onImgDrag') },
        onImgZoom: function(){ console.log('onImgZoom') },
        onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
        onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
        onReset:function(){ console.log('onReset') },
        onError:function(errormessage){ console.log('onError:'+errormessage) }
}   
var croppic = new Croppic('croppic', croppicHeaderOptions);