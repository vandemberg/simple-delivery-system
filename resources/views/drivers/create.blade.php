<x-app-layout>
  <x-page-header
    titleLink="{{ route('drivers')}}"
    title="Motorista"
    subtitle="Cadastro">
  </x-page-header>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
          <x-page-title
            title="Cadastro de motorista"
            backLink="{{ route('drivers') }}"
          ></x-page-title>

          @include('drivers.form')
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
