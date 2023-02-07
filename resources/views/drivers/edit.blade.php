<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          <a class="underline" href="{{ route('drivers') }}">Motiristas</a> / Cadastro
      </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6">
            <div class="w-full flex flex-row justify-between">
              <h2>
                <a href="{{ route('drivers') }}"><i class="fas fa-arrow-left mr-2"></i></a>
                Edição de motoristas
              </h2>
            </div>

            @include('drivers.form')
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
