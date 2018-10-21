<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eCom') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('painel/css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">

</head>
<body>
<div class="conteiner">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'eCom') }}
            </a>

            <!-- Botão que esconde a sidebar -->
            <button type="button" id="sidebarCollapse" class="btn btn-link navbar-btn">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Botão do menu responsivo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Opções</a>
                            <hr class="my-0">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sair
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>eCom</h3>
                <strong>eC</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
                        <i class="zmdi zmdi-home zmdi-hc-fw"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#clienteSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                        Clientes
                        <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="clienteSubmenu">
                        <li><a href="#"><i class="zmdi zmdi-account-add"></i>Adicionar</a></li>
                        <li><a href="#"><i class="zmdi zmdi-accounts-list"></i>Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#fornecedorSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="zmdi zmdi-local-store zmdi-hc-fw"></i>
                        Fornecedores
                        <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="fornecedorSubmenu">
                        <li><a href="#"><i class="zmdi zmdi-plus"></i>Adicionar</a></li>
                        <li><a href="#"><i class="zmdi zmdi-accounts-list"></i>Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#estoqueSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="zmdi zmdi-case zmdi-hc-fw"></i>
                        Estoque
                        <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="estoqueSubmenu">
                        <li><a href="#"><i class="zmdi zmdi-receipt"></i>Produtos</a></li>
                        <li><a href="#"><i class="zmdi zmdi-accounts-list"></i>Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-money zmdi-hc-fw"></i>
                        Vendas
                        <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-view-agenda zmdi-hc-fw"></i>
                        Relatórios
                    </a>
                </li>
                <li>
                    <a href="#confSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                        Configurações
                        <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="confSubmenu">
                        <li><a href="#"><i class="zmdi zmdi-account"></i>Usuários</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            @yield('content')
        </div>
    </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('painel/js/painel.js') }}"></script>
</body>
</html>