<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
<div class="min-h-screen bg-gray-200 items-center justify-center">

        <div class="bg-white rounded-lg p-12 w-150 block mx-auto">
            <button class="rounded-sm p-7 px-10 cursor-pointer bg-gray-400 block mx-auto"
            type="submit" id="openModalBtn">Add New List</button>
        </div>
  

  <div id="formModal" class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">

    <form action="{{ route('list.post') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-3xl font-bold mt-2 mb-4 ">Notes</label>
            <input type="text" name="list" id="name" class="border rounded w-full py-2 px-3 text-gray-700" 
            placeholder="Write whats on your mind" required>
        </div>

        <div class="flex justify-end gap-2 mt-8">
            <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400"
             id="closeModalBtn" type="button">Cancel</button>
            <button class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700"
             type="submit">Submit</button>
        </div>
    </form>

 </div>

      
</div>
</body>
</html>