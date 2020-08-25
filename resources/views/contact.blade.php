@extends('app')
@section('content')
      <!-- Ticker -->
      <div class="container">
         <div class="float-width ticker">
            <h3 class="cat-label1">BREAKING NEWS</h3>
            <ul class="newsticker">
               <li>
                  <h4>Aliquam id dolor congue, volutpat sapien ac, iaculis purus. Vivamus hendrerit pretium rutrum.</h4>
               </li>
               <li>
                  <h4>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</h4>
               </li>
               <li>
                  <h4>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.</h4>
               </li>
            </ul>
            <div class="ticker-ctrls">
               <a id="tkr-prev"><i class="icon-left-open-big"></i></a>
               <a id="tkr-nxt"><i class="icon-right-open-big"></i></a>
            </div>
         </div>
      </div>
      <!-- Main Body -->
      <div class="container">
         <!-- Main left side -->
         <div class="main-left-side">
            <div class="contact-maps float-width">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12679.021280862107!2d-121.89079389021241!3d37.39561832456384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcea7e190e829%3A0xf812f1635c1b7ec5!2sSilicon+Valley+University!5e0!3m2!1sen!2s!4v1393959144037" width="100%" height="250" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="news-sec-1 float-width">
               <!-- Website Contact us page Info -->
               <div class="float-width sec-cont">
                  <h3 class="sec-title">ABOUT US</h3>
                  <div class="sec-1-big float-width">
                     <img class="blocky" src="img/samples/z12.jpg">      
                     <div class="sec-1-big-text lefty">
                        <h3>Feel free to write to us your feedback</h3>
                        <p>
                           Suspendisse dapibus blandit auctor. Aenean nisl felis, fermentum in ante sit amet, lobortis hendrerit nunc. Curabitur pharetra in velit at ornare. Pellentesque vitae nibh volutpat velit feugiat euismod ut a elit. Donec in felis rutrum risus bibendum cursus. Aliquam interdum aliquam elementum ...
                        </p>
                     </div>
                     <!-- Contact us list -->
                     <div class="contact-lists float-width">
                        <div class="cont-lst-sngl">
                           <h4>Online redaction:</h4>
                           <ul class="lefty list-unstyled">
                              <li>
                                 <p>- Eiad Ashraf</p>
                              </li>
                              <li>
                                 <p>- Ahmad Samir</p>
                              </li>
                              <li>
                                 <p>- Zooma Hafez</p>
                              </li>
                              <li>
                                 <p>- Ali Dawood</p>
                              </li>
                              <li>
                                 <p>- Mostafa Hashem</p>
                              </li>
                              <li>
                                 <p>- Sydney Milakowak</p>
                              </li>
                              <li>
                                 <p>- John Doe</p>
                              </li>
                              <li>
                                 <p>- Nicolas Moey</p>
                              </li>
                              <li>
                                 <p>- Patrick Mockey</p>
                              </li>
                              <li>
                                 <p>- Anna Kawolsky</p>
                              </li>
                              <li>
                                 <p>- Patrick Mockey</p>
                              </li>
                              <li>
                                 <p>- Armin Diary</p>
                              </li>
                              <li>
                                 <p>- Nicolas Moey</p>
                              </li>
                              <li>
                                 <p>- Sydney Milakowak</p>
                              </li>
                           </ul>
                        </div>
                        <div class="cont-lst-sngl">
                           <h4>Magazine redaction:</h4>
                           <ul class="lefty list-unstyled">
                              <li>
                                 <p>- John Doe</p>
                              </li>
                              <li>
                                 <p>- Nicolas Moey</p>
                              </li>
                              <li>
                                 <p>- Patrick Mockey</p>
                              </li>
                              <li>
                                 <p>- Anna Kawolsky</p>
                              </li>
                              <li>
                                 <p>- Patrick Mockey</p>
                              </li>
                              <li>
                                 <p>- Armin Diary</p>
                              </li>
                              <li>
                                 <p>- Nicolas Moey</p>
                              </li>
                              <li>
                                 <p>- Sydney Milakowak</p>
                              </li>
                           </ul>
                        </div>
                        <div class="cont-lst-sngl">
                           <h4>We are here:</h4>
                           <ul class="lefty list-unstyled">
                              <li>
                                 <p>Magalla Magazine</p>
                              </li>
                              <li>
                                 <p>4 East 80th Street, New York, NY  10-5417</p>
                              </li>
                              <li class="cont-phn">
                                 <p>Phone: +88 897 654 321</p>
                              </li>
                              <li>
                                 <p><a class="trans1" href="mailto:someone@yoursite.com">say@hello.com</a></p>
                              </li>
                           </ul>
                        </div>
                     </div>

                     <!-- Contact us Form -->
                     <div class="contact-form float-width">
                        <h3 class="sec-title">LEAVE A message</h3>
                        <form role="form" id="contactform">
                           <div class="alert" id="formmsg" style="display:none;" >
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                              <span class="error" ></span>
                           </div>
                           <div class="form-group">
                              <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="First and last name">
                           </div>
                           <div class="form-group">
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail and phone number">
                           </div>
                           <div class="form-group magalla-slctr">
                              <select type="website" id="exampleInputWebsite" name="intrested" class="cust-slctr">
                                 <option>I'm interested in</option>
                                 <option>Marketing</option>
                                 <option>Development</option>
                                 <option>Fashion</option>
                                 <option>Games and Films</option>
                              </select>
                           </div>
                           <textarea class="form-control" rows="6" name="msg" placeholder="Your message"></textarea>
                           <a class="cmnt-btn trans2" id="contactsubmit" >SUBMIT YOUR MESSAGE</a>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Main Right side -->
         <div class="main-right-side">
            <!-- One image slider -->
            <div class="sm-sldr-box float-width">
               <div class="flexslider sm-sldr">
                  <ul class="slides">
                     <li>
                        <img alt="" src="img/samples/z2.jpg" />
                     </li>
                     <li>
                        <img alt="" src="img/samples/z2.jpg" />
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Social Media Counter -->
            <div class="smedia lefty">
               <div class="w50 blocky"><a href="#"><img alt="" class="lefty" src="img/fb.png" /><span>6423</span></a></div>
               <div class="w50 blocky"><a href="#"><img alt="" class="lefty" src="img/tw.png" /><span>12344</span></a></div>
               <div class="w50 blocky"><a href="#"><img alt="" class="lefty" src="img/gplus.png" /><span>1846</span></a></div>
               <div class="w50 blocky"><a href="#"><img alt="" class="lefty" src="img/drp.png" /><span>416</span></a></div>
               <div class="w50 blocky"><a href="#"><img alt="" class="lefty" src="img/flkr.png" /><span>91</span></a></div>
               <div class="w50 blocky"><a href="#"><img alt="" class="lefty" src="img/ig.png" /><span>3487</span></a></div>
            </div>
            <!-- Trending news right -->
            <div class="trending lefty">
               <h3 class="sec-title">TRENDING</h3>
               <div class="trend-1">
                  <a href="#"><img alt="" src="img/samples/z3.jpg" /></a>
                  <a class="lefty cat-a cat-label2" href="#">GAMES</a>
                  <div class="trend-2">
                     <h3><a href="#">Watch Dogs - First gameplay this year</a></h3>
                     <p>Curabitur fringilla porttitor porta. Vivamus vel nulla ullamcorper, fringilla ligula nec, pellentesque nisl. Sed dolor..</p>
                     <p class="artcl-time-1">
                        <span><i class="fa fa-clock-o"></i>20 Jan 2014</span>
                        <span><i class="fa fa-comment-o"></i>21 comments</span>
                     </p>
                  </div>
               </div>
               <div class="float-width">
                  <div class="trend-sm float-width">
                     <a href="#"><img alt="" class="lefty" src="img/samples/e2.jpg" /></a>
                     <h4 class="lefty">USA Games Studio will release sandbox new game</h4>
                     <a class="lefty cat-a cat-label2" href="#">GAMES</a>
                     <p class="righty"><span><i class="fa fa-clock-o"></i>20 Jan 2014</span></p>
                  </div>
                  <div class="trend-sm float-width">
                     <a href="#"><img alt="" class="lefty" src="img/samples/e1.jpg" /></a>
                     <h4 class="lefty">After party of Blondi Concert will begin tomorrow</h4>
                     <a class="lefty cat-a cat-label4" href="#">MUSIC</a>
                     <p class="righty"><span><i class="fa fa-clock-o"></i>20 Jan 2014</span></p>
                  </div>
                  <div class="trend-sm float-width">
                     <a href="#"><img alt="" class="lefty" src="img/samples/e3.jpg" /></a>
                     <h4 class="lefty">The best place to see in Winter season this year</h4>
                     <a class="lefty cat-a cat-label3" href="#">TOURISM</a>
                     <p class="righty"><span><i class="fa fa-clock-o"></i>20 Jan 2014</span></p>
                  </div>
               </div>
            </div>
            <!-- Flicker Widget -->
            <div class="flkr-cont lefty">
               <h3 class="sec-title">FLICKR WIDGET</h3>
               <div id="basicuse"></div>
            </div>
            <!-- News letter subscription -->
            <div class="subscribe lefty">
               <h3 class="sec-title">NEWSLETTER</h3>
               <h6>Subscribe to our newsletter and be first to know about new game, music and movie releases.</h6>
               <form role="form">
                  <div class="form-group">
                     <input type="text" class="lefty" placeholder="Enter your email adress and hit enter">
                     <a href="#" class="lefty trans1" type="submit">save</a>
                  </div>
               </form>
            </div>
            <!-- Featured Video -->
            <div class="ftrd-vd float-width">
               <h3 class="sec-title">FEATURED VIDEO</h3>
               <iframe src="//player.vimeo.com/video/8170203?color=b3a07d" width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <!-- Calender Widget -->
            <div class="calendar-cont float-width">
               <div id="cal">
                  <div class="header float-width">
                     <h2 class="month-year lefty w50" id="label">
                        <span id="month" > MAR </span> <span id="year" > 2014 </span>
                     </h2>
                     <h6 class="float-width">this is today's event details!</h6>
                  </div>
                  <table id="days">
                     <tr>
                        <td>sun</td>
                        <td>mon</td>
                        <td>tue</td>
                        <td>wed</td>
                        <td>thu</td>
                        <td>fri</td>
                        <td>sat</td>
                     </tr>
                  </table>
                  <div id="cal-frame">
                     <table class="curr">
                        <tr>
                           <td class="nil"></td>
                           <td class="nil"></td>
                           <td>1</td>
                           <td>2</td>
                           <td>3</td>
                           <td>4</td>
                           <td>5</td>
                        </tr>
                        <tr>
                           <td>6</td>
                           <td>7</td>
                           <td>8</td>
                           <td>9</td>
                           <td>10</td>
                           <td class="today">11</td>
                           <td>12</td>
                        </tr>
                        <tr>
                           <td>13</td>
                           <td>14</td>
                           <td>15</td>
                           <td>16</td>
                           <td>17</td>
                           <td>18</td>
                           <td>19</td>
                        </tr>
                        <tr>
                           <td>20</td>
                           <td>21</td>
                           <td>22</td>
                           <td>23</td>
                           <td>24</td>
                           <td>25</td>
                           <td>26</td>
                        </tr>
                        <tr>
                           <td>27</td>
                           <td>28</td>
                           <td>29</td>
                           <td>30</td>
                           <td class="nil"></td>
                           <td class="nil"></td>
                           <td class="nil"></td>
                        </tr>
                     </table>
                     <a class="cal-btm-arw trans1 cal-pre">&#59237;</a>
                     <a class="cal-btm-arw trans1 cal-nxt">&#59238;</a>   
                  </div>
               </div>
            </div>
            <!-- Ad banner right -->
            <div class="lefty ad-rt">
               <a href="#"><img alt="" src="img/samples/u1.jpg" /></a>
            </div>
         </div>
      </div>
@endsection    