<?php
include('head.php')
 ?>
<style>
    .commenterImage2 {
        width: 30px;
        margin-right: -500px;
        height: 30px;

    }

    .commenterImage2 img {
        width: 40px;
        height: 40px;
        border-radius: 100%;

    }





    .like {
        color: white;
        font-size: 25px;

    }

    .like:hover {
        color: red;
        font-size: 25px;

    }




    .card-header-b .details {
        margin-top: 130px;
    }

    @media only screen and (max-width: 767px) {

        .card-header-b .details {
            margin-top: 170px;
        }



        .video-duration {
            display: inline-block;
            position: absolute;
            right: 30px;
            bottom: 30px;
            background-color: #0f1112;
            padding: 6px 12px;
            border-radius: 2px;
            font-size: 14px;
            color: #ffffff;
            line-height: 1;
            z-index: 79;
        }

        .btn2 {}

    }


    .product {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        box-shadow: 0px 10px 27px -21px rgba(0, 0, 0, 0.2);
    }

    .product .img {
        display: block;
        border-radius: 4px;
        height: 233px;
        ;
        position: relative;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        z-index: 0;
    }

    .product .img:after {
        z-index: -1;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        background:transparent;
        opacity: 0;
        border-radius: 4px;
        -moz-transition: all 0.6s ease;
        -o-transition: all 0.6s ease;
        -webkit-transition: all 0.6s ease;
        -ms-transition: all 0.6s ease;
        transition: all 0.6s ease;
    }

    .product .img .desc {
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        opacity: 0;
    }

    .product .img .desc .meta-prod a {
        margin: 0 2px;
        width: 60px;
        height: 60px;
        background-color: brown;
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .product .img .desc .meta-prod a span {
        color: #fff;
        font-size: 20px;
    }

    .product .img .desc .meta-prod a span:hover {
        color: #fff;
        font-size: 30px;
    }

    .product .text {
        padding: 20px;
        position: relative;
    }

    .product .text .sale, 
    .product .text .seller,
    .product .text .new {
        position: absolute;
        top: 0;
        left: 4px;
        font-size: 12px;
        padding: 0 10px;
        color: #fff;
    }

    .product .text .sale {
        background: #b7472a;
    }

    .product .text .seller {
        background: #fe9801;
    }

    .product .text .new {
        background: #01d28e;
    }

    .product .text h2 {
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 300;
    }

    .product .text .category {
        font-style: italic;
        color: #b7472a;
    }

    .product .text .price {
        font-style: italic;
        color: #000000;
    }

    .product .text .price.price-sale {
        color: #cccccc;
        text-decoration: line-through;
    }

    .product:hover {
        -webkit-box-shadow: 0px 10px 27px -21px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0px 10px 27px -21px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 10px 27px -21px rgba(0, 0, 0, 0.2);
    }

    .product:hover .img:after {
        opacity: .7;
    }

    .product:hover .img .desc {
        opacity: 1;
    }

    .product-select {
        font-size: 18px;
    }

    .bootstrap-select .bs-ok-default:after {
        color: #b7472a;
        font-size: 12px;
        margin-top: 5px;
    }

    .prod-img-bg {
        background: #fff;
        -webkit-box-shadow: inset 0px 0px 101px 21px rgba(0, 0, 0, 0.09);
        -moz-box-shadow: inset 0px 0px 101px 21px rgba(0, 0, 0, 0.09);
        box-shadow: inset 0px 0px 101px 21px rgba(0, 0, 0, 0.09);
        height: 100%;
        display: block;
    }

    .product-details h3 {
        font-size: 30px;
        font-weight: 400;
    }

    .product-details .price span {
        font-size: 30px;
        color: #000000;
    }

    .product-details button i {
        color: #000000;
    }

    .product-details .quantity-left-minus {
        background: transparent;
        padding: 0 15px;
    }

    .product-details .quantity-right-plus {
        background: transparent;
        padding: 0 15px;
    }

    .product-details button,
    .product-details .form-control {
        height: 40px !important;
        text-align: center;
        border: 1px solid rgba(0, 0, 0, 0.1) !important;
        color: #b7472a;
        padding: 10px 20px;
        background: transparent !important;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        border-radius: 0;
        font-size: 14px;
    }

    .product-details button:hover,
    .product-details button:focus,
    .product-details .form-control:hover,
    .product-details .form-control:focus {
        text-decoration: none;
        outline: none;
    }

    .product-details .form-group {
        position: relative;
    }

    .product-details .form-group .form-control {
        padding-right: 40px;
        color: #000000;
        background: transparent !important;
    }

    .product-details .form-group .form-control::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #4d4d4d;
    }

    .product-details .form-group .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: #4d4d4d;
    }

    .product-details .form-group .form-control:-ms-input-placeholder {
        /* IE 10+ */
        color: #4d4d4d;
    }

    .product-details .form-group .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: #4d4d4d;
    }

    .product-details .form-group .icon {
        position: absolute;
        top: 50%;
        right: 20px;
        font-size: 14px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        color: #000000;
    }

    .product-details .form-group .icon span {
        color: #000000;
    }

    @media (max-width: 767.98px) {
        .product-details .form-group .icon {
            right: 10px;
        }
    }

    .product-details .form-group .select-wrap {
        position: relative;
    }

    .product-details .form-group .select-wrap select {
        font-size: 13px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        text-transform: uppercase;
        letter-spacing: 2px;
    }


    .live-c {

        color: red;

        background-color: transparent;
        padding: 3px 3px 3px 3px;
        border-radius: 100%;
        animation: live-c 2s infinite
    }

    @-webkit-keyframes live-c {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, .3)
        }

        100% {
            -webkit-box-shadow: 0 0 0 20px transparent
        }
    }

    @keyframes live-c {
        0% {
            -moz-box-shadow: 0 0 0 0 rgba(0, 0, 0, .3);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, .3)
        }

        100% {
            -moz-box-shadow: 0 0 0 20px transparent;
            box-shadow: 0 0 0 20px transparent
        }
    }


    .sort {
        text-align: center;
        margin-bottom: 20px;
        display: flex;
        flex-direction: row;
        align-items: baseline;
        justify-content: center
    }

    .sort .btn {
        padding: 8px 20px;
        background: 0 0;

        color: gray;
        font-size: 15px;
        font-weight: 600;
        font-family: "HK Grotesk";
    }

    .sort .btn.active {
        color: #2196F3;
        padding: 8px 20px;


    }
