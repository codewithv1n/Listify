<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>    
  <body>
      
 <div class="min-h-screen bg-gray-200 flex items-center justify-center"> 
  <div class="bg-white rounded-lg border-black p-12 w-95 ">
    <label for="login" class="mb-7 block text-center font-bold text-3xl">Login</label>
    <input type="text" class="rounded-sm border-black p-2"
    placeholder="Enter your username">
  </div>
 </div>

 </body>
</html>
