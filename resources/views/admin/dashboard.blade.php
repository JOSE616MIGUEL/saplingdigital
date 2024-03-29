@extends('layouts.admin.admin')

@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Panel de control</h3>
            <p class="text-subtitle text-muted"></p>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Projecto</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>0</p>
                                    </div>
                                </div>
                                <!--
                                    <div class="chart-wrapper">
                                        <canvas id="canvas1" style="height:100px !important"></canvas>
                                    </div>
                                    -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Cliente</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>0</p>
                                    </div>
                                </div>
                                <!--
                                    <div class="chart-wrapper">
                                        <canvas id="canvas2" style="height:100px !important"></canvas>
                                    </div>
                                    -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Colaborador</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>0</p>
                                    </div>
                                </div>
                                <!--
                                     <div class="chart-wrapper">
                                        <canvas id="canvas3" style="height:100px !important"></canvas>
                                    </div>
                                    -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Usuario</h3>
                                    <div class="card-right d-flex align-items-center">
                                        @forelse ($user as $item)
                                        <p>{{ $loop->index + 1 }}</p>
                                        @empty
                                            <!--
                                            <tr>
                                                <div>
                                                    <h1>No hay productos</h1>
                                                </div>
                                            </tr>
                                              -->
                                        @endforelse
                                    </div>
                                </div>
                                <!--
                                    <div class="chart-wrapper">
                                        <canvas id="canvas4" style="height:100px !important"></canvas>
                                    </div>
                                    -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-11">
                    <!--
                        <div class="card">
                            <div class="card-header">
                                <h3 class='card-heading p-1 pl-3'>Sales</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="pl-3">
                                            <h1 class='mt-5'>$21,102</h1>
                                            <p class='text-xs'><span class="text-green"><i data-feather="bar-chart"
                                                        width="15"></i> +19%</span> than last month</p>
                                            <div class="legends">
                                                <div class="legend d-flex flex-row align-items-center">
                                                    <div class='w-3 h-3 rounded-full bg-info me-2'></div><span
                                                        class='text-xs'>Last Month</span>
                                                </div>
                                                <div class="legend d-flex flex-row align-items-center">
                                                    <div class='w-3 h-3 rounded-full bg-blue me-2'></div><span
                                                        class='text-xs'>Current Month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <canvas id="bar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Usuarios registrados</h4>
                            <div class="d-flex ">
                                <a class="btn btn-success">Crear usuario</a>
                            </div>
                        </div>
                        @if ($mensaje = Session::get('success'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                {{ $mensaje }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-body px-6 pb-6">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Imagen</th>
                                            <th>Contraseña en hash</th>
                                            <th>Rol</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($user as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    @if ($item->image)
                                                        <img src="{{ asset($item->image) }}" alt="" width="100px"
                                                            height="100px" class="rounded-circle">
                                                    @else
                                                        <h5>No hay imagen</h5>
                                                    @endif
                                                </td>
                                                <td>{{ $item->password }}</td>
                                                <td>
                                                    <span class="badge bg-success">{{ $item->role_as == '1' ? 'Administrador' : 'Cliente' }}</span>
                                                </td>
                                            </tr>
                                        @empty
                                            <!--
                                            <tr>
                                                <div>
                                                    <h1>No hay productos</h1>
                                                </div>
                                            </tr>
                                              -->
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                       <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header">
                                <h4>Your Earnings</h4>
                            </div>
                            <div class="card-body">
                                <div id="radialBars"></div>
                                <div class="text-center mb-5">
                                    <h6>From last month</h6>
                                    <h1 class='text-green'>+$2,134</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card widget-todo">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h4 class="card-title d-flex">
                                    <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progress
                                </h4>

                            </div>
                            <div class="card-body px-0 py-1">
                                <table class='table table-borderless'>
                                    <tr>
                                        <td class='col-3'>UI Design</td>
                                        <td class='col-6'>
                                            <div class="progress progress-info">
                                                <div class="progress-bar" role="progressbar" style="width: 60%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>60%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>VueJS</td>
                                        <td class='col-6'>
                                            <div class="progress progress-success">
                                                <div class="progress-bar" role="progressbar" style="width: 35%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>30%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>Laravel</td>
                                        <td class='col-6'>
                                            <div class="progress progress-danger">
                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>50%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>ReactJS</td>
                                        <td class='col-6'>
                                            <div class="progress progress-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 80%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>80%</td>
                                    </tr>
                                    <tr>
                                        <td class='col-3'>Go</td>
                                        <td class='col-6'>
                                            <div class="progress progress-secondary">
                                                <div class="progress-bar" role="progressbar" style="width: 65%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class='col-3 text-center'>65%</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    -->
            </div>
        </section>
    </div>
@endsection
