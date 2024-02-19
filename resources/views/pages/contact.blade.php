<x-easyadmin::guest-layout>
    <div class="items-center">
        <header>
            <nav>
                    <!-- < navbar for smallscreen > -->
                <div class="flex flex-row md:flex flex-col">
                    <x-header-top-component/>
                        
                        <div class="flex flex-row">
                            <div class=" pt-2 pl-3.5 w-1/3">
                                <img src="{{url('/images/Craft school of nursing logo.png')}}" class="h-14 w-12" alt="logo"/>
                            </div> 
                            <div class="md:block md:flex hidden md:items-center md:w-2/3 md:text-left md:text-base md:space-x-12 font-questrial font-thin 
                                        lg:block lg:items-center lg:mt-4 lg:text-lg lg:space-x-16
                                        xl:block xl:mt-6 xl:item-center xl:text-xl xl:space-x-20
                                        2xl:block 2xl:text-2xl 2xl:space-x-24">
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');">Home</a>
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a>
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a>
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a>
                                <a class="text-teal font-bold underline" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact</a> 
                            </div>
                            <div x-data="{ open : false }" class="pt-3 items-center text-right w-2/3 md:hidden items-center ">
                                <button @click="open = !open" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-4 mr-3 " viewBox="0 0 448 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                                    </svg>
                                </button>
                                <div x-show="open" class="lg:hidden md:hidden xl:hidden font-questrial">
                                    <ul class="bg-white mt-2 p-4 ">
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');">Home</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div> 
            </nav>
        </header>

                <div>
                    <div class="lg:flex flex-row">
                        <div class="lg:flex-grow lg:w-1/2">
                            <div>
                                <div class="mt-4 ml-4 mr-4 md:mt-8 md:ml-8 md:mr-8 lg:mt-44 xl:ml-16">
                                    <h class="text-2xl  font-bold text-black lg:text-6xl font-gothic md:text-3xl">Contact Us</h>
                                    <p class="lg:hidden font-normal  text-sm mt-6 lg:text-xl font-gothic md:text-base">Feel free to contact us any time. We will get back to you as we can!</p>
                                    <p class="hidden lg:block font-normal  text-sm mt-6 lg:text-xl font-gothic">Feel free to contact us any time. We will get<br> back to you as we can!</p>
                                </div>
                                <div class="mt-4 ml-4 md:mt-6 md:ml-8 md:mr-8 xl:ml-16 xl:mr-16">
                                    <form method="POST" action="#">
                                        @csrf
                                            <div class="relative mt-4 mr-4 lg:mr-0 ">
                                                <input id="name" name="name" type="text"
                                                    class="w-full h-10 text-gray-900 placeholder-transparent border-0 border-b border-black peer focus:outline-none focus:border-0 border-b
                                                        border-black"
                                                    placeholder="Name"/>
                                                <label for="name"
                                                    class="absolute left-0 -top-3.5 text-black text-sm lg:text-xl  transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:md:text-base peer-placeholder-shown:lg:text-xl peer-placeholder-shown:text-black
                                                        peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm font-gothic">Name
                                                </label>
                                            </div>
                                            <div class="relative mt-4 lg:mt-16 mr-4 lg:mr-0 ">
                                                <input id="email" name="email" type="email"
                                                    class="w-full h-10 text-gray-900 placeholder-transparent border-0 border-b border-black peer focus:outline-none focus:border-0 border-b
                                                        border-black"
                                                    placeholder="Email" />
                                                <label for="email"
                                                    class="absolute left-0 -top-3.5 text-black text-sm transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:md:text-base peer-placeholder-shown:lg:text-xl peer-placeholder-shown:text-black
                                                        peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm font-gothic">Email
                                                </label>
                                            </div>
                                            <div class="relative mt-4 lg:mt-16 mr-4 lg:mr-0 ">
                                                <input id="message" name="message" type="text"
                                                    class="w-full h-10 text-gray-900 placeholder-transparent border-0 border-b border-black peer focus:outline-none focus:border-0 border-b
                                                        border-black"
                                                    placeholder="Mesage" />
                                                <label for="message"
                                                    class="absolute left-0 -top-3.5 text-black text-sm transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:md:text-base peer-placeholder-shown:lg:text-xl peer-placeholder-shown:text-black
                                                        peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm font-gothic">Message
                                                </label>
                                            </div>
                                                
                                            <div class="mt-6 items-center text-center lg:mt-16 xl:mt-32">
                                                <button class="text-base font-bold font-gothic text-white bg-primary px-28 py-1.5 md:text-lg  lg:text-2xl xl:text-3xl xl:px-52 lg:px-48 lg:py-3 font-gothic tracking-widest">SEND</button>
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="lg:w-1/2">
                            <div class="relative flex flex-row  mt-20 md:mt-32 md:mb-20 lg:flex justify-end ">
                                <div class="bg-primary h-full w-1/3 absolute  right-0 flex justify-end  "></div>
                                <div class="bg-black w-full text-white z-10 mt-8 mb-8 ml-8 mr-8 md:ml-12 md:mr-12 md:mt-14 md:mb-14 xl:mt-16 xl:mb-16 2xl:mt-20 2xl:mb-20 2xl:mr-16">
                                    <div class="ml-4 mt-8 md:ml-16 lg:ml-10 xl:ml-16 xl:mr-16 ">
                                        <div class="xl:mt-12"><h class="text-white text-sm font-bold font-inter md:text-xl lg:text-2xl xl:text-3xl">Info</h></div>
                                        <div class="flex mt-16 items-center lg:mt-8">
                                            <p class="text-white text-xs font-bold font-gothic md:text-base lg:text-xl ">Email</p>
                                            <p class="text-white text-xs font-gothic ml-14 md:ml-20 md:text-base lg:text-sm xl:text-lg">craftnursingcollege.com</p>
                                        </div>
                                        <div class="flex mt-16 items-center lg:mt-8">
                                        <p class="text-white text-xs font-bold font-gothic md:text-base lg:text-xl">Phone No.</p>
                                        <p class="text-white text-xs font-gothic ml-6 md:ml-10 md:text-base lg:text-sm xl:text-lg">+91 9526986000</p>
                                        </div>
                                        <div class="flex mt-16 lg:mt-8 ">
                                            <p class="text-white text-xs font-bold font-gothic md:text-base lg:text-xl">Address</p>
                                            <div class="flexflex-col mb-20">
                                            <p class="text-white text-xs font-inter mb-4 ml-14 md:text-base lg:text-sm xl:text-lg">CRAFT HOSPITAL AND RESEARCH<br> CENTRE,VIII/77/ 2,3,4, Kodungallur P.O,<br> Chanthappura,Kodungallur, Thrissur,<br> KeralaPh: +91 6282396564</p>
                                            <p class="text-white text-xs font-inter mb-4 ml-14 md:text-base lg:text-sm xl:text-lg">CRAFT Multispeciality Centre 5th & <br>6th Floor,Imperial Amity,Chalikkavattam,<br>NH66 Bypass Kochi 682032,<br> Kerala Ph:+91 9526986000</p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
        <x-footer-component/>
        </div>
        

        
    </div>
</x-easyadmin::guest-layout>