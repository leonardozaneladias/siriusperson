<header role="banner">

    @php
        $session_quotations = session()->get('quotation.products');
        @$qts_quotations = count($session_quotations);
    @endphp

    <!--header bottom part-->
    <section class="h_bot_part container">
        <div class="clearfix row">
            <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                <a href="{{route('site.index')}}" class="logo m_xs_bottom_15 d_xs_inline_b">
                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
                <ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
                    <!--shopping cart-->
                    <li class="m_left_5 relative container3d" id="shopping_button">
                        <a role="button" href="{{route('site.quotation')}}" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                                <span class="d_inline_middle shop_icon m_mxs_right_0">
											<i class="fa fa-shopping-cart"></i>
											<span class="count tr_delay_hover type_2 circle t_align_c">{{$qts_quotations}}</span>
										</span>
                            <b class="d_mxs_none">ORÇAMENTO</b>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--main menu container-->
    <section class="menu_wrap relative">
        <div class="container clearfix">
            <!--button for responsive menu-->
            <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
                <span class="centered_db r_corners"></span>
                <span class="centered_db r_corners"></span>
                <span class="centered_db r_corners"></span>
            </button>
            <!--main menu-->
            <nav role="navigation" class="f_left f_xs_none d_xs_none">
                <ul class="horizontal_list main_menu clearfix">
                    <li class="current relative f_xs_none m_xs_bottom_5"><a href="{{route('site.index')}}" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a></li>
                    <li class="relative f_xs_none m_xs_bottom_5"><a class="tr_delay_hover color_light tt_uppercase"><b>Categorias</b></a>
                        <!--sub menu-->
                        <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                            <ul class="sub_menu">
                                @foreach(\App\Models\Category::where('status',1)->get() as $category)
                                <li><a class="color_dark tr_delay_hover" href="{{route('site.products.category', ['id' => $category->id])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <!-- //TODO: Site.About -->
                    <li class="relative f_xs_none m_xs_bottom_5"><a href="{{route('site.about')}}" class="tr_delay_hover color_light tt_uppercase"><b>Sobre Sirius Pesonalize</b></a></li>

                    <!-- //TODO: Site.Contact -->
                    <li class="relative f_xs_none m_xs_bottom_5"><a href="{{route('site.contact')}}" class="tr_delay_hover color_light tt_uppercase"><b>CONTATO</b></a></li>
                </ul>
            </nav>
            <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <!--search form-->
        <div class="searchform_wrap tf_xs_none tr_all_hover">
            <div class="container vc_child h_inherit relative">
                <form role="search" class="d_inline_middle full_width">
                    <input type="text" name="search" placeholder="Digite o nome do Produto" class="f_size_large">
                </form>
                <button class="close_search_form tr_all_hover d_xs_none color_dark">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
    </section>
</header>