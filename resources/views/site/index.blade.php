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

    <!--filter navigation of products-->
        <ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
            @php
                $cats_array = [];
                foreach ($categories as $cats){
                    if($cats->count() > 0){
                        $cats_array[] = ['id'=>$cats->id, 'name'=>$cats->name];
                    }
                }
            @endphp

            @foreach($cats_array as $cat)
                <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".cat_{{$cat['id']}}">{{$cat['name']}}</button></li>
            @endforeach

        </ul>
    <!--products-->
        <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
            @foreach($categories as $category)

                @if($category->count() > 0)

                    @foreach($category->products()->limit(6)->get() as $prod)
                    <!--product item-->
                    <div class="product_item cat_{{$category->id}}">
                        <figure class="r_corners photoframe shadow relative hit animate_ftb" style="text-align: center">

                            <!--product preview-->
                            <a href="{{route('site.product.view', ['id' => $prod->id])}}" class="d_block relative pp_wrap">
                                <!--hot product-->
                                <span class="hot_stripe"><img src="{{asset('assets/images/products/'.$prod->photos()->first()->url)}}" alt=""></span>
                                <img style="width: 250px; height: 250px;" src="{{asset('assets/images/products/'.$prod->photos()->first()->url)}}" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10"><a href="#" class="color_dark">{{$prod->name}}</a></h5>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Adicionar</button>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach

                @endif

            @endforeach
        </section>



    <!--product brands-->
        <div class="clearfix m_bottom_25 m_sm_bottom_20">
            <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">PRINCIPAIS MARCAS</h2>
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