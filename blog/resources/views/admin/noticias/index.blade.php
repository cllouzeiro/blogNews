@extends('admin.template.base_layout')

@push('titulo')
    Noticias
@endpush

@push('js')
    <script>
    </script>
@endpush

@section('conteudo')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                    <h4 class="card-title">Categorias</h4>
                </div>
                <div class="card-body">
                    <button type="button" class="btn col-12 btn-primary" data-toggle="modal" data-target="#modalCategorias">
                        Adicionar Categoria
                    </button>
                    <table class="table">
                        <tbody>
                        @foreach($menu as $categoria)
                            <tr>
                                <td>{{$categoria['descricao']}}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                    <h4 class="card-title">Lista de Noticias</h4>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.noticias.form')}}" class="btn btn-primary pull-right">Adicionar Noticias</a>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCategorias" tabindex="-1" role="dialog" aria-labelledby="modalCategoriasLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.usuarios.adicionar-categoria')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
    {{--                        <label for="exampleInputEmail1">Nome da Categoria</label>--}}
                            <input type="text" name="dados[descricao]" class="form-control" id="nome-categoria" aria-describedby="nome-categoria" placeholder="Informe o nome da categoria">
    {{--                        <small id="nome-categoria" class="form-text text-muted">Nome da categoria</small>--}}
                        </div>

                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="dados[submenu]" id="inlineRadio1" value="0" checked>
                                    Menu Principal
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="dados[submenu]" id="inlineRadio2" value="1">
                                Sub-menu
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar Categoria</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
