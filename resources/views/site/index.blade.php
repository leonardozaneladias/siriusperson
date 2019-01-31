@extends('site.layout')

@section('content')

<!--slider-->
<div class="camera_wrap m_bottom_0">
    <div data-src="{{asset('assets/images/slide_02.jpg')}}" data-custom-thumb="{{asset('assets/images/slide_02.jpg')}}">
        <div class="camera_caption_1 fadeFromTop t_align_c d_xs_none">
            <div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_5">Meet New Theme</div>
            <hr class="slider_divider d_inline_b m_bottom_5">
            <div class="color_light slider_title tt_uppercase t_align_c m_bottom_45 m_sm_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
            <div class="color_light slider_title_2 m_bottom_45">$<b>15.00</b></div>
            <a href="#" role="button" class="tr_all_hover button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Buy Now</a>
        </div>
    </div>
    <div data-src="{{asset('assets/images/slide_01.jpg')}}" data-custom-thumb="{{asset('assets/images/slide_01.jpg')}}">
        <div class="camera_caption_2 fadeIn t_align_c d_xs_none">
            <div class="f_size_large tt_uppercase slider_title_3 scheme_color">New arrivals</div>
            <hr class="slider_divider type_2 m_bottom_5 d_inline_b">
            <div class="color_light slider_title tt_uppercase t_align_c m_bottom_65 m_sm_bottom_20"><b><span class="scheme_color">Spring/Summer 2014</span><br><span class="color_dark">Ready-To-Wear</span></b></div>
            <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">View Collection</a>
        </div>
    </div>
    <div data-src="{{asset('assets/images/slide_03.jpg')}}" data-custom-thumb="{{asset('assets/images/slide_03.jpg')}}">
        <div class="camera_caption_3 fadeFromTop t_align_c d_xs_none">
            <img src="{{asset('assets/images/slider_layer_img.png')}}" alt="" class="m_bottom_5">
            <div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20"><b class="color_dark">up to 70% off</b></div>
            <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
        </div>
    </div>
