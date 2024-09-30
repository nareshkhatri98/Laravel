
@extends('layout.base')
@section('content')
   <div class=" w-[500px] h-[500px]  mx-auto m-20 flex flex-col items-center justify-center  bg-gray-400 border-gray-50 rounded-md"> 
    <h1 class="text-2xl font-semibold font-sans mb-5 "> Login form </h1>
    <form action="{{ route('UserLogin') }}" method="POST">
      @csrf
     <div class="mt-[-10px] mb-4 flex flex-col">
        <label for="Email" class="text-xl font-semibold" >Email</label>
        <input type="email" name="email" class="border-solid p-2  text-black h-12 rounded-md ">
        @error('email')
        <span class="text-red-500">{{ $message }}</span>
       @enderror
     </div>
     <div class="mb-4 flex flex-col">
        <label for="Password" class="text-xl text-black font-semibold">Password</label>
        <input type="password" name="password" class="border-solid p-2 w-96  text-black h-12 rounded-md">
        @error('password')
        <span class="text-red-500">{{ $message }}</span>
       @enderror
     </div>
     <a href="/register"> if you don't have  acount? register here </a>
    
     <button class="w-full bg-blue-600 h-12 mt-4 border-s-violet-300 rounded-md text-xl font-semibold text-white hover:bg-green-600">Login</button>
    
    </form>
   </div>
   @endsection
 
 
   
  