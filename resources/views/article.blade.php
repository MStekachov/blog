@extends('app')
@section('content')
<!-- Ticker -->
<div class="container">
         <div class="float-width ticker">
            <h3 class="cat-label4">BREAKING NEWS</h3>
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
         <!-- Main Left side -->
         <div class="main-left-side">
            <!-- The Article -->
            <div class="artcl-main float-width">
               <div class="artcl-prev-nxt float-width">
                  <div class="artcl-prev w50 blocky">
                     <a href="#"><i class="fa fa-angle-left"></i> PREV ARTICLE</a>
                     <p>Girl as a DJ on 2014 tour</p>
                  </div>
                  <div class="artcl-nxt w50 blocky text-right">
                     <a href="#">NEXT ARTICLE <i class="fa fa-angle-right"></i></a>
                     <p>Dont forget to hit play fast</p>
                  </div>
               </div>
               <div class="artcl-body float-width">
                  <h2>Famous artist share his tracks for free</h2>
                  <h5>
                     <span><i class="fa fa-user"></i>John Doe</span>
                     <span><i class="fa fa-clock-o"></i>20 Jan 2014</span>
                     <span><i class="fa fa-comment-o"></i>21 comments</span>
                  </h5>
                  <article class="float-width articl-data">
                     <img alt="" src="img/samples/a1.jpg" />
                     <p>
                        <span>Proin pharetra, ante quis sollicitudin sollicitudin, est sapien mollis mi, ac viverra purus nibh a urna. Suspendisse non tincidunt velit, vel vestibulum turpis.</span><br />
                        Morbi libero massa, euismod at dictum in, bibendum quis elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. Etiam tristique euismod enim ut congue. Nam aliquam sed lorem id pellentesque. Donec commodo, turpis in venenatis luctus, erat nisl luctus felis, vestibulum laoreet elit mauris quis mauris. Morbi quis malesuada quam. <br /><br />
                        Donec a felis pellentesque, varius nunc laoreet, cursus arcu. Praesent eget venenatis lorem, eu pharetra lectus. Quisque a metus ut purus consequat dapibus. 
                     </p>
                     <p class="artcl-qt">
                        <i class="fa fa-quote-left"></i>
                        <span>
                        Proin porta arcu sollicitudin magna viverra commodo. In pellentesque turpis sapien, at tincidunt dolor fringilla nec. Maecenas sollicitudin metus eget 
                        vestibulum luctus.                         
                        </span>
                     </p>
                     <p>
                        Aliquam tristique vehicula nulla sit amet facilisis. Nulla ultrices vitae eros at semper. Donec sapien lacus, tincidunt sed sem quis, accumsan mollis eros. Aenean id enim dolor. Suspendisse potenti. Curabitur molestie dolor et urna tristique vehicula. Curabitur tincidunt congue porta. Duis condimentum accumsan erat nec consequat. 
                     </p>
                  </article>
               </div>
            </div>
            <!-- The Article Social Media Share -->
            <div class="artcl-scl float-width">
               <div class="lefty artcl-tags">
                  <h3>TAGS : </h3>
                  <ul>
                     <li><a href="#">famous, </a></li>
                     <li><a href="#">artist, </a></li>
                     <li><a href="#">dj, </a></li>
                     <li><a href="#">hip hop, </a></li>
                     <li><a href="#">rap</a></li>
                  </ul>
               </div>
               <div class="righty artcl-shr">
                  <ul>
                     <li>
                        <div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-width="100" data-type="button"></div>
                     </li>
                     <li>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
                     </li>
                     <li>
                        <a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="none"><img alt="" src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Article Author Bio -->
            <div class="author-bio float-width">
               <h3 class="float-width">john smithowsky</h3>
               <div class="author-info">
                  <img alt="" src="img/samples/a2.jpg" />
                  <p>
                     Aliquam tristique vehicula nulla sit amet facilisis. Nulla ultrices vitae eros at semper. Donec sapien lacus, tincidunt sed sem quis, accumsan mollis eros. Aenean id enim dolor. Suspendisse potenti.
                  </p>
                  <ul>
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-rss"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                     <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
               </div>
            </div>
            <!-- Article Comments Section -->
            <div class="artcl-comments float-width">
               <h3 class="sec-title">COMMENTS</h3>
               <div class="comments-section float-width">
                  <div class="single-comment">
                     <img alt="" class="blocky" src="img/samples/t1.jpg" />
                     <div class="the-comment lefty">
                        <h4>
                           <span class="comntr-nm lefty">Eiad Ashraf </span>
                           <span class="cmnt-dt lefty"> at 14 July 2013</span>
                           <a class="righty" href="#"><span class="cmnt-reply">Reply</span></a>
                        </h4>
                        <p>Praesent nec risus non tellus scelerisque congue eu eu purus. Aliquam id porta lacus. Morbi eleifend ultricies placerat. Nullam luctus lectus a risus congue scelerisque. In in fermentum nunc.</p>
                     </div>
                  </div>
                  <div class="cmnt-dvdr"></div>
                  <div class="single-comment reply-1">
                     <img alt="" class="blocky" src="img/samples/t2.jpg" />
                     <div class="the-comment lefty">
                        <h4>
                           <span class="comntr-nm lefty">Soza </span>
                           <span class="cmnt-dt lefty"> at 14 July 2013</span>
                           <a class="righty" href="#"><span class="cmnt-reply">Reply</span></a>
                        </h4>
                        <p>Praesent nec risus non tellus scelerisque congue eu eu purus. Aliquam id porta lacus. Morbi eleifend ultricies placerat. Nullam luctus lectus a risus congue scelerisque. In in fermentum nunc.</p>
                     </div>
                  </div>
                  <div class="cmnt-dvdr"></div>
                  <div class="single-comment reply-1">
                     <img alt="" class="blocky" src="img/samples/t3.jpg" />
                     <div class="the-comment lefty">
                        <h4>
                           <span class="comntr-nm lefty">Zoom </span>
                           <span class="cmnt-dt lefty"> at 14 July 2013</span>
                           <a class="righty" href="#"><span class="cmnt-reply">Reply</span></a>
                        </h4>
                        <p>Praesent nec risus non tellus scelerisque congue eu eu purus. Aliquam id porta lacus. Morbi eleifend ultricies placerat. Nullam luctus lectus a risus congue scelerisque. In in fermentum nunc.</p>
                     </div>
                  </div>
                  <div class="cmnt-dvdr"></div>
                  <div class="single-comment reply-2">
                     <img alt="" class="blocky" src="img/samples/t4.jpg">
                     <div class="the-comment lefty">
                        <h4>
                           <span class="comntr-nm lefty">Ali Dawood </span>
                           <span class="cmnt-dt lefty"> at 14 July 2013</span>
                           <a class="righty" href="#"><span class="cmnt-reply">Reply</span></a>
                        </h4>
                        <p>Praesent nec risus non tellus scelerisque congue eu eu purus. Aliquam id porta lacus. Morbi eleifend ultricies placerat. Nullam luctus lectus a risus congue scelerisque. In in fermentum nunc.</p>
                     </div>
                  </div>
                  <div class="cmnt-dvdr"></div>
                  <div class="single-comment">
                     <img alt="" class="blocky" src="img/samples/t5.jpg" />
                     <div class="the-comment lefty">
                        <h4>
                           <span class="comntr-nm lefty">Miri Drik </span>
                           <span class="cmnt-dt lefty"> at 14 July 2013</span>
                           <a class="righty" href="#"><span class="cmnt-reply">Reply</span></a>
                        </h4>
                        <p>Praesent nec risus non tellus scelerisque congue eu eu purus. Aliquam id porta lacus. Morbi eleifend ultricies placerat. Nullam luctus lectus a risus congue scelerisque. In in fermentum nunc.</p>
                     </div>
                  </div>
               </div>
               <div class="cmnt-reply-form float-width">
                  <h3 class="sec-title">LEAVE A RESPONSE</h3>
                  <form role="form">
                     <div class="form-group">
                        <input type="name" class="form-control" id="exampleInputName" placeholder="Name or nickname">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                     </div>
                     <div class="form-group">
                        <input type="website" class="form-control" id="exampleInputWebsite" placeholder="Website (optional)">
                     </div>
                     <textarea class="form-control" rows="6" placeholder="Your comment"></textarea>
                     <a class="cmnt-btn trans2" href="#">POST YOUR COMMENT</a>
                  </form>
               </div>
            </div>
            <!-- related Articles  -->
            <div class="artcl-reltd float-width">
               <h3 class="sec-title">RELATED POSTS</h3>
               <div class="reltd-sngl">
                  <img alt="" src="img/samples/e1.jpg">
                  <div class="reltd-sngl-txt">
                     <h3>After party of Blondi Concert will begin tomorrow </h3>
                     <p><i class="fa fa-clock-o"></i>20 Jan 2014</p>
                  </div>
               </div>
               <div class="reltd-sngl">
                  <img alt="" src="img/samples/e2.jpg">
                  <div class="reltd-sngl-txt">
                     <h3>After party of Blondi Concert will begin tomorrow </h3>
                     <p><i class="fa fa-clock-o"></i>20 Jan 2014</p>
                  </div>
               </div>
               <div class="reltd-sngl">
                  <img alt="" src="img/samples/e3.jpg">
                  <div class="reltd-sngl-txt">
                     <h3>After party of Blondi Concert will begin tomorrow </h3>
                     <p><i class="fa fa-clock-o"></i>20 Jan 2014</p>
                  </div>
               </div>
               <div class="reltd-sngl">
                  <img alt="" src="img/samples/e4.jpg">
                  <div class="reltd-sngl-txt">
                     <h3>After party of Blondi Concert will begin tomorrow </h3>
                     <p><i class="fa fa-clock-o"></i>20 Jan 2014</p>
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