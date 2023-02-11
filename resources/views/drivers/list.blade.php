<x-app-layout>
  <x-page-header title="Motorista"></x-page-header>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
              <x-page-title title="Lista de motoristas">
                <a href="{{ route('drivers.create') }}">
                  <x-primary-button>Novo motorista</x-primary-button>
                </a>
              </x-page-title>

              <x-alert-success></x-alert-success>

              @if (sizeof($drivers))
                <table class="mt-6 w-full text-left text-sm">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($drivers as $driver)
                      <tr>
                        <td>{{$driver->id}}</td>
                        <td>{{$driver->name}}</td>
                        <td>{{$driver->phone}}</td>
                        <td>
                          <form method="post" action="{{ route('drivers.destroy', $driver->id) }}">
                            @csrf
                            @method("DELETE")
                            <x-danger-button
                              onclick="return confirm('Você tem certeza?')"
                              type="submit">
                              deletar
                            </x-danger-button>

                            <a href="{{ route('drivers.edit', $driver->id) }}">
                              <x-secondary-button class="ml-2">
                                editar
                              </x-secondary-button>
                            </a>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @else
                <p> Nenhum motorista cadastrado </p>
              @endif
            </div>
          </div>
      </div>
  </div>
</x-app-layout>
