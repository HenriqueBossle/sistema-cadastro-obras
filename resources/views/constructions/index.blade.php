@extends('layouts.base')
@section('content')
<div class="flex justify-center mb-5 text-white p-5 font-bold border-solid bg-red-500">
<h1 class="text-2xl">Obras</h1>
</div>
<div class="flex">
<a href="{{ url('constructions/create') }}" class="bg-red-500 hover:bg-gray-200 text-black font-bold ml-5 py-2 px-4 w-64 rounded">Cadastrar nova obra</a>
<a href="{{ url('dashboard') }}" class="bg-red-500 hover:bg-gray-200 text-black font-bold ml-5 mr-10 py-2 px-4 w-64 rounded">Tela inicial</a>

<form action="/constructions" method="get" class="ml-6 flex justify-end">

    <input type="text" name="search" id="search" placeholder="Pesquisar" class="col-md-1 bg-gray-50 border border-gray-300 ml-10 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2 w-64 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
    <label for="campo" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"></label>
  <select id="campo" name="campo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="builder_name">Construtor</option>
    <option value="sitemanager_name">Responsável</option>
    <option value="address">Endereço</option>
    <option value="status">Status</option>
    <option value="date">Data</option>
  </select>
    <button type="submit" class="bg-red-500 hover:bg-gray-200 text-black font-bold py-2 px-2 w-64 rounded">Buscar</button>

</form></div>




<div class="max-w-7xl mx-auto px-4 m-5">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
@foreach ($constructions as $entity)

<div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-gray-500">
<div class="mb-4">
<ul role="list" class="bg-white rounded-lg p-4 divide-y divide-gray-200 dark:divide-gray-700">

<div class="space-y-4">

<h3>Construtor: <strong>{{$entity->builder_name}}</strong></h3>
<h3>Telefone do construtor: <strong>{{$entity->builder_phone}}</strong></h3>
<h3>Responsável: <strong>{{$entity->sitemanager_name}}</strong></h3>
<h3>Telefone do responsável: <strong>{{$entity->sitemanager_phone}}</strong></h3>
<h3>Endereço: <strong>{{$entity->address}}</strong></h3>
<h3>Tipo: <strong>{{$entity->type}}</strong></h3>
<h3>Status: <strong>{{$entity->status}}</strong></h3>
<h3>Volume: <strong>{{$entity->volume}}</strong></h3>
<h3>Data: <strong>{{date('d/m/Y', strtotime($entity->date))}}</strong></h3>
<h3>Observações: <strong>{{$entity->notes}}</strong></h3>
<div class="flex items-center gap-4 mt-5">
    <a href="{{ url('constructions/'.$entity->id.'/edit') }}" 
       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Editar
    </a>
    <form action="{{ url('constructions/'.$entity->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Deletar
        </button>
    </form> 
    <a  href="{{ route('constructions.pdf', $entity->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold  p-2 rounded">
        Gerar PDF
    </a>
</div>

</ul>
</div>
</div>


@endforeach
</div>
</div>

@endsection