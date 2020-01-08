    @extends('layouts.default')
    @section('content')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">
                                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                 width="30" height="30"
                                                                 viewBox="0 0 172 172"
                                                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M94.0625,24.28723c-1.04141,0 -2.08229,0.37111 -2.82135,1.11017l-72.2948,72.15832c-1.6125,1.6125 -1.6125,4.1672 0,5.64532l11.42188,11.42188c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l58.04895,-57.91772l43,43v54.15417c-3.89687,1.34375 -6.85417,4.70313 -7.7948,8.73438h-16.3927v-55.09375c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-29.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v55.09375h-24.1875v-36.28125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v9.94427c-6.58438,1.6125 -11.68958,6.71927 -13.03333,13.30365c-6.58438,1.34375 -11.82552,6.58333 -13.30365,13.03333h-11.28803c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h127.65625c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-1.34375c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125c2.28438,0 4.03125,1.74687 4.03125,4.03125v1.34375c0,2.28438 1.74687,4.03125 4.03125,4.03125h4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-0.2677c-0.94063,-4.03125 -3.89792,-7.39062 -7.7948,-8.73437v-46.09167l6.8526,6.85522c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l11.42188,-11.42187c1.6125,-1.6125 1.6125,-4.1672 0,-5.64532l-72.16095,-72.15832c-0.73906,-0.73906 -1.77994,-1.11017 -2.82135,-1.11017zM94.0625,33.99792l66.51563,66.51563l-5.6427,5.6427l-58.05157,-57.9151c-0.80625,-0.80625 -1.74635,-1.2099 -2.82135,-1.2099c-1.075,0 -2.0151,0.40365 -2.82135,1.2099l-58.05157,57.9151l-5.6427,-5.6427zM86,135.71875c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125c-2.28437,0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125zM43,144.72083v17.87292h-17.87292c1.47813,-3.225 4.70417,-5.375 8.46667,-5.375c2.28437,0 4.03125,-1.74687 4.03125,-4.03125c0,-3.7625 2.15,-6.98855 5.375,-8.46667zM166.625,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                                    </a></li>                              
                                    <li class="breadcrumb-item active" aria-current="page">blog details right sidebar</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- blog main wrapper start -->
        <div class="blog-main-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2">
                        <aside class="blog-sidebar-wrapper">
                            <div class="blog-sidebar">
                                <h5 class="title">search</h5>
                                <div class="sidebar-serch-form">
                                    <form action="#">
                                        <input type="text" class="search-field" placeholder="search here">
                                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h5 class="title">categories</h5>
                                <ul class="blog-archive blog-category">
                                    <li><a href="#">Category 1 (10)</a></li>
                                    <li><a href="#">Category 1 (10)</a></li>
                                    <li><a href="#">Category 1 (10)</a></li>
                                    <li><a href="#">Category 1 (10)</a></li>
                                    <li><a href="#">Category 1 (10)</a></li>
                                  
                                </ul>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h5 class="title">Blog Archives</h5>
                                <ul class="blog-archive">
                                    <li><a href="#">January (10)</a></li>
                                    <li><a href="#">February (08)</a></li>
                                    <li><a href="#">March (07)</a></li>
                                    <li><a href="#">April (14)</a></li>
                                    <li><a href="#">May (10)</a></li>
                                </ul>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h5 class="title">recent post</h5>
                                <div class="recent-post">
                                    <div class="recent-post-item">
                                        <figure class="product-thumb">
                                            <a href="blog-details">
                                                <img src="assets/img/sample/blog-sample.jpg" alt="blog image">
                                            </a>
                                        </figure>
                                        <div class="recent-post-description">
                                            <div class="product-name">
                                                <h6><a href="blog-details">Auctor gravida enim</a></h6>
                                                <p>march 10 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <figure class="product-thumb">
                                            <a href="blog-details">
                                                <img src="assets/img/sample/blog-sample.jpg" alt="blog image">
                                            </a>
                                        </figure>
                                        <div class="recent-post-description">
                                            <div class="product-name">
                                                <h6><a href="blog-details">gravida auctor dnim</a></h6>
                                                <p>march 18 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <figure class="product-thumb">
                                            <a href="blog-details">
                                                <img src="assets/img/sample/blog-sample.jpg" alt="blog image">
                                            </a>
                                        </figure>
                                        <div class="recent-post-description">
                                            <div class="product-name">
                                                <h6><a href="blog-details">enim auctor gravida</a></h6>
                                                <p>march 14 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h5 class="title">Tags</h5>
                                <ul class="blog-tags">
                                    <li><a href="#">tag1</a></li>
                                    <li><a href="#">tag1</a></li>
                                    <li><a href="#">tag1</a></li>
                                    <li><a href="#">tag1</a></li>
                                    <li><a href="#">tag1</a></li>   
                                    
                                </ul>
                            </div> <!-- single sidebar end -->
                        </aside>
                    </div>
                    <div class="col-lg-9 order-1">
                        <div class="blog-item-wrapper">
                            <!-- blog post item start -->
                            <div class="blog-post-item blog-details-post">
                                <figure class="blog-thumb">
                                    <div class="blog-carousel-2 slick-row-15 slick-arrow-style slick-dot-style">
                                        <div class="blog-single-slide">
                                            <img src="assets/img/sample/blog-sample.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-single-slide">
                                            <img src="assets/img/sample/blog-sample.jpg" alt="blog image">
                                        </div>
                                        <div class="blog-single-slide">
                                            <img src="assets/img/sample/blog-sample.jpg" alt="blog image">
                                        </div>
                                    </div>
                                </figure>
                                <div class="blog-content">
                                    <h3 class="blog-title">
                                        Celebrity Daughter Opens Up About Having Her Eye Color Changed
                                    </h3>
                                    <div class="blog-meta">
                                        <p>25/03/2019 | <a href="#">Corano</a></p>
                                    </div>
                                    <div class="entry-summary">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis
                                            consequuntur illo aliquid nihil ad neque, debitis praesentium libero ullam
                                            asperiores exercitationem deserunt inventore facilis, officiis,</p>
                                        <blockquote>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur.
                                                venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed,
                                                cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin
                                                dictum
                                                tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque
                                                scelerisque.</p>
                                        </blockquote>
                                        <p>aliquam maiores asperiores recusandae commodi blanditiis ipsum tempora culpa
                                            possimus assumenda ab quidem a voluptatum quia natus? Ex neque, saepe
                                            reiciendis
                                            quasi velit perspiciatis error vel quas quibusdam autem nesciunt voluptas odit
                                            quis
                                            dignissimos eos aspernatur voluptatum est repellat. Pariatur praesentium,
                                            corrupti
                                            deserunt ducimus quo doloremque nostrum aspernatur saepe cupiditate sit autem
                                            exercitationem debitis, maiores vitae perferendis nemo? Voluptas illo, animi
                                            temporibus quod earum molestias eaque, iure rem amet autem dignissimos officia
                                            dolores numquam distinctio esse voluptates optio pariatur aspernatur omnis?
                                            Ipsam
                                            qui commodi velit natus reiciendis quod quibusdam nemo eveniet similique animi!</p>
                                        <div class="tag-line">
                                            <h6>Tag :</h6>
                                            <a href="#">Necklaces</a>,
                                            <a href="#">Earrings</a>,
                                            <a href="#">Jewellery</a>,
                                        </div>
                                        <div class="blog-share-link">
                                            <h6>Share :</h6>
                                            <div class="blog-social-icon">
                                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog post item end -->

                            <!-- comment area start -->
                            <div class="comment-section section-padding">
                                <h5>03 Comment</h5>
                                <ul>
                                    <li>
                                        <div class="author-avatar">
                                            <img src="assets/img/blog/comment-icon.png" alt="">
                                        </div>
                                        <div class="comment-body">
                                            <span class="reply-btn"><a href="#">Reply</a></span>
                                            <h5 class="comment-author">Admin</h5>
                                            <div class="comment-post-date">
                                                15 Dec, 2019 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                                adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                    <li class="comment-children">
                                        <div class="author-avatar">
                                            <img src="assets/img/blog/comment-icon.png" alt="">
                                        </div>
                                        <div class="comment-body">
                                            <span class="reply-btn"><a href="#">Reply</a></span>
                                            <h5 class="comment-author">Admin</h5>
                                            <div class="comment-post-date">
                                                20 Nov, 2019 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                                adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author-avatar">
                                            <img src="assets/img/blog/comment-icon.png" alt="">
                                        </div>
                                        <div class="comment-body">
                                            <span class="reply-btn"><a href="#">Reply</a></span>
                                            <h5 class="comment-author">Admin</h5>
                                            <div class="comment-post-date">
                                                25 Jan, 2019 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                                adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- comment area end -->

                            <!-- start blog comment box -->
                            <div class="blog-comment-wrapper">
                                <h5>Leave a reply</h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form action="#">
                                    <div class="comment-post-box">
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Comment</label>
                                                <textarea name="commnet" placeholder="Write a comment"></textarea>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Name</label>
                                                <input type="text" class="coment-field" placeholder="Name">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Email</label>
                                                <input type="text" class="coment-field" placeholder="Email">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label>Website</label>
                                                <input type="text" class="coment-field" placeholder="Website">
                                            </div>
                                            <div class="col-12">
                                                <div class="coment-btn">
                                                    <input class="btn btn-sqr" type="submit" name="submit" value="Post Comment">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- start blog comment box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog main wrapper end -->
    </main>
    @endsection
