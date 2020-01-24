    
    @extends('client.layouts.default')
    @section('title','Chat')
        <div class="main-wrapper">
    @section('content')

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
                    <div class="chat-app-wrap">

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
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="image"><img src="{{asset('img/sender.png')}}" alt=""><span class="status online"></span></div>
                                        <div class="content">
                                            <h5 class="name">Rebecca Mitchell</h5>
                                            <p class="last-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!--Contact List End-->

                        </div>
                        <!--Chat Contacts End-->

                        <!--Chat Active Contact Start-->
                        <div class="chat-active-contact">
                            <div class="chat-contact">
                                <div class="image"><img src="{{asset('img/admin.png')}}" alt=""></div>
                                <div class="info">
                                    <h5>Rebecca Mitchell</h5>
                                    <span>Last seen: 1 hour ago</span>
                                </div>
                            </div>
                            <div class="chat-contact-actions">
                                <button class="button button-box button-round button-primary"><i class="zmdi zmdi-phone"></i></button>
                                <button class="button button-box button-round button-primary"><i class="zmdi zmdi-accounts-add"></i></button>
                            </div>
                        </div>
                        <!--Chat Active Contact End-->

                        <!-- Chat Start -->
                        <div class="chat-wrap custom-scroll mr-0">
                            <ul class="chat-list">
                                <li>
                                    <div class="chat">
                                        <div class="head">
                                            <h5>Rebecca Mitchell</h5>
                                            <span>Yesterday 05.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{asset('img/receiver.png')}}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat">
                                        <div class="head">
                                            <h5>Jennifer White</h5>
                                            <span>Today 06.30 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{asset('img/sender.png')}}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat">
                                        <div class="head">
                                            <h5>Roger Welch</h5>
                                            <span>Today 06.31 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{asset('img/receiver.png')}}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
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
                                <li>
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
                                </li>
                                <li>
                                    <div class="chat">
                                        <div class="head">
                                            <h5>Roger Welch</h5>
                                            <span>Today 06.31 am</span>
                                            <a href="#"><i class="zmdi zmdi-replay"></i></a>
                                        </div>
                                        <div class="body">
                                            <div class="image"><img src="{{asset('img/receiver.png')}}" alt=""></div>
                                            <div class="content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="chat-submission">
                            <form action="#">
                                <input type="text" placeholder="Type something">
                                <div class="buttons">
                                    <label class="file-upload button button-box button-round button-primary" for="chat-file-upload">
                                        <input type="file" id="chat-file-upload" multiple>
                                        <i class="zmdi zmdi-attachment-alt"></i>
                                    </label>
                                    <button class="submit button button-box button-round button-primary"><i class="zmdi zmdi-mail-send"></i></button>
                                </div>
                            </form>
                        </div><!-- Chat End -->

                    </div>
                </div><!-- Chat End Start -->
            </div>

        </div><!-- Content Body End -->

         <!-- Scroll to top start -->
        @endsection