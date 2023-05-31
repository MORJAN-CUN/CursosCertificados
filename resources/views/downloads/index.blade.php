<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Loads list') }}
    </h2>
  </x-slot>

  <div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="container">
          <div class="row py-0">
            <div class="col-md-12 mx-auto py-4">
<<<<<<< HEAD
              <div class="card bg-light mb-2">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-8 py-2">
                      <strong>{{ __('Records in database') }}</strong>
                    </div>
                    <div class="col-md-4 flex-row-reverse">
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center">
                            <form action="{{ route('load') }}" method="POST"
                                enctype="multipart/form-data" novalidate>
=======
                <div class="card bg-light mb-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 py-2">
                              <strong>{{__('Records in database')}}</strong>
                            </div>
                            <div class="col-md-4 flex-row-reverse">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 mx-auto text-center">
                                <form action="{{route('load')}}" method="POST" enctype="multipart/form-data" novalidate>
>>>>>>> Andres
                                @csrf
                                <div class="row">
                                    <x-file></x-file>
                                    <div class="col-md-4">
<<<<<<< HEAD
                                        <button class="sombra btn btn-success ml-4" width="50%"
                                            type="submit">{{ __('Load certificate records') }}</button>
                                    </div>
                                </div>
                                {{-- <a class="sombra btn btn-warning ml-4" width="50%" href="#">{{__('Export User Data')}}</a> --}}
                            </form>
                        </div>
                    </div>
                </div>
              </div>
              <div class="card bg-light ">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      {{ __('Records in database') . ': ' . count($loadscount) }}
                    </div>
                    <div class="col-md-6">
                      <form action="" method="get">
                        <div class="form-row flex-row-reverse">
                          <div class="col-md-4 my-1">
                            <input type="submit" class="sombra btn btn-primary" value="Buscar">
                          </div>
                          <div class="col-auto my-1">
                            <input type="text" class="form-control" name="texto" id="texto" value="{{ $texto }}">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="table-responsive">
                    @if ($loads->isEmpty())
                      <div class="col-md-6 mx-auto mt-3 text-center">
                        <strong>{{ __('No data to show') }}</strong>
                      </div>
                    @else
                      <table class="table align-middle table-striped table-hover table-sm mt-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre estudiante</th>
                                {{-- <th>tipo_participante</th> --}}
                                <th>Correo electrónico</th>
                                {{-- <th>tipo_documento</th> --}}
                                <th>Número documento</th>
                                <th>Nombre producto</th>
                                {{-- <th>fecha_realización</th> --}}
                                {{-- <th>duración</th> --}}
                                {{-- <th>modalidad</th> --}}
                                {{-- <th>ciudad_expedición</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($loads as $load)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $load->nombre_estudiante }}</td>
                                    {{-- <td>{{$load->tipo_participante}}</td> --}}
                                    <td>{{ $load->email }}</td>
                                    {{-- <td>{{$load->tipo_documento}}</td> --}}
                                    <td>{{ $load->numero_documento }}</td>
                                    <td>{{ $load->nombre_producto }}</td>
                                    {{-- <td>{{$load->fecha_realización}}</td> --}}
                                    {{-- <td>{{$load->duración}}</td> --}}
                                    {{-- <td>{{$load->modalidad}}</td> --}}
                                    {{-- <td>{{$load->ciudad_expedición}}</td> --}}
                                    <td>
                                        <div class="btn-group" role="group"
                                            aria-label="Basic example">
                                            <a class="sombra btn btn-info"
                                                href="#showModal{{ $load->id }}"
                                                data-bs-toggle="modal"><i
                                                    class="bi bi-eye"></i></a>
                                            <a class="sombra btn btn-warning"
                                                href="#editModal{{ $load->id }}"
                                                data-bs-toggle="modal"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a class="sombra btn btn-danger"
                                                href="#deleteModal{{ $load->id }}"
                                                data-bs-toggle="modal"><i
                                                    class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i += +1;
                                @endphp
                                <!-- showModal -->
                                <div class="modal fade" id="showModal{{ $load->id }}"
                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h1 class="modal-title fs-5"
                                                    id="exampleModalLabel">
                                                    <strong>{{ Str::title($load->nombre_estudiante) }}</strong>
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <strong>Tipo de participante:</strong>
                                                    </div>
                                                    <div class="col-md-7">
                                                        {{ $load->tipo_participante }}</div>
                                                    <div class="col-md-5">
                                                        <strong>Correo electrónico:</strong>
                                                    </div>
                                                    <div class="col-md-7">{{ $load->email }}
                                                    </div>
                                                    <div class="col-md-5">
                                                        <strong>Número de documento:</strong>
                                                    </div>
                                                    <div class="col-md-7">
                                                        {{ $load->tipo_documento }}
                                                        {{ $load->numero_documento }}</div>
                                                    <div class="col-md-5">
                                                        <strong>Curso realizado:</strong>
                                                    </div>
                                                    <div class="col-md-7">
                                                        {{ $load->nombre_producto }}</div>
                                                    <div class="col-md-5">
                                                        <strong>Usuario:</strong>
                                                    </div>
                                                    <div class="col-md-7">
                                                        {{ $load->fecha_realización }}</div>
                                                    <div class="col-md-5">
                                                        <strong>Duración:</strong>
                                                    </div>
                                                    <div class="col-md-7">{{ $load->duración }}
                                                    </div>
                                                    <div class="col-md-5">
                                                        <strong>Modalidad:</strong>
                                                    </div>
                                                    <div class="col-md-7">
                                                        {{ $load->modalidad }}</div>
                                                    <div class="col-md-5">
                                                        <strong>ciudad expedición:</strong>
                                                    </div>
                                                    <div class="col-md-7">
                                                        {{ $load->ciudad_expedición }}</div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                    class="sombra btn btn-secondary"
                                                    data-bs-dismiss="modal"><i
                                                        class="bi bi-x-circle">
                                                        {{ __('Close') }}</i></button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- editModal -->
                                <div class="modal fade" id="editModal{{ $load->id }}"
                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <form
                                                action="{{ route('loads.update', $load->id) }}"
                                                method="post" class="requires-validation"
                                                novalidate>
                                                @method('put')
                                                @csrf
                                                <div class="modal-header text-center">
                                                    <h1 class="modal-title fs-5"
                                                        id="exampleModalLabel">
                                                        <strong>{{ Str::title($load->nombre_estudiante) }}</strong>
                                                    </h1>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"><i
                                                            class="bi bi-x-circle-fill"style="width:150%;"></i></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <strong>Tipo de
                                                                participante:</strong>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text"
                                                                class="form-control"
                                                                name="tipo_participante"
                                                                id="tipo_participante"
                                                                value="{{ old('tipo_participante', $load->tipo_participante) }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <strong>Correo electrónico:</strong>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text"
                                                                class="form-control"
                                                                name="email" id="email"
                                                                value="{{ old('email', $load->email) }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <strong>Número de
                                                                documento:</strong>
                                                        </div>
                                                        <div class="col-md-7">
                                                            @php
                                                                $ccSelect = $load->tipo_documento == 'CC' ? 'selected' : '';
                                                                $tiSelect = $load->tipo_documento == 'TI' ? 'selected' : '';
                                                                $ceSelect = $load->tipo_documento == 'CE' ? 'selected' : '';
                                                                $deSelect = $load->tipo_documento == 'DE' ? 'selected' : '';
                                                                $paSelect = $load->tipo_documento == 'PA' ? 'selected' : '';
                                                                $rcSelect = $load->tipo_documento == 'RC' ? 'selected' : '';
                                                            @endphp
                                                            <select
                                                                class="form-control select-buscar"
                                                                id="tipo_documento"
                                                                name="tipo_documento" required>
                                                                <option value="" hidden
                                                                    selected>Selecciona tipo de
                                                                    documento</option>
                                                                <option value="CC"
                                                                    {{ $ccSelect }}>Cédula
                                                                    de ciudadanía</option>
                                                                <option value="TI"
                                                                    {{ $tiSelect }}>Tarjeta
                                                                    de identidad</option>
                                                                <option value="CE"
                                                                    {{ $ceSelect }}>Cédula
                                                                    de extranjería</option>
                                                                <option value="DE"
                                                                    {{ $deSelect }}>
                                                                    Documento de identidad
                                                                    extranjera</option>
                                                                <option value="PA"
                                                                    {{ $paSelect }}>
                                                                    Pasaporte</option>
                                                                <option value="RC"
                                                                    {{ $rcSelect }}>
                                                                    Registro civil</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="text"
                                                                class="form-control"
                                                                name="numero_documento"
                                                                id="numero_documento"
                                                                value="{{ old('numero_documento', $load->numero_documento) }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <strong>Curso realizado:</strong>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text"
                                                                class="form-control"
                                                                name="nombre_producto"
                                                                id="nombre_producto"
                                                                value="{{ old('nombre_producto', $load->nombre_producto) }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <strong>fecha realización:</strong>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="date"
                                                                class="form-control"
                                                                name="fecha_realización"
                                                                id="fecha_realización"
                                                                value="{{ old('fecha_realización', $load->fecha_realización) }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Duración:</strong>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Modalidad:</strong>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text"
                                                                class="form-control"
                                                                name="duración" id="duración"
                                                                value="{{ old('duración', $load->duración) }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text"
                                                                class="form-control"
                                                                name="modalidad"
                                                                id="modalidad"
                                                                value="{{ old('modalidad', $load->modalidad) }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <strong>ciudad expedición:</strong>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text"
                                                                class="form-control"
                                                                name="ciudad_expedición"
                                                                id="ciudad_expedición"
                                                                value="{{ old('ciudad_expedición', $load->ciudad_expedición) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        class="sombra btn btn-secondary"
                                                        data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                                    <button type="submit"
                                                        class="sombra btn btn-success">{{ __('Save changes') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal delete-->
                                <div class="modal fade" id="deleteModal{{ $load->id }}"
                                    tabindex="-1" aria-labelledby="deleteModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content sombra bg-white">
                                            <div class="modal-header sombra bn-100">
                                                <h1 class="modal-title fs-5 mx-auto"
                                                    id="exampleModalLabel">
                                                    {{ Str::upper($load->nombre_estudiante) }}
                                                </h1>
                                                <button type="button"
                                                    class="btn-close sombra"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body sombra">
                                                esta segura de eliminar el registro de:
                                                <strong>{{ Str::upper($load->nombre_estudiante) }}</strong>
                                            </div>
                                            <div class="modal-footer bn-100">
                                                <button type="button"
                                                    class=" sombra btn btn-warning"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form
                                                    action="{{ route('loads.destroy', $load) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class=" sombra btn btn-danger">
                                                        Eliminar registro
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                      </table>
                    @endif
                  </div>
                </div>
                <div class="card-footer">
                  {{ $loads->links() }}
                </div>
              </div>
=======
                                        <button class="sombra btn btn-success ml-4" width="50%" type="submit">{{__('Load certificate records')}}</button>
                                    </div>
                                </div>
                                {{-- <a class="sombra btn btn-warning ml-4" width="50%" href="#">{{__('Export User Data')}}</a> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-light ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">{{__('Records in database') .": ". count($loadscount)}}</div>
                            <div class="col-md-6">
                            <form action="" method="get">
                                <div class="form-row flex-row-reverse">
                                <div class="col-md-4 my-1">
                                    <input type="submit" class="sombra btn btn-primary" value="Buscar">
                                </div>
                                <div class="col-auto my-1">
                                    <input type="text" class="form-control" name="texto" id="texto" value="{{$texto}}">
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            @if($loads->isEmpty())
                                <div class="col-md-6 mx-auto mt-3 text-center">
                                    <strong>{{__('No data to show')}}</strong>
                                </div>
                            @else
                                <table class="table align-middle table-striped table-hover table-sm mt-3">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nombre estudiante</th>
                                            {{-- <th>tipo_participante</th> --}}
                                            <th>Correo electrónico</th>
                                            {{-- <th>tipo_documento</th> --}}
                                            <th>Número documento</th>
                                            <th>Nombre producto</th>
                                            {{-- <th>fecha_realización</th> --}}
                                            {{-- <th>duración</th> --}}
                                            {{-- <th>modalidad</th> --}}
                                            {{-- <th>ciudad_expedición</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i= 1;
                                        @endphp
                                        @foreach ($loads as $load)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$load->nombre_estudiante}}</td>
                                                {{-- <td>{{$load->tipo_participante}}</td> --}}
                                                <td>{{$load->email}}</td>
                                                {{-- <td>{{$load->tipo_documento}}</td> --}}
                                                <td>{{$load->numero_documento}}</td>
                                                <td>{{$load->nombre_producto}}</td>
                                                {{-- <td>{{$load->fecha_realización}}</td> --}}
                                                {{-- <td>{{$load->duración}}</td> --}}
                                                {{-- <td>{{$load->modalidad}}</td> --}}
                                                {{-- <td>{{$load->ciudad_expedición}}</td> --}}
                                                <td>
                                                  <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="sombra btn btn-info" href="#showModal{{$load->id}}" data-bs-toggle="modal"><i class="bi bi-eye"></i></a>
                                                    <!-- <a class="sombra btn btn-warning" href="#editModal{{$load->id}}" data-bs-toggle="modal"><i class="bi bi-pencil"></i></a> -->
                                                    <!-- <a class="sombra btn btn-danger" href="#deleteModal{{$load->id}}" data-bs-toggle="modal"><i class="bi bi-trash"></i></a> -->
                                                  </div>
                                                </td>
                                            </tr>
                                        @php
                                            $i += +1;
                                        @endphp
                                            <!-- showModal -->
                                            <div class="modal fade" id="showModal{{$load->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                  <div class="modal-header text-center">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>{{Str::title($load->nombre_estudiante)}}</strong></h1>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div class="row">
                                                      <div class="col-md-5">
                                                        <strong>Tipo de participante:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->tipo_participante}}</div>
                                                      <div class="col-md-5">
                                                        <strong>Correo electrónico:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->email}}</div>
                                                      <div class="col-md-5">
                                                        <strong>Número de documento:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->tipo_documento}} {{$load->numero_documento}}</div>
                                                      <div class="col-md-5">
                                                        <strong>Curso realizado:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->nombre_producto}}</div>
                                                      <div class="col-md-5">
                                                        <strong>Usuario:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->fecha_realización}}</div>
                                                      <div class="col-md-5">
                                                        <strong>Duración:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->duración}}</div>
                                                      <div class="col-md-5">
                                                        <strong>Modalidad:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->modalidad}}</div>
                                                      <div class="col-md-5">
                                                        <strong>ciudad expedición:</strong>
                                                      </div>
                                                      <div class="col-md-7">{{$load->ciudad_expedición}}</div>
                                                    </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="sombra btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"> {{__('Close')}}</i></button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- editModal -->
                                            <div class="modal fade" id="editModal{{$load->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                  <form action="{{route('loads.update', $load->id)}}" method="post" class="requires-validation" novalidate>
                                                  @method('put')
                                                  @csrf
                                                  <div class="modal-header text-center">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>{{Str::title($load->nombre_estudiante)}}</strong></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-circle-fill"style="width:150%;"></i></button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <strong>Tipo de participante:</strong>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <input type="text" class="form-control" name="tipo_participante" id="tipo_participante" value="{{ old('tipo_participante', $load->tipo_participante) }}">
                                                      </div>
                                                      <div class="col-md-12">
                                                        <strong>Correo electrónico:</strong>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $load->email) }}">
                                                      </div>
                                                      <div class="col-md-12">
                                                        <strong>Número de documento:</strong>
                                                      </div>
                                                      <div class="col-md-7">
                                                        @php
                                                        $ccSelect = $load->tipo_documento=="CC" ? 'selected' : '';
                                                        $tiSelect = $load->tipo_documento=="TI" ? 'selected' : '';
                                                        $ceSelect = $load->tipo_documento=="CE" ? 'selected' : '';
                                                        $deSelect = $load->tipo_documento=="DE" ? 'selected' : '';
                                                        $paSelect = $load->tipo_documento=="PA" ? 'selected' : '';
                                                        $rcSelect = $load->tipo_documento=="RC" ? 'selected' : '';
                                                        @endphp
                                                        <select class="form-control select-buscar" id="tipo_documento" name="tipo_documento" required>
                                                          <option value="" hidden selected>Selecciona tipo de documento</option>
                                                          <option value="CC" {{$ccSelect}}>Cédula de ciudadanía</option>
                                                          <option value="TI" {{$tiSelect}}>Tarjeta de identidad</option>
                                                          <option value="CE" {{$ceSelect}}>Cédula de extranjería</option>
                                                          <option value="DE" {{$deSelect}}>Documento de identidad extranjera</option>
                                                          <option value="PA" {{$paSelect}}>Pasaporte</option>
                                                          <option value="RC" {{$rcSelect}}>Registro civil</option>
                                                        </select>
                                                      </div>
                                                      <div class="col-md-5">
                                                        <input type="text" class="form-control" name="numero_documento" id="numero_documento" value="{{ old('numero_documento', $load->numero_documento) }}">
                                                      </div>
                                                      <div class="col-md-12">
                                                        <strong>Curso realizado:</strong>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" value="{{ old('nombre_producto', $load->nombre_producto) }}">
                                                      </div>
                                                      <div class="col-md-12">
                                                        <strong>fecha realización:</strong>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <input type="date" class="form-control" name="fecha_realización" id="fecha_realización" value="{{ old('fecha_realización', $load->fecha_realización) }}">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <strong>Duración:</strong>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <strong>Modalidad:</strong>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <input type="text" class="form-control" name="duración" id="duración" value="{{ old('duración', $load->duración) }}">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <input type="text" class="form-control" name="modalidad" id="modalidad" value="{{ old('modalidad', $load->modalidad) }}">
                                                      </div>
                                                      <div class="col-md-12">
                                                        <strong>ciudad expedición:</strong>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <input type="text" class="form-control" name="ciudad_expedición" id="ciudad_expedición" value="{{ old('ciudad_expedición', $load->ciudad_expedición) }}">
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="sombra btn btn-secondary" data-bs-dismiss="modal">{{__('Cancel')}}</button>
                                                    <button type="submit" class="sombra btn btn-success">{{__('Save changes')}}</button>
                                                  </div>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Modal delete-->
                                            <div class="modal fade" id="deleteModal{{$load->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content sombra bg-white">
                                                  <div class="modal-header sombra bn-100">
                                                    <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">{{ Str::upper($load->nombre_estudiante)}}</h1>
                                                    <button type="button" class="btn-close sombra" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body sombra">
                                                    esta segura de eliminar el registro de: <strong>{{ Str::upper($load->nombre_estudiante)}}</strong>
                                                  </div>
                                                  <div class="modal-footer bn-100">
                                                    <button type="button" class=" sombra btn btn-warning" data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ route('loads.destroy', $load) }}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit" class=" sombra btn btn-danger">
                                                        Eliminar registro
                                                      </button>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        {{$loads->links()}}
                    </div>
                </div>
>>>>>>> Andres
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
