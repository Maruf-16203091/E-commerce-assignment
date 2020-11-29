@extends('frontend.frontmaster')
@section('content')

<!-- BEGIN content_for_index -->
<div id="shopify-section-1534155948093" class="shopify-section index-section index-section--flush">
  <div class="wrapper">
    <div class="home-slideshow">
      <div class="variable-width" data-slick='{dots: true, slidesToScroll: 1,autoplay:true,fade: true,autoplaySpeed:5000}'>
        @foreach($slider as $all_slide)
        <div class="slick-list slider_style_3">                
          <img src="{{ asset($all_slide->image) }}"  class="slide-img medium-down--hide" alt="" />
         
          <style> 
            .slider_style_3 .slide-offer-text span {color:#ffffff!important;}
            .slider_style_3 .btn:hover {color:#ffffff!important;background:#000000!important;}  .slider_style_3 .slider-content {background:rgba(232, 26, 70, 0.7);}
            @media screen and (min-width: 320px) and (max-width: 767px) {
          
            }
          </style>
        </div>
        @endforeach
      </div>
    </div>
  </div>



<script>  
  $(document).on('ready', function() {
    $('.variable-width').slick({
      dots: true,
      slidesToScroll: 1,
      autoplay:true,
      fade: true,
      autoplaySpeed:5000,
      afterChange: function(slick, currentSlide){
      console.log(currentSlide);
    }
                               });   
  })
</script>

<style>


  @media screen and (min-width: 320px) and (max-width: 767px) {}


  
</style>






<style>
  .home-slideshow  .slick-arrow:before{ color: #000000; }  
</style>


<div id="shopify-section-1529924056715" class="shopify-section index-section">
<div data-section-id="1529924056715"  data-section-type="category-listing-type-1" class="category-listing-type-1" style=" position:relative; background-image:url('../cdn/s/files/1/0045/0523/9670/files/banner-1_35a2f4bf-f483-452c-bc63-b35acf225beee873.jpg?v=1532430216');background-repeat:no-repeat;background-position:top center;">  
  <div class="category_listing_overlay" style="position:absolute;top:0;width:100%;height:100%;left:0;right:0;background:rgba(0, 0, 0, 0.7);"></div> 
  
  
  <div class="grid-uniform">

    <div class="container">           
      <ul class="category-listing_block">         
              
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#ffffff;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#1d3750">Katana</h4>
                                  

                  
                <p style="color:#3e454c;">Ut venenatis urna pretium purus dapibus feugiat vel sit amet quam. Vestibulum ut dapibus leo. Duis congue diam</p>
                   

                 
                <a href="#"  class="small-btn"  style="color:#3e454c">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#1d3750;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}" alt="Toilet Mount" />                
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#e81a46">Kazumi</h4>
                                  

                  
                <p style="color:#ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu mattis ante, a sodales eros. Phasellus tincidunt tortor</p>
                   

                 
                <a href="#"  class="small-btn"  style="color:#ffffff">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#fff;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-10_270x2702bf4.jpg?v=1532338961')}}" alt="Bath Tub" />                
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#1d3750">Roma</h4>
                                  

                  
                <p style="color:#3e454c;">Ut venenatis urna pretium purus dapibus feugiat vel sit amet quam. Vestibulum ut dapibus leo. Duis congue diam</p>
                   

                 
                <a href="#"  class="small-btn"  style="color:#3e454c">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
        <li class="grid__item wide--one-quarter post-large--one-quarter large--one-half medium--one-half small-grid__item wow fadeInUp"  data-wow-delay="ms">
          <div class="category-listing_section" style="background:#1d3750;">                      
            <div class="category-listing_inner">    
                
              <div class="category_image">                      
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-9_270x2702c55.jpg?v=1532338976')}}" alt="Vanities" />                
              </div>
                 
              <div class="category_text"> 
                                      
                <h4 style="color:#ffffff;background:#e81a46">Mixer</h4>
                                  

                  
                <p style="color:#ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu mattis ante, a sodales eros. Phasellus tincidunt tortor</p>
                   

                 
                <a href="#"  class="small-btn"  style="color:#ffffff">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                 

              </div>     
            </div>
          </div>       
        </li>  
        
        
      </ul>


      

      <div class="grid__item">


        <div class="border-title wow flash">          
          
          <h3 style="color:#ffffff">Renowned Specialists in Polymer Tap Fittings!</h3>
          
        </div>
      </div>

      



    </div>
  </div>  
</div>
<style>
  .category-listing-type-1 .category_image img { background:#000000;}
  .category-listing-type-1 ul {margin-top:-10%;}
  .category-listing-type-1 .small-btn:hover {color:#e81a46!important}
  
  .category-listing-type-1 .category_image {background:#e81a46;}
  .category-listing_section:hover .category_image::before {box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.25); }
  
</style>


</div><div id="shopify-section-1526630587896" class="shopify-section index-section"><div data-section-id="1526630587896" data-section-type="grid-banner-type-32" class="grid-banner-type-32" style="float:left;width:100%;background:#ffffff;">  
  <div class="wrapper">  

    <div class="grid-uniform">        
        
      <div class="section-one ">
        <div class="grid__item wide--one-half post-large--one-half large--one-whole medium--grid__item small-grid__item wow fadeInLeft animated"> 
          <div class="ovrly09">
            <a href="collections.html">
            
            <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-13_27d06db9-016c-4037-aa0a-4ba1183bdffd_1920X15e5.jpg?v=1532428534')}}" alt="Welcome To our shop!" />
            <div class="overlay"></div>
                       
              </a>
            
          </div>
        </div>
        <div class="grid__item wide--one-half post-large--one-half large--one-whole medium--grid__item small-grid__item">    
          <div class="block-content wow fadeInRight animated">             
             
             <div class="border-title"> 
            <h2 style="color:#ffffff;background:#e81a46">Welcome!</h2> 
            </div>
               
                                    
            <h4 style="color:#1d3750;">THE GLOBAL LEADER OF POLYMER TAP FITTINGS.</h4>        
              

                                     
            <p style="color:#3e454c;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>        
             

            
            <a href="collections.html"  class="btn-line">View all collection<i class="fa fa-angle-right" aria-hidden="true"></i>
              <div class="overlay"></div>
            </a>
            

            
           
            

              
            
            <div class="icon">
                          
              <a href="#"> 
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/builtec.png?v=1532420634')}}" alt="" />            
              </a>
                      
            </div>
            
            <div class="icon">
                          
              <a href="#"> 
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/certified_icon.png?v=1532420745')}}" alt="" />            
              </a>
                      
            </div>
            
           
                     
             

          </div>  
        </div>
      </div>
      
      


      <style>
        
        .grid-banner-type-32  
        
        
        .grid-banner-type-32 .section-one {  background: ; }
        .grid-banner-type-32 .block-content h6 { }        
        .grid-banner-type-32 .block-content h4 { }  
        .grid-banner-type-32 .block-content p {  }
         .grid-banner-type-32 .overlay { background:rgba(247, 247, 247, 0.7); } 
        
        .grid-banner-type-32 .btn-line::after {background:#3e454c;}
        .grid-banner-type-32 .btn-line {color:#3e454c;}
        .grid-banner-type-32 .btn-line:hover {color:#e81a46;}
      </style>
    </div>

  </div>
</div>

</div>
<div id="shopify-section-1531225331207" class="shopify-section index-section"><div data-section-id="1531225331207" data-section-type="grid-banner-type-22" class="grid-banner-type-22" style="background:#f7fafb;">  
  <div class="dt-sc-hr-invisible-large"></div>  
  <div class="wrapper">


    
    <div class="grid__item{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}">
      <div class="instagram-detail">
        <div class="border-title wow fadeInDown animated">
          <div class="container">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
            <h2 style="color:#ffffff;background:#e81a46;" class="text-center">Gallery Section</h2>   
            
            <div> <p  style="color:;" class="small-desc">Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia</p></div> 
              
          </div>
        </div>
      </div>
    </div>
      




    <div class="grid-uniform featuredItems wow fadeInUp animated "> 
            
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/17.jpg?v=1532339067')}}" alt="Wall Mount Toilet" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Wall Mount Toilet</h3>
            
            
            <h6 style="color:#ffffff;">30% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/19.jpg?v=1532428270')}}" alt="Glossy White Vanity" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Glossy White Vanity</h3>
            
            
            <h6 style="color:#ffffff;">50% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/21.jpg?v=1532339094')}}" alt="Hot Bath Tub" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Hot Bath Tub</h3>
            
            
            <h6 style="color:#ffffff;">20% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/Cover.jpg?v=1532428290')}}" alt="Rain Shower" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Rain Shower</h3>
            
            
            <h6 style="color:#ffffff;">40% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      

      <li class="grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item">
        <div class="ovrly31 overlay_1 wow fadeInUp animated">
          
          
          <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/28.jpg?v=1532428317')}}" alt="Adjustable Tub" />
          <div class="ovrly" style="background:rgba(29, 55, 80, 0.85); "></div>
                     
          
          <div class="featured-content">   
            
            <h3 style="color:#ffffff;">Adjustable Tub</h3>
            
            
            <h6 style="color:#ffffff;">60% OFF</h6>
            
              
            
            <a class="btn_line one" href="#"  style="color:#ffffff">Read More</a>    
                     
          </div>  
          
          <style>
          
          
            .grid-banner-type-22 .btn_line::before {background:#ffffff;}
          
          </style>
          
        </div>
      </li>        
      
      
    </div>   
  </div>
</div>
<style> 
  

</style>





</div>
<div id="shopify-section-1530014551443" class="shopify-section index-section"><div data-section-id="1530014551443"  data-section-type="before-after-images" class="before-after-images">
  <div class="dt-sc-hr-invisible-large"></div>
  <div class="container">
        
    <div class="grid__item">
      
      <div class="border-title wow fadeInDown animated">
        <h2 style="color:#ffffff;background:#e81a46">Successful Before&After Gallery</h2>
        

        <p style="color:#3e454c;" class="small-desc">Revolutionizing the range of products with its high quality virgin grade Engineering Polymer,
products are built to suit to your taste and senses.</p>

             
      </div>
      

    </div>
    <div class="grid-uniform wow fadeInUp animated"> 
      <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-whole small-grid__item"></div>
      <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-whole small-grid__item before-after-wrapper">
        <div id="before_after-car" class="before-after-section">
          
          <div class="item_wrapper">
            <div class="before_after_txt_container">

              <div  class="before_after__img img-bt">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/s5.jpg?v=1532346349')}}" alt="" />  
                 
              </div>

              <div  class="before_after__img img-top">

                <div class="mask">
                  
                  <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/b16d65.jpg?v=1532346329')}}" alt="" />   
                  
                </div>

                <div class="drag">
                  <div id="arrows">
                    <i class="arrow_left_img">  <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/left-arrow-1cf48.png?v=1535000837')}}" alt="" />  </i>
                    <i class="arrow_right_img"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/right-arrowf90b.png?v=1535000846')}}" alt="" /> </i> 
                  </div>
                </div>  
              </div>            
            </div> 


          </div>
          
          <div class="item_wrapper">
            <div class="before_after_txt_container">

              <div  class="before_after__img img-bt">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/a2c74a.jpg?v=1532346620')}}" alt="" />  
                 
              </div>

              <div  class="before_after__img img-top">

                <div class="mask">
                  
                  <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/b28ef9.jpg?v=1532346610')}}" alt="" />   
                  
                </div>

                <div class="drag">
                  <div id="arrows">
                    <i class="arrow_left_img">  <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/left-arrow-1cf48.png?v=1535000837')}}" alt="" />  </i>
                    <i class="arrow_right_img"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/right-arrowf90b.png?v=1535000846')}}" alt="" /> </i> 
                  </div>
                </div>  
              </div>            
            </div> 


          </div>
          



        </div>
        <div class="nav_bx_type">
          <a class="prev"></a>
          <a class="next"></a>
        </div>
      </div>
      <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item"></div>  
    </div> 

    <div class="grid__item">  
      
      <div class="info-container">              
        <h3 style="color:#3e454c;">Just Arrived Products</h3>
              
        
        <a class="btn-line" href="collections.html">
          More Details <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
         
      </div>
    </div>


     
  </div>
  <div class="dt-sc-hr-invisible-large"></div>
</div>

<link href="{{ asset('public/frontend/cdn/s/files/1/0045/0523/9670/t/3/assets/jquery.bxslider8f31.css?v=2036947588511597282') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/t/3/assets/jquery.bxslider.min07d2.js?v=4381354643320832265')}}" type="text/javascript"></script>


<script type="text/javascript">

  jQuery(document).ready(function(){
    $('#before_after-car').bxSlider({
      mode: 'fade',
      pager: false,
      nextSelector: ".nav_bx_type .next",      
      prevSelector: ".nav_bx_type .prev"      
    });

    $(window).on("resize", function(event){
      reset_images('#before_after-car');
    });

  });


  $(document).ready(function(){





    $('.before_after__img img').attr('draggable', false);

    $('.drag').on('mousedown', function(e){
      var $dragable = $('.img-top'),
          startWidth = $dragable.width(),
          pX = e.pageX;

      $(document).on('mouseup', function(e){
        $(document).off('mouseup').off('mousemove');
      });

      $(document).on('mousemove', function(me){
        var mx = (me.pageX - pX);          

        $dragable.css({
          width: startWidth + mx,
        });


        var l = $('.fa-arrow-left');
        var r = $('.fa-arrow-right');

        if(startWidth + mx > 500)
        {
          r.fadeOut(100);
          r.css('float', 'none'); 
        }
        else
        {
          r.fadeIn(100);        
          r.css('float', 'right');
        }

        if(startWidth + mx < 0){
          l.fadeOut(100);
        }
        else
        {
          l.fadeIn(100);  
        }

      });  
    }); 

  });
</script>

<style type="text/css">
  .before-after-images  #img-container {
    position: relative;
    height: 100%;
    box-shadow: rgba(0,0,0,0.8) 0px 0px 8px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none;
  }

  .before-after-images .before_after__img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .before-after-images .img-top {
    position: relative;

    min-width: 3px;
    max-width: 735px;
    width: 50.5%;
  }

  .before-after-images .drag {
    position: absolute;
    width: 6px;

    height: 100%;
    right: 0;
    top: 0;
    cursor: ew-resize;

  }

  .before-after-images .mask {
    overflow: hidden;
    width: 100%;
  }


  .before-after-images .drag #arrows {
    display: block;
  }




  .before-after-images .grid__item img {max-width:initial;}


  .before-after-images .bx-wrapper {border:5px solid #ffffff;}
  .before-after-images .drag {background:#ffffff;}


  .before-after-images .btn-line {color:#3e454c;}
  .before-after-images .btn-line:hover {color:#e81a46;}

  
  .bx-wrapper { box-shadow: 0px 17px 46px 0px rgba(34, 40, 69, 0.3); }

</style>




</div>
<div id="shopify-section-1530009956771" class="shopify-section index-section">
<div data-section-id="1530009956771" data-section-type="full-banner-blocks" class="full-banner-blocks block5">      
  <div class="parallax section section-1530009956771-block " id="section1530009956771" style=" background-image:url('../cdn/s/files/1/0045/0523/9670/files/bg-overlay-img_1920X9536.jpg?v=1531204271');background-repeat:no-repeat;background-size:cover ">  
    <div class="container">      
      <div class="grid__item"  >
        <div class="full-banner-block"> 
          <div class="full-banner-content content-center "> 

            



            <div class="grid__item ">
                
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-9_270x2702c55.jpg?v=1532339163')}}" alt="Bath Tub"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Tap </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-2_140x140a485.jpg?v=1532339172')}}" alt="Paper Holder"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Paper Holder </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-3_140x1404346.jpg?v=1532339186')}}" alt="Rain Shower"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Shower </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-4_140x1405a25.jpg?v=1532339197')}}" alt="Vanities"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Mixer </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-5_140x1403fb5.jpg?v=1532339211')}}" alt="Double Tap"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Double Tap </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-6_140x1408cd9.jpg?v=1532339223')}}" alt="Personal Shower"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Personal Shower </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-7_140x1407ab4.jpg?v=1532339244')}}" alt="Adjustable Tap"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Adjustable Tap </span>
                    
                  </a>
                </div>
              </div>              
                 
              
              
              
              <div class=" grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
                <div class="icon-section wow fadeInUp animated">
                  <a href="#">
                    
                    <div class="icon">
                      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-8_140x140aedd.jpg?v=1532339259')}}" alt="Bidet Faucets"  style ="border: 5px solid  #e81a46;"/>
                    </div>
                    
                    
                    <span style="color:#fff">Bidet Faucets </span>
                    
                  </a>
                </div>
              </div>              
                 
              
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<style>


  .block5 .icon-section .icon::before {background:#e81a46;}



  
  .full-banner-blocks.block5 .parallax::before {background:#1d3750;}
   


</style>








</div>
<div id="shopify-section-1526545037659" class="shopify-section"><div data-section-id="1526545037659"  data-section-type="testimonial-type-11" class="testimonial-type-11" style="background-image:url('../cdn/s/files/1/0045/0523/9670/files/home-bg2_1920Xcb85.jpg?v=1531290262');background-attachment:fixed;background-repeat:no-repeat;background-position:center center; ">
  <div class="grid-uniform">    
    
    <div class="border-title wow fadeInDown animated">
      <h2 style="color:#3e454c;background:#ffffff;">Testimonials</h2>  
    </div>
    

 
    <div id="test-car-11" class="test-car-11 1526545037659-loop">
        
      
      <div class="grid__item"> 
        <div class="testimonial-block wow fadeInUp animated" >           
          <blockquote>
            
            <q style="color:#ffffff">Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an, tincidunt risus ac, consequat velit. Quisquemos sodales suscipit tortor ditaemcos condimentum</q>
             
          </blockquote>
          <div class="test-detail">   

            <div class="text-img">
              
              <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/team-1_100Xabac.jpg?v=1532339449')}}" alt="" />             
                      
            </div>
            <div class="test-inner-detail">
              
              <h4 style="color:#ffffff">Katherine</h4>
              
              
              <span style="color:#ffffff">Designer</span>
              
            </div>


            <div class="overlay"></div>
          </div>
        </div>
      </div>
      
      <div class="grid__item"> 
        <div class="testimonial-block wow fadeInUp animated" >           
          <blockquote>
            
            <q style="color:#ffffff">Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an, tincidunt risus ac, consequat velit. Quisquemos sodales suscipit tortor ditaemcos condimentum</q>
             
          </blockquote>
          <div class="test-detail">   

            <div class="text-img">
              
              <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/team-3_100X57a5.jpg?v=1532339460')}}" alt="" />             
                      
            </div>
            <div class="test-inner-detail">
              
              <h4 style="color:#ffffff">Nicholas</h4>
              
              
              <span style="color:#ffffff">Developer</span>
              
            </div>


            <div class="overlay"></div>
          </div>
        </div>
      </div>
      
      <div class="grid__item"> 
        <div class="testimonial-block wow fadeInUp animated" >           
          <blockquote>
            
            <q style="color:#ffffff">Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an, tincidunt risus ac, consequat velit. Quisquemos sodales suscipit tortor ditaemcos condimentum</q>
             
          </blockquote>
          <div class="test-detail">   

            <div class="text-img">
              
              <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/team-2_100X3f45.jpg?v=1532339475')}}" alt="" />             
                      
            </div>
            <div class="test-inner-detail">
              
              <h4 style="color:#ffffff">Stephanie</h4>
              
              
              <span style="color:#ffffff">Quality Tester</span>
              
            </div>


            <div class="overlay"></div>
          </div>
        </div>
      </div>
      
      <div class="grid__item"> 
        <div class="testimonial-block wow fadeInUp animated" >           
          <blockquote>
            
            <q style="color:#ffffff">Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an, tincidunt risus ac, consequat velit. Quisquemos sodales suscipit tortor ditaemcos condimentum</q>
             
          </blockquote>
          <div class="test-detail">   

            <div class="text-img">
              
              <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/team-4_100X0d35.jpg?v=1532339486')}}" alt="" />             
                      
            </div>
            <div class="test-inner-detail">
              
              <h4 style="color:#ffffff">Richard</h4>
              
              
              <span style="color:#ffffff">Supporter</span>
              
            </div>


            <div class="overlay"></div>
          </div>
        </div>
      </div>
               
        
    </div>
  </div>  

</div>


<style>

  .testimonial-type-11{background:;}

  .testimonial-type-11 .owl-theme .owl-controls .owl-page span{background:;}

  .testimonial-type-11 .authorimg::before{    border-bottom: 40px solid ;}

  .testimonial-type-11 .authorimg{border:3px solid ;}

  .testimonial-type-11 blockquote q::before , .testimonial-type-11 blockquote q::after{color:;}

  .testimonial-type-11  .owl-prev , .testimonial-type-11 .owl-next{line-height:30px;background:;color:#ffffff;}


  .testimonial-type-11 .slick-slide.slick-current.slick-active.slick-center {opacity:1;}
  .testimonial-type-11 .slick-slide {opacity:0.08;}
  
  
   
  .testimonial-type-11::before {background:#e81a46;}
   
  
  
  .testimonial-type-11 .slick-prev, .testimonial-type-11 .slick-next {color:#ffffff;}
  .testimonial-type-11 .slick-prev:hover, .testimonial-type-11 .slick-next:hover {color:#1d3750;}
  .testimonial-type-11 .slick-dots li button::before {color:#ffffff;}
</style>


<script>
  jQuery(document).ready(function() {
    jQuery('.test-car-11.1526545037659-loop').slick({
           centerMode: true,
           centerPadding: '20px',
           dots:true,
           slidesToShow: 3,
           responsive: [
           {
           breakpoint: 768,
           settings: {
           arrows: false,
           centerMode: true,
           centerPadding: '40px',
           slidesToShow: 3

           }
           },
           {
           breakpoint: 480,
           settings: {
           arrows: false,
           centerMode: true,
           centerPadding: '40px',
           slidesToShow: 1
           }
           }
           ]
           });
  }); 

</script>










</div><div id="shopify-section-1530083821640" class="shopify-section index-section"><div data-section-id="1530083821640" data-section-type="grid-banner-type-15" class="grid-banner-type-15">   
 <div class="container">    
   <div class="dt-sc-hr-invisible-large"></div>
  <div class="grid-uniform">       
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect-3 img-hover-effect wow fadeInUp animated">
      <a class="banner_half_img" href="collections.html">
      
      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-22_8f86d3d1-cdf6-401a-8fae-356058847be3_1920Xb42f.jpg?v=1532418698')}}" alt="Oval Bath Tub" />
                 
        </a>
      
      <div class="featured-content featured-content-one">  

        
        <h2 style="color:#000000">GREAT COLLECTIONS</h2>
        
        
        <h3 style="color:#000">Special Solution</h3>
        
        
        <p style="color:#000">Fashion Undefined</p>    
                 
      </div>   
    </div> 
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect img-hover-effect-4 wow fadeInUp animated">
      
      
      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-21_1920Xe297.jpg?v=1532418431')}}" alt="Clean and Clear Bidets" />
                 
      
      
      <span class="grid__sale" style="color:#000000;background:#ffffff;">White</span>
      
      <div class="featured-content product-style-with-timer">     



        <div class="deal-clock  lof-clock-timer-detail-block time-one"></div>
         

        <script>
          //<![CDATA[
          jQuery(document).ready(function($){
            $(".time-one").lofCountDown({      
              TargetDate:"02/10/2019 12:30:30",
              DisplayFormat:"<ul class='list-inline'><li class='day'>%%D%%<span>D</span></li><li class='hours'>%%H%%<span>H</span></li><li class='mins'>%%M%%<span>M</span></li><li class='seconds'>%%S%%<span>S</span></li></ul>",
              FinishMessage: "Expired"
            });
          });
          //]]>
        </script>
        <div class="product-detail">
          
          <a class="grid-link__title" href="#" style="color:#000">Clean and Clear Bidets</a>
          
        
        </div>
      </div>
    </div>     
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect-3 img-hover-effect wow fadeInUp animated">
      <a class="banner_half_img" href="collections.html">
      
      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-20_1920X5a1e.jpg?v=1532418444')}}" alt="UPTO" />
                 
        </a>
      
      <div class="featured-content featured-content-three">             

        
        <div class="offer_text">SALE</div>
         


        
        <h2 style="color:#000">UPTO</h2>
        
        
        <p><span>- 70%</span></p>
        
        
        <a class="btn three" href="collections.html" style="color:#ffffff;border:none;background:#e81a46;">Read More</a>    
                 
      </div>   
    </div> 
    <div class="grid__item wide--one-quarter post-large--one-half large--one-half medium--one-half small--grid__item img-hover-effect img-hover-effect-4 wow fadeInUp animated">
      <a class="banner_half_img" href="collections.html">
      
      <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-19_1920X25d8.jpg?v=1532418460')}}" alt="" />
                 
        </a>

      
            <div class="featured-content product-style-with-timer">     



      <div class="deal-clock  lof-clock-timer-detail-block time-two"></div>
       

      <script>
        //<![CDATA[
        jQuery(document).ready(function($){
          $(".time-two").lofCountDown({      
            TargetDate:"",
            DisplayFormat:"<ul class='list-inline'><li class='day'>%%D%%<span>D</span></li><li class='hours'>%%H%%<span>H</span></li><li class='mins'>%%M%%<span>M</span></li><li class='seconds'>%%S%%<span>S</span></li></ul>",
            FinishMessage: "Expired"
          });
        });
        //]]>
      </script>

      <div class="product-detail">
        
        <p>
                    
                   
        </p>
      </div>
      </div>
    </div>     
  </div> 
   <div class="dt-sc-hr-invisible-large"></div>
  </div>  
</div>
<style>
  .grid-banner-type-15 .featured-content .btn.four:hover { background: !important;color: !important;}
  .grid-banner-type-15 .featured-content .btn.three:hover { background:#1d3750 !important; color:#fff !important;}
  .grid-banner-type-15 .featured-content .btn.one:hover { background: !important;color: !important; }
  .grid-banner-type-15 .featured-content .btn.two:hover { background: !important;color: !important; }
  .grid-banner-type-15 .featured-content .offer_text { color:#000; }
  .grid-banner-type-15 .featured-content p span:before,.grid-banner-type-15 .featured-content p span:after { background:#000; }

</style>






</div><div id="shopify-section-1526542123663" class="shopify-section index-section"><div data-section-id="1526542123663" data-section-type="wide-banner-type-4" class="wide-banner-type-4">  
  <div class="grid-uniform">  

    <div class="wide-banner-type-4-block parallax" style="  background-image:url('../cdn/s/files/1/0045/0523/9670/files/banner-2_554acc84-fae7-4938-a2ce-e86365277dba_1920X3406.jpg?v=1532342910');background-repeat:no-repeat;background-size:cover ">
      <div class="wide-banner-type-4-content wow fadeInUp animated">    

        
        <h4 class="small-icon " style="color:#3e454c;background:#ffffff">LATEST ACTIVITY</h4>
         


        
        <h2 style="color:#ffffff;">MEDIA</h2>
         

        
        <iframe width="555" height="315" src="https://www.youtube.com/embed/7uqVctI21x0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        

        
        <a  href="collections/all.html" style="color:#fff;background:#e81a46" class="btn">View More</a>    
                 
      </div> 

    </div> 

  </div>
</div>  
<style>
        



  #shopify-section-1526542123663 .wide-banner-type-4-content a.btn:hover{background:#ffffff!important;color:#3e454c !important;}
</style>






</div><div id="shopify-section-1526549521259" class="shopify-section"><div data-section-id="1526549521259"  data-section-type="blog-post-type-4" class="blog-post-type-4" style="background:#f7fafb;float:left;width:100%;">
  <div class="dt-sc-hr-invisible-large"></div>
  <div class="container">
    <div class="blog-post">
      <div class="grid">        
        <div class="section-header section-header--smal wow fadeInDown animatedl">
          
          <div class="border-title">  
            <h2 style="color:#ffffff;background:#e81a46">Recent News</h2>              
            <div class="small-desc"> <p style="color:#3e454c;">Here’s what we’re working on and thinking about at Nest.</p></div>  
          </div>
          
        </div>
        <div class="home-blog blog-section" id="BlogType4">        
             
          <div class="article-item grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp animated ">
            <div class="article ">      
              <div class="home-blog-image grid__item">
                
                <a href="blogs/news/oval-shaped-bath-tub.html">
                  <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/articles/blog-12_grandecc23.jpg?v=1532349136')}}" alt="Oval shaped bath tub" />
                </a>
                                
              </div>
              <div class="blog-description grid__item">
                <div class="blogs-sub-title">


                     
                  <p class="blog-date" style="color:#3e454c;">
                    <time datetime="2018-07-23"><span class="date"><i style="color:#3e454c">Jul 23 </i>  , 2018 </span></time>         
                  </p>
                   

                  <h4><a href="blogs/news/oval-shaped-bath-tub.html" style="color:#1d3750;">Oval shaped bath tub</a></h4>
                  

                  

                </div>
                <div class="home-blog-content blog-detail">
                                       
                </div>
                
                <div class="blog-btsmall">
                  <a class=""  href="blogs/news/oval-shaped-bath-tub.html">Read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                
              </div>

            </div>  


          </div>
             
          <div class="article-item grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp animated ">
            <div class="article ">      
              <div class="home-blog-image grid__item">
                
                <a href="blogs/news/attractive-bathroom-fixtures.html">
                  <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/articles/blog-11_grande0808.jpg?v=1532349012')}}" alt="Attractive bathroom fixtures" />
                </a>
                                
              </div>
              <div class="blog-description grid__item">
                <div class="blogs-sub-title">


                     
                  <p class="blog-date" style="color:#3e454c;">
                    <time datetime="2018-07-23"><span class="date"><i style="color:#3e454c">Jul 23 </i>  , 2018 </span></time>         
                  </p>
                   

                  <h4><a href="blogs/news/attractive-bathroom-fixtures.html" style="color:#1d3750;">Attractive bathroom fixtures</a></h4>
                  

                  

                </div>
                <div class="home-blog-content blog-detail">
                                       
                </div>
                
                <div class="blog-btsmall">
                  <a class=""  href="blogs/news/attractive-bathroom-fixtures.html">Read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                
              </div>

            </div>  


          </div>
             
          <div class="article-item grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp animated ">
            <div class="article ">      
              <div class="home-blog-image grid__item">
                
                <a href="blogs/news/amazing-handwash-area-1.html">
                  <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/articles/blog-10_971a0938-6570-455b-9b83-e9f62489c95b_grande1077.jpg?v=1532348867')}}" alt="Amazing handwash area" />
                </a>
                                
              </div>
              <div class="blog-description grid__item">
                <div class="blogs-sub-title">


                     
                  <p class="blog-date" style="color:#3e454c;">
                    <time datetime="2018-07-23"><span class="date"><i style="color:#3e454c">Jul 23 </i>  , 2018 </span></time>         
                  </p>
                   

                  <h4><a href="blogs/news/amazing-handwash-area-1.html" style="color:#1d3750;">Amazing handwash area</a></h4>
                  

                  

                </div>
                <div class="home-blog-content blog-detail">
                                       
                </div>
                
                <div class="blog-btsmall">
                  <a class=""  href="blogs/news/amazing-handwash-area-1.html">Read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                
              </div>

            </div>  


          </div>
          



        </div>
        
        <div class="blog-btn">
          <a class="btn"  href="blogs/news.html">View All Post<span class="lnr lnr-arrow-right"></span></a>
        </div>
        
        <!--  <div class="nav_article"> </div> -->
      </div>

      <style>
        
        .blog-post-type-4 .blogs-sub-title h4 a:hover { color:#e81a46 !important; }
        .blog-post-type-4 .blogs-sub-title .comments-count { color:#3e454c; }
        .blog-post-type-4 .comments-count:before { background:#3e454c; }
        .blog-post-type-4 .blog-description {background:#ffffff;}
      </style>
    </div>
  </div>

  <div class="dt-sc-hr-invisible-large"></div>

</div>




</div><div id="shopify-section-1526634546444" class="shopify-section index-section"><div data-section-id="1526634546444"  data-section-type="client section" class="client-section">
     <div class="container">
      
  <div class="grid-uniform section-seven">
 
      <div class="grid__item">
        
        
        
        
        <div id="client-car" class="owl-carousel owl-theme client-section wow fadeInUp animated" style="border-top:1px solid #000;">
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-1_250x2505d40.png?v=1532405874')}}" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/Logo-2_250x250e672.png?v=1532405882')}}" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/Logo-3_250x250c2ff.png?v=1532405891" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/Logo-4_250x250e553.png?v=1532405899" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/Logo-5_250x25029d0.png?v=1532405912" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/Logo-6_250x2508f7a.png?v=1532405923" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/Logo-7_250x2507633.png?v=1532405931" alt="" /></a>
          </div>
                     
          
          
          <div class="item">
            <a href="#"> <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/Logo-8_250x250df5b.png?v=1532405936" alt="" /></a>
          </div>
                     
          
        </div>
        <div class="nav_brand_type"> </div>
      </div>
   
  </div>

   
  </div>
</div>







</div><div id="shopify-section-1530084495671" class="shopify-section index-section"><div data-section-id="1530084495671"  data-section-type="support-block-type-1" class="support-block-type-1" style="background:#1d3750;float:left;width:100%;">     
  <div class="grid-uniform">
    <div class="container">
      <ul class="support_block" >         
              
        
        
        <li class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp"  data-wow-delay="ms">

          <div class="support_section">                      
              
            <div class="support_icon">                      
              <a  class="" style="color:">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/icon-1_0617992a-a889-4b38-9316-83fd79c4f651_1920Xac70.png?v=1532431313" alt="" />
                 
              </a>
                
            </div>
              
            <div class="support_text"> 
                
              <h5 style="color:#ffffff;">CALL TODAY</h5>
               
                
              <p style="color:#ffffff;" class="desc">+ 88 017 6666 5100</p>
               
            </div>      
          </div>    
        </li>  
        
        
        <li class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp"  data-wow-delay="ms">

          <div class="support_section">                      
              
            <div class="support_icon">                      
              <a  class="" style="color:">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/icon-2_9c205de7-333f-4b43-bdd0-38c1204ebf4e_1920X8f9c.png?v=1532431304" alt="" />
                 
              </a>
                
            </div>
              
            <div class="support_text"> 
                
              <h5 style="color:#ffffff;">CALL SALES </h5>
               
                
              <p style="color:#ffffff;" class="desc">+ 88 017 6666 5101-05</p>
               
            </div>      
          </div>    
        </li>  
        
        
        <li class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item wow fadeInUp"  data-wow-delay="ms">

          <div class="support_section">                      
              
            <div class="support_icon">                      
              <a  class="" style="color:">
                
                <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/files/img-11_270x270394f.jpg?v=1532338936')}}../cdn/s/files/1/0045/0523/9670/files/icon-3_c9ab47d1-e5df-487f-b7a6-13b2f51573af_1920X7034.png?v=1532431294" alt="" />
                 
              </a>
                
            </div>
              
            <div class="support_text"> 
                
              <h5 style="color:#ffffff;">EMAIL</h5>
               
                
              <p style="color:#ffffff;" class="desc">watertecbd@gmail.com</p>
               
            </div>      
          </div>    
        </li>  
        
        
      </ul>
    </div>
  </div>

</div>

</div><!-- END content_for_index -->

@endsection