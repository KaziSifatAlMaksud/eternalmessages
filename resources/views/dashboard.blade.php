<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>
    <main class="w-full pb-6">
        <!-- navbar section -->
        <header class="md:px-[30px] lg:px-[50px] 2xl:px-[120px] px-3 flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-4">
            <nav class="w-full mx-auto flex flex-wrap justify-between basis-full items-center" aria-label="Global">
                <a class="sm:order-1 flex-none text-xl font-semibold " href="#"><img class="w-[110px]" src="./assets/images/logo_horizontal2.png" alt="" /></a>

                <div class="sm:order-3 flex items-center gap-x-2">
                    <div class="hs-dropdown relative inline-flex">
                        <img class="w-[40px] rounded-[76px]" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/11.jpg" alt="" />

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-40 bg-white shadow-md rounded-lg p-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-black-2 hover:bg-primary-20 focus:ring-2 focus:ring-blue-20   " href="profile.html">
                                Profile
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-black-2 hover:bg-primary-20 focus:ring-2 focus:ring-blue-20   " href="index.html">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- bannar section -->
        <section class="md:px-[30px] lg:px-[50px] 2xl:px-[120px] px-3 pt-6">

            <div class="w-full">
                <div class="p-6 flex gap-6 rounded-[7px] shadow" style="
              background-image: url(./assets/images/profile_bannar.png);
              background-size: cover;
              background-position: center;
            ">
                    <div class="w-fit">
                        <div class="relative">
                            <img class="xl:size-[71px] size-[55px] rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/11.jpg" />

                            <div class="xl:size-[15.53px] size-[12px] xl:right-[5px] right-[2px] bottom-0 absolute border border-white bg-green rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:gap-6 gap-3 xl:pt-3 pt-2">
                        <div class="">
                            <div class="text-white xl:text-xl text-lg font-bold leading-tight">
                                Adam Smith
                            </div>

                            <div class="text-gray-2 text-xs font-medium leading-3">
                                adam@gmail.com
                            </div>
                        </div>
                        <div class="w-fit">
                            <p class="text-center text-white xl:text-[22px] text-[16px] font-bold">
                                9
                            </p>
                            <p class="text-gray-2 text-xs font-medium">Videos</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="py-6 flex felx md:flex-row flex-col-reverse gap-6 ">
                <div>
                    <button type="button" class="btn-primary w-full" data-hs-overlay="#hs-vertically-centered-modal">
                        Add User
                    </button>

                    <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                <div class="flex justify-between items-center py-3 px-4  dark:border-gray-700">
                                    <h3 class="font-bold text-gray-800 dark:text-white">

                                    </h3>
                                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white " data-hs-overlay="#hs-vertically-centered-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="md:px-[70px] px-[20px] pb-[40px] overflow-y-auto">
                                    <div class="text-neutral-800 md:text-[28px] text-[18px] pb-6 text-center font-semibold leading-7">Add People</div>
                                    <form action="#" class="self-stretch flex-col justify-start items-start gap-6 flex">
                                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                                            <div class="self-stretch justify-start items-start gap-3 inline-flex">
                                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-sm font-normal  capitalize leading-none">
                                                    Name
                                                </div>
                                            </div>
                                            <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                                <input type="text" id="input-name-label" class="py-3 px-4 block w-full border-gray-2 rounded-lg text-sm focus:border-blue-20 focus:ring-blue-20 disabled:opacity-50 disabled:pointer-events-none placeholder:text-sm " placeholder="Enter your name" />
                                            </div>
                                        </div>
                                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                                            <div class="self-stretch justify-start items-start gap-3 inline-flex">
                                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-sm font-normal  capitalize leading-none">
                                                    Email
                                                </div>
                                            </div>
                                            <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                                <input type="email" id="input-email-label" class="py-3 px-4 block w-full border-gray-2 rounded-lg text-sm focus:border-blue-20 focus:ring-blue-20 disabled:opacity-50 disabled:pointer-events-none placeholder:text-sm   " placeholder="Enter your mail" />
                                            </div>
                                        </div>
                                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                                            <div class="self-stretch justify-start items-start inline-flex">
                                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-sm font-normal  capitalize leading-none">
                                                    New Password
                                                </div>
                                            </div>
                                            <div class="self-stretch flex-col justify-start items-start gap-2 flex">
                                                <div class="self-stretch  rounded-lg justify-start items-center gap-[5px] inline-flex">

                                                    <input type="password" id="input-password-label" class="py-3 px-4 block w-full border-gray-2 rounded-lg text-sm focus:border-blue-20 focus:ring-blue-20 disabled:opacity-50 disabled:pointer-events-none   placeholder:text-sm   " placeholder="Enter your password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="self-stretch pt-3">
                                            <button type="submit" class="btn-primary w-full">
                                                ADD
                                            </button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div id="hs-basic-modal" class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-56 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
                        <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto  ">
                                <div class="flex justify-between items-center pt-3 px-4 ">
                                    <h3 class="font-bold text-gray-800 ">
                                    </h3>
                                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none  " data-hs-overlay="#hs-basic-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18" />
                                            <path d="m6 6 12 12" /></svg>
                                    </button>
                                </div>
                                <div class="px-[70px] pt-[20px] pb-[70px] overflow-y-auto">
                                    <div class="text-neutral-800 text-[28px] pb-6 text-center font-semibold leading-7">Add People</div>
                                    <form action="#" class="self-stretch flex-col justify-start items-start gap-6 flex">
                                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                                            <div class="self-stretch justify-start items-start gap-3 inline-flex">
                                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-sm font-normal  capitalize leading-none">
                                                    Name
                                                </div>
                                            </div>
                                            <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                                <input type="text" id="input-name-label" class="py-3 px-4 block w-full border-gray-2 rounded-lg text-sm focus:border-blue-20 focus:ring-blue-20 disabled:opacity-50 disabled:pointer-events-none placeholder:text-sm   " placeholder="Enter your name" />
                                            </div>
                                        </div>
                                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                                            <div class="self-stretch justify-start items-start gap-3 inline-flex">
                                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-sm font-normal  capitalize leading-none">
                                                    Email
                                                </div>
                                            </div>
                                            <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                                <input type="email" id="input-email-label" class="py-3 px-4 block w-full border-gray-2 rounded-lg text-sm focus:border-blue-20 focus:ring-blue-20 disabled:opacity-50 disabled:pointer-events-none placeholder:text-sm   " placeholder="Enter your mail" />
                                            </div>
                                        </div>
                                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                                            <div class="self-stretch justify-start items-start inline-flex">
                                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-sm font-normal  capitalize leading-none">
                                                    New Password
                                                </div>
                                            </div>
                                            <div class="self-stretch flex-col justify-start items-start gap-2 flex">
                                                <div class="self-stretch  rounded-lg justify-start items-center gap-[5px] inline-flex">

                                                    <input type="password" id="input-password-label" class="py-3 px-4 block w-full border-gray-2 rounded-lg text-sm focus:border-blue-20 focus:ring-blue-20 disabled:opacity-50 disabled:pointer-events-none   " placeholder:text-sm placeholder="Enter your password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="self-stretch pt-3">
                                            <button type="submit" class="btn-primary w-full">
                                                ADD
                                            </button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative flex rounded-lg shadow-sm">
                        <input type="text" id="hs-trailing-button-add-on-with-icon-and-button" name="hs-trailing-button-add-on-with-icon-and-button" class="bg-white py-3 px-4 ps-11 block w-full border-gray-2 rounded-s-lg text-sm focus:z-10 focus:border-blue-20 focus:ring-blue-20 disable placeholder:text-smd:opacity-50 disabled: placeholder:text-smpointer-events-none    placeholder:text-gray-2" placeholder="Search People" />
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                            <svg class="flex-shrink-0 size-4 text-gray-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md bg-primary text-white hover:bg-blue disabled:opacity-50 disabled:pointer-events-none">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- user card section -->
        <section id="container" class="md:px-[30px] lg:px-[50px] 2xl:px-[120px] px-3 ">
            <div class="grid 2xl:grid-cols-4 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6">
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="user.html">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/1.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="" />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/11.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="w-fit pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/2.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/2.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/3.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/13.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Sakibur Rahman
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    sakiburrahman@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/5.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/16.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/3.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/3.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/6.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/15.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/7.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/14.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/8.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/6.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
                <a class="w-full flex flex-col bg-white shadow-sm rounded-lg hover:shadow-lg transition " href="#">
                    <div class="relative">
                        <img src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/media/team-covers/9.jpg" class="w-full h-[100px] relative bg-blue-700 bg-opacity-20 rounded-tl-lg rounded-tr-lg" alt="..." />
                        <span class="absolute pt-[71px] px-[20px] top-0 left-0">
                            <div class="w-16 h-16 rounded-full border-4 border-blue border-opacity-20 justify-center items-center inline-flex">
                                <img class="w-14 h-14 relative rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/18.jpg" alt="" />
                            </div>
                        </span>
                    </div>
                    <div>
                        <div class="pl-[92px] pt-[10px] flex-col justify-start items-start inline-flex">
                            <div class=" h-6 justify-start items-center inline-flex">
                                <div class="w-fit h-6 text-zinc-800 text-base font-semibold font-['Inter'] leading-normal">
                                    Alexander Smith
                                </div>
                            </div>
                            <div class="self-stretch h-[18px] justify-start items-center inline-flex">
                                <div class="w-fit h-[18px] text-neutral-400 text-xs font-normal font-['Inter'] leading-[18px]">
                                    alexandersmith2135@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[20px] flex w-full border-dashed border-t-[1.5px] border-[#e3e4e5]">
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                videos
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                4
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4 border-dashed border-x-[1.5px] border-[#e3e4e5]">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Job Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                3
                            </p>
                        </div>
                        <div class="text-center w-[33%] py-4">
                            <p class="text-[13px] text-zinc-800 font-semibold leading-tight">
                                Posts
                            </p>
                            <p class="text-neutral-400 text-xs font-normal leading-[18px]">
                                7
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
