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
         
         <!-- Filter Gallery -->      
         <h3 class="sec-title">Projecs (Filter) Gallery</h3>
         <div id="filters" class="float-width button-group">
            <button class="trans2" data-filter="*">show all</button>
            <button class="trans2" data-filter=".fltr-music">Music</button>
            <button class="trans2" data-filter=".fltr-movies">Movies</button>
            <button class="trans2" data-filter=".fltr-games">games</button>
            <button class="trans2" data-filter=".fltr-sports">sports</button>
         </div>

         <div class="float-width" id="magalla-gl">
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-music">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g1.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-movies">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g2.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-music">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g3.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-games">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g4.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-sports">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g5.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-games">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g6.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-movies">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g7.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
            <!-- Gallery Single Item -->
            <div class="gal-item gal-item-st fltr-games">
               <!-- Gallery Thumbnail -->
               <img src="img/gal/samples/g8.jpg">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Music Project</h2>
                        <p>There are many variations of passages of anaka Lorem Ipsum available, but the majority.</p>
                        <div class="gal-info-lnks w100 text-center">
                           <a class="gal-info-1 trans2" href="#"><i class="fa fa-link"></i></a>
                           <!-- Add larg scale image for the Thumbnail here -->
                           <a class="gal-info-2 trans2" title="caption to pictures." href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                       
                    </div>
            </div>
            <!-- /Gallery Single Item -->
         </div> 
         <!-- /Filter Gallery -->      
         <hr class="float-width">
         <!-- Images Gallery -->      
         <h3 class="sec-title">Free style images Gallery</h3>
         <div id="free-gal" class="float-width" style="min-width: 1170px; ">
            <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/1.jpg"></a>
            </div>
            <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/2.jpg"></a>
            </div>
            <div class="itemzz">
                  <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/3.jpg"></a>
            </div>
            <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/4.jpg"></a>
            </div>
            <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"> <img src="img/gal/samples/5.jpg"></a>
            </div>
            <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/6.jpg"></a>
            </div>
            <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/7.jpg"></a>
            </div>

            <div class="itemzz">
                 <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"> <img src="img/gal/samples/8.jpg"></a>
            </div>
            <div class="itemzz">
              <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"> <img src="img/gal/samples/9.jpg"></a>
            </div>
            <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/10.jpg"></a>
            </div>
           <div class="itemzz">
               <a href="img/gal/samples/1650x860.jpg" magalla-gal-popup="prettyPhoto"><img src="img/gal/samples/11.jpg"></a>
            </div>

            </div>

         <!-- /Images Gallery -->  
      </div>
   @endsection
   @push('jslinks')
      <script src="js/imagesloaded.pkgd.min.js"></script>      
      <script src="js/isotope.pkgd.min.js"></script>      
      <script src="js/jquery.prettyPhoto.js"></script>

         <script type="text/javascript">
         jQuery(document).ready(function() {
         // filter items on button click
         $('#filters').on( 'click', 'button', function() {
         var filterValue = $(this).attr('data-filter');
         $container.isotope({ filter: filterValue });
         });
         // init Isotope
         var $container = $('#magalla-gl').isotope({
         // options
         });


         var $freeGal = $('#free-gal').imagesLoaded( function() {
         $freeGal.isotope({
            itemSelector: '.itemzz',
            masonry: {
               columnWidth: 50,
               gutter: 0
            }

            });
         });


         // init Gallery POPUP
         $("a[magalla-gal-popup^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'dark_square'});

         });
         </script>
   @endpush