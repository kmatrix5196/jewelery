    
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
                        <div class="chat-contacts">

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
                                    <a href="#" onclick="viewChat({{$temp_conv['conv_id']}})">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                                <div class="image"><img src="{{asset('img/admin.png')}}" alt=""></div>
                                <div class="info">
                                    <h5>Rebecca Mitchell</h5>
                                    <span>Last seen: 1 hour ago</span>
                                </div>
                            </div>
                            <!-- <div class="chat-contact-actions">
                                <button class="button button-box button-round button-primary"><i class="zmdi zmdi-phone"></i></button>
                                <button class="button button-box button-round button-primary"><i class="zmdi zmdi-accounts-add"></i></button>
                            </div> -->
                        </div>
                        <!--Chat Active Contact End-->

                        <!-- Chat Start -->
                        <div class="chat-wrap overflow-auto" id="chat-wrap">
                            <ul class="chat-list" id="chat-list">
                                <!-- <li>
                                    <div class="chat">
                                        <div class="head">
                                            <h5>Rebecca Mitchell</h5>
                                            <span>Yesterday 05.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{asset('img/sender.png')}}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="sender">
                                    <div class="chat">
                                        <div class="head">
                                            <h5>Jennifer White</h5>
                                            <span>Today 06.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{asset('img/receiver.png')}}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>

                        <div class="chat-submission">
                            <form onsubmit="return sendMessage();" id="sendMessage">
                                <input type="text" id="message" placeholder="Type something"/>
                                <div class="buttons">
                                    <label class="file-upload button button-box button-round button-primary" for="chat-file-upload">
                                        <input type="file" id="chat-file-upload" multiple>
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                    </label>
                                    <button class="submit button button-box button-round button-primary" id="send_msg" type="submit"><i class="zmdi zmdi-mail-send"></i></button>
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
        @isset($temp_conv)
            viewChat({{$temp_conv['conv_id']}})
        @endisset
        function sendMessage()
        {
            var message = document.getElementById('message').value;
            if (message) {
                var id = document.getElementById('send_msg').value;
                firebase.database().ref('message_dtl').push().set(
                    {
                        "conv_id": id,
                        "content": message,
                        "type": "msg",
                        "s_o_r": 1,
                        "sent_date": Date(Date.now())
                    });
            }
            // prevent from submitting
            document.getElementById('message').value = "";
            return false;
        }
        function viewChat(id) {
            document.getElementById('chat-active-contact').style.display = "block";
            document.getElementById('sendMessage').style.display = "block";
            var conv_id = id;
            document.getElementById('send_msg').value = id;
            document.getElementById("chat-list").innerHTML = "";
            firebase.database().ref("message_dtl").on("child_added", function (snapshot){
                var html = "";
                if (snapshot.val().conv_id == conv_id) 
                {
                    if (snapshot.val().s_o_r==1) {
                        html+='<li class="sender"><div class="chat"><div class="head"><span>'+snapshot.val().sent_date+'</span></div><div class="body"><div class="content"><p>'+snapshot.val().content+'</p></div></div></div></li>';
                    }
                    else if(snapshot.val().s_o_r==0)
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
        @auth('company')
        function sendMessage()
        {
            var message = document.getElementById('message').value;
            if (message) {
                var id = document.getElementById('send_msg').value;
                firebase.database().ref('message_dtl').push().set(
                    {
                        "conv_id": id,
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
        function viewChat(id) {
            document.getElementById('chat-active-contact').style.display = "block";
            document.getElementById('sendMessage').style.display = "block";
            var conv_id = id;
            document.getElementById('send_msg').value = id;
            document.getElementById("chat-list").innerHTML = "";
            firebase.database().ref("message_dtl").on("child_added", function (snapshot){
                var html = "";
                if (snapshot.val().conv_id == conv_id) 
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
