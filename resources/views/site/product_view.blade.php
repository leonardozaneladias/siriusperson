@extends('site.layout')

@section('content')
    <!--content-->
    <div class="page_content_offset">
        <div class="container">
            <div class="row clearfix">
                <!--left content column-->
                <section class="col-lg-12 col-md-12 col-sm-12 m_xs_bottom_30">
                    <div class="clearfix m_bottom_30 t_xs_align_c">
                        <div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
                            <span class="hot_stripe"><img src="{{asset('assets/images/sale_product.png')}}" alt=""></span>
                            <div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
                                <img id="zoom_image" src="{{asset("assets/images/products/{$product->photos()->first()->url}")}}" data-zoom-image="{{asset("assets/images/products/{$product->photos()->first()->url}")}}" class="tr_all_hover" alt="" style="width: 300px; height: 300px;">
                                <a href="{{asset("assets/images/products/".$product->photos()->first()->url)}}" class="d_block button_type_5 r_corners tr_all_hover box_s_none color_light p_hr_0">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                            <!--carousel-->
                            <div class="relative qv_carousel_wrap">
                                <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
                                    <i class="fa fa-angle-left "></i>
                                </button>
                                <ul class="qv_carousel_single d_inline_middle">
                                    @foreach($product->photos()->get() as $photo)
                                    <a href="#" data-image="{{asset("assets/images/products/{$photo->url}")}}" data-zoom-image="{{asset("assets/images/products/{$photo->url}")}}"><img src="{{asset("assets/images/products/{$photo->url}")}}" alt="" style="width: 100px; height: 100px;"></a>
                                    @endforeach
                                </ul>
                                <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
                                    <i class="fa fa-angle-right "></i>
                                </button>
                            </div>
                        </div>
                        <div class="p_top_10 t_xs_align_l">
                            <!--description-->
                            <h2 class="color_dark fw_medium m_bottom_10">{{$product->name}}</h2>
{{--                            --}}
{{--                            <div class="m_bottom_10">--}}
{{--                                <!--rating-->--}}
{{--                                <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">--}}
{{--                                    <li class="active">--}}
{{--                                        <i class="fa fa-star-o empty tr_all_hover"></i>--}}
{{--                                        <i class="fa fa-star active tr_all_hover"></i>--}}
{{--                                    </li>--}}
{{--                                    <li class="active">--}}
{{--                                        <i class="fa fa-star-o empty tr_all_hover"></i>--}}
{{--                                        <i class="fa fa-star active tr_all_hover"></i>--}}
{{--                                    </li>--}}
{{--                                    <li class="active">--}}
{{--                                        <i class="fa fa-star-o empty tr_all_hover"></i>--}}
{{--                                        <i class="fa fa-star active tr_all_hover"></i>--}}
{{--                                    </li>--}}
{{--                                    <li class="active">--}}
{{--                                        <i class="fa fa-star-o empty tr_all_hover"></i>--}}
{{--                                        <i class="fa fa-star active tr_all_hover"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="fa fa-star-o empty tr_all_hover"></i>--}}
{{--                                        <i class="fa fa-star active tr_all_hover"></i>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>--}}
{{--                            </div>--}}
{{--                            <hr class="m_bottom_10 divider_type_3">--}}
{{--                            <table class="description_table m_bottom_10">--}}
{{--                                <tr>--}}
{{--                                    <td>Manufacturer:</td>--}}
{{--                                    <td><a href="#" class="color_dark">Chanel</a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Availability:</td>--}}
{{--                                    <td><span class="color_green">in stock</span> 20 item(s)</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Product Code:</td>--}}
{{--                                    <td>PS06</td>--}}
{{--                                </tr>--}}
{{--                            </table>--}}
{{--                            <h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>--}}
{{--                            <table class="description_table m_bottom_5">--}}
{{--                                <tr>--}}
{{--                                    <td>Product Length:</td>--}}
{{--                                    <td><span class="color_dark">10.0000M</span></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Product Weight:</td>--}}
{{--                                    <td>10.0000KG</td>--}}
{{--                                </tr>--}}
{{--                            </table>--}}
                            <hr class="divider_type_3 m_bottom_10">
                            <p class="m_bottom_10">{{$product->description}}</p>
                            <hr class="divider_type_3 m_bottom_15">
{{--                            <div class="m_bottom_15">--}}
{{--                                <s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>--}}
{{--                            </div>--}}
                            <form name="quotationkeep" action="{{route('site.quotation.keep')}}" method="get">

                                <input type="hidden" name="product" value="{{$product->id}}">
                                <table class="description_table type_2 m_bottom_15">
                                    <tr>
                                        <td class="v_align_m">Quantidade:</td>
                                        <td class="v_align_m">
                                            <div class="custom_select f_size_medium relative d_inline_middle">
                                                <div class="select_title r_corners relative color_dark">{{$product->quantity_minimal}}</div>
                                                <ul class="select_list d_none"></ul>

                                                <select name="quantity" id="quantity" required>
                                                    @php
                                                        $quantity_minimal = $product->quantity_minimal;
                                                        $max_multiplied = 5;
                                                    @endphp

                                                    @for($i=$quantity_minimal;$i<=($quantity_minimal*$max_multiplied);$i+=$quantity_minimal)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="d_ib_offset_0 m_bottom_20">
                                    @if($product_quotation)
                                        <span class="button_type_12 r_corners color_light tr_delay_hover d_inline_b f_size_large" style="background: #2ecc71">ADICIONADO</span>
                                    @else
                                        <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Adicionar no Orçamento</button>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                    <hr class="divider_type_3 m_bottom_15">
                </section>
            </div>
        </div>
    </div>
@endsection()