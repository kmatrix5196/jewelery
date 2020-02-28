    
    @extends('client.layouts.default')
    @section('title','Chat')
    @section('content')

        <div class="main-wrapper">
        <!-- Content Body Start -->
        <div class="content-body mt-30 mb-60">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-1"></div>
                <div class="col-10 mb-20">
                    <div class="page-heading">
                        <h3>App <span>/ Chat</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">
                <!-- Chat App Start -->
              <div class="col-1"></div>
                <div class="col-10">
                    <div class="chat-app-wrap" id="chat-app-wrap">

                        <button class="chat-contacts-open"><i class="zmdi zmdi-accounts-alt"></i></button>

                        <!--Chat Contacts Start-->
                        <div class="chat-contacts" id="chat-contacts">

                            <button class="chat-contacts-close"><i class="zmdi zmdi-close"></i></button>

                            <!--Chat Contact Search Start-->
                            <div class="contact-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search Contact">
                                </form>
                            </div>
                            <!--Chat Contact Search End-->

                            <!--Contact List Start-->
                            <ul class="chat-contact-list custom-scroll">
                                @isset($temp_convs)
                                @foreach ($temp_convs as $temp_conv)
                                <li>
                                    <a href="#" onclick="viewChat({{$temp_conv['conv_id']}},'{{$temp_conv['name']}}','{{$temp_conv['profile_pic']}}')">
                                        <div class="image"><img src="{{$temp_conv['profile_pic']}}" alt=""></div>
                                        <div class="content">
                                            <h5 class="name">{{$temp_conv['name']}}</h5>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @endisset
                                
                            </ul>
                            <!--Contact List End-->

                        </div>
                        <!--Chat Contacts End-->

                        <!--Chat Active Contact Start-->
                        <div class="chat-active-contact" id="chat-active-contact">
                            <div class="chat-contact">
                                <div class="image"><img id="chat_pro_pic" src="" alt="Profile_Picture"></div>
                                <div class="info">
                                    <h5 id="chat_name"></h5>
                                </div>
                            </div>
                           
                        </div>
                        <!--Chat Active Contact End-->

                        <!-- Chat Start -->
                        <div class="chat-wrap overflow-auto" id="chat-wrap">
                            <ul class="chat-list" id="chat-list">
                            </ul>
                        </div>

                        <div class="chat-submission">
                            <form method="POST" enctype="multipart/form-data" id="sendMessage">
                                @csrf
                                <input type="text" id="message" placeholder="Type something"/>
                                <div id="img">                                    
                                </div>
                                <div class="buttons">
                                    <label class="file-upload button button-box button-round button-primary" for="chat-file-upload">
                                        <input type="file" id="chat-file-upload" onchange="uploadFile()" accept="image/*" value="" name="chat-file-upload">
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                        <input type="text" hidden="True" id="conv_id" name="conv_id">
                                    </label>
                                    <button class="submit button button-box button-round button-primary" id="send_msg" type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                                    <button class="reset button button-box button-round button-primary" id="reset" onclick="resetMsg()" type="reset"><i class="zmdi zmdi-close"></i></button>
                                </div>
                            </form>
                        </div><!-- Chat End -->

                    </div>
                </div><!-- Chat End Start -->
            </div>

        </div><!-- Content Body End -->

         <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-app.js"></script>

        <!-- firebase database -->
        <script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-database.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-analytics.js"></script>

        <script>
            document.getElementById('chat-app-wrap').style.minHeight = '650px';
            document.getElementById('chat-active-contact').style.display = "none";
            document.getElementById('sendMessage').style.display = "none";

          // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyByszv1tWi5XYAxUlGUoogyKS-NVgNHgjY",
            authDomain: "fir-testing-156f3.firebaseapp.com",
            databaseURL: "https://fir-testing-156f3.firebaseio.com",
            projectId: "fir-testing-156f3",
            storageBucket: "fir-testing-156f3.appspot.com",
            messagingSenderId: "722575920225",
            appId: "1:722575920225:web:0d63afd3485d0fde5c6e20",
            measurementId: "G-JSKRY2ES7T"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        @auth('user')
        @isset($rst_conv)
            viewChat({{$temp_conv['conv_id']}})
        @endisset
        function resetMsg() {
            document.getElementById('img').innerHTML = "";
            document.getElementById("chat-file-upload").value = "";
        }
        function uploadFile()
        {
            var x = document.getElementById("chat-file-upload");
            if ('files' in x) {
                // if (x.files.length == 0) {
                //     txt = "Select one or more files.";
                // } 
                // else {
                //     for (var i = 0; i < x.files.length; i++) {
                        
                //         var file_reader = new FileReader();
                //         file_reader.onload = function(e) {
                //             document.getElementById('img').innerHTML =  '<img id="img'+i+'" src="'+e.target.result+'" alt="image" />'
                //             // console.log(e.target.result);
                //         }
                //         file_reader.readAsDataURL(x.files[i]);
                //     }
                // }
                if (x.files && x.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                  document.getElementById('img').innerHTML = '<img height="200px" width="200px" src="'+e.target.result+'" alt="image" />'
                }
                reader.readAsDataURL(x.files[0]);
              }
            }

        }
 //        $("#id_form").on("submit", function(){
 // //        $(document).ready(function(){
 // //        $('#sendMessage').on('submit', function(event){
 // //  event.preventDefault();
 // //  
 // // });
  // return false;
  //   });

