(function ($) {
    "use strict";

    // Sticky menu
    var $window = $(window);
    $window.on('scroll', function () {
        var scroll = $window.scrollTop();
        if (scroll < 300) {
            $(".sticky").removeClass("is-sticky");
        } else {
            $(".sticky").addClass("is-sticky");
        }
    });


    // tooltip active js
    $('[data-toggle="tooltip"]').tooltip();


    // Background Image JS start
    var bgSelector = $(".bg-img");
    bgSelector.each(function (index, elem) {
        var element = $(elem),
            bgSource = element.data('bg');
        element.css('background-image', 'url(' + bgSource + ')');
    });


    // Off Canvas Open close
    $(".mobile-menu-btn").on('click', function () {
        $("body").addClass('fix');
        $(".off-canvas-wrapper").addClass('open');
    });

    $(".btn-close-off-canvas,.off-canvas-overlay").on('click', function () {
        $("body").removeClass('fix');
        $(".off-canvas-wrapper").removeClass('open');
    });

    // offcanvas mobile menu
    var $offCanvasNav = $('.mobile-menu'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.dropdown');
    
    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');
    
    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();
    
    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });
    

    // hero slider active js
    $('.hero-slider-active').slick({
        fade: true,
        speed: 1000,
        dots: false,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false,
                dots: true
            }
        }]
    });


    // product carousel active js
    $('.product-carousel-4').slick({
        speed: 1000,
        slidesToShow: 4,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows: false
            }
        }]
    });


    // product carousel active
    $('.product-carousel-4_2').slick({
        speed: 1000,
        slidesToShow: 4,
        rows: 2,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                arrows: false,
                rows: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows: false,
                rows: 1
            }
        }]
    });


    // product banner active js
    $('.product-banner-carousel').slick({
        autoplay: true,
        speed: 1000,
        arrows: false,
        slidesToShow: 4,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }]
    });


    // group product carousel active
    $('.group-list-carousel').each(function () {
        var $this = $(this);
        var $arrowContainer = $(this).parent().siblings('.section-title-append').find('.slick-append');
        $this.slick({
            infinite: true,
            rows: 4,
            prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
            appendArrows: $arrowContainer,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }]
        });
    });


    // blog carousel active start
    $('.group-list-carousel--3').slick({
        autoplay: true,
        speed: 1000,
        rows: 3,
        slidesToShow: 3,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }]
    });

    // blog carousel active start
    $('.blog-carousel-2').slick({
        speed: 1000,
        dots: true,
        arrows: false
    });


    // testimonial cariusel active js
    $('.testimonial-content-carousel').slick({
        arrows: false,
        asNavFor: '.testimonial-thumb-carousel'
    });


    // product details slider nav active
    $('.testimonial-thumb-carousel').slick({
        slidesToShow: 3,
        asNavFor: '.testimonial-content-carousel',
        centerMode: true,
        arrows: false,
        centerPadding: 0,
        focusOnSelect: true
    });


    // blog carousel active
    $('.blog-carousel-active').slick({
        autoplay: true,
        speed: 1000,
        slidesToShow: 3,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }]
    });


    //  Hot deals carousel active start
    $('.deals-carousel-active').slick({
        autoplay: true,
        speed: 1000,
        slidesToShow: 3,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }]
    });


    // brand logo carousel active js
    $('.brand-logo-carousel').slick({
        speed: 1000,
        slidesToShow: 5,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="pe-7s-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="pe-7s-angle-right"></i></button>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                arrows: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows: false
            }
        }]
    });

    // prodct details slider active
    $('.product-large-slider').slick({
        fade: true,
        arrows: false,
        asNavFor: '.pro-nav'
    });


    // product details slider nav active
    $('.pro-nav').slick({
        slidesToShow: 4,
        asNavFor: '.product-large-slider',
        centerMode: true,
        centerPadding: 0,
        focusOnSelect: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
        responsive: [{
            breakpoint: 576,
            settings: {
                slidesToShow: 3,
            }
        }]
    });


    //nice select active start
    $('select').niceSelect();


    // Image zoom effect
    $('.img-zoom').zoom();


    // offcanvas minicart button js
    $(".minicart-btn").on('click', function(){
        $("body").addClass('fix');
        $(".minicart-inner").addClass('show')
    })

    $(".offcanvas-close, .minicart-close,.offcanvas-overlay").on('click', function(){
        $("body").removeClass('fix');
        $(".minicart-inner").removeClass('show')
    })


    // Data countdown active js
    $('[data-countdown]').each(function () {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<div class="single-countdown"><span class="single-countdown__time">%D</span><span class="single-countdown__text">Days</span></div><div class="single-countdown"><span class="single-countdown__time">%H</span><span class="single-countdown__text">Hours</span></div><div class="single-countdown"><span class="single-countdown__time">%M</span><span class="single-countdown__text">Mins</span></div><div class="single-countdown"><span class="single-countdown__time">%S</span><span class="single-countdown__text">Secs</span></div>'));
        });
    });


    // product view mode change js
    $('.product-view-mode a').on('click', function (e) {
        e.preventDefault();
        var shopProductWrap = $('.shop-product-wrap');
        var viewMode = $(this).data('target');
        $('.product-view-mode a').removeClass('active');
        $(this).addClass('active');
        shopProductWrap.removeClass('grid-view list-view').addClass(viewMode);
    })
    
    
    // pricing filter
    var rangeSlider = $(".price-range"),
        amount = $("#amount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max');
    rangeSlider.slider({
        range: true,
        min: minPrice,
        max: maxPrice,
        values: [minPrice, maxPrice],
        slide: function (event, ui) {
            amount.val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    amount.val(" $" + rangeSlider.slider("values", 0) +
        " - $" + rangeSlider.slider("values", 1)
    );


    // Checkout Page accordion
    $("#create_pwd").on("change", function () {
        $(".account-create").slideToggle("100");
    });

    $("#ship_to_different").on("change", function () {
        $(".ship-to-different").slideToggle("100");
    });
    

    // Payment Method Accordion
    $('input[name="paymentmethod"]').on('click', function () {
        var $value = $(this).attr('value');
        $('.payment-method-details').slideUp();
        $('[data-method="' + $value + '"]').slideDown();
    });


    // Scroll to top active js
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 600) {
            $('.scroll-top').removeClass('not-visible');
        } else {
            $('.scroll-top').addClass('not-visible');
        }
    });
    $('.scroll-top').on('click', function (event) {
        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });
    

    // Search trigger js
    $(".search-trigger").on('click', function(){
        $(".header-search-box").toggleClass('search-box-open');
    })


    // Mailchimp for dynamic newsletter
    $('#mc-form').ajaxChimp({
        language: 'en',
        callback: mailChimpResponse,
        // ADD YOUR MAILCHIMP URL BELOW HERE!
        url: 'https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'

    });

    // mailchimp active js
    function mailChimpResponse(resp) {
        if (resp.result === 'success') {
            $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
            $('.mailchimp-error').fadeOut(400);

        } else if (resp.result === 'error') {
            $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
        }
    }

    // User Changeable Access
    var activeId = $("#instafeed"),
        myTemplate = '<div class="instagram-item"><a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a><div class="instagram-hvr-content"><span class="tottallikes"><i class="fa fa-heart"></i>{{likes}}</span><span class="totalcomments"><i class="fa fa-comments"></i>{{comments}}</span></div></div>';

    if (activeId.length) {
        var userID = activeId.attr('data-userid'),
            accessTokenID = activeId.attr('data-accesstoken'),

            userFeed = new Instafeed({
                get: 'user',
                userId: userID,
                accessToken: accessTokenID,
                resolution: 'standard_resolution',
                template: myTemplate,
                sortBy: 'least-recent',
                limit: 15,
                links: false
            });
        userFeed.run();
    }


    
    // $(window).on('load', function () {
    //  var instagramFeed = $(".instagram-carousel");
    //  instagramFeed.imagesLoaded(function () {
    //      instagramFeed.slick({
    //          slidesToShow: 5,
    //          slidesToScroll: 2,
    //          dots: false,
    //          arrows: false,
    //          responsive: [{
    //                  breakpoint: 480,
    //                  settings: {
    //                      slidesToShow: 2,
    //                  }
    //              },
    //              {
    //                  breakpoint: 767,
    //                  settings: {
    //                      slidesToShow: 3,
    //                  }
    //              },
    //              {
    //                  breakpoint: 991,
    //                  settings: {
    //                      slidesToShow: 4,
    //                  }
    //              }
    //          ]
    //      })
    //  });
    // })
    
    
})(jQuery);

