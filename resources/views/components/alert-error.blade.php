@if (Session::has('success'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-4" role="alert">
        <strong class="font-bold">Sucesso!</strong>
        <span class="block sm:inline">{{ Session::get('success') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <i class="fas fa-close cursor-pointer" onclick="closeAlert(this)"></i>
        </span>
    </div>
@endif
