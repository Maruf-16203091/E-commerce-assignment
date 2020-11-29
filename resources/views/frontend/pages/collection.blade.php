@extends('frontend.frontmaster')
@section('content')

<nav class="breadcrumb" aria-label="breadcrumbs" style="margin-top: 85px">

  <h1>Collection</h1>
  <a href="{{ route('front.index') }}" title="Back to the frontpage">Home</a>

  <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
  <span>Collection</span>

  
</nav>
  <div class="dt-sc-hr-invisible-large"></div> 

    <main class="main-content ">  
      
      <div class="wrapper">
        
        <div class="grid__item">           
          <div class="grid-uniform list-collection-products">  


<div class="grid__item grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--grid__item text-center pickgradient-products">
  
  <a href="collections/best-seller.html" title="Browse our Best Seller collection" class="pickgradient grid-link">
    
    <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/product15_94e076fa-8a16-45bc-ab6c-3fbe64e9f1cb_grande1e04.jpg?v=1532428466')}}" alt="Best Seller" />
    
    
  </a>
  
  <div class="collection-detail">
  <a href="collections/best-seller.html" title="Browse our Best Seller collection" class="grid-link">
    <span class="grid-link__title">Best Seller</span></a>
        <p class="collection-count">9 <span>Items</span></p>
  <p class="collection-description"></p>
    
  <a href="collections/best-seller.html" class="btn">Read More</a>
    
  </div>
</div>


<div class="grid__item grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--grid__item text-center pickgradient-products">
  
  <a href="collections/features-product.html" title="Browse our Featured Product collection" class="pickgradient grid-link">
    
    <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/product9_3c0748cf-5953-404a-8ab6-5367b0f1175e_granded822.jpg?v=1532436875')}}" alt="Featured Product" />
    
    
  </a>
  
  <div class="collection-detail">
  <a href="collections/features-product.html" title="Browse our Featured Product collection" class="grid-link">
    <span class="grid-link__title">Featured Product</span></a>
        <p class="collection-count">11 <span>Items</span></p>
  <p class="collection-description"></p>
    
  <a href="collections/features-product.html" class="btn">Read More</a>
    
  </div>
</div>


<div class="grid__item grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--grid__item text-center pickgradient-products">
  
  <a href="collections/latest-product.html" title="Browse our Latest Product collection" class="pickgradient grid-link">
    
    <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/product12_grande1a5a.jpg?v=1532426102')}}" alt="Latest Product" />
    
    
  </a>
  
  <div class="collection-detail">
  <a href="collections/latest-product.html" title="Browse our Latest Product collection" class="grid-link">
    <span class="grid-link__title">Latest Product</span></a>
        <p class="collection-count">8 <span>Items</span></p>
  <p class="collection-description"></p>
    
  <a href="collections/latest-product.html" class="btn">Read More</a>
    
  </div>
</div>
   

<div class="grid__item grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small--grid__item text-center pickgradient-products">
  
  <a href="collections/special-product.html" title="Browse our Special Product collection" class="pickgradient grid-link">
    
    <img src="{{asset('public/frontend/cdn/s/files/1/0045/0523/9670/products/product30_0961208d-a009-4534-9928-682af8e04296_grandef409.jpg?v=1532495252')}}" alt="Special Product" />
    
    
  </a>
  
  <div class="collection-detail">
  <a href="collections/special-product.html" title="Browse our Special Product collection" class="grid-link">
    <span class="grid-link__title">Special Product</span></a>
        <p class="collection-count">9 <span>Items</span></p>
  <p class="collection-description"></p>
    
  <a href="collections/special-product.html" class="btn">Read More</a>
    
  </div>
</div>

   
</div>		          
        </div>          
        
      </div>
      
      
       <div class="dt-sc-hr-invisible-large"></div>
    </main>  
@endsection