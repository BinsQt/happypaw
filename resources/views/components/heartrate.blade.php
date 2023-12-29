<section>
    <div class="flex flex-col justify-evenly items-center gap-5 z-20">
        <div class="font-sansserif font-light" >
            <h1>Heart Rate</h1>
        </div>
        <div class="flex flex-col items-center justify-between">
            <div class="animate-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com
                        License - https://fontawesome.com/license (Commercial License) Copyright
                        2023 Fonticons, Inc. -->
                        <path stroke="currentColor" fill="red" d="M228.3 469.1L47.6 300.4c-4.2-3.9-8.2-8.1-11.9-12.4h87c22.6
                        0 43-13.6 51.7-34.5l10.5-25.2 49.3 109.5c3.8 8.5 12.1 14 21.4 14.1s17.8-5 22-13.3L320 253.7l1.7
                        3.4c9.5 19 28.9 31 50.1 31H476.3c-3.7 4.3-7.7 8.5-11.9 12.4L283.7 469.1c-7.5 7-17.4 10.9-27.7
                        10.9s-20.2-3.9-27.7-10.9zM503.7 240h-132c-3 0-5.8-1.7-7.2-4.4l-23.2-46.3c-4.1-8.1-12.4-13.3-21.5-13.3s-17.4 5.1-21.5
                        13.3l-41.4 82.8L205.9 158.2c-3.9-8.7-12.7-14.3-22.2-14.1s-18.1 5.9-21.8 14.8l-31.8 76.3c-1.2 3-4.2 4.9-7.4 4.9H16c-2.6
                        0-5 .4-7.3 1.1C3 225.2 0 208.2 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141C165 36.5 211.4 51.4 244 84l12 12 12-12c32.6-32.6
                        79-47.5 124.6-39.9C461.5 55.6 512 115.2 512 185.1v5.8c0 16.9-2.8 33.5-8.3 49.1z"/></svg>
            </div>

            <div class="flex items-center justify-evenly">
                <div  id="bpm" class="z-10">
                    @include('main.partials.bpm')
               </div>
               <div>
                <span class="text-sm">BPM</span>
              </div>
            </div>
        </div>
        <hr id="line" class=" bg-green-600 h-1 rounded-full w-full animate-pulse delay-1000">
        <div>
            <svg class="" height="3em" viewBox="0 0 500 150" xml:space="preserve">
                <g id="ekg">
                    <polyline class="ekg" id="ekg" points="486.6,113.8 328.2,113.8 310.3,132.3 296,70.7 246.8,127.4 241.6,120.2 233.9,166.4 227,27.6
                    213.2,118.3 211.8,112.3 205.1,126.1 198.2,108.5 194.1,124.4 184.5,92.9 174.1,113 4.3,113 	"/>
                </g>
            </svg>
        </div>

    </div>
    {{-- <button>Set the color property of all p elements</button> --}}
</section>