// Chat
var current_conv = 0;

$( document ).ready(function() {
    $('#chat_notification').css('display','none');
    $('.chatlist_notification').css('display','none');
    $(".alert").css('display','none');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if (route) {
        setInterval(function () {getNotification()}, 5000);
    }
    $(".chat-contact-list li a:first").click();
    $('.create_con').click(function(event){
        event.preventDefault();
        $(".alert").css('display','none');
        var form = document.forms.namedItem($(this).closest(".createCon").attr('id'));
        var form = new FormData(form);
        $.ajax({
                url:'/user/createCon',
                method:"POST",
                data:form,
                processData: false,
                contentType: false,
                success:function(data){
                    if (data['status'] == 0) {
                        $(".alert").css('display','block');
                        $(".alert strong").text('Message sent successfully!!!');
                    }
                }
            });
        // prevent from submitting
        $('.message').val("");
        $('.img').html("");
        $('.chat-file-upload').val("");
    });
    $('.create_conpre').click(function(event){
        event.preventDefault();
        $(".alert").css('display','none');
        var form = document.forms.namedItem($(this).closest(".createConPre").attr('id'));
        var form = new FormData(form);
        $.ajax({
                url:'/user/createConPre',
                method:"POST",
                data:form,
                processData: false,
                contentType: false,
                success:function(data){
                    if (data['status'] == 0) {
                        $(".alert").css('display','block');
                        $(".alert strong").text('Message sent successfully!!!');
                    }
                }
            });
        // prevent from submitting
        $('.message').val("");
        $('.img').html("");
        $('.chat-file-upload').val("");
    });
    $('#sendMessage').on('submit', function(event){
        event.preventDefault();
        $('#conv_id').val(current_conv);
        console.log($('#conv_id').val());

        var form = document.forms.namedItem("sendMessage");
        var formData = new FormData(form);

        console.log(formData);
        $.ajax({
                url:'sendMessage',
                method:"POST",
                data:formData,
                processData: false,
                contentType: false,
                success:function(data){
                    var send_o_recieve = '';
                    var html = "";
                    if (data['status'] == 1) {
                        if (data['send_o_recieve'] == 1) {
                            send_o_recieve = '';
                        } else {
                            send_o_recieve = 'receive';
                        }
                        if (data['type'] == 1) {
                            html+='<li><div class="chat"><div class="chat_body'+send_o_recieve+'"><span>Yesterday 05.30 am</span><div class="chat_content'+send_o_recieve+'"><p>'+data['content']+'</p><img height="200px" width="200px" src="'+data['src']+'" alt="image" /></div></div></div></li>';
                        } else {
                            html+='<li><div class="chat"><div class="chat_body'+send_o_recieve+'"><span>Yesterday 05.30 am</span><div class="chat_content'+send_o_recieve+'"><p>'+data['content']+'</p></div></div></div></li>';
                        }
                        $("#chat-list").append(html);
                        var objDiv = $(".chat-wrap");
                        objDiv.animate({scrollTop: objDiv.get(0).scrollHeight},1, 'linear');
                    }
                    else {
                        if (data['send_o_recieve'] == 0) {
                            send_o_recieve = '';
                        } else {
                            send_o_recieve = 'receive';
                        }
                        if (data['type'] == 1) {
                            html+='<li><div class="chat"><div class="chat_body'+send_o_recieve+'"><span>Yesterday 05.30 am</span><div class="chat_content'+send_o_recieve+'"><p>'+data['content']+'</p><img height="200px" width="200px" src="'+data['src']+'" alt="image" /></div></div></div></li>';
                        } else {
                            html+='<li><div class="chat"><div class="chat_body'+send_o_recieve+'"><span>Yesterday 05.30 am</span><div class="chat_content'+send_o_recieve+'"><p>'+data['content']+'</p></div></div></div></li>';
                        }
                        $("#chat-list").append(html);
                        var objDiv = $(".chat-wrap");
                        objDiv.animate({scrollTop: objDiv.get(0).scrollHeight},1, 'linear');
                    }
                    

                    
                }
            });
        // if (img !== "") {
            
        // }
        // if (message) {
            
        // }
        // prevent from submitting
        document.getElementById('message').value = "";
        document.getElementById('img').innerHTML = "";
        document.getElementById('chat-file-upload').value = "";
    });
    // Filter chat list
    $("#search_chat_list").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".chat-contact-list a").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    
});
function viewChat(conv_id) {
        console.log(current_conv)
        current_conv = conv_id;
        
        $('#conv_id').val(current_conv);
        $.ajax({
            url: "viewConversation",
            type: "POST",
            data: {
                conv_id: current_conv,
                message: 1,
            },
            success: function (data) {
                // console.log(data['content']);
                $("#chat_detail_wrapper").html(data);
                var objDiv = $(".chat-wrap");
                objDiv.animate({scrollTop: objDiv.get(0).scrollHeight},1, 'linear');
                setInterval(function () {getMessage()}, 5000);
            }
         })

    }
    function getNotification () {
        $('.chatlist_notification').css('display','none');
        $.ajax({
            url: route+"/getMessage",
            type: "POST",
            data: {
                conv_id: current_conv,
                message: 0
            },
            success: function (data) {
                if (data) {
                    if (data['notification']>0) {
                        $('#chat_notification').css('display','block');
                        $('#chat_notification').text(data['notification']);
                        if ($('.chatlist_notification'))
                        {
                            $.each(data['alert'], function(index, element) {
                                if (current_conv != element['conv_id'] ) {
                                    $('#chatlist_notification_'+element['conv_id']).css('display','block');
                                    $('#chatlist_notification_'+element['conv_id']).text(element['pending']);
                                }                       
                            })
                        }
                    }
                    else {
                        $('#chat_notification').css('display','none');
                        if ($('.chatlist_notification'))
                        {
                            $('.chatlist_notification').css('display','none');
                        }
                    }
                }
                else {
                    console.log(0000);
                }
            }
        });

    }
    function uploadFile()
    {
        var x = document.getElementById("chat-file-upload");
        if ('files' in x) {
            if (x.files && x.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('img').innerHTML = '<img height="200px" width="200px" src="'+e.target.result+'" alt="image" />'
                }
                reader.readAsDataURL(x.files[0]);
            }
        }

    }
    function getMessage(){
    var html = "";
    var chat_body = '';
	var chat_content = '';
	$.ajax({
		url: "getMessage",
		type: "POST",
		data: {
			conv_id: current_conv,
			message: 1
		},
		success: function (data) {
			if (data) {
				if (data['status'] == 1) {
					$.each(data['data'], function(index, element) {
						if (element['send_o_recieve'] == 1) {
							chat_body = 'chat_body';
							chat_content = 'chat_content';
						} else {
							chat_body = 'chat_body_recieve';
							chat_content = 'chat_content_recieve';
						}
						if (element['type'] == 1) {
							html+='<li><div class="chat"><div class="'+chat_body+'"><span>Yesterday 05.30 am</span><div class="'+chat_content+'"><p>'+element['content']+'</p><img height="200px" width="200px" src="'+data['src']+'" alt="image" /></div></div></div></li>';
                        } else {
                        	html+='<li><div class="chat"><div class="'+chat_body+'"><span>Yesterday 05.30 am</span><div class="'+chat_content+'"><p>'+element['content']+'</p></div></div></div></li>';
                        }
						$("#chat-list").append(html);
						var objDiv = $(".chat-wrap");
						objDiv.animate({scrollTop: objDiv.get(0).scrollHeight},1, 'linear');
					})
				} else {
					$.each(data['data'], function(index, element) {
						if (element['send_o_recieve'] == 0) {
							chat_body = 'chat_body';
							chat_content = 'chat_content';
						} else {
							chat_body = 'chat_body_recieve';
							chat_content = 'chat_content_recieve';
						}
						if (element['type'] == 1) {
							html+='<li><div class="chat"><div class="'+chat_body+'"><span>Yesterday 05.30 am</span><div class="'+chat_content+'"><p>'+element['content']+'</p><img height="200px" width="200px" src="'+element['src']+'" alt="image" /></div></div></div></li>';
                         } else {
                        	html+='<li><div class="chat"><div class="'+chat_body+'"><span>Yesterday 05.30 am</span><div class="'+chat_content+'"><p>'+element['content']+'</p></div></div></div></li>';
                        }
						$("#chat-list").append(html);
						var objDiv = $(".chat-wrap");
						objDiv.animate({scrollTop: objDiv.get(0).scrollHeight},1, 'linear');
					})
				}
				
			}
			else {
				console.log(0000);
			}
		}
	});
    }
    function resetMsg() {
        document.getElementById('img').innerHTML = "";
        document.getElementById("chat-file-upload").value = "";
    }
    function show_date(id) {
        if ($(id).hasClass('d-none')) {
            $(id).removeClass('d-none');    
        }
        else {
            $(id).addClass('d-none');   
        }
    }
    