</div>
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">All Products</h2>
    <!--filter navigation of products-->
        <ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
            <li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">All</button></li>
            <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".featured">Featured</button></li>
            <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".new">New</button></li>
            <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".specials">Specials</button></li>
            <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".hit">Hit</button></li>
            <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".random">Random</button></li>
            <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".rated">Rated</button></li>
        </ul>
    <!--products-->
        <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
        <!--product item-->
            <div class="product_item">
                <figure class="r_corners photoframe shadow relative hit animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative pp_wrap">
                    <!--hot product-->
                        <span class="hot_stripe"><img src="{{asset('assets/images/hot_product.png')}}" alt=""></span>
                        <img src="{{asset('assets/images/product_img_1.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
                        <div class="clearfix">
                            <p class="scheme_color f_left f_size_large m_bottom_15">$102.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </figcaption>
                </figure>
            </div>
        <!--product item-->
            <div class="product_item featured">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative wrapper pp_wrap">
                        <img src="{{asset('assets/images/product_img_2.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Ut tellus dolor dapibus</a></h5>
                        <div class="clearfix m_bottom_15">
                            <p class="scheme_color f_size_large f_left">$57.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">Add to Cart</button>
                            <button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0"><i class="fa fa-files-o"></i></button>
                            <button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"></i></button>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <!--product item-->
            <div class="product_item new">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative wrapper pp_wrap">
                        <img src="{{asset('assets/images/product_img_3.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Cursus eleifend elit aenean aucto.</a></h5>
                        <div class="clearfix">
                            <p class="scheme_color f_left f_size_large m_bottom_15">$99.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </figcaption>
                </figure>
            </div>
        <!--product item-->
            <div class="product_item specials">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative pp_wrap">
                    <!--sale product-->
                        <span class="hot_stripe"><img src="{{asset('assets/images/sale_product.png')}}" alt=""></span>
                        <img src="{{asset('assets/images/product_img_4.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
                        <div class="clearfix">
                            <p class="scheme_color f_left f_size_large m_bottom_15"><s>$79.00</s> $36.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </figcaption>
                </figure>
            </div>
        <!--product item-->
            <div class="product_item hit">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative pp_wrap">
                    <!--hot product-->
                        <span class="hot_stripe type_2"><img src="{{asset('assets/images/hot_product_type_2.png')}}" alt=""></span>
                        <img src="{{asset('assets/images/product_img_5.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
                        <div class="clearfix">
                            <p class="scheme_color f_left f_size_large m_bottom_15">$102.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </figcaption>
                </figure>
            </div>
        <!--product item-->
            <div class="product_item featured">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative wrapper pp_wrap">
                        <img src="{{asset('assets/images/product_img_6.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                        <span class="clearfix p_buttons d_block tr_all_hover">
                                    <span class="box_s_none button_type_5 tr_delay_hover f_left r_corners color_light p_hr_0"><i class="fa fa-heart-o"></i></span>
                                    <span class="box_s_none button_type_5 tr_delay_hover f_left r_corners color_light m_left_5 p_hr_0"><i class="fa fa-files-o"></i></span>
                                </span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Ut tellus dolor dapibus</a></h5>
                        <div class="clearfix m_bottom_15">
                            <p class="scheme_color f_size_large f_left">$57.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </figcaption>
                </figure>
            </div>
        <!--product item-->
            <div class="product_item specials">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative wrapper pp_wrap">
                        <img src="{{asset('assets/images/product_img_7.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Cursus eleifend elit aenean aucto.</a></h5>
                        <div class="clearfix">
                            <p class="scheme_color f_left f_size_large m_bottom_15">$99.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </figcaption>
                </figure>
            </div>
        <!--product item-->
            <div class="product_item rated">
                <figure class="r_corners photoframe shadow relative animate_ftb long">
                <!--product preview-->
                    <a href="#" class="d_block relative pp_wrap">
                    <!--sale product-->
                        <span class="hot_stripe type_2"><img src="{{asset('assets/images/sale_product_type_2.png')}}" alt=""></span>
                        <img src="{{asset('assets/images/product_img_8.jpg')}}" class="tr_all_hover" alt="">
                        <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                    </a>
                <!--description and price of product-->
                    <figcaption>
                        <h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
                        <div class="clearfix">
                            <p class="scheme_color f_left f_size_large m_bottom_15"><s>$79.00</s> $36.00</p>
                        <!--rating-->
                            <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </figcaption>
                </figure>
            </div>
        </section>
    <!--banners-->
        <section class="row clearfix m_bottom_45 m_sm_bottom_35">
            <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                <a href="#" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
                    <img src="{{asset('assets/images/banner_img_1.png')}}" alt="">
                    <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                <span class="d_inline_middle">
                                    <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                                    <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                                    <span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
                                    <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                </span>
                            </span>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                <a href="#" class="d_block banner wrapper r_corners type_2 relative">
                    <img src="{{asset('assets/images/banner_img_2.png')}}" alt="">
                    <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                <span class="d_inline_middle">
                                    <span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5"><b>-50%</b></span>
                                    <span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
                                    <span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
                                    <span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                </span>
                            </span>
                </a>
            </div>
        </section>
    <!--product brands-->
        <div class="clearfix m_bottom_25 m_sm_bottom_20">
            <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
            <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    <!--product brands carousel-->
        <div class="product_brands m_bottom_45 m_sm_bottom_35">
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>
            <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('assets/images/brand_logo.jpg')}}" alt=""></a>

        </div>
    <!--blog-->
        <div class="row clearfix m_bottom_45 m_sm_bottom_35">
            <div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">
                <div class="clearfix m_bottom_25 m_sm_bottom_20">
                    <h2 class="tt_uppercase color_dark f_left">From The Blog</h2>
                    <div class="f_right clearfix nav_buttons_wrap">
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            <!--blog carousel-->
                <div class="blog_carousel">
                    <div class="clearfix">
                    <!--image-->
                        <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                            <img class="tr_all_long_hover" src="{{asset('assets/images/blog_img_1.jpg')}}" alt="">
                        </a>
                    <!--post content-->
                        <div class="mini_post_content">
                            <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>Ut tellus dolor, dapibus eget, elementum vel</b></a></h4>
                            <p class="f_size_medium m_bottom_10 animate_ftr">25 January, 2013, 5 comments</p>
                            <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                            <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="clearfix">
                    <!--image-->
                        <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                            <img class="tr_all_long_hover" src="{{asset('assets/images/blog_img_2.jpg')}}" alt="">
                        </a>
                    <!--post content-->
                        <div class="mini_post_content">
                            <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>Cursus eleifend, elit aenean set amet lorem</b></a></h4>
                            <p class="f_size_medium m_bottom_10 animate_ftr">30 January, 2013, 6 comments</p>
                            <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                            <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="clearfix">
                    <!--image-->
                        <a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
                            <img class="tr_all_long_hover" src="{{asset('assets/images/blog_img_3.jpg')}}" alt="">
                        </a>
                    <!--post content-->
                        <div class="mini_post_content">
                            <h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b>In pede mi, aliquet sit ut tellus dolor</b></a></h4>
                            <p class="f_size_medium m_bottom_10 animate_ftr">1 February, 2013, 12 comments</p>
                            <p class="m_bottom_10 animate_ftr">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                            <a class="tt_uppercase f_size_large animate_ftr" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <!--testimonials-->
            <div class="col-lg-6 col-md-6 col-sm-12 ti_animate animate_ftr">
                <div class="clearfix m_bottom_25 m_sm_bottom_20">
                    <h2 class="tt_uppercase color_dark f_left f_mxs_none m_mxs_bottom_15">What Our Customers Say</h2>
                    <div class="f_right clearfix nav_buttons_wrap f_mxs_none">
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev"><i class="fa fa-angle-left"></i></button>
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            <!--testimonials carousel-->
                <div class="testiomials_carousel">
                    <div>
                        <blockquote class="r_corners shadow f_size_large relative m_bottom_15 animate_ftr">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</blockquote>
                        <img class="circle m_left_20 d_inline_middle animate_ftr" src="{{asset('assets/images/testimonial_img_1.jpg')}}" alt="">
                        <div class="d_inline_middle m_left_15 animate_ftr">
                            <h5 class="color_dark"><b>Marta Healy</b></h5>
                            <p>Los Angeles</p>
                        </div>
                    </div>
                    <div>
                        <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</blockquote>
                        <img class="circle m_left_20 d_inline_middle" src="{{asset('assets/images/testimonial_img_2.jpg')}}" alt="">
                        <div class="d_inline_middle m_left_15">
                            <h5 class="color_dark"><b>Alan Smith</b></h5>
                            <p>New York</p>
                        </div>
                    </div>
                    <div>
                        <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt.</blockquote>
                        <img class="circle m_left_20 d_inline_middle" src="{{asset('assets/images/testimonial_img_3.jpg')}}" alt="">
                        <div class="d_inline_middle m_left_15">
                            <h5 class="color_dark"><b>Anna Johnson</b></h5>
                            <p>Detroid</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--banners-->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
                    <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="{{asset('assets/images/banner_img_3.png')}}" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
                                </span>
                            </span>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
                    <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="{{asset('assets/images/banner_img_4.png')}}" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>Free Shipping</b><br><span class="color_dark">On All Items</span>
                                </span>
                            </span>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="#" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
                    <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="{{asset('assets/images/banner_img_5.png')}}" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>Great Daily Deals</b><br><span class="color_dark">Shop Now!</span>
                                </span>
                            </span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection()