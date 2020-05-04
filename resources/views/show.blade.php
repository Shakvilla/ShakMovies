@extends('layouts.main-p')

@section('content')

<div class=" movie-info border-b border-gray-800">
    <div class=" container mx-auto px-4 py-16 flex flex-col md:flex-row ">
        <img src="/images/avengers.jpg" alt="avengers" class=" w-64 md:w-96">
        <div class=" md:ml-24 ">
            <h2 class=" text-4xl font-semibold">
                Avengers
            </h2>
            <div class="flex items-center flex-wrap text-gray-500 text-sm">
                         <span class=" ml-1"> Released On </span>
                         <span class=" mx-2">| </span>
                         <span>April 28, 2020</span>
                         <span class=" mx-2">|</span>
                         <span> Action, Thriller, Drama</span>
                     </div>

                     <p class="text-gray-300 mt-8">

                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam voluptas quasi saepe, ut dolorem vel perspiciatis at facere fugit id iusto aut repellendus architecto possimus a quia dolorum laudantium animi iste alias quam aliquid aliquam quos voluptatem! Doloremque repellendus natus velit, molestiae consectetur sed minus, consequatur ratione quo, nemo dolore.
                     </p>

                     <div class=" mt-12 ">
                         <h4 class=" text-white font-semibold"> Featured Cast</h4>
                         <div class=" flex mt-4">
                             <div>
                                 <div>John Doe</div>
                             <div class=" text-sm text-gray-400"> Screenplay, Director, Story</div>
                             </div>
                         </div>
                     </div>

                     <div class="mt-12">
                         <button class=" flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                             <span>Play Trailer</span>
                         </button>
                     </div>


        </div>
    </div>

</div>

<div class="movie-cast border-b border-gray-800">
    <div class="mx-auto px-4 py-16">
        <h2 class=" text-4xl font-semibold"> Cast </h2>

               <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">


              <div class="mt-8">
                 <a href="#">
                     <img src="/images/casts/woman-3.jpg" alt="Movie" class=" hover:opacity-75 transition ease-in-out duration-150 h-80">
                 </a>

                 <div class="mt-2">
                     <a href="#" class=" text-lg mt-2 hover:text-gray-400 "> Jane Doe </a>


                 </div>

             </div>

             <div class="mt-8">
                 <a href="#">
                     <img src="/images/casts/Anjelina-Jolie.jpg" alt="Movie" class=" hover:opacity-75 transition ease-in-out duration-150 h-80">
                 </a>

                 <div class="mt-2">
                     <a href="#" class=" text-lg mt-2 hover:text-gray-400 "> Jane Doe </a>


                 </div>

             </div>

              <div class="mt-8">
                 <a href="#">
                     <img src="/images/casts/woman-3.jpg" alt="Movie" class=" hover:opacity-75 transition ease-in-out duration-150 h-80">
                 </a>

                 <div class="mt-2">
                     <a href="#" class=" text-lg mt-2 hover:text-gray-400 "> Jane Doe </a>


                 </div>

             </div>

             <div class="mt-8">
                 <a href="#">
                     <img src="/images/casts/woma-1.jpg" alt="Movie" class=" hover:opacity-75 transition ease-in-out duration-150 h-80">
                 </a>

                 <div class="mt-2">
                     <a href="#" class=" text-lg mt-2 hover:text-gray-400 "> Jane Doe </a>


                 </div>

             </div>
             <div class="mt-8">
                 <a href="#">
                     <img src="/images/casts/woman-2.jpg" alt="Movie" class=" hover:opacity-75 transition ease-in-out duration-150 h-80">
                 </a>

                 <div class="mt-2">
                     <a href="#" class=" text-lg mt-2 hover:text-gray-400 "> Jane Doe </a>


                 </div>

             </div>







         </div>

    </div>
</div>

@endsection
