@extends('site.layout')

@section('content')
    <!--content-->
    <div class="page_content_offset">
        <div class="container">
            <div class="row clearfix">
                <!--left content column-->
                <section class="col-lg-9 col-md-9 col-sm-9">
                    <h2 class="tt_uppercase color_dark m_bottom_25">SOBRE SIRIUS PERSONALIZE</h2>
                    <!--blog post-->
                    <article class="m_bottom_25">
                        <a href="#" class="d_block photoframe r_corners wrapper shadow m_bottom_25">
                            <img src="{{asset('assets/images/blog_img_4.jpg')}}" class="tr_all_long_hover" alt="">
                        </a>
                        <div class="row clearfix m_bottom_10">
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">Os melhores brindes e qualidade incomparavel</a></h4>
                            </div>

                        </div>
                        <!--post content-->
                        <p class="m_bottom_10">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                        <p class="m_bottom_10">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                        <p class="m_bottom_10">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                        <p class="m_bottom_10">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. </p>
                    </article>
                    <hr class="divider_type_3 m_bottom_30">
                </section>
                <!--right column-->
                <aside class="col-lg-3 col-md-3 col-sm-3">
                    <!--banner-->
                    <a href="#" class="d_block d_xs_inline_b r_corners m_bottom_30">
                        <img src="{{asset('assets/images/banner_img_6.jpg')}}" alt="">
                    </a>
                    <!--widgets-->
                    <figure class="widget shadow r_corners wrapper m_bottom_30">
                        <figcaption>
                            <h3 class="color_light">Categorias</h3>
                        </figcaption>
                        <div class="widget_content">
                            <!--Categories list-->
                            <ul class="categories_list">
                                @foreach(\App\Models\Category::where('status', 1)->get() as $cats)
                                <li class="active">
                                    <a href="{{route('site.products.category', ['id' => $cats->id])}}" class="f_size_large color_dark d_block">
                                        <b>{{$cats->name}}</b>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </figure>
                </aside>
            </div>
        </div>
    </div>

@endsection()