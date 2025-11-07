<div id="projetcs-archive"
    class="fixed top-0 left-0 bottom-0 right-0 bg-yellow-50 opacity-0 transition-opacity duration-1000 px-4 py-4 invisible overflow-auto target:visible target:opacity-100 md:px-12 md:py-12 dark:bg-dark">

    <div class="max-w-7xl m-auto">
        <div class="relative flex justify-between items-center">
            <div class="flex flex-col gap-2.5">
                <a class="group flex items-center gap-1.5 text-base font-bold uppercase text-yellow-500 dark:text-yellow-400 dark:hover:text-yellow-300 hover:tracking-widest-x2 transition-all"
                    href="#projects-section">
                    <svg class="w-3.5 h-3.5 fill-yellow-500 group-hover:-translate-x-1 group-hover:duration-200 group-hover:ease-in dark:fill-yellow-400 dark:group-hover:fill-yellow-300"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>

                    {!! $page->trans('projects-archive.back-button') !!}
                </a>

                <div class="flex justify-center items-center gap-2">

                    <svg class="w-9 fill-yellow-800 dark:fill-yellow-200" viewBox="0 0 35 35" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31.6539 7.71734L27.2804 3.34526C27.007 3.07175 26.6361 2.91805 26.2493 2.91797H8.74935C8.36261 2.91805 7.99173 3.07175 7.71831 3.34526L3.34477 7.71734C3.2089 7.85278 3.10109 8.0137 3.02752 8.19088C2.95395 8.36805 2.91606 8.558 2.91602 8.74984V27.7096C2.91602 29.3182 4.22414 30.6263 5.83268 30.6263H29.166C30.7746 30.6263 32.0827 29.3182 32.0827 27.7096V8.74984C32.0826 8.558 32.0447 8.36805 31.9712 8.19088C31.8976 8.0137 31.7898 7.85278 31.6539 7.71734ZM9.3531 5.83464H25.6456L27.1025 7.29151H7.89622L9.3531 5.83464ZM5.83268 27.7096V10.2082H29.166L29.1689 27.7096H5.83268Z" />
                        <path d="M21.8757 17.4987H13.1257V14.582H10.209V20.4154H24.7923V14.582H21.8757V17.4987Z" " />
                    </svg>

                    <h2
                        class="text-2xl md:text-2xl lg:text-3xl font-extrabold text-yellow-800 text-transparent bg-clip-text capitalize dark:text-yellow-200">
                        {!! $page->trans('projects-archive.headline') !!}
                        ({{ $page->projects->count() }})
                    </h2>
                </div>

            </div>

            <a href="#projects-section" class="absolute right-0 top-0">
                    <svg class="w-7 h-7  hover:-rotate-90 transition-transform duration-200 " viewBox="0 0 28 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="stroke-yellow-500 dark:stroke-yellow-400 dark:hover:stroke-yellow-300" d=" M19.6234 19.6655L4.37857
                            3.7565C4.29822 3.67252 4.24852 3.57192 4.23512 3.46614C4.22172 3.36036 4.24516 3.25365
                            4.30277 3.15815C4.36038 3.06265 4.44986 2.98219 4.56102 2.92592C4.67218 2.86965 4.80056
                            2.83983 4.93157 2.83984H7.8249C7.93141 2.83997 8.03649 2.85983 8.13211 2.8979C8.22774
                            2.93597 8.31141 2.99126 8.37674 3.05954L23.6216 18.9685C23.7019 19.0525 23.7516 19.1531
                            23.765 19.2589C23.7784 19.3647 23.755 19.4714 23.6974 19.5669C23.6398 19.6624 23.5503
                            19.7428 23.4391 19.7991C23.328 19.8554 23.1996 19.8852 23.0686 19.8852H20.1752C20.0687
                            19.8851 19.9637 19.8652 19.868 19.8271C19.7724 19.7891 19.6887 19.7338 19.6234 19.6655Z"
                            stroke-width="2" />
                        <path class="stroke-yellow-500 dark:stroke-yellow-400 dark:hover:stroke-yellow-300"
                            d="M23.3337 2.83984L4.66699 19.8852" stroke-width="2" stroke-linecap="round" />
                    </svg>

                    </a>
                </div>

                <div class="content mt-8">
                    <table class="w-full text-left">
                        <thead class="capitalize">
                            <th class="pr-6 py-4">{!! $page->trans('projects-archive.table.columns.date') !!}</th>
                            <th class="pr-6 py-4">{!! $page->trans('projects-archive.table.columns.name') !!}</th>
                            <th class="pr-6 py-4">{!! $page->trans('projects-archive.table.columns.made-at') !!}</th>
                            <th class="hidden pr-6 py-4 md:table-cell">{!! $page->trans('projects-archive.table.columns.contribution-level') !!}</th>
                            <th class="hidden pr-6 py-4 md:table-cell">{!! $page->trans('projects-archive.table.columns.stack') !!}</th>
                            <th class="hidden pr-6 py-4 lg:table-cell">{!! $page->trans('projects-archive.table.columns.links') !!}</th>
                        </thead>
                        <tbody>
                            @foreach ($page->projects as $project)
                                <tr
                                    class="border-b border-brown-50 last:border-none hover:bg-yellow-100/60 dark:border-brown-900 dark:hover:bg-yellow-900/20">
                                    <td class="pr-6 py-4">
                                        <div class="flex items-center gap-2">
                                            @if ($project->getStartDateHuman())
                                                <span
                                                    class="lg:whitespace-nowrap">{{ $project->getStartDateHuman() }}</span>
                                            @endif
                                            @if ($project->getStartDateHuman() && $project->getEndDateHuman())
                                                <svg class="w-4 h-4 fill-yellow-800 dark:fill-yellow-200"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                                </svg>
                                            @endif
                                            <span class="lg:whitespace-nowrap">{{ $project->getEndDateHuman() }} </span>
                                        </div>
                                    </td>
                                    <td class="pr-6 py-4">
                                        <x-contribution-level-badge level="{{ $project->getContributionLevel() }}"
                                            description="{{ $page->trans('projects-archive.contribution-level.' . str_replace(' ', '-', $project->getContributionLevel()->getLevel())) }}"
                                            :tasks="$project->getTasks()" :hideOnDesktop=true />
                                        <div class="flex flex-col justify-center gap-1 mt-1">
                                            <span>
                                                {{ $project->getName() }}
                                            </span>
                                            @if (!$project->getLinks()->isEmpty())
                                                <div class="flex flex-wrap gap-2 lg:hidden">
                                                    @foreach ($project->getLinks() as $source => $link)
                                                        <?php $svgHtml = \App\Models\Project::getLinkSvgHtml($source); ?>
                                                        @if ($svgHtml)
                                                            <a href="{{ $link }}" target="_blank"
                                                                title="{{ $source }}">
                                                                {!! $svgHtml !!}
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="pr-6 py-4 whitespace-nowrap">
                                        {{ $project->getMadeAt() }}
                                    </td>
                                    <td class="hidden pr-6 py-4 whitespace-nowrap md:table-cell">
                                        <x-contribution-level-badge level="{{ $project->getContributionLevel() }}"
                                            description="{{ $page->trans('projects-archive.contribution-level.' . str_replace(' ', '-', $project->getContributionLevel()->getLevel())) }}"
                                            :tasks="$project->getTasks()" :hideOnDesktop=false />
                                    </td>
                                    <td class="hidden pr-6 py-4 md:table-cell">
                                        @if (!$project->getStack()->isEmpty())
                                            <div class="flex flex-wrap gap-1">
                                                @foreach ($project->getStack() as $tech)
                                                    <x-badge text="{{ $tech }}" />
                                                @endforeach
                                            </div>
                                        @else
                                            <x-badge text="N/A" />
                                        @endif
                                    </td>
                                    <td class="hidden pr-6 py-4 lg:table-cell">
                                        @if (!$project->getLinks()->isEmpty())
                                            <div class="flex gap-2">
                                                @foreach ($project->getLinks() as $source => $link)
                                                    <?php $svgHtml = \App\Models\Project::getLinkSvgHtml($source); ?>
                                                    @if ($svgHtml)
                                                        <a href="{{ $link }}" target="_blank"
                                                            title="{{ $source }}">
                                                            {!! $svgHtml !!}
                                                        </a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @else
                                            <x-badge text="N/A" />
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
