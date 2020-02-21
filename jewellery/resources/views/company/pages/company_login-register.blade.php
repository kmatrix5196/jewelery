    @extends('company.layouts.default')
    @section('title','Login-Register')
    @section('content')
    <main>
         <style type="text/css">
              #map{ width:460px; height: 300px; }
            </style>
        
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="30" height="30"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M94.0625,24.28723c-1.04141,0 -2.08229,0.37111 -2.82135,1.11017l-72.2948,72.15832c-1.6125,1.6125 -1.6125,4.1672 0,5.64532l11.42188,11.42188c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l58.04895,-57.91772l43,43v54.15417c-3.89687,1.34375 -6.85417,4.70313 -7.7948,8.73438h-16.3927v-55.09375c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-29.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v55.09375h-24.1875v-36.28125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v9.94427c-6.58438,1.6125 -11.68958,6.71927 -13.03333,13.30365c-6.58438,1.34375 -11.82552,6.58333 -13.30365,13.03333h-11.28803c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h127.65625c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-1.34375c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125c2.28438,0 4.03125,1.74687 4.03125,4.03125v1.34375c0,2.28438 1.74687,4.03125 4.03125,4.03125h4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-0.2677c-0.94063,-4.03125 -3.89792,-7.39062 -7.7948,-8.73437v-46.09167l6.8526,6.85522c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l11.42188,-11.42187c1.6125,-1.6125 1.6125,-4.1672 0,-5.64532l-72.16095,-72.15832c-0.73906,-0.73906 -1.77994,-1.11017 -2.82135,-1.11017zM94.0625,33.99792l66.51563,66.51563l-5.6427,5.6427l-58.05157,-57.9151c-0.80625,-0.80625 -1.74635,-1.2099 -2.82135,-1.2099c-1.075,0 -2.0151,0.40365 -2.82135,1.2099l-58.05157,57.9151l-5.6427,-5.6427zM86,135.71875c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125c-2.28437,0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125zM43,144.72083v17.87292h-17.87292c1.47813,-3.225 4.70417,-5.375 8.46667,-5.375c2.28437,0 4.03125,-1.74687 4.03125,-4.03125c0,-3.7625 2.15,-6.98855 5.375,-8.46667zM166.625,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">login-Register</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper section-padding">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap">
                                <h5 class="Royal_Crescent_Bold">Log In</h5>
                                <form action="#" method="post">
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Email Address or UserID" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" placeholder="Enter your Password" required />
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">I Agree To Free Membership Aggrement</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn btn-sqr">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->

                        <!-- Register Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap sign-up-form">
                                <h5 class="Royal_Crescent_Bold">Regristation Form</h5>
                                <br>
                                <form action="{{route ('add_company')}}" enctype="multipart/form-data" method="post">
                        @csrf
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="single-input-item">
                                              <input type="text" placeholder="Name" name="name" required />
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="single-input-item">
                                              <input type="text" placeholder="Business Type" name="business" required />
                                          </div>
                                      </div>
                                  </div>


                                  <br>

                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <p class="form-help-text mt-0">Upload your company profile picture.</p>
                                <input class="file-pond" type="file" multiple name="b_img" accept="image/*">
                            </div>
                        </div> 
                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <p class="form-help-text mt-0">Upload another photo for your company.</p>
                                <input class="file-pond" type="file" multiple name="b_img1" accept="image/*">
                            </div>
                        </div> 
                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <p class="form-help-text mt-0">Upload another photo for your company.</p>
                                <input class="file-pond" type="file" multiple name="b_img2" accept="image/*">
                            </div>
                        </div> 
                                    <div class="single-input-item">
                                        <input type="text" placeholder="Main Product" name="product" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="date" placeholder="Year Established" name="date" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="tel" placeholder="Tel :" name="tel" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Email : " name="email" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="text" placeholder="Address : " name="address" required />
                                    </div>
                                    <div class="single-input-item">
                                        
                                        <div id="map"></div>
                                    </div>
                                    <input type="hidden" id="lat" name="lat">
                                    <input type="hidden" id="lng" name="lng">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" id="password" placeholder="Create Password" name="password" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" placeholder="Re-enter Password" id="re_password" name="re_password" required onkeyup="myFunction()" />
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="single-input-item">
                                        <button class="btn btn-sqr" id="Register" disabled="disabled">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript">
            //map.js
 
//Set up some of our variables.
var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker? 
        
//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {
    
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
  function showPosition(position) {
  /*x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;*/
    var uluru = {lat: position.coords.latitude, lng: position.coords.longitude};
    //The center location of our map.
    var centerOfMap = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    document.getElementById('lat').value = position.coords.latitude; //latitude
    document.getElementById('lng').value = position.coords.longitude; //longitude
    //Map options.
    var options = {
      center: centerOfMap, //Set center.
      zoom: 18 //The zoom value.
    };
 
    //Create the map object.
    map = new google.maps.Map(document.getElementById('map'), options);
    var marker = new google.maps.Marker({position: uluru, map: map});
    //Listen for any clicks on the map.
    google.maps.event.addListener(map, 'click', function(event) {                
        //Get the location that the user clicked.
        var clickedLocation = event.latLng;
        //If the marker hasn't been added.
        if(marker === false){
            //Create the marker.
            marker = new google.maps.Marker({
                position: clickedLocation,
                map: map,
                draggable: true //make it draggable
            });
            //Listen for drag events!
            google.maps.event.addListener(marker, 'dragend', function(event){
                markerLocation();
            });
        } else{
            //Marker has already been added, so just change its location.
            marker.setPosition(clickedLocation);
        }
        //Get the marker's location.
        markerLocation();
    });

        
//This function will get the marker's current location and then add the lat/long
//values to our textfields so that we can save the location.
function markerLocation(){
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    document.getElementById('lat').value = currentLocation.lat(); //latitude
    document.getElementById('lng').value = currentLocation.lng(); //longitude
}
   }
}     
        
//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);
        </script>
        <!-- login register wrapper end -->
         <script type="text/javascript">
        function myFunction() {
          var password = document.getElementById("password").value;
          var y=document.getElementById("re_password");
          var re_password=document.getElementById("re_password").value;
          if(password==re_password)
          {
            y.style.color="green";
            //document.getElementById("check").style.display="block";
            document.getElementById("Register").disabled=false;
          }
          else{
           
            y.style.color="red";
            //document.getElementById("check").style.display="none";
            document.getElementById("Register").disabled=true;
          }
        }

        
    </script>  
    </main>
    @endsection