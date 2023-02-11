<x-app-layout>
    <x-page-header
      titleLink="{{ route('customers')}}"
      title="Cliente"
      subtitle="Editar">
    </x-page-header>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6">
            <div class="w-full flex flex-row justify-between">
              <h2>
                <a href="{{ route('customers') }}">
                    <i class="fas fa-arrow-left mr-2"></i>
                </a>

                Edição de cliente
              </h2>
            </div>

            @include('customers.form')
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
