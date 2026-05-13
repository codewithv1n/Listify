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
 <div class="bg-white rounded-lg p-12 w-95">
    <label for="signup" class="mb-7 text-3xl block text-center font-bold ">Signup</label>

    
   <form action="{{route('signup.post')}}" method="POST">
    @csrf
        <label for="name" class="block mb-2 font-medium mt-4">Name</label>
       <input type="text" name="name" class="rounded-sm border-black p-2 px-8 mt2"
       placeholder="Enter your name">

        <label for="username" class="block mb-2  font-medium mt-4">Username</label>
        <input type="text" name="username" class="rounded-sm border-black p-2 px-8 mt-2 " 
        placeholder="Enter your username">
       

        <label for="password" class="block mb-2 font-medium mt-4">Password</label>
        <input type="password" name="password" class="rounded-sm border-black p-2 px-8 mt-2 " 
        placeholder="Enter your password">
      

        <label for="confirm_password" class="block mb-2 font-medium mt-3">Confirm Password</label>
        <input type="password" name="password_confirmation" class="rounded-sm border-black p-2 px-8 mt-2" placeholder="Please confirm your password">


        <button class="mt-4 uppercase block mx-auto rounded-sm  text-white bg-gray-500 p-2 px-8" 
        type="submit">Signup</button>


        <p class="text-sm mt-3">You have an account click <a href="/" class="underline text-sm text-blue-500 ">Login</a> to enjoy experience</p>
   </form>

  </div>
 </div>
</body>
</html>