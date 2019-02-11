@extends('site.layout')

@section('content')
    <!--content-->
    <div class="page_content_offset">
        <div class="container">
            <div class="row clearfix">
                @if(isset($products) and count($products)>0)
                    <!--left content column-->
                    <section class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="tt_uppercase color_dark m_bottom_30">ORÇAMENTO</h2>
                        <!--orders list table-->
                        <table class="table_type_6 responsive_table full_width r_corners wrapper shadow bg_light_color_1 m_bottom_30 t_align_l">
                            <thead>
                            <tr class="f_size_large">
                                <!--titles for td-->
                                <th>#ID</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Quantidade</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td data-title="">(<a href="?remove_id={{$product->id}}">X</a>) {{$product->id}}</td>
                                <td data-title=""><span class="f_size_large fw_medium scheme_color">{{$product->name}}</span></td>
                                <td data-title="">{{$product->category->name}}</td>
                                <td data-title="">{{$product->quantity_minimal}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                    <!--left content column-->
                    <section class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 m_xs_bottom_30">
                                <h2 class="tt_uppercase color_dark m_bottom_25">ENVIAR PEDIDO DE ORÇAMENTO</h2>
                                <p class="m_bottom_10">Coloque os dados abaixo, e em breve retornaremos</p>
                                <form id="quotationform" action="{{route('site.quotation.request')}}" method="post">
                                    {!! csrf_field() !!}
                                    <ul>
                                        <li class="clearfix m_bottom_15">
                                            <div class="f_left half_column">
                                                <label for="cf_name" class="required d_inline_b m_bottom_5">Name</label>
                                                <input required type="text" id="cf_name" name="name" class="full_width r_corners">
                                            </div>
                                            <div class="f_left half_column">
                                                <label for="cf_email" class="d_inline_b m_bottom_5">Telefone</label>
                                                <input type="text" id="cf_email" name="phone" class="full_width r_corners">
                                            </div>
                                        </li>
                                        <li class="m_bottom_15">
                                            <label for="cf_subject" class="required d_inline_b m_bottom_5">Email</label>
                                            <input required type="email" id="cf_subject" name="email" class="full_width r_corners">
                                        </li>
                                        <li class="m_bottom_15">
                                            <label for="cf_message" class="d_inline_b m_bottom_5">Observações</label>
                                            <textarea id="cf_message" name="comments" class="full_width r_corners"></textarea>
                                        </li>
                                        <li>
                                            <button class="button_type_4 bg_light_color_2 r_corners mw_0 tr_all_hover color_dark">ENVIAR</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </section>
                @else
                    <section class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 m_xs_bottom_30">
                                    <h2 class="tt_uppercase color_dark m_bottom_25">NENHUM ITEM ADICIONADO ATÉ O MOMENTO</h2>
                                    <a href="{{route('site.index')}}" class="button_type_1 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Voltar</a>
                                </div>
                            </div>
                        </section>
                @endif
            </div>
        </div>

    </div>

@endsection()