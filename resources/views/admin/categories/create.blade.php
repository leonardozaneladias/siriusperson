@extends('admin.layout.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Categorias</h1>
        <p class="mb-4"></p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('admin.categories')}}" class="btn btn-primary"><-</a> VOLTAR</h6>
            </div>
            <div class="card-body">
                <form method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="form-control-label">Nome</label>
                        <input type="text" class="form-control" required name="name">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary btn-block">CADASTRAR</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
