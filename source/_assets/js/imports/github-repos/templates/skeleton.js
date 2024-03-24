export default (repo) => `
    <li class="skeleton md:p-3 w-full md:w-1/2 animate-pulse" data-repo="${repo.toLowerCase()}">
        <div class="bg-white border border-yellow-300 shadow-sm rounded-md p-4 h-full flex flex-col justify-center dark:bg-brown-900 dark:border-transparent">

            <div class="relative">

                <!-- header -->
                <div>
                    <div class="h-5 w-1/3 bg-yellow-200 rounded"></div>

                    <div class="absolute right-0 top-0 h-4 w-12 bg-yellow-200 rounded "></div>
                </div>

                <!-- body -->
                <div class="my-4">
                    <div class="h-4 w-full bg-yellow-200 rounded"></div>
                    <div class="mt-3 h-4 w-1/4 bg-yellow-200 rounded"></div>
                </div>


                <!-- footer -->
                <div>

                    <div class="flex gap-5">
                        <!-- stars -->
                        <div class="h-4 w-10 bg-yellow-200 rounded"></div>

                        <!-- forks -->
                        <div class="h-4 w-10 bg-yellow-200 rounded"></div>
                    </div>


                    <div class="absolute right-0 bottom-0 flex gap-1">
                        <div class="h-5 w-8 bg-yellow-200 rounded"></div>
                        <div class="h-5 w-8 bg-yellow-200 rounded"></div>
                        <div class="h-5 w-8 bg-yellow-200 rounded"></div>
                    </div>

                </div>
            </div>

        </div>
    </li>
`;
