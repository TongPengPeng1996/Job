$(function(){

	$( '#example' ).photobooth().on( "image", function( event, dataUrl ){
		// console.log(dataUrl);
		// alert(window.location.pathname);

			// window.location.href='/H5paizhao/upload.php?url=1';
			// $( '#example' ).data( "photobooth" ).resize( 1200, 1000 );
			post("/H5paizhao/upload.php",dataUrl);

			$( "#gallery" ).show().html( '<img src="' + dataUrl + '" id="imgUrl" style="width:320px;height:240px;">');
			// $( '#example' ).data( "photobooth" ).resize( 200, 200 );
		});

	
	/**
	* Tab boxes
	*/
	$( '.tab_container' ).each(function( i, elem ){
		$( elem ).find( ".tabs li" ).click(function(){
			$( elem ).find( ".tabs li.selected" ).removeClass( "selected" );
			$( this ).addClass( "selected" );
			$( elem ).find( ".tab_content" ).hide();
			$( elem ).find( ".tab_content." + $(this).attr( "calls" ) ).show();
		});
	});

	/**
	* Link highlighting
	*/
	$( "a" ).click(function(){
		$( "#nav a.selected" ).removeClass( "selected" );
		$( "#nav a[href=" + $(this).attr( "href" ) + "]" ).addClass( "selected" );
	});

	function post(url, params) {
		var temp = document.createElement("form");
		temp.action = url;
		temp.method = "post";
		temp.style.display = "none";
		var opt = document.createElement("textarea");
			opt.name = "url";
			opt.value = params
			temp.appendChild(opt);
			
		document.body.appendChild(temp);
		temp.submit();
		return temp;
	}

});