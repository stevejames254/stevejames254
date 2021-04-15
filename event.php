<?php
include('head.php')
 ?>

<style>
    .set + .tooltip > .tooltip-inner{
        color:#000;
        background-color: #aaa;
    }
    
#container {
	margin: 0px auto;
	width: 100%;
	height: 100%;
	
    margin-top: 60px;
}
#videoElement {
	width: 100%;
	height: 350px;
	background-color: #f4f4f4;
    object-fit: cover;
    z-index: -100;
    background-size: cover;
}
.lbtn a{
        
    display: inline-block;
    color: #aaa;
    padding-top: 18px;
    margin-right: 20px;
    background-color: #f3f3f3;
    width: 50px;
    height: 50px;
    border-radius:30px;
    text-align: center;
    line-height: 10px;
    font-weight: bolder;
    
    }
    
.lbtn a:hover,
    .lbtn a:focus {
        
    background-color: #aaa;
    color:#fff;
        
    
    }
   
   
    
    
    .form-controlc {
    padding: 10px 60px;
    height: 50px;
    font-weight: 500;
    font-size: 16px;
    border:none;
    background-color:#f3f3f3;
    font-family:"HK Grotesk";
}
    

 .form-controlc {
    padding: 10px 10px;
    background: #f5f5f5;
    width: 82% !important;
    border-radius: 6px;
    border: none;
    font-size: 16px;
    color: #bdbac2 !important
}

.form-controlc:focus {
    background: #f5f5f5;
    border: none !important;
    box-shadow: none
    
}





.form-controlc[readonly],
.form-controlc:disabled {
    background-color: #f5f5f5
}


.btn.emoticons {
    padding: 0 15px 0 20px;
    position: absolute;
    top: 0;
    bottom: 5px;
    left: 0;
    color: grey;
    font-weight: bolder;
}

