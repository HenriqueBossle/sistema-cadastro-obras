@extends('layouts.base')
@section('content')
<div class="flex justify-center mb-5 text-white p-5 font-bold border-solid bg-red-500">
<h1 class="text-2xl">Gerenciador de obras</h1>
</div>
<div class="border-solid  max-w-sm mx-auto bg-white max-w-sm mx-auto p-5">
<div class="flex justify-center mb-5 text-black p-3 font-bold text-2xl border-solid bg-gray-400 rounded-xl max-w-sm mx-auto">
    <h1>Olá, tudo bem?</h1>
</div>
<div class=" flex justify-center">
<h3 class="mb-5">Você pode entrar em uma conta já existente ou criar uma nova conta!</h3>
</div>

<div class="flex justify-center gap-4 max-w-sm mx-auto">
<a href="{{ url('login') }}" 
       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Entrar
    </a>

    <a href="{{ url('register') }}" 
       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Criar conta
    </a>
   </div>
</div>
@endsection