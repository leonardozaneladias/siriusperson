@extends('site.layout')

@section('content')
    <div class="page_content_offset">
        <div class="container">
            <div class="row clearfix">
                <!--left content column-->
                <section class="col-lg-9 col-md-9 col-sm-9">
                    <h2 class="tt_uppercase color_dark m_bottom_25">{{$category->name}}</h2>
                    <img class="r_corners m_bottom_40" src="{{asset('assets/images/category_img_1.jpg')}}" alt="">

                    <hr class="m_bottom_10 divider_type_3">
                    <div class="row clearfix m_bottom_15">
                        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 m_xs_bottom_10">


                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 t_align_r t_xs_align_l">
                            <!--pagination-->
                            <a role="button" href="#"
                               class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i
                                        class="fa fa-angle-left"></i></a>
                            <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                                <li class="m_right_10"><a class="color_dark" href="#">1</a></li>
                                <li class="m_right_10"><a class="scheme_color" href="#">2</a></li>
                                <li class="m_right_10"><a class="color_dark" href="#">3</a></li>
                            </ul>
                            <a role="button" href="#"
                               class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!--products-->
                    <section class="products_container category_grid clearfix m_bottom_15">

                    @foreach($category->products as $product)
                        <!--product item-->
                            <div class="product_item hit w_xs_full">
                                <figure class="r_corners photoframe type_2 t_align_c tr_all_hover shadow relative">
                                    <!--product preview-->
                                    <a href="{{route('site.product.view', ['id' => $product->id])}}" class="d_block relative wrapper pp_wrap m_bottom_15">
                                        <img src="{{asset('assets/images/products/'.$product->photos()->first()->url)}}"
                                             class="tr_all_hover" alt="" style="width: 200px; height: 200px;">
                                    </a>
                                    <!--description and price of product-->
                                    <figcaption>
                                        <h5 class="m_bottom_10"><a href="{{route('site.product.view', ['id' => $product->id])}}" class="color_dark">{{$product->name}}</a>
                                        </h5>
                                        <hr>
                                        <br>


                                        <a href="{{route('site.quotation.keep', ['product' => $product->id, 'quantity' => 1])}}" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">
                                            Adicionar
                                        </a>
                                        <br>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach

                    </section>
                    <hr class="m_bottom_10 divider_type_3">
                    <div class="row clearfix m_bottom_15 m_xs_bottom_30">
                        <div class="col-lg-7 col-md-7 col-sm-8 m_xs_bottom_10">

                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-4 t_align_r t_xs_align_l">
                            <!--pagination-->
                            <a role="button" href="#"
                               class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i
                                        class="fa fa-angle-left"></i></a>
                            <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                                <li class="m_right_10"><a class="color_dark" href="#">1</a></li>
                                <li class="m_right_10"><a class="scheme_color" href="#">2</a></li>
                                <li class="m_right_10"><a class="color_dark" href="#">3</a></li>
                            </ul>
                            <a role="button" href="#"
                               class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </section>
                <!--right column-->
                <aside class="col-lg-3 col-md-3 col-sm-3">
                    <!--widgets-->
                    <figure class="widget shadow r_corners wrapper m_bottom_30">
                        <figcaption>
                            <h3 class="color_light">Categorias</h3>
                        </figcaption>
                        <div class="widget_content">
                            <!--filter form-->
                            <form>
                                <!--checkboxes-->
                                <fieldset class="m_bottom_15">
                                    @foreach(\App\Models\Category::where('status',1)->get(['id', 'name']) as $category)
                                        <input type="checkbox" name="" id="checkbox_{{$category->id}}" class="d_none"><label
                                                for="checkbox_{{$category->id}}">{{$category->name}}</label><br>
                                    @endforeach
                                </fieldset>
                            </form>
                        </div>
                    </figure>
                </aside>
            </div>
        </div>
    </div>
@endsection()