</style>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<div class="poca-projects-menu " style="padding:10px 30px 15px 30px;">
    <div class=" portfolio-menu ">


        <button class="btn active" data-filter="*">All</button>
        <button class="btn" data-filter="*">Event</button>

        <button class="btn " font-style="monospace" data-filter=".media">TV</button>
        <button class="btn" data-filter=".tech">Radio & Podcast</button>
        <button class="btn" data-filter=".love">Sports</button>
        <button class="btn" data-filter=".love">Business</button>
        <button class="btn" data-filter=".love">Politics</button>
        <button class="btn" data-filter=".love">Love & style</button>
        <button class="btn" data-filter=".love">Catering</button>

    </div>
    <hr>

</div>




<!-- Projects Menu -->
<div class="body-part" style="margin-bottom:50px; padding:0px 30px 20px 30px;">

    <div class="row poca-portfolio">
        <div class="col-12 col-md-4  single_gallery_item entre">
            <div class="star2 center-block" style="margin-left:20px; color:#fff; font-size:14px; font-weight:bolder;">

                <span><i class="live-c fa fa-circle"></i> &nbsp;LIVE</span>
            </div>
            <div class="product ftco-animate">
                <div class="img d-flex align-items-center justify-content-center">


                    <video width="100%" height="100%" style="position:absolute;z-index:-999;">
                        <source src="video/How%20to%20Dance%20Sexy%201080%20x%201920.mp4" type="video/mp4">
                        <span style="color: white">Your browser does not support the video tag.</span>
                    </video>



                    <div class="desc">
                        <p class="meta-prod d-flex">
                            
                            <a target="" data-toggle="modal" data-target="#exampleModalCenter" class="d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></a>
                            
                        </p>
                    </div>

                </div>
                <div class="commenterImage" style="width:30px ; height:30px; padding:6px">
                    <img src="img/agent-4.jpg" style="height:30px; width:30px;" />
                </div>
                <div class="commentText1" style="padding:10px 10px 20px 0px;">

                    <p class="sub-text2" style="border-bottom:1px solid #f3f3f3; padding:0 0 5px 0;"><a href="#" target="" data-toggle="modal" data-target="#exampleModalCenter1"> #majigambo group 4563</a></p>

                    <p class="sub-text" style="padding:10px ; line-height:20px; color:grey">TAKING DANCE TO THE NEXT LEVEL WITH .... </p>

                </div>

            </div>
        </div>

    </div>

