    @extends('admin.layouts.default')
    @section('content')
        <!-- Content Body Start -->
        <div class="content-body">

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

                        <!-- <button class="chat-contacts-open"><i class="zmdi zmdi-accounts-alt"></i></button> -->

                        <!--Chat Contacts Start-->
                        <div class="chat-contacts" id="chat-contacts">

                            <!-- <button class="chat-contacts-close"><i class="zmdi zmdi-close"></i></button> -->

                            <!--Chat Contact Search Start-->
                            <div class="contact-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search Contact" id="search_chat_list">
                                </form>
                            </div>
                            <!--Chat Contact Search End-->

                            <!--Contact List Start-->
                            <ul class="chat-contact-list custom-scroll">
                                @isset($temp_convs)
                                @foreach ($temp_convs as $temp_conv)
                                <li>
                                    <a href="#" onclick="viewChat({{$temp_conv['conv_id']}})" id="conv_id_{{$temp_conv['conv_id']}}">
                                        <div class="image"><img src="{{$temp_conv['profile_pic']}}" alt=""></div>
                                        <div class="content">
                                            <h5 class="name">{{$temp_conv['name']}}</h5>
                                        </div>
                                        <div class="chatlist_notification" id="chatlist_notification_{{$temp_conv['conv_id']}}"></div></button></a>
                                    </a>
                                </li>
                                @endforeach
                                @endisset
                                
                            </ul>
                            <!--Contact List End-->

                        </div>
                        <!--Chat Contacts End-->

                        <div id="chat_detail_wrapper">
                            <!--Chat Active Contact Start-->
                            <div class="chat-active-contact" id="chat-active-contact">
                                <div class="chat-contact">
                                    <div class="image"><img id="chat_pro_pic" src="" alt="Profile_Picture"></div>
                                    <div class="info">
                                        <h5 id="chat_name"></h5>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="chat-wrap overflow-auto" id="chat-wrap">
                                <ul class="chat-list" id="chat-list">
                                    
                                </ul>
                            </div>

                        </div>
                        <!--Chat Active Contact End-->

                        <!-- Chat Start -->
                        
                        

                        <div class="chat-submission">
                            <form method="POST" enctype="multipart/form-data" id="sendMessage">
                                @csrf
                                <input type="text" id="message" name="message" placeholder="Type something" required="" />
                                
                                <div class="buttons">
                                    <label class="file-upload button button-box button-round" for="chat-file-upload">
                                        <input type="file" id="chat-file-upload" onchange="uploadFile()" accept="image/*" value="" name="chat-file-upload">
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                        <input type="text" hidden="True" id="conv_id" name="conv_id">
                                    </label>
                                    <button class="submit button button-box button-round" id="send_msg" type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                                    <button class="reset button button-box button-round" id="reset" onclick="resetMsg()" type="reset"><i class="zmdi zmdi-close"></i></button>
                                </div>

                            </form>
                            <br>
                            <div id="img">
                            </div>
                        </div><!-- Chat End -->

                    </div>
                </div><!-- Chat End Start -->
            </div>

        </div>
        @endsection