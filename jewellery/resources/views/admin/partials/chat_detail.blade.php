                    <!--Chat Active Contact Start-->
                        <div class="chat-active-contact" id="chat-active-contact">
                            <div class="chat-contact">
                                @isset($info_rst)
                                <div class="image"><img id="chat_pro_pic" src="{{$info_rst['profile_pic']}}" alt="Profile_Picture"></div>
                                <div class="info">
                                    <h5 id="chat_name">{{$info_rst['name']}}</h5>
                                </div>
                                @endisset
                            </div>
                           
                        </div>
                        <!--Chat Active Contact End-->

                        <!-- Chat Start -->
                        <div class="chat-wrap overflow-auto" id="chat-wrap">
                            <ul class="chat-list" id="chat-list">
                                @isset($temp_conv_rst)
                                @foreach ($temp_conv_rst as $temp_conv)
                                @if ($temp_conv->send_o_recieve == 1)
                                <li>
                                    <div class="chat">
                                        <div class="chat_body">
                                            <span>Yesterday 05.30 am</span>
                                            <div class="chat_content">
                                                <p>{{$temp_conv->content}}</p>
                                                @if ($temp_conv->src)
                                                <img height="200px" width="200px" src="{{$temp_conv->src}}" alt="image" />
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @else
                                <li>
                                    <div class="chat">
                                        <div class="chat_body_recieve">
                                            <span>Yesterday 05.30 am</span>
                                            <div class="chat_content_recieve">
                                                <p>{{$temp_conv->content}}</p>
                                                @if ($temp_conv->src)
                                                <img height="200px" width="200px" src="{{$temp_conv->src}}" alt="image" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                                @endisset
                            </ul>
                        </div>