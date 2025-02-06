@extends('layouts.home-page')
@section('content')
<div class="main-div bg-cover bg-center h-[32rem] z-10 relative after:content-[''] after:h-full after:w-full after:absolute after:top-0 after:left-0 after:bg-[rgb(0,0,0,0.5)]" style="background-image: url('asset/home/parking_home_page.jpg');">
    <div class="logo text-left absolute top-0 left-0 text-white text-4xl z-10">LOGO</div>
    <div class="welcome-content absolute h-inherit w-full top-0 left-0 flex flex-col justify-center items-center h-full z-20">
        <h1 class="text-5xl font-bold w-[600px] text-center my-[20px] text-white">Take Your Business TO Digital!</h1>
        <button class="rounded bg-red-200 p-2">Get Started</button>
    </div>
    
</div>
<div class="relative z-10 bg-gradient-to-r from-blue-300 to-blue-800 py-10">
    <div class="w-3/5 rounded-2xl mx-auto transform -translate-y-20 bg-white">
      <form class="w-3/5 mx-auto p-10">
      <div class="text-2xl text-blue-800 font-bold capitalize text-center mb-4">
        <h3>welcome back!</h3>
      </div>
      <div>
        <div>
          <div class="capitalize text-xl mb-2">
            <label>username</label>
          </div>
          <div class="border-2 relative">
            <span class="absolute px-2 inset-y-0 left-0 flex items-center text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
              </svg>
            </span>
            <input class="w-full placeholder:capitalize px-8 py-1.5 outline-blue-800" type="text" placeholder="enter username" >
          </div>
        </div>
        <div class="mt-4">
          <div class="capitalize text-xl mb-2">
            <label>password</label>
          </div>
          <div class="border-2 relative">
            <span class="absolute px-2 inset-y-0 left-0 flex items-center text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
              </svg>
            </span>
            <input class="w-full placeholder:capitalize px-8 py-1.5 outline-blue-800" type="password" placeholder="enter password" >
          </div>
        </div>
        
        <div>
          <button class="bg-blue-800 text-xl text-white font-medium uppercase p-2 rounded-lg w-full opacity-90 hover:opacity-100">login</button>
        </div>
        <div class="text-[18px] text-center mt-4">
          <p>Don't have an account? <a class="capitalize text-blue-800 hover:underline cursor-pointer" href="/register">register</a></p>
        </div>
      </div>
      </form>
    </div>
    <div class="text-2xl text-black-800 font-bold capitalize text-center mb-4">
        <h3>check due charges</h3>
      </div>

    <div class="w-4/5 bg-white mx-auto flex justify-center items-center p-5 rounded-lg">
    <img src="asset/home/charge.jpeg" class="w-1/2" alt="">
      <div class="w-1/2 ">
      <form class="w-3/5  mx-auto">
        <div class="capitalize text-xl mb-2">
                <label>Vehicle Number</label>
              </div>
          <input class="w-full border border-[2px] my-5 placeholder:capitalize px-8 py-1.5 outline-blue-800" type="text" placeholder="enter vehicle number" >
          <div>
              <button class="bg-blue-800 text-xl text-white font-medium uppercase p-2 rounded-lg w-full opacity-90 hover:opacity-100">check</button>
          </div>
          <div>
            <input type="text" disabled>
          </div>
      </form>
      </div>

    </div>

    </div>
    @include('layouts.include.home')

@endsection
