@extends('site.layout')

@section('content')
    <!--content-->
    <div class="page_content_offset">
        <div class="container">
            <h1 class="color_dark m_bottom_25">Produto foi inserido no orçamento</h1>
            <a href="{{route('site.quotation')}}" class="button_type_1 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Ir ao Orçamento</a>
            <a href="{{route('site.index')}}" class="button_type_1  r_corners tr_all_hover color_green mw_0 m_bottom_15">Continuar Cotando</a>
            </div>
    </div>

@endsection()