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
  <div class="bg-white rounded-lg p-12 w-95 ">
    <label for="login" class="mb-7 block text-center font-bold text-3xl">Login</label>

   <form action="{{route('login.post')}}" method="POST">
    @csrf
     <label for="username" class="mb-4 block font-medium">Username</label>
    <input type="text" name="username" class="rounded-sm border-black p-2 px-8 mb-4"
    placeholder="Enter your username">

    <label for="password" class="mb-3 block font-medium">Password</label>
    <input type="password" name="password" class="rounded-sm border-black p-2 px-8 mt-2 mb-2 "
    placeholder="Enter your password">


    <button class="uppercase rounded-sm p-2 text-white bg-gray-500 px-8 block mx-auto mt-5"  
    type="submit">Login</button>

    
    <p class="text-sm mt-3 ">Don't you have an account click <a href="/signup" class="underline text-blue-500 text-sm m-1 ">Signup</a></p>

   </form>
   
  </div>
 </div>

 </body>
</html>
