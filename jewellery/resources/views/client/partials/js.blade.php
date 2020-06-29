    <!-- JS
============================================ -->
 
    
    <!-- Modernizer JS -->
    <script src="{{asset('client_asset/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('client_asset/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('client_asset/js/vendor/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('client_asset/js/vendor/bootstrap.min.js')}}"></script>
    <!-- slick Slider JS -->
    <script src="{{asset('client_asset/js/plugins/slick.min.js')}}"></script>
    <!-- Countdown JS -->
    <script src="{{asset('client_asset/js/plugins/countdown.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('client_asset/js/plugins/nice-select.min.js')}}"></script>
    <!-- jquery UI JS -->
    <script src="{{asset('client_asset/js/plugins/jqueryui.min.js')}}"></script>
    <!-- Image zoom JS -->
    <script src="{{asset('client_asset/js/plugins/image-zoom.min.js')}}"></script>
    <!-- Imagesloaded JS -->
    <script src="{{asset('client_asset/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Instagram feed JS -->
    <script src="{{asset('client_asset/js/plugins/instagramfeed.min.js')}}"></script>
    <!-- mailchimp active js -->
    <script src="{{asset('client_asset/js/plugins/ajaxchimp.js')}}"></script>
    <!-- contact form dynamic js -->
    <script src="{{asset('client_asset/js/plugins/ajax-mail.js')}}"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <!-- google map active js -->
    <script src="{{asset('client_asset/js/plugins/google-map.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('client_asset/js/main.js')}}"></script>
    
    <script language="javascript" type="text/javascript" src="{{asset('client_asset/js/preloader.js')}}"></script>

    <!-- Rate-it --><!-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.rateit/1.1.2/jquery.rateit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.rateit/1.1.2/jquery.rateit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.rateit/1.1.2/jquery.rateit.min.js.map"></script> -->

    <script type="text/javascript">
       function inc_updateQty(c_id) {

        var oldValue = document.getElementById(c_id).value;
        var newVal = parseFloat(oldValue) + 1;
        
        document.getElementById(c_id).value=newVal;
        $.ajax({
            url: "/home/update-cart/",
            type: "POST",
            data:{ 
                cart_id:c_id,
                quantity:newVal,
                _token:'{{ csrf_token() }}'
            },
            cache: false,
            dataType: 'json',
             success:function(response){
                console.log(response);
                  location.reload(); 
            },
                
            });
    }
    function dec_updateQty(c_id) {

        var oldValue = document.getElementById(c_id).value;
        if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        document.getElementById(c_id).value=newVal;
        $.ajax({
            url: "/home/update-cart/",
            type: "POST",
            data:{ 
                cart_id:c_id,
                quantity:newVal,
                _token:'{{ csrf_token() }}'
            },
            cache: false,
            dataType: 'json',
             success:function(response){
                console.log(response);
                  location.reload(); 
            },
                
            });
    }

     
    </script>
    