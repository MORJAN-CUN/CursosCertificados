<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        {{-- <p>
        <h1 class="text-center">{{__('bienvenido')}}</h1>
        </p> --}}
        {{-- <p>
          {{__('Parrafo')}}
        </p> --}}
        <p>
          Bienvenido/a al aplicativo de generación de certificaciones de Desarrollo Profesional y
          Egresados de la CUN. Esta herramienta te permite gestionar de manera eficiente los
          certificados de asistencia a los eventos organizados por nuestra área.
        </p>
        <p>
          Con este aplicativo, podrás cargar y administrar la lista de participantes de las
          actividades, así como editar y ver las certificaciones generadas. Además, los participantes
          tendrán acceso para ingresar, descargar sus certificados y consultar su histórico.
        </p>
        <p>
          También hemos incluido una función de validación externa, que permite a terceros verificar
          la legalidad de los certificados en caso de ser necesario;
          Además, podrás generar reportes de los certificados generados para obtener
          información detallada sobre las actividades realizadas.
        </p>
        <p>
          Estamos comprometidos en brindarte una experiencia sencilla y eficiente en la gestión de
          certificaciones. ¡Explora todas las funcionalidades de esta aplicación y no dudes en
          contactarnos si tienes alguna pregunta o necesitas asistencia!
        </p>
        <p>
          ¡Gracias por ser parte de Desarrollo Profesional y Egresados de la CUN!
        </p>
        <p>
          {{__('Enlace Credenciales')}} <a href="{{route('loads.index')}}">Aquí.</a>
        </p>
        <p>
          Para ver los registros de los certificados descargados da clic <a href="{{route('downloads.index')}}">Aquí.</a>
        </p>
        {{-- <p>
          Para generar reportes da clci <a href="#">Aquí.</a>
        </p> --}}
      </div>
    </div>
  </div>
</x-app-layout>
