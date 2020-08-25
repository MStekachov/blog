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
         <div class="row">
            <div class="left-elements col-lg-3">
               <div class="typo-h float-width">
                  <h1>H1 Heading</h1>
                  <h2>H2 Heading</h2>
                  <h3>H3 Heading</h3>
                  <h4>H4 Heading</h4>
                  <h5>H5 Heading</h5>
                  <h6>H6 Heading</h6>
               </div>
               <div class="float-width">
                  <p class="dark-qoute">
                     <span class="float-width"><i class="fa fa-quote-left"></i></span>
                     <span class="qt-txt float-width">Lorem ipsum dolor sit amet, nullam sapien erat tristique tempor nulla, blandit sit metus volutpat integered  wisi. Sed elementum, nec nec  is it inceptos vestibulum diam proin he erat, sociosqu et sit provide pellen tesque  sed aenean. Faucibus per a turpis est pellentesque potenti, tristique iaculis adipiscing mauris, ante velit et massa donec facilisis, sed felis sed est.<br />
                     wisi. Sed elementum, nec nec  is it inceptos vestibulum diam proin he erat, sociosqu.
                     </span>
                     <span class="qt-athr">Joun Doe</span>
                     <span class="righty "><i class="fa fa-quote-right"></i></span>
                  </p>
               </div>
               <div class="images-type float-width">
                  <h3 class="sec-title">Image types</h3>
                  <img src="http://placehold.it/140x140/fff/fff.png" alt="..." class="img-rounded ">
                  <img src="http://placehold.it/140x140/fff/fff.png" alt="..." class="img-circle">
                  <img src="http://placehold.it/140x140/eeeeee/eeeeee.png" alt="..." class="img-thumbnail">
               </div>
            </div>
            <div class="right-elements col-lg-9">
               <div class="prgph">
                  <h3 class="sec-title">Typography</h3>
                  <p>
                     <span class="float-width bold-p">Proin pharetra, ante quis sollicitudin sollicitudin, est sapien mollis mi, ac viverra purus nibh a urna. Suspendisse non tincidunt velit, vel vestibulum turpis. </span>
                     <br /><br /><br /><br />
                     <span class="float-width">
                     Morbi libero massa, euismod at dictum in, bibendum quis elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. Etiam tristique euismod enim ut congue. Nam aliquam sed lorem id pellentesque. Donec commodo, turpis in venenatis luctus, erat nisl luctus felis, vestibulum laoreet elit mauris quis mauris. Morbi quis malesuada quam. <br /><br />
                     Donec a felis pellentesque, varius nunc laoreet, cursus arcu. Praesent eget venenatis lorem, eu pharetra lectus. Quisque a metus ut purus consequat dapibus. 
                     </span>
                  </p>
               </div>
               <div class="light-qt float-width">
                  <p class="artcl-qt float-width">
                     <i class="fa fa-quote-left"></i>
                     <span>
                     Proin porta arcu sollicitudin magna viverra commodo. In pellentesque turpis sapien, at tincidunt dolor fringilla nec. Maecenas sollicitudin metus eget 
                     vestibulum luctus.                         
                     </span>
                  </p>
               </div>
               <div class="lists-elements float-width">
                  <ul class="magalla-ul lefty">
                     <li>Norbi libero massa, euismod at dictum in.</li>
                     <li>Cum sociis natoque penatibus et magnis.</li>
                     <li>Mauris leo velit, pharetra eget tincidunt.</li>
                     <li>
                        Phasellus vel varius elit. Etiam tristique.
                        <ul>
                           <li>Nam aliquam sed lorem id pellentesque. </li>
                           <li>Donec commodo, turpis in venenatis luctus.</li>
                           <li>Donec a felis pellentesque,</li>
                        </ul>
                     </li>
                     <li>Praesent eget venenatis lorem, eu pharetra lectus.</li>
                     <li>Aenean sit amet erat nunc</li>
                     <li>Quisque a metus ut purus consequat dapibus.</li>
                  </ul>
                  <ol class="magalla-ol righty">
                     <li>Norbi libero massa, euismod at dictum in.</li>
                     <li>Cum sociis natoque penatibus et magnis.</li>
                     <li>Mauris leo velit, pharetra eget tincidunt.</li>
                     <li>Phasellus vel varius elit. Etiam tristique.</li>
                     <li>Praesent eget venenatis lorem, eu pharetra lectus.</li>
                     <li>Aenean sit amet erat nunc</li>
                     <li>Quisque a metus ut purus consequat dapibus.</li>
                     <li>Norbi libero massa, euismod at dictum in.</li>
                     <li>Cum sociis natoque penatibus et magnis.</li>
                     <li>Mauris leo velit, pharetra eget tincidunt.</li>
                  </ol>
               </div>
               <div class="tabs-elements float-width">
                  <h3 class="sec-title">TABS</h3>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs magalla-tabz-ul">
                     <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
                     <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
                     <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content magalla-tabz-cont">
                     <div class="tab-pane fade in active" id="tab1">
                        <p>
                           Morbi libero massa, euismod at dictum in, bibendum quis elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. Etiam tristique euismod enim ut congue. <br /><br />
                           Nam aliquam sed lorem id pellentesque. Donec commodo, turpis in venenatis luctus, erat nisl luctus felis, vestibulum laoreet elit mauris quis mauris. Morbi quis malesuada quam. 
                        </p>
                     </div>
                     <div class="tab-pane fade" id="tab2">
                        <p>
                           Etiam accumsan nulla id ligula sollicitudin, in mollis orci rutrum. Ut sit amet felis dapibus, porta velit id, lobortis dui. Suspendisse dictum velit vel augue commodo porta. Mauris nulla magna, faucibus vitae quam vel, tempor fermentum nibh. Quisque mollis velit .<br /><br />
                           adipiscing ante volutpat. Pellentesque et hendrerit ante. Praesent non lacus vitae nisi eleifend ultricies in quis odio. Donec ut ipsum risus.
                        </p>
                     </div>
                     <div class="tab-pane fade" id="tab3">
                        <p>
                           Morbi libero massa, euismod at dictum in, bibendum quis elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. Etiam tristique euismod enim ut congue. <br /><br />
                           Nam aliquam sed lorem id pellentesque. Donec commodo, turpis in venenatis luctus, erat nisl luctus felis, vestibulum laoreet elit mauris quis mauris. Morbi quis malesuada quam. 
                        </p>
                     </div>
                  </div>
               </div>
               <!-- Accordian -->
               <div class="float-width magalla-acc">
                  <h3 class="sec-title">Accordian</h3>
                  <div class="panel-group" id="accordion">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-title">
                              <a>
                              ACCORDIAN 1
                              </a>
                              <a class="accor-arw arw-down righty"></a>
                           </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                           <div class="panel-body">
                              <p>Morbi libero massa, euismod at dictum in, bibendum quis elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. Etiam tristique euismod enim ut congue.</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-title">
                              <a>
                              ACCORDIAN 2
                              </a>
                              <a class="accor-arw arw-up righty"></a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p>Morbi libero massa, euismod at dictum in, bibendum quis elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. Etiam tristique euismod enim ut congue.</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="panel-title">
                              <a>
                              ACCORDIAN 3
                              </a><a class="accor-arw arw-up righty"></a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p>Morbi libero massa, euismod at dictum in, bibendum quis elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. Etiam tristique euismod enim ut congue.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h3 class="sec-title float-width">Selector</h3>
               <div class="magalla-slctr float-width">
                  <select class="cust-slctr">
                     <option>I'm interested in</option>
                     <option>Marketing</option>
                     <option>Development</option>
                     <option>Fashion</option>
                     <option>Games and Films</option>
                  </select>
               </div>
               <div class="alerts-elements float-width">
                  <h3 class="sec-title">Alerts</h3>
                  <div class="alert mag-alert-w">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                     <strong>WARNING! </strong> Mauris leo velit, pharetra eget tincidunt nec, viverra in leo. Phasellus vel varius elit. 
                  </div>
                  <div class="alert mag-alert-scc">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>                  
                     <strong>Well done. </strong> You successfully read this important alert message.
                  </div>
                  <div class="alert mag-alert-info">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>                  
                     <strong>Heads Up! </strong> This alert needs your attention, but it's not super important.
                  </div>
                  <div class="alert mag-alert-y">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>                  
                     <strong>Warning! </strong> Best check yo self, you're not looking too good.
                  </div>
                  <div class="alert mag-alert-dngr">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>                  
                     <strong>Oh snap! Change a few things up </strong> and try submitting again.
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection
    
@push('lslinks')
      <!-- To active Tabs and accordian arrows -->
      <script type="text/javascript">
         jQuery( document ).ready(function() {
               $('#myTab a').click(function (e) {
                 e.preventDefault()
                 $(this).tab('show')
               })        
            
            function toggleChevron(e) {
            $(e.target)
              .prev('.panel-heading')
              .find("a.accor-arw")
              .toggleClass('arw-down arw-up');
            }
            $('#accordion').on('hidden.bs.collapse', toggleChevron);
            $('#accordion').on('shown.bs.collapse', toggleChevron);
         });
@endpush