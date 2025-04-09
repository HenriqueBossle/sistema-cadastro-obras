@extends('layouts.base')
@section('content')
<div class="flex justify-center mb-5 text-white p-5 font-bold border-solid bg-red-500">
<h1 class="text-2xl">Gerenciador de obras</h1>
</div>
             <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="bg-red-500 hover:bg-gray-200 text-black font-bold mb-5 ml-5  py-2 px-4 rounded" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                            </button>
                    </form>
<div class="border-solid  max-w-sm mx-auto bg-white max-w-sm mx-auto p-5">
<div class="flex justify-center mb-5 text-black p-3 font-bold text-2xl border-solid bg-gray-400 rounded-xl max-w-sm mx-auto">
Seja bem vindo
</div>
<div class=" flex justify-center">
<h3 class="mb-5">Você pode visualizar suas obras ou cadastrar uma nova obra!</h3>
</div>

<div class="flex justify-center gap-4 max-w-sm mx-auto">
<a href="{{ url('constructions') }}" 
       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Visualizar obras
    </a>

    <a href="{{ url('constructions/create') }}" 
       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Cadastrar nova obra
    </a></div>
</div>


@endsection


