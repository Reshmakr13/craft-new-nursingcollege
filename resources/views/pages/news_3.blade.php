<x-guest-layout>
    <div class="items-center">
        
        <x-header-full-component/>

        
        <div class="lg:hidden mt-4 mr-2 md:mr-6 text-right p-1">
            <button class="text-white bg-teal px-2 py-1 text-base md:text-lg 2xl:text-lg lg:text-base font-bold font-inter"><a href="{{route('gallery')}}">Back</a></button>
        </div>
        <div>
            <div class="mt-6 ml-4 mr-4 md:mt-10 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-12 xl:mt-14 xl:ml-12 xl:mr-12 2xl:mt-16 2xl:ml-14 2xl:mr-14" >
                <h class="text-xl  font-semibold font-inter text-black md:text-3xl lg:text-6xl 2xl:text-7xl">Advancing Knowledge</h>
            </div>
            <div class="lg:flex flex-row flex-grow">
                <div class="ml-4 mr-4 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-20 xl:ml-12 2xl:ml-14 lg:w-2/3">
                    <img src="{{url('/images/4.jpg')}}" class="bg-cover w-full mt-4 lg:mt-0  " alt="image">
                </div>
                <div class="hidden lg:block lg:w-1/3  border border-l border-0 border-gray-200 lg:mr-4 xl:mr-6 2xl:mr-10">
                <div>
                    <p class="bg-teal text-white text-base 2xl:text-lg font-extrabold text-center font-inter px-2 py-3 ">More Article</p>
                </div>
                    <div class="lg:ml-3 lg:space-y-6">
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.jpg')" :content="'The CRAFT School of'" :link="route('gallery')" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.jpg')" :content="'The  institution believe'" :link="route('gallery')" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.jpg')" :content="'The  CRAFT School of'" :link="route('gallery')" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.jpg')" :content="'The  institution believe'" :link="route('gallery')" />
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-4 md:ml-6 md:mr-6 md:mt-10 lg:ml-8 lg:mr-8 lg:mt-12 xl:mt-14 xl:ml-12 xl:mr-12 2xl:mt-16 2xl:ml-14 2xl:mr-14 ">
                <x-page-component :content="'The  CRAFT School of Nursing believes that excellence in professional nursing education is achieved  through a curriculum , which unifies the essential phenomena 
                of interest in nursing : the concept of nursing , health , person and environment . the  school accepts that professional nursing education at 
                it’s best in an interactive process by which students and teachers , teach and learn from each other in an academic climate of mutual respect and caring .'" />
                <x-page-component :content="'The institution believes  that accepting responsibilities for  nurturing  learners focusing on developing  with the competencies of 
                care giver , critical thinker , communicator , leader , manager ,teacher  and researcher are essential for the lifelong personal growth and development of students.'"/>
            </div>
        </div>

        
        
        <div>
        <x-footer-component/> 
        </div>
    
        
    </div>
</x-guest-layout>   