<x-students-layout>

  <div class="container">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
          <div class="max-w-6xl mx-auto sm:px-1 lg:px-1">
            <div class="flex justify-center titulo-welcome">
              Certificados Cursos de Extensión
            </div>
            <div class="flex justify-center titulo-welcome">
              Validacion de certificado.
            </div>
            @if($certifiedValidate->isEmpty())
              <div class="justify-center" style="font-size:18px;">
                Los datos suministrados pro medio del código QR no corresponden a ningun registro
                dentro de nuestra base de datos, lo que quere decir es que el certificado fue 
                <b>ADULTERADO</b>, por favor comunicarse con el area encargada.
              </div>
            @else
              <div class="justify-center" style="font-size:18px;">
                Los datos suministrados pro medio del código QR si corresponden a un registro
                dentro de nuestra base de datos, lo que quere decir es que el certificado es 
                <strong>AUTENTICO</strong> y generado por nuestra plataforma {{ config('app.name', 'Cursos Certificados') }}.
              </div>
              {{-- @foreach ($certifiedValidate as $item)
                {{$item->email}}
              @endforeach --}}
            @endif
            {{-- <div class="flex justify-center sm:justify-center sm:pt-0">
              <img class="sombra-inter-negro" src="{{ asset('images/logo-welcome.png') }}" alt="logo-cun" width="350">
            </div> --}}
            {{-- <div class="d-flex justify-content-center">
              <form method="get" action="{{route('consult.show',$i=0)}}">
                <input type="text" class="form-control text-buscar" placeholder="Número de documento" name="documento" id="documento" required autofocus>
                <input type="submit" class="sombra btn btn-secondary btn-buscar" value="{{__('Check')}}">
              </form>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

</x-students-layout>