.btn.send {
    padding: 0 20px 0 20px;
    position: absolute;
    height: 50px;
    top: 0;
    
    bottom: 0;
    right: 0;
    color: grey;
    font-weight: bolder;
    background-color: #f3f3f3;
    
}
    
    
.post-share {
  position: relative;
  z-index: 1;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 80px;
  flex: 0 0 80px;
  max-width: 80px;
  width: 80px; }
  @media only screen and (max-width: 767px) {
    .post-share {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 60px;
      flex: 0 0 60px;
      max-width: 60px;
      width: 60px; } }
  .post-share p {
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1px;
    color: #757686;
    font-weight: 500; }
    @media only screen and (max-width: 767px) {
      .post-share p {
        font-size: 12px; } }
  .post-share .social-info a {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #f55656;
    line-height: 40px;
    color: #ffffff;
    margin-bottom: 10px;
    text-align: center;
    font-size: 16px; }
    @media only screen and (max-width: 767px) {
      .post-share .social-info a {
        width: 30px;
        height: 30px;
        font-size: 13px;
        line-height: 30px; } }
    .post-share .social-info a:last-child {
      margin-bottom: 0; }
    .post-share .social-info a.facebook {
      background-color: #4b6cd0; }
    .post-share .social-info a.twitter {
      background-color: #49a7f3; }
    .post-share .social-info a.whatsapp {
      background-color: lawngreen; }
    .post-share .social-info a.pinterest {
      background-color: #bd081c; }
    
    
    .lead.emoji-picker-container{
        
        width: 300px;
        display: block;
        
    }
    
    
    
    


</style>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>



    <!-- Projects Menu -->

 
 

<div id="container" style="padding:0 40px 0 40px; margin-bottom:50px;">
    <div class="row">
       <div class="col-12 col-md-1" style="padding:20px 10px 20px 10px;">
           <div class="container text-center">
         <div class="post-share">
              <p>Share</p>
              <div class="social-info">
                <a  href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/share?url=<URL>&text=<TEXT>via=<USERNAME>" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                <a href="http://instagram.com/###?ref=badge" class="pinterest"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                
              </div>
            </div>
         </div>
        </div>
        <div class="col-12 col-md-7">
        <div class="list-group sorta" style="margin-top:20px;">
										<button onclick="start()" class="btn active" href="#webcam" data-toggle="tab">WEBCAM </button>
										<button onclick="stop()" class="btn" href="#rtmps" data-toggle="tab">RTMPS CONNECT</button>
										
									</div>	
            
        <div class="profile-tab-content tab-content">
         <div class="tab-pane active in" id="webcam">
        
           <div class="container text-center">
	       <video autoplay="#" id="videoElement"></video>
           <div class="star2 center-block">


                                <div class="col-12" style="margin-top:80px ; margin-left: 20px">
                                                <p  data-toggle="modal" data-target="#set"  style="font-size: 14px; font-weight: 600; width: 30px; height:30px; text-align: center; border-radius: 2px; background-color:#fff; padding:8px 10px 10px 8px" > <i class="fa fa-gear" style="color:grey;"></i>
                                                 
                                                </p>
                                     <p  onclick="openFullscreen()"  style="font-size: 14px; font-weight: 600; width: 30px; height:30px; text-align: center; border-radius: 2px; background-color:#fff; padding:8px 10px 10px 8px"> <i class="fa fa-expand" style="color:grey;"></i>
                                                    

                                                </p>
                                    
                                    <p  onclick="openFullscreen()"  style="font-size: 14px; font-weight: 600; width: 30px; height:30px; text-align: center; border-radius:100%; background-color:#fff; padding:8px 10px 10px 8px"> <i class="fa fa-info" style="color:grey;"></i>
                                                    

                                                </p>
                                    


                                            </div>
               
               
               
                            </div>
            <div class="lbtn"  style="margin-top:22px; margin-bottom:20px;" >
                       
                            <a href="#" class="lb" data-toggle="tooltip" data-placement="top" title="Go Live" ><i class="fa fa-video-camera"></i><br></a>
                            
                            <a href="#" class="lb" data-toggle="tooltip" data-placement="top" title="Record" ><i class="fa fa-square"></i><br></a>
                            <a href="#" class="lb" onclick="stop()"  data-toggle="tooltip" data-placement="top" title="Stop Live Stream"  ><i class="fa fa-circle"></i><br></a>
                        </div>
             
             
         </div>
            
            <hr>
              
            <div class="container" style="padding:15px 10px 0 10px">
                <div class="row">
                    <div class="col-4 col-md-4">
                     <p class="con" style="color:#aaa; background-color:#f3f3f3;text-align:center; padding:25px 0 25px 0; font-weight:bold; line-height:20px;" ><span style="font-size:20px;">0</span><br><span style="font-size:12px;">Viewers</span></p> 
            
                    </div>
                     <div class="col-4 col-md-4">
                    <p class="con" style="color:#aaa; background-color:#f3f3f3;text-align:center; padding:25px 0 25px 0; font-weight:bold; line-height:20px;" ><span style="font-size:20px;">0</span><br><span style="font-size:12px;">New Users</span></p> 
        
                    </div>
                     <div class="col-4 col-md-4">
                      <p class="con" style="color:#aaa; background-color:#f3f3f3;text-align:center; padding:25px 0 25px 0; font-weight:bold; line-height:20px;" ><span style="font-size:20px;">0</span>.0<br><span style="font-size:12px;">Earnings</span></p>
            
                    </div>
                
                
                </div>
           
        </div>
            </div>
            
            <div class="tab-pane fade" id="rtmps">
              <div class="container"> 
                 <div class="container text-center" style="background-color:#f3f3f3; padding:40px 0 40px 0; font-weight:bolder; font-size:20px;">
                     RTMP CONNECT
                  
                 </div>
                
           </div>
                <div class="container" style="margin-top:20px;">
                <form>
                <lable>URL</lable>
                    <br/>
                <input type="text" class="form-control" value="http://" />
                    
                <br/>
                <lable>DOMAIN LOCATOR</lable>
                    <br/>
                <input type="text" class="form-control" value="URL: ( RMTP )" />
                    <br><br>
                
                <button type="submit" class="post-cata" style="background-color:#fff; color:grey"><i class="fa fa-load"></i>CONNECT</button>
                
                
                </form>
                    </div>
                
           </div>
            </div>
            
            
        </div>
        
        
        
        
        <div class="col-12 col-md-4" style="padding:5px 10px 20px 10px;">
             
              <div class="detailBox" style="border:2px solid #f3f3f3">
                  
               
                  
     <div class="actionBox" style="height:630px;">
          <div class="tab-pane" id="settings">			
									<div class="settings">
										
										<div class="categories" id="accordionSettings">
											
											<!-- Start of My Account -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
													
													<div class="data">
														
                                                        <h5 style="color:grey; font-weight:bold">LIVE START</h5>
														
													</div>
													<i class="icon fa fa-ellipsis-v"></i>
												</a>
												<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionSettings">
													<div class="content layer">
														 <div class="list-group sort" >
										<button class="btn active" href="#activity" data-toggle="tab">COMMENT</button>
										<button class="btn" href="#friend" data-toggle="tab">Q & A</button>
                                        <button class="btn" href="#active" data-toggle="tab">ACTIVE USERS</button>
                                       
										
									</div>	
													</div>
												</div>
											</div>
											
											
											<!-- End of Logout -->
										</div>
									</div>
								</div>
        
                                  
            
        
         
          
                     				
											
       <div class="profile-tab-content tab-content" style="margin-top: 15px;">
         <div class="tab-pane active in" id="activity">
        
        <ul class="commentList">
            

                <form class="position-relative w-100">
												<textarea type="text" class="form-controlc" placeholder="Reply..." rows="1"></textarea>
												
												<button type="submit" class="btn send"><i class="fa fa-arrow-down"></i></button>
											</form>
             
              <hr>
            <li>
                <div class="commenterImage">
                  <img src="img/agent-4.jpg" />
                </div>
                <div class="commentText">
                    <p class="sub-text1"><a href="#">john</a> &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000; font-size:14px;">About tommorrow to continue</span></p>
                   

                </div>
            </li>
           
           
            
           
           
            <li>
                <div class="commenterImage">
                  <img src="img/about-2.jpg" />
                </div>
                <div class="commentText">
                    <p class="sub-text1"><a href="#">Waikosi</a> &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000; font-size:14px;">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</span></p> 

                </div>
            </li>
            
           
            <li>
                <div class="commenterImage">
                  <img src="img/about-2.jpg" />
                </div>
                 <div class="commentText">
                    <p class="sub-text1"><a href="#">Waikosi</a> &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000; font-size:14px;">comment and this comment is particularly very long and it goes on and on and on.</span></p> 

                </div>
            </li>
           
            
           
            
            
        </ul>
           </div>
           
           
           
            
             <div class="tab-pane fade" id="friend">
                
             <div class="content" id="content">
									<div class="container">
                                        <form class="position-relative w-100">
												<textarea type="text" class="form-controlc" placeholder="Answer . . ." rows="1"></textarea>
												
												<button type="submit" class="btn send"><i class="fa fa-arrow-down"></i></button>
											</form>
             
              <hr>
										<div class="col-md-12">
                                            
                                            <div class="message me" style="margin-top:15px; margin-left:40%;" >
												<div class="text-main">
                                                    
													<div class="text-group me" style="background-color:#2196F3; padding:5px 10px 5px 10px; border-radius:10px; width:200px;">
														<div class="text me">
															<p style="line-height:20px;">Can't wait! How are we coming along with the client?</p>
														</div>
													</div>
                                                    
													<span>A</span>
                                                    
												</div>
											</div>
											
											<div class="message">
								
												<div class="text-main" style="margin-top:15px;">
													<div class="text-group" style="background-color:#f3f3f3; padding:5px 10px 2px 10px; border-radius:10px; width:200px;">
														<div class="text">
															<p style="color:#aaa; line-height:20px;">We've got some killer ideas kicking about already.</p>
														</div>
													</div>
													<span>Q</span>
												</div>
											</div>
											
											
											
										</div>
									</div>
								</div>
                
           </div>
           
           
           
           
            <div class="tab-pane fade" id="active">
                
              <ul class="commentList">
                <div class="container">
            
            <li>
                <div class="commenterImage2">
                  <img src="img/agent-4.jpg" />
                </div>
                <div class="commentText">
                    <p class="sub-text1"><a href="#">john</a></p>
                   
                </div>
                <div class="container" style="text-align:right">
                  <a href="#" style="background-color:#f3f3f3; color:#2196F3; padding:5px 10px 5px 5px;font-weight:bold;border-radius:2px;"><i class="fa fa-plus"></i> &nbsp;FOLLOW</a>
                  
                  </div>
                
            </li>
                    
            </div>
            
        </ul>  
                
                
                
           </div>
           
           
           
           
           
           
           
         </div>
         
         
         
         
         
       
    </div>
        
        </div>
    </div>
</div>




    
    
    
    
    
<!--modal-->
    
<div class="modal" id="set" tabindex="-1" role="dialog" aria-labelledby="setTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color:#fff">
                
                <div class="modal-header" style="margin-bottom:5px;">
                   
                  <p style="color:#000; font-weight:bold;">WEBCAM SETTINGS</p>
                    
                </div>
                <div class="modal-body">
                   
                   <form>
                <lable>VIDIO</lable>
                    <br/>
                <input type="text" class="form-control" value="http://" />
                    
                <br/>
                <lable>AUDIO</lable>
                    <br/>
                <input type="text" class="form-control" value="URL: ( RMTP )" />
                    <br><br>
                <div class="modal-footer">
                <button type="submit" class="post-cata" style="background-color:#fff; color:grey; border:2px solid grey;"><i class="fa fa-load"></i>SAVE</button>
                </div>
                
                
                </form>
                    </div>
               
               
               
                   
            </div>
        </div>
    </div>


       
       
 <script>



var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}
     
     
 var stop = function () {
            var stream = video.srcObject;
            var tracks = stream.getTracks();
            for (var i = 0; i < tracks.length; i++) {
                var track = tracks[i];
                track.stop();
            }
            video.srcObject = null;
        }
  
 var start = function () {
            var video = document.getElementById('videoElement'),
                vendorUrl = window.URL || window.webkitURL;
            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        video.srcObject = stream;
                    }).catch(function (error) {
                        console.log("Something went wrong!");
                    });
            }
        }
 
$(function () {
            start();
        });  

     $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip();
     });
     
     
     
var elem = document.getElementById("videoElement");

/* When the openFullscreen() function is executed, open the video in fullscreen.
Note that we must include prefixes for different browsers, as they don't support the requestFullscreen method yet */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

     
     

</script>      
       
     
    
      
    
     
          
            
          
      
     
   
    
    

      
          
   
     
     
    
    
    
   
     
    
   
    

 