<div class="section px-8 lg:px-16 bg-yellow-100 dark:bg-inherit">
    <x-section-heading text="{{ $page->trans('about.heading') }}" />

    <div class="flex flex-col justify-between items-center gap-16 lg:flex-row  lg:gap-20">

        <div class="flex flex-col gap-6">
            <p
                class="text-md leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl relative md:ml-4">
                {{-- {{ $page->trans('about.content') }} --}}


                I am a software developer based in Tangier, Morocco. My 3 years of software development experience has
                given me a strong foundation for building modern software and complex web solutions.

            </p>

            <p
                class="text-md leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl relative md:ml-4">
                {{-- {{ $page->trans('about.content') }} --}}


                Recently, I graduated with a Bachelor's degree in Software and Web Development with honors. I am enjoy
                learning how things works behind the scenes and solving problems.


            </p>

            <p
                class="text-md leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl relative md:ml-4">
                {{-- {{ $page->trans('about.content') }} --}}


                I am also very passionate about open source software, and I've always been excited to share my knowledge
                with other developers and work together to build things that benefit the world.
            </p>
        </div>





        <div>
            {{-- <h5 class="mb-6">My Favorite Quote: </h5> --}}
            <x-blockquote-ship />
        </div>
    </div>

</div>
