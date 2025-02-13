@extends('layouts.base')
@section('content')
<div class="flex justify-center mb-5 text-white p-5 font-bold border-solid bg-red-500">
<h1 class="text-2xl">Cadastro de obra</h1></div>
<a href="{{ url('constructions') }}" class="bg-red-500 hover:bg-gray-200 text-black font-bold m-5 py-2 px-4 rounded">Ver obras</a>
<form class="max-w-sm mx-auto p-5 m-5 border-2 border-solid bg-gray-500 rounded-xl" action="{{url('constructions')}}" method="POST">
@csrf
<h1 class="mb-5 text-white p-5 font-bold border-solid bg-red-500 rounded-xl">Preencha os campos abaixo para cadastrar a nova obra</h1>
   <div class="mb-5">
      <label for="builder_name"></label>
      <input type="text" name="builder_name" id="builder_name" placeholder="Nome do construtor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="builder_phone"></label>
      <input type="text" name="builder_phone" id="builder_phone" placeholder="Telefone do construtor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="sitemanager_name"></label>
      <input type="text" name="sitemanager_name" id="sitemanager_name" placeholder="Nome do responsável" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="sitemanager_phone"></label>
      <input type="text" name="sitemanager_phone" id="sitemanager_phone" placeholder="Telefone do responsável" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="address"></label>
      <input type="text" name="address" id="address" placeholder="Endereço da obra" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="type"></label>
      <input type="text" name="type" id="type" placeholder="Tipo de obra" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="status"></label>
      <input type="text" name="status" id="status" placeholder="Status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="volume"></label>
      <input type="int" name="volume" id="volume" placeholder="Volume" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <label for="notes"></label>
      <input type="text" name="notes" id="notes" placeholder="Observações" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
   </div>
   <div class="mb-5">
      <button action="{{url('constructions')}}" type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Salvar nova obra</button>
   </div>
   
   
</form>

@endsection