</div>
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content" style="background-color:#fff">

            <div class="img-box-b">


                <video width="100%" height="100%">
                    <source src="video/How%20to%20Dance%20Sexy%201080%20x%201920.mp4" type="video/mp4">
                    <span style="color: white">Your browser does not support the video tag.</span>
                </video>

            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:absolute;z-index: 999;top:10px;right:10px;">
                <span aria-hidden="true">&times;</span>
            </button>
            <a class="post-cata" style="position:absolute;z-index: 999;top:130px;right:190px; border:2px solid white; color:white; background-color:transparent;"><i class="fa fa-play" aria-hidden="true"></i><span style="font-size:14px; font-weight:bolder">&nbsp;PREVIEW</span></a>

            <div class="modal-header">
                <div class="container">
                    <div class="tab-pane" id="settings">
                        <div class="settings">

                            <div class="categories" id="accordionSettings">

                                <!-- Start of My Account -->
                                <div class="category">
                                    <a href="#" class="title collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                                        <div class="data">

                                            <h5 style="color:#000;"><i class="fa fa-check-circle"></i> &nbsp;TICKET KES 200</h5>
                                            <p style="color:black;">All about sex dances and more from this pic . . .</p>
                                        </div>
                                        <i class="icon fa fa-unsorted"></i>
                                    </a>
                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionSettings">
                                        <div class="content layer">
                                            <div class="history">
                                                <p style="color:gray;">When you clear your conversation history, the messages will be deleted from your own device.</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-body">
                <div class="list-group sort" style="margin-bottom:5px; margin-top:-5px;">
                    <button class="btn active" href="#pay" data-toggle="tab">PAYMENT </button>
                    <button class="btn" href="#member" data-toggle="tab">MEMBER CODE</button>

                </div>
                <div class="profile-tab-content tab-content">
                    <div class="tab-pane active in" id="pay">

                        <div class="container" style="background-color:#f3f3f3; padding:20px;">
                            <form>
                                <label style="color:gray;">Payment Via <span style="color:green; font-weight:bolder;">MPESA</span></label>
                                <input type="text" class="form-control" value="+254" />
                                <div class="# text-right">

                                    <a type="button" class="post-cata" href="video.php" style="margin-top:20px;"><i class="fa fa-download"></i> &nbsp;PROCEED</a>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="tab-pane in" id="member">
                        <div class="container" style="background-color:#f3f3f3; padding:20px;">
                            <form>
                                <label style="color:gray;">Invite CODE</label>
                                <input type="text" class="form-control" value="8G1784-" />
                                <div class="# text-right">

                                    <a type="button" class="post-cata" href="video.php" style="margin-top:20px;"><i class="fa fa-download"></i> &nbsp;SUBMIT</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container text-center">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#fff">

            <div class="modal-header">

                <div class="container">

                    <div class="commenterImage1">
                        <a href="profile.html"><img src="img/about-2.jpg" /></a>
                    </div>
                    <div class="commentText1">
                        <p class="sub-text2"><a href="#" style="color:black; font-weight:bolder;">#shiru pitch</a></p>
                        <p class="sub-text12" style="color:gray; line-height:12px;">30k Followers</p>

                    </div>

                    <div class="container text-center" style="margin-top:20px;">
                        <button type="submit" class="btn" style=""><span style="font-weight:bolder;">5.8K</span><br><span style="font-size:10px; line-height:20px;">TICKET SOLD</span></button>
                        <button type="submit" class="btn" style=""><span style="font-weight:bolder;">65</span><br><span style="font-size:10px; line-height:20px;">NO OF EVENTS</span></button>


                    </div>



                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p style="color:gray; line-height:1px;">Created on 12th 30th 2021</p>
                    <p style="color:black;">shiru pich is an event organizer home shiru pich is an event organizer </p>
                </div>
                <a type="button" class="post-cata" href="video.php" style="color: white; float:right; "><i class="fa fa-bell"></i></a>
                <a type="button" class="post-cata" href="video.php" style="color: white; float:right; margin-right:10px;"><i class="fa fa-plus"></i> &nbsp;FOLLOW</a>

            </div>
            <div class="modal-footer">


            </div>

        </div>
    </div>
</div>

<div class="modal" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#fff">

            <div class="modal-header">

                <div class="container">

                    <div class="commenterImage1">
                        <a href="profile.html"><img src="img/about-2.jpg" /></a>
                    </div>
                    <div class="commentText1">
                        <p class="sub-text2"><a href="#" style="color:black; font-weight:bolder;">#shiru pitch</a></p>
                        <p class="sub-text12" style="color:gray; line-height:12px;">30k Followers</p>

                    </div>

                    <div class="container text-center" style="margin-top:20px;">
                        <button type="submit" class="btn" style=""><span style="font-weight:bolder;">5.8K</span><br><span style="font-size:10px; line-height:20px;">TICKET SOLD</span></button>
                        <button type="submit" class="btn" style=""><span style="font-weight:bolder;">65</span><br><span style="font-size:10px; line-height:20px;">NO OF EVENTS</span></button>


                    </div>



                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p style="color:gray; line-height:1px;">Created on 12th 30th 2021</p>
                    <p style="color:black;">shiru pich is an event organizer home shiru pich is an event organizer </p>
                </div>
                <a type="button" class="post-cata" href="video.php" style="color: white; float:right; "><i class="fa fa-bell"></i></a>
                <a type="button" class="post-cata" href="video.php" style="color: white; float:right; margin-right:10px;"><i class="fa fa-plus"></i> &nbsp;FOLLOW</a>

            </div>
            <div class="modal-footer">


            </div>

        </div>
    </div>
</div>