$(document).ready(function(){

$('#sendMessage').on('submit', function(event){
    event.preventDefault();
    var message = document.getElementById('message').value;
    var id = document.getElementById('send_msg').value;
    document.getElementById('conv_id').value = id;
    var img = document.getElementById('chat-file-upload').value;
    console.log(img);
    var img_name = "";
    if (img !== "") {
        $.ajax({
            url:"{{ route('file_upload') }}",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
                firebase.database().ref('message_dtl/'+id).push().set({
                    "status": 0,
                    "content": data.name,
                    "type": 1,
                    "s_o_r": 1,
                    "sent_date": Date(Date.now())
                });
            }
        });
        
    }
    if (message) {
        firebase.database().ref('message_dtl/'+id).push().set({
            "status": 0,
            "content": message,
            "type": 0,
            "s_o_r": 1,
            "sent_date": Date(Date.now())
        });
    }
    // prevent from submitting
    document.getElementById('message').value = "";
    document.getElementById('img').innerHTML = "";
    document.getElementById('chat-file-upload').value = "";

});
});

//         function sendMessage()
//         {
//             var message = document.getElementById('message').value;
//             var id = document.getElementById('send_msg').value;
//             var img = document.getElementById('chat-file-upload').value;
//             if (img) {
//                 $.ajaxSetup({
//       headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       }
//   });
//                 const formData = new FormData(document.getElementById("sendMessage"));
//                 // var formData = new FormData();
//                 // var file = $("#chat-file-upload").prop("files")[0];
//                 // formData.set('_token',$('meta[name="csrf-token"]').attr('content'))
//                 // formData.set('conv_id',id)
//                 console.log(formData);
// //                 p_img =document.getElementById("pimg").value;  
// // param= ;  
// // xmlhttp.open("POST","add_prod.php?"+param,false);  
// // xmlhttp.send();
// fetch("/user/fileUpload", {
//     method: 'POST',
//     body: formData,
//   }).then(response => {
//     console.log(response)
//   })
//                 $.ajax({
//    url:"/user/fileUpload",
//    method:"POST",
//    data:formData,
//    proccessData:false,
//    contentType: false,
//    cache: false,
//    dataType: 'json',
//    success:function(data)
//    {
//     alert(123);
//    },
// });
  //  error: function(xhr, desc, err) {
  //                   alert(xhr);
  //                   alert("Details0: " + desc + "\nError:" + err);
  //               },
  // })
  //               console.log(123);
        //         $.ajax({
        //            url: '/user/fileUpload',
        //            type: 'POST',
        //            data: formData,
        //            processData: false,  // tell jQuery not to process the data
        //             contentType: "application/json; charset=utf-8",     // tell jQuery not to set contentType
        //            success: function (response) {
        //              alert(response);
        //            }
        //        });

        //         document.getElementById('fileUpload').submit();

        //         var file_data = $("#chat-file-upload").prop("files")[0];   // Getting the properties of file from file field 
        //         // Appending parameter named file with properties of file_field to form_data

        //         var formData = new FormData();
        //         formData.append('_token',$('meta[name="csrf-token"]').attr('content'))
        //         formData.append('chat-file-upload',file)
        //         $.ajax({
        //                 url: "/user/uploadfile",
        //                 data: formData,
        //                 dataType:'JSON',
        //                 contentType: false,
        //                 cache:false,
        //                 processData: false,
        //                 type: 'POST',
        //                 success: function (data) {
        //     alert(data);
        // },error: function (data) {
        //     alert(123);
        // }

        //         });

        //     }
        //     if (message) {
        //         firebase.database().ref('message_dtl/'+id).push().set(
        //             {
        //                 "status": 0,
        //                 "content": message,
        //                 "type": "msg",
        //                 "s_o_r": 1,
        //                 "sent_date": Date(Date.now())
        //             });
        //     }
        //     // prevent from submitting
        //     document.getElementById('message').value = "";
        //     // return false;
        // }
        function viewChat(id, name, pic) {
            document.getElementById('chat-active-contact').style.display = "block";
            document.getElementById('sendMessage').style.display = "block";
            document.getElementById('chat_name').innerHTML = name;
            document.getElementById('chat_pro_pic').src = pic;
            document.getElementById('send_msg').value = id;
            document.getElementById("chat-list").innerHTML = "";
            firebase.database().ref("message_dtl/"+id).on("child_added", function (snapshot){
                var html = "";
                    if (snapshot.val().s_o_r==1) {
                        if (snapshot.val().type==0) {
                            html+='<li class="sender"><div class="chat"><div class="head"><span>'+snapshot.val().sent_date+'</span></div><div class="body"><div class="content"><p>'+snapshot.val().content+'</p></div></div></div></li>';
                        }
                        else {
                            html+='<li class="sender"><div class="chat"><div class="head"><span>'+snapshot.val().sent_date+'</span></div><div class="body"><div class="content"><img height="200px" width="200px" src="'+snapshot.val().content+'" alt="image" /></div></div></div></li>';
                        }
                        
                    }
                    else if(snapshot.val().s_o_r==0)
                    {
                         if (snapshot.val().type==0) {
                            html+='<li><div class="chat"><div class="head"><span>'+snapshot.val().sent_date+'</span></div><div class="body"><div class="content"><p>'+snapshot.val().content+'</p></div></div></div></li>';
                        }
                        else {
                            html+='<li><div class="chat"><div class="head"><span>'+snapshot.val().sent_date+'</span></div><div class="body"><div class="content"><img height="200px" width="200px" src="'+snapshot.val().content+'" alt="image" /></div></div></div></li>';
                        }
                    }   
                document.getElementById("chat-list").innerHTML += html;
                var objDiv = $(".chat-wrap");
                objDiv.animate({scrollTop: objDiv.get(0).scrollHeight},1, 'linear');
            })
        }
        @endauth
        @auth('company')
        function sendMessage()
        {
            var message = document.getElementById('message').value;
            if (message) {
                var id = document.getElementById('send_msg').value;
                firebase.database().ref('message_dtl/'+id).push().set(
                    {
                        "status": 0,
                        "content": message,
                        "type": "msg",
                        "s_o_r": 0,
                        "sent_date": Date(Date.now())
                    });
            }
            // prevent from submitting
            document.getElementById('message').value = "";
            return false;
        }
        function viewChat(id, name, pic) {
            document.getElementById('chat-active-contact').style.display = "block";
            document.getElementById('sendMessage').style.display = "block";
            document.getElementById('send_msg').value = id;
            document.getElementById("chat-list").innerHTML = "";
            firebase.database().ref("message_dtl/"+id).on("child_added", function (snapshot){
                var html = "";
                if (snapshot.val().conv_id == id) 
                {
                    if (snapshot.val().s_o_r==0) {
                        html+='<li class="sender"><div class="chat"><div class="head"><span>'+snapshot.val().sent_date+'</span></div><div class="body"><div class="content"><p>'+snapshot.val().content+'</p></div></div></div></li>';
                    }
                    else if(snapshot.val().s_o_r==1)
                    {
                         html+='<li><div class="chat"><div class="head"><span>'+snapshot.val().sent_date+'</span></div><div class="body"><div class="content"><p>'+snapshot.val().content+'</p></div></div></div></li>';
                    }
                }
                document.getElementById("chat-list").innerHTML += html;
                var objDiv = $(".chat-wrap");
                objDiv.animate({scrollTop: objDiv.get(0).scrollHeight},1, 'linear');
            })
        }
        @endauth

        </script>
       
        @endsection
