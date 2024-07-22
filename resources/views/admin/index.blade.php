@extends('adminlte::page')
@section('title', config('admin.title'))
@section('content_header')
    @include('admin.layouts.header')
@stop

@section('content')
    <section id="app" class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body ">

                        <div class="row">
                            @role('admin')
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">

                                            {{ $data['admin'] }}</h3>

                                            <p>Administradores</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-user-lock"></i>
                                        </div>
                                        <a href="{{ route($params['main_route'] . '.user.index') }}"
                                            class="small-box-footer">Ver
                                            Mais <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                    
                                </div>
                                @endrole
                                
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>{{ $data['EncomendasEntregues'] }}</h3>
                                        <p>Entregas Realizadas</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                    <a href="{{ route($params['main_route'] . '.controleacesso.index') }}"
                                        class="small-box-footer">Ver Mais <i class="fas fa-arrow-circle-right">
                                        </i>
                                    </a>
                                </div>
                            </div>
                            <!-- ./col -->

                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{ $data['EncomendasNaoEntregues'] }}</h3>

                                        <p>Qtd. Pendentes Portaria</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <a href="{{ route($params['main_route'] . '.controleacesso.index') }}"
                                        class="small-box-footer">Ver
                                        Mais <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <h3>{{ $totalPessoas }}</h3>

                                        <p>Total de Moradores</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-tag"></i>
                                    </div>
                                    <a href="{{ route($params['main_route'] . '.pessoa.index') }}"
                                        class="small-box-footer">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-secondary">
                                    <div class="inner">
                                        <h3>{{ $data['QuantidadesVisitantes'] }}</h3>

                                        <p>Visitantes no Condomínio</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-clipboard"></i>
                                    </div>
                                    <a href="{{ route($params['main_route'] . '.visitante.index') }}"
                                        class="small-box-footer">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            {{-- Card-Reservas --}}

                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Qtd. Reservas Pendentes</span>
                                    <span class="info-box-number">{{ $data['QuantidadesReservas'] }}</span>
                                    <a href="{{ route($params['main_route'] . '.reserva.index') }}"
                                        class="small-box-footer">Abrir Reservas</a>
                                </div>

                            </div>

                            {{-- Fim Card-Reservas --}}

                        </div>

                        <!-- Main node for this component -->
                        <div class="timeline">
                            <!-- Timeline time label -->
                            <div class="time-label">
                                <span class="bg-gray">21 Julho 2024</span>
                            </div>
                            <div>
                                <!-- Before each timeline item corresponds to one icon on the left scale -->
                                <i class="fab fa-whatsapp bg-green"></i>
                                <!-- Timeline item -->
                                <div class="timeline-item">
                                    <!-- Time -->
                                    <span class="time"><i class="fas fa-clock"></i> 14:00</span>
                                    <!-- Header. Optional -->
                                    <h3 class="timeline-header">
                                        <a href="https://api.whatsapp.com/send?phone=5511996190016&text=Suporte+Portaria"
                                            target="_blank">Suporte</a>
                                        Última atualização
                                    </h3>
                                    <!-- Body -->
                                    <div class="timeline-body">
                                        #Criação card reserva;
                                    </div>
                                    <!-- Placement of additional controls. Optional -->

                                </div>
                            </div>
                            <!-- The last icon means the story is complete -->
                            <div>
                                <i class="fas fa-clock bg-gray"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- inicio footer --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"></h3>
            <footer>
                <span class="time"><i class="fas fa-clock"></i> {{ date('d/m/Y H:i:s') }}</span>
                <div class="float-right d-none d-sm-inline-block">
                    <b>Versão</b> V1.1.G3
                </div>
                <footer class="text-center">
                    &copy; {{ date('Y') }} GIT CONSULTORIA INOVAÇÕES EM SOLUÇÕES DE TI LTDA - Todos os direitos
                    reservados
                </footer>
            </footer>
        </div>
    </div>
    {{-- final footer --}}

@stop
