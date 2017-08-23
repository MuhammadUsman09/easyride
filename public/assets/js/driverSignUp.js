
      function initMap() {
              jQuery(document).ready(function($)  {
                    $.ajaxSetup({
                         headers: { 'X-CSRF-Token' : $('meta[name="_token"]').attr('content') }
                        });
                   });
         var map;
        var mapOptions = {
          center: new google.maps.LatLng(58, 16),
          zoom: 5,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"),
            mapOptions);

    
    var json = [
      {
      "title": "Stockholm",
      "lat": 59.3,
      "lng": 18.1,
      "description": "Stockholm is the capital and the largest city of Sweden and constitutes the most populated urban area in Scandinavia with a population of 2.1 million in the metropolitan area (2010)"
      },
      {
      "title": "Oslo",
      "lat": 59.9,
      "lng": 10.8,
      "description": "Oslo is a municipality, and the capital and most populous city of Norway with a metropolitan population of 1,442,318 (as of 2010)."
      },
      {
      "title": "Copenhagen",
      "lat": 55.7,
      "lng": 12.6,
      "description": "Copenhagen is the capital of Denmark and its most populous city, with a metropolitan population of 1,931,467 (as of 1 January 2012)."
      }
    ];
      $.ajax({
              type:'post',
              url:'displayDriver',
              cache:false,
               
              dataType:'json',
              success:function(data){
                console.log(data);
                    for (var i = 0, length = json.length; i < length; i++) {
                    var data = json[i];
                    var latLng = new google.maps.LatLng(data.lat, data.lng);
                     //alert(latLng);
                     console.log(latLng);
                    var html = "<div> data.decriptio </div>"
       
                     var infowindow = new google.maps.InfoWindow({
                      content:"<div> data.decriptio </div>"});
                        var marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                        title: data.title
                 });
                      infowindow.open(map, marker);
                      marker.addListener('click', function() {
                      infowindow.open(map, marker);
                      });
          
                }
              
              },
              error:function(){
                alert('not loaded loaded');
               
              }
        });


  
  }
  
 	// 	function isValid( Var str) {	
  //            var iChars = "~`!#$%^&*+=-[]\\\';,/{}|\":<>?";

		// 	    for (var i = 0; i < str.length; i++) {
		// 	       if (iChars.indexOf(str.charAt(i)) != -1) {
		// 	           alert ("File name has special characters ~`!#$%^&*+=-[]\\\';,/{}|\":<>? \nThese are not allowed\n");
		// 	           return false;
		// 	       }
		// 	    }
  // 			return true;
		// }
		function checkEmail() {

			    var email = document.getElementById('email');
			    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			    if (!filter.test(email.value)) {
			  
			   // email.focus;
			    return false;
         }
         return true;
     }

 		$("#username").blur(function(){
 					
 			        var str=$("#username").val();
        			var len=str.length;

        			if(str==""){
        				$("#usernamefieldcheck").show('slow');
        				$("#usernamelengthcheck").hide('slow');
        				$("#usernamespacharcheck").hide('slow');
        			}
        			else if(len<5){
        				$("#usernamelengthcheck").show('slow');
        				$("#usernamefieldcheck").hide('slow');
        				$("#usernamespacharcheck").hide('slow');
        			}
        			else{
        				$("#usernamelengthcheck").hide('slow');
        				$("#usernamefieldcheck").hide('slow');
        				$("#usernamespacharcheck").hide('slow');
        			}
        			
        			// else if(isValid(str)){
        			// 	alert('in special');
        			// 		$("#usernamelengthcheck").hide('slow');
        			// 		$("#usernamespacharcheck").hide('slow');
        			// 		$("#usernamefieldcheck").hide('slow');
        			// }
        			// else{
        			// 	alert('in special 2')
        			// 	if(len<5){
        			// 		alert('in special 3')
        			// 		$("#usernamelengthcheck").show('slow');
        			// 		$("#usernamespacharcheck").show('slow');
        			// 		$("#usernamefieldcheck").hide('slow');
        			// 	}
        			// 	else{
        					
        			// 		$("#usernamefieldcheck").hide('slow');
	        		// 		$("#usernamelengthcheck").hide('slow');
	        		// 		$("#usernamespacharcheck").show('slow');
        			// 	}
        			// }
        	});

 		$("#email").blur(function(){
 					
 			        var str=$("#email").val();
        			var len=str.length;

        			if(str==""){
        				$("#emailfieldcheck").show('slow');
        				$("#emailclientsidecheck").hide('slow');
        				$("#emailspacharcheck").hide('slow');
        			}
        			else if(checkEmail()==false){
        				$("#emailfieldcheck").hide('slow');
        				$("#emailclientsidecheck").show('slow');
        				$("#emailserversidecheck").hide('slow');
        			}
        			else{
        				$("#emailfieldcheck").hide('slow');
        				$("#emailclientsidecheck").hide('slow');
        				$("#emailserversidecheck").hide('slow');
        				 jQuery(document).ready(function($)  {
				            $.ajaxSetup({
				                 headers: { 'X-CSRF-Token' : $('meta[name="_token"]').attr('content') }
				                });
       						 });
        				  // $.ajax({
              //           type:'post',
              //           url:'verifyMail',
              //           data:{str, '_token': '{!! csrf_token() !!}'},
              //           dataType:'json',
                        
                
              //           success:function(res){
              //               alert(res);
              //                alert('in succes');
              //           },
              //           error:function(res){
              //               alert('in error')
              //                alert(res);                            
              //           }
              //       });
        			}
     	});

 		$("#password").blur(function(){
 					
 			        var str=$("#password").val();
        			var len=str.length;

        			if(str==""){
        				$("#passwordfieldcheck").show('slow');
        				$("#passwordlengthcheck").hide('slow');
        				
        			}
        			else if(len<8){
        				$("#passwordfieldcheck").hide('slow');
        				$("#passwordlengthcheck").show('slow');
        				
        			}
        			else{
        				$("#passwordfieldcheck").hide('slow');
        				$("#passwordlengthcheck").hide('slow');
        			}
      	});

        $("#repeatpassword").blur(function(){
 					
 			        var str=$("#repeatpassword").val();
 			        var str2=$("#password").val();
        			var len=str.length;

        			if(str==""){
        				$("#repeatpasswordfieldcheck").show('slow');
        				$("#passwordmatchcheck").hide('slow');
        				
        			}
        			else{
        				$("#repeatpasswordfieldcheck").hide('slow');
        				if(str==str2){
        					$("#passwordmatchcheck").hide('slow');
        				}
        				else{
        					$("#passwordmatchcheck").show('slow');
        				}
        			}
    	});
        
        	
          $("#driverSubmit").click(function(){
                     jQuery(document).ready(function($)  {
		            $.ajaxSetup({
		                 headers: { 'X-CSRF-Token' : $('meta[name="_token"]').attr('content') }
		                });
       				 });
                    
                    var data=$("#driverForm").serialize();

                   console.log('hisis');
                   alert('in driver');

                    $.ajax({
                        type:'post',
                        url:'driverSignUP',
                      
                        data:{data, '_token': '{!! csrf_token() !!}'},
                        dataType:'json',
                       
                
                        success:function(res){
                            alert(res);
                             alert('in ajax');
                        },
                        error:function(res){
                            alert('in error')
                             alert(res);
                            
                        }


                    });
            });

  //   $(function(){
  //     showAllDriver();
  //   function showAllDriver(){
  //     jQuery(document).ready(function($)  {
  //                   $.ajaxSetup({
  //                        headers: { 'X-CSRF-Token' : $('meta[name="_token"]').attr('content') }
  //                       });
  //                  });
  //         var str="usman";
  //      $.ajax({
  //             type:'post',
  //             url:'displayDriver',
  //             cache:false,
  //              data:{str, '_token': '{!! csrf_token() !!}'},
  //             dataType:'json',
  //             success:function(data){
  //               console.log(data);
                
  //             
  //              },
  //             error:function(){
  //               alert('not loaded loaded');
  //              
  //             }
  //           });
  //    }
  // });

         // var html='';
         //        var i;
               // for (i=0; i <4;i++ ){
               //      html+='<div class="row" id="displayDriver">'+
               //            '<div class="col-xs-12">'+
               //              '<div class="panel">'+
               //                '<h4>Driver Location</h4>'+
               //              '</div>'+
               //              '<div class="panel-body">'+
               //                '<div id="map"'+i+'style="height: 300px"></div>'+
               //              '</div>'+
               //            '</div>'+
               //          '</div>'+
               //          '</div>'
                        
               //  }
               //  $('#displayDriver').html(html);
    //             var map;
  //     function initMap() {
  //       var mapOptions = {
  //         center: new google.maps.LatLng(58, 16),
  //         zoom: 5,
  //         mapTypeId: google.maps.MapTypeId.ROADMAP
  //       };
  //       map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions)



  //   for (var i = 0, length = json.length; i < length; i++) {
  //     var data = json[i];
  //     var latLng = new google.maps.LatLng(data.lat, data.lng);
  //      alert(latLng);
       
  //      var html = "<div> data.decriptio </div>"
       
  //      var infowindow = new google.maps.InfoWindow({
  //     content:"<div> data.decriptio </div>"});

  //     // Creating a marker and putting it on the map
  //       var marker = new google.maps.Marker({
  //         position: latLng,
  //         map: map,
  //         title: data.title
  //         });
          
  //         infowindow.open(map, marker);
  //       marker.addListener('click', function() {
  //       infowindow.open(map, marker);
  //       });
          
  //         setTimeout(function (){
  //         marker.setMap(map);}, 100); 
  //   }
  // }