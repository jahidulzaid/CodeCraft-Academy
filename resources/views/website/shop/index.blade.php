@extends('website.master')

@section('body')




        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->
        <!-- breadcrumbarea__section__start -->

        <div class="breadcrumbarea">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__content__wraper" data-aos="fade-up">
                            <div class="breadcrumb__title">
                                <h2 class="heading">Shop</h2>
                            </div>
                            <div class="breadcrumb__inner">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li>Shop page</li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="shape__icon__2">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__1" src="{{ asset('/') }}website/img/herobanner/herobanner__1.png" alt="photo">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__2" src="{{ asset('/') }}website/img/herobanner/herobanner__2.png" alt="photo">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__3" src="{{ asset('/') }}website/img/herobanner/herobanner__3.png" alt="photo">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__4" src="{{ asset('/') }}website/img/herobanner/herobanner__5.png" alt="photo">
            </div>

        </div>
        <!-- breadcrumbarea__section__end-->

    
                  <!-- shop__section__start -->
                  <section class="shop__page__wrap sp_top_100 sp_bottom_100">
                    <div class="container-fluid full__width__padding">
            
            
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="shoptab">
                                    <div class="shoptab__inner nav">
                
                
                                        <ul class="nav" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button data-bs-toggle="tab" data-bs-target="#grid__view" type="button">
                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.5 12.5">
                                                        <defs></defs><defs></defs><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="shop page"><g id="Group-10"><path d="M.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 01.75 0z" class="cls-1"></path><path d="M4.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 014.75 0z" class="cls-1" data-name="Rectangle"></path></g></g></g></g>
                                                      </svg>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="active" data-bs-toggle="tab" data-bs-target="#list_view" type="button">
                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.5 12.5">
                                                        <defs></defs><defs><style>.cls-1{fill-rule:evenodd}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="shop page"><g id="Group-16"><path d="M.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 01.75 0z" class="cls-1"></path><path d="M4.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 014.75 0z" class="cls-1" data-name="Rectangle"></path><path d="M8.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 018.75 0z" class="cls-1" data-name="Rectangle"></path></g></g></g></g>
                                                      </svg>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button data-bs-toggle="tab" data-bs-target="#list_four" type="button" class="">
                                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.5 12.5">
                                                        <defs></defs><defs><style>.cls-1{fill-rule:evenodd}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="shop page"><g id="_4_col" data-name="4_col"><path d="M.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 01.75 0z" class="cls-1"></path><path d="M4.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 014.75 0z" class="cls-1" data-name="Rectangle"></path><path d="M8.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 018.75 0z" class="cls-1" data-name="Rectangle"></path><path id="Rectangle-4" d="M12.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11a.76.76 0 01.75-.75z" class="cls-1" data-name="Rectangle"></path></g></g></g></g>
                                                      </svg>
                                                </button>
                                            </li>
                                        </ul>
                
                
                
                                    </div>
                                    <div class="shoptab__shoing__wrap">
                                        <div class="shoptab__select d-flex">
                                            <label for="SortBy">Sort by :</label>
                                            <select name="SortBy" id="SortBy">
                                                <option value="manual">Featured</option>
                                                <option value="best-selling">Best Selling</option>
                                                <option value="title-ascending">Alphabetically, A-Z</option>
                                                <option value="title-descending">Alphabetically, Z-A</option>
                                                <option value="price-ascending">Price, low to high</option>
                                                <option value="price-descending">Price, high to low</option>
                                                <option value="created-descending">Date, new to old</option>
                                                <option value="created-ascending">Date, old to new</option>
                                            </select>
                                        </div>
                                        <p>Showing 1 - 12  of 33 result </p>
                                    </div>
                
                
                                </div>
                            </div>
                        </div>
            
            
                        <div class="row">
            
            
            
                            {{-- <div class="col-xl-3 col-lg-12 col-md-12">
                                <div class="shopsidebar">
                                    <div class="shopsidebar__top">
                                        <h2>Filter:</h2>
                                        <div class="shopsidebar__remove">
                                            <a href="#">Remove all</a>
                                        </div>
                                    </div>
                                    <div class="shopsidebar__bitton">
                                        <a class="default__button" href="#">$0.00-$80.00</a>
                                    </div>
                                    <div class="shopsidebar__widget">
                                        <details open="">
                                            <summary>Availability</summary>
                                            <div class="shopsidebar__list">
                                                <ul>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="in_stock" type="checkbox">
                                                        <label for="in_stock">In stock</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                                 </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="out__of__stock" type="checkbox">
                                                       <label for="out__of__stock">Out of stock</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                                </li>
                                                </ul>
                                            </div>
                                          </details>
                                    </div>
            
            
                                    <div class="shopsidebar__widget">
                                        <details open="">
                                            <summary>Product type</summary>

                                            <div class="shopsidebar__list">
                                                <ul>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="apparels_accessories" type="checkbox">
                                                        <label for="apparels_accessories">Apparel & Accessories</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                                 </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="jacket" type="checkbox">
                                                       <label for="jacket">Jacket</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(10)</span></a>
                                                </li>
                                                </ul>
                                            </div>


                                          </details>
                                    </div>
            
            
                                    <div class="shopsidebar__widget">
                                        <details open="">
                                            <summary>Brand</summary>
                                            <div class="shopsidebar__list">
                                                <ul>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="apple" type="checkbox">
                                                        <label for="apple">Apple</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(18)</span></a>
                                                 </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="amazon" type="checkbox">
                                                       <label for="amazon">Amazon</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                                </li>
                                                </ul>
                                            </div>
                                          </details>
                                    </div>
            
            
                                    <div class="shopsidebar__widget">
                                        <details open="">
                                            <summary>Color</summary>

                                            <div class="shopsidebar__list">
                                                <ul>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="black" type="checkbox">
                                                        <label for="black">Black</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(5)</span></a>
                                                 </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="blue" type="checkbox">
                                                       <label for="blue">Blue</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(9)</span></a>
                                                </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="grey" type="checkbox">
                                                       <label for="grey">Grey</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(9)</span></a>
                                                </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="pink" type="checkbox">
                                                       <label for="pink">Pink</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(6)</span></a>
                                                </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="red" type="checkbox">
                                                       <label for="red">Red</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(9)</span></a>
                                                </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="violet" type="checkbox">
                                                       <label for="violet">Violet</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(9)</span></a>
                                                </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="white" type="checkbox">
                                                       <label for="white">White</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(8)</span></a>
                                                </li>
                                                 <li>
                                                    <div class="shopsidebar__box">
                                                       <input id="yellow" type="checkbox">
                                                       <label for="yellow">Yellow</label>
                                                   </div>
                                                   <a href="#"><span class="shopsidebar__number">(9)</span></a>
                                                </li>
                                                </ul>
                                            </div>

                                          </details>
                                    </div>
            
                                    <div class="shopsidebar__widget">
                                        <details open="">
                                            <summary>Size</summary>
                                            <div class="shopsidebar__list">
                                                <ul>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="size_s" type="checkbox">
                                                        <label for="size_s">S</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(18)</span></a>
                                                 </li>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="size_m" type="checkbox">
                                                        <label for="size_m">M</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(5)</span></a>
                                                 </li>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="size_l" type="checkbox">
                                                        <label for="size_l">L</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(11)</span></a>
                                                 </li>
                                                    <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="size_xl" type="checkbox">
                                                        <label for="size_xl">XL</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                                 </li>

                                                 <li>
                                                     <div class="shopsidebar__box">
                                                        <input id="size_xxl" type="checkbox">
                                                        <label for="size_xxl">XXL</label>
                                                    </div>
                                                    <a href="#"><span class="shopsidebar__number">(17)</span></a>
                                                 </li>
                                                 
                                                </ul>
                                            </div>
                                          </details>
                                    </div>
            
            
                                </div>
                            </div> --}}
            
            
            
                            <div class="col-xl-12 col-lg-12 col-md-12">
            
                                <div class="tab-content" id="myTabContent" data-aos="fade-up">
                                    <div class="tab-pane fade" id="grid__view">
            
                                        <div class="row">
            
            
                                            <!-- single product start -->
                                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/1.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge">Sale</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Book stand about Software</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $32.00 <del>/ $67.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Sports
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(44)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end -->
            
                                            <!-- single product start -->
                                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/2.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge blue__color">New</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $56.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Coocking
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(98)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end -->
                                            <!-- single product start -->
                                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/3.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge green__color">Sold Out</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $57.00 <del>/ $88.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Drama
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(45)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end -->
                                                <!-- single product start -->
                                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 column__custom__class">
                                                    <div class="gridarea__wraper product__grid">
                                                        <div class="gridarea__img">
                                                            <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/4.jpg" alt="grid"></a>
                                                            <div class="gridarea__small__button gridarea__small__button__1">
                                                                <div class="grid__badge yellow__color">20% Off</div>
                                                            </div>
                                                            <div class="gridarea__small__icon">
                                                                <a href="#"><i class="icofont-heart-alt"></i></a>
                                                            </div>
                    
                                                            <div class="product__grid__action">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                                Add to cart                                                        
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                        </a>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                    
                    
                                                        </div>
                                                        <div class="gridarea__content">
                    
                                                            <div class="gridarea__heading">
                                                                <h3><a href="product-details.html">Pendi mandie kond maedsd</a></h3>
                                                            </div>
                                                            <div class="gridarea__price">
                                                                $88.00 <del>/ $99.00</del>
                                                            </div>
                                                            <div class="gridarea__bottom">
                    
                                                                <a href="instructor-details.html">
                                                                    Design
                                                                </a>
                    
                                                                <div class="gridarea__star">
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <span>(45)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single product end -->
                                                    <!-- single product start -->
                                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/5.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge">Sale</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Book stand about softwere</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $32.00 <del>/ $67.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Development
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(44)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end -->
                                                <!-- single product start -->
                                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 column__custom__class">
                                                    <div class="gridarea__wraper product__grid">
                                                        <div class="gridarea__img">
                                                            <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/6.jpg" alt="grid"></a>
                                                            <div class="gridarea__small__button gridarea__small__button__1">
                                                                <div class="grid__badge blue__color">New</div>
                                                            </div>
                                                            <div class="gridarea__small__icon">
                                                                <a href="#"><i class="icofont-heart-alt"></i></a>
                                                            </div>
                    
                                                            <div class="product__grid__action">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                                Add to cart                                                        
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                        </a>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                    
                    
                                                        </div>
                                                        <div class="gridarea__content">
                    
                                                            <div class="gridarea__heading">
                                                                <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                            </div>
                                                            <div class="gridarea__price">
                                                                $56.00 <del>/ $99.00</del>
                                                            </div>
                                                            <div class="gridarea__bottom">
                    
                                                                <a href="instructor-details.html">
                                                                    Business
                                                                </a>
                    
                                                                <div class="gridarea__star">
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <i class="icofont-star"></i>
                                                                    <span>(98)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single product end -->
            
            
                                        </div>
            
            
                                    </div>
            
                                    <div class="tab-pane fade active show" id="list_view">
                                        <div class="row">
            
                                            <!-- single product start -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                            <div class="gridarea__wraper product__grid">
                                                <div class="gridarea__img">
                                                    <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/1.jpg" alt="grid"></a>
                                                    <div class="gridarea__small__button gridarea__small__button__1">
                                                        <div class="grid__badge">Sale</div>
                                                    </div>
                                                    <div class="gridarea__small__icon">
                                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    </div>
            
                                                    <div class="product__grid__action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                        Add to cart                                                        
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                </a>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
            
            
                                                </div>
                                                <div class="gridarea__content">
            
                                                    <div class="gridarea__heading">
                                                        <h3><a href="product-details.html">Book stand about Software</a></h3>
                                                    </div>
                                                    <div class="gridarea__price">
                                                        $32.00 <del>/ $67.00</del>
                                                    </div>
                                                    <div class="gridarea__bottom">
            
                                                        <a href="instructor-details.html">
                                                            Sports
                                                        </a>
            
                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <span>(44)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- single product end -->
                                        <!-- single product start -->
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/2.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge blue__color">New</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $56.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Coocking
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(98)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- single product end -->
                                        <!-- single product start -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                            <div class="gridarea__wraper product__grid">
                                                <div class="gridarea__img">
                                                    <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/7.jpg" alt="grid"></a>
                                                    <div class="gridarea__small__button gridarea__small__button__1">
                                                        <div class="grid__badge green__color">Sold Out</div>
                                                    </div>
                                                    <div class="gridarea__small__icon">
                                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    </div>
            
                                                    <div class="product__grid__action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                        Add to cart                                                        
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                </a>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
            
            
                                                </div>
                                                <div class="gridarea__content">
            
                                                    <div class="gridarea__heading">
                                                        <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                                    </div>
                                                    <div class="gridarea__price">
                                                        $57.00 <del>/ $88.00</del>
                                                    </div>
                                                    <div class="gridarea__bottom">
            
                                                        <a href="instructor-details.html">
                                                            Affiliate
                                                        </a>
            
                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <span>(45)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- single product end -->
            
                                                    <!-- single product start -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                            <div class="gridarea__wraper product__grid">
                                                <div class="gridarea__img">
                                                    <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/3.jpg" alt="grid"></a>
                                                    <div class="gridarea__small__button gridarea__small__button__1">
                                                        <div class="grid__badge green__color">Sold Out</div>
                                                    </div>
                                                    <div class="gridarea__small__icon">
                                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    </div>
            
                                                    <div class="product__grid__action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                        Add to cart                                                        
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                </a>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
            
            
                                                </div>
                                                <div class="gridarea__content">
            
                                                    <div class="gridarea__heading">
                                                        <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                                    </div>
                                                    <div class="gridarea__price">
                                                        $57.00 <del>/ $88.00</del>
                                                    </div>
                                                    <div class="gridarea__bottom">
            
                                                        <a href="instructor-details.html">
                                                            Drama
                                                        </a>
            
                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <span>(45)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- single product end -->
                                        <!-- single product start -->
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/5.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge">Sale</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Book stand about softwere</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $32.00 <del>/ $67.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Development
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(44)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- single product end -->
                                        <!-- single product start -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                            <div class="gridarea__wraper product__grid">
                                                <div class="gridarea__img">
                                                    <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/6.jpg" alt="grid"></a>
                                                    <div class="gridarea__small__button gridarea__small__button__1">
                                                        <div class="grid__badge blue__color">New</div>
                                                    </div>
                                                    <div class="gridarea__small__icon">
                                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    </div>
            
                                                    <div class="product__grid__action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                        Add to cart                                                        
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                </a>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
            
            
                                                </div>
                                                <div class="gridarea__content">
            
                                                    <div class="gridarea__heading">
                                                        <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                    </div>
                                                    <div class="gridarea__price">
                                                        $56.00 <del>/ $99.00</del>
                                                    </div>
                                                    <div class="gridarea__bottom">
            
                                                        <a href="instructor-details.html">
                                                            Business
                                                        </a>
            
                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <span>(98)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- single product end -->
            
            
                                        <!-- single product start -->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                            <div class="gridarea__wraper product__grid">
                                                <div class="gridarea__img">
                                                    <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/8.jpg" alt="grid"></a>
                                                    <div class="gridarea__small__button gridarea__small__button__1">
                                                        <div class="grid__badge yellow__color">20% Off</div>
                                                    </div>
                                                    <div class="gridarea__small__icon">
                                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    </div>
            
                                                    <div class="product__grid__action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                        Add to cart                                                        
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                </a>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
            
            
                                                </div>
                                                <div class="gridarea__content">
            
                                                    <div class="gridarea__heading">
                                                        <h3><a href="product-details.html">Pendi mandie kond maedsd</a></h3>
                                                    </div>
                                                    <div class="gridarea__price">
                                                        $88.00 <del>/ $99.00</del>
                                                    </div>
                                                    <div class="gridarea__bottom">
            
                                                        <a href="instructor-details.html">
                                                            Marketing
                                                        </a>
                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <span>(45)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- single product end -->
                                          <!-- single product start -->
                                          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                            <div class="gridarea__wraper product__grid">
                                                <div class="gridarea__img">
                                                    <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/1.jpg" alt="grid"></a>
                                                    <div class="gridarea__small__button gridarea__small__button__1">
                                                        <div class="grid__badge">Sale</div>
                                                    </div>
                                                    <div class="gridarea__small__icon">
                                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    </div>
            
                                                    <div class="product__grid__action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                        Add to cart                                                        
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                </a>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
            
            
                                                </div>
                                                <div class="gridarea__content">
            
                                                    <div class="gridarea__heading">
                                                        <h3><a href="product-details.html">Book stand about Software</a></h3>
                                                    </div>
                                                    <div class="gridarea__price">
                                                        $32.00 <del>/ $67.00</del>
                                                    </div>
                                                    <div class="gridarea__bottom">
            
                                                        <a href="instructor-details.html">
                                                            Sports
                                                        </a>
            
                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <span>(44)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- single product end -->
                                        <!-- single product start -->
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/2.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge blue__color">New</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $56.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Coocking
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(98)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- single product end -->
            
            
                                        </div>
            
            
                                    </div>
            
            
                                    <div class="tab-pane fade" id="list_four">
                                        <div class="row">
            
                                            <!-- single product start -->
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/1.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge">Sale</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Book stand about Software</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $32.00 <del>/ $67.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Sports
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(44)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/2.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge blue__color">New</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $56.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Coocking
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(98)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/3.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge green__color">Sold Out</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $57.00 <del>/ $88.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Drama
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(45)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/4.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge yellow__color">20% Off</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Pendi mandie kond maedsd</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $88.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Design
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(45)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/5.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge">Sale</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Book stand about softwere</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $32.00 <del>/ $67.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Development
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(44)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/6.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge blue__color">New</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $56.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Business
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(98)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/7.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge green__color">Sold Out</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $57.00 <del>/ $88.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Affiliate
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(45)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/8.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge yellow__color">20% Off</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Pendi mandie kond maedsd</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $88.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Marketing
                                                            </a>
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(45)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/9.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge">Sale</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Book stand about Software</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $32.00 <del>/ $67.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Sports
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(44)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/10.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge blue__color">New</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nice stand about peek</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $56.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Coocking
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(98)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/11.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge green__color">Sold Out</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Nided minid lnided codad</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $57.00 <del>/ $88.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Drama
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(45)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                                <div class="gridarea__wraper product__grid">
                                                    <div class="gridarea__img">
                                                        <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/products/12.jpg" alt="grid"></a>
                                                        <div class="gridarea__small__button gridarea__small__button__1">
                                                            <div class="grid__badge yellow__color">20% Off</div>
                                                        </div>
                                                        <div class="gridarea__small__icon">
                                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                                        </div>
                
                                                        <div class="product__grid__action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                                            Add to cart                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                                    </a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="gridarea__content">
                
                                                        <div class="gridarea__heading">
                                                            <h3><a href="product-details.html">Pendi mandie kond maedsd</a></h3>
                                                        </div>
                                                        <div class="gridarea__price">
                                                            $88.00 <del>/ $99.00</del>
                                                        </div>
                                                        <div class="gridarea__bottom">
                
                                                            <a href="instructor-details.html">
                                                                Design
                                                            </a>
                
                                                            <div class="gridarea__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(45)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
            
                                    </div>
                                    </div>
                                </div>
            
                                <div class="main__pagination__wrapper" data-aos="fade-up">
                                    <ul class="main__page__pagination">
                                        <li><a class="disable" href="#"><i class="icofont-double-left"></i></a></li>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icofont-double-right"></i></a></li>
                                    </ul>
                                </div>
            
                            </div>
                    </div>
                    </div>
                </section>
                   <!-- blog__section__end -->

       














        <!-- modal__start -->
        <div class="grid__quick__view__modal modalarea modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog modal__wraper">
                <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="featurearea__details__img">
                                    <div class="swiper modal__gallery__big">
                                    <div class="featurearea__big__img--modal swiper-wrapper">
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/products/1.jpg" alt="Product Big Img">
                                        </div>
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/products/2.jpg"  alt="Product Big Img">
                                        </div>
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/products/3.jpg"  alt="Product Big Img">
                                        </div>
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/products/4.jpg"  alt="Product Big Img">
                                        </div>
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/products/5.jpg"  alt="Product Big Img">
                                        </div>
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/products/6.jpg"  alt="Product Big Img">
                                        </div>
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/products/7.jpg"  alt="Product Big Img">
                                        </div>
                                    </div>
                                    </div>


                                    <div thumbsSlider="" class="swiper modal__gallery">
                                        <div class=" featurearea__thumb__img--modal swiper-wrapper">
                                            <div class="featurearea__single__thumb__img swiper-slide">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/products/1.jpg" alt="Product Thumb Img">
                                            </div>
                                            <div class="featurearea__single__thumb__img swiper-slide">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/products/2.jpg" alt="Product Thumb Img">
                                            </div>
                                            <div class="featurearea__single__thumb__img swiper-slide">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/products/3.jpg" alt="Product Thumb Img">
                                            </div>
                                            <div class="featurearea__single__thumb__img swiper-slide">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/products/4.jpg" alt="Product Thumb Img">
                                            </div>
                                            <div class="featurearea__single__thumb__img swiper-slide">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/products/5.jpg" alt="Product Thumb Img">
                                            </div>
                                            <div class="featurearea__single__thumb__img swiper-slide">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/products/6.jpg" alt="Product Thumb Img">
                                            </div>
                                            <div class="featurearea__single__thumb__img swiper-slide">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/products/7.jpg" alt="Product Thumb Img">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="featurearea__inner">
                                        <div class="featurearea__small__title">
                                            <span>Book</span>
                                        </div>
                                        <div class="featurearea__main__title">
                                            <h3><a href="product-details.html">Book stand about Software</a></h3>
                                        </div>
                                        <div class="featurearea__price">
                                            <span><del> $110.00</del></span>
                                            <span>$80.00</span>
                                            <span class="featurearea__price__button">SALE </span>
                                            <span class="featurearea__price__button black__color">-27%</span>
                                        </div>

                                        <div class="featurearea__size">
                                            <span>Size:</span>
                                            X
                                        </div>
                                        <div class="featurearea__size__button">
                                        <ul>
                                            <li><a href="#">x</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">s</a></li>
                                        </ul>
                                        </div>

                                        <div class="featurearea__size">
                                            <span>Color:</span>
                                            violet
                                        </div>
                                        <div class="featurearea__size__img">
                                        <ul>
                                            <li><a href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/products/1.jpg" alt=""></a></li>
                                            <li><a href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/products/2.jpg" alt=""></a></li>
                                            <li><a href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/products/3.jpg" alt=""></a></li>
                                            <li><a href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/products/4.jpg" alt=""></a></li>
                                            <li><a href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/products/5.jpg" alt=""></a></li>
                                        </ul>
                                        </div>
                                        <div class="featurearea__size">
                                            <span>Quantity</span>
                                        
                                        </div>
                                        <div class="featurearea__quantity">
                                            <div class="featurearea__quantity__button">
                                                <span>-</span>
                                                <span>1</span>
                                                <span>+</span>
                                            </div>
                                            <a class="featurearea__quantity__button" href="#">Add to cart</a>
                                        
                                        
                                        
                                        </div>
                                        <div class="featurearea__bottom__button">
                                            <a href="#">By it now</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection