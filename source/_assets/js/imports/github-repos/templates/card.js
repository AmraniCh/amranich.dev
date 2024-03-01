import { replaceEmoji } from "../../../helpers";

export default async ({
    githubRepo,
    githubLangs,
    downloads
}) => `
    <li class="md:p-3 w-full md:w-1/2">
        <div class="card group bg-white border border-yellow-900 rounded-md p-4 h-full flex animate-[fadeIn_.5s_ease-out_forwards] hover:animate-[moveUp_.3s_ease-out_forwards] hover:bg-yellow-100 hover:duration-500  hover:shadow-lg dark:border-yellow-200 dark:bg-transparent">
            <div class="relative flex flex-col w-full">
                <!-- header -->
                <div class="flex justify-between">
                    <div class="flex items-center gap-2.5">
                        <svg class="fill-yellow-900 dark:fill-yellow-200" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16" width="16" height="16">
                            <path
                                d="M2 2.5A2.5 2.5 0 0 1 4.5 0h8.75a.75.75 0 0 1 .75.75v12.5a.75.75 0 0 1-.75.75h-2.5a.75.75 0 0 1 0-1.5h1.75v-2h-8a1 1 0 0 0-.714 1.7.75.75 0 1 1-1.072 1.05A2.495 2.495 0 0 1 2 11.5Zm10.5-1h-8a1 1 0 0 0-1 1v6.708A2.486 2.486 0 0 1 4.5 9h8ZM5 12.25a.25.25 0 0 1 .25-.25h3.5a.25.25 0 0 1 .25.25v3.25a.25.25 0 0 1-.4.2l-1.45-1.087a.249.249 0 0 0-.3 0L5.4 15.7a.25.25 0 0 1-.4-.2Z">
                            </path>
                        </svg>
                        <a href="${githubRepo.html_url}" target="_blank" class="font-bold hover:underline">
                            ${githubRepo.full_name}
                        </a>
                    </div>

                    ${downloads ? ` 
                        <!-- downloads -->
                        <a href="${downloads.url}" target="_blank"
                            class="flex items-center gap-1">
                            <svg class="h-4 w-4 fill-yellow-900 dark:fill-yellow-200"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                height="16">
                                <path
                                    d="M2.75 14A1.75 1.75 0 0 1 1 12.25v-2.5a.75.75 0 0 1 1.5 0v2.5c0 .138.112.25.25.25h10.5a.25.25 0 0 0 .25-.25v-2.5a.75.75 0 0 1 1.5 0v2.5A1.75 1.75 0 0 1 13.25 14Z">
                                </path>
                                <path
                                    d="M7.25 7.689V2a.75.75 0 0 1 1.5 0v5.689l1.97-1.969a.749.749 0 1 1 1.06 1.06l-3.25 3.25a.749.749 0 0 1-1.06 0L4.22 6.78a.749.749 0 1 1 1.06-1.06l1.97 1.969Z">
                                </path>
                            </svg>

                            <span class="script-font text-sm">
                                ${downloads.count}
                            </span>
                        </a>
                    ` : ''}
                </div>

                <!-- body -->
                <p class="flex-1 mt-2 mb-3 text-base">
                    ${await replaceEmoji(githubRepo.description)}
                </p>

                <!-- footer -->
                <div class="flex justify-between items-center">

                    <div class="flex gap-2 md:gap-5">

                        <!-- stars -->
                        <a href="https://github.com/lazzard/php-ftp-client/stargazers" target="_blank"
                            class="flex items-center gap-1">
                            <svg class="fill-yellow-900 dark:fill-yellow-200 w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <span class="script-font">${githubRepo.stargazers_count}</span>
                        </a>

                        <!-- forks -->
                        <a href="https://github.com/lazzard/php-ftp-client/forks" target="_blank"
                            class="flex items-center gap-1">
                            <svg class="fill-yellow-900 dark:fill-yellow-200 w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                height="16">
                                <path
                                    d="M5 5.372v.878c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75v-.878a2.25 2.25 0 1 1 1.5 0v.878a2.25 2.25 0 0 1-2.25 2.25h-1.5v2.128a2.251 2.251 0 1 1-1.5 0V8.5h-1.5A2.25 2.25 0 0 1 3.5 6.25v-.878a2.25 2.25 0 1 1 1.5 0ZM5 3.25a.75.75 0 1 0-1.5 0 .75.75 0 0 0 1.5 0Zm6.75.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm-3 8.75a.75.75 0 1 0-1.5 0 .75.75 0 0 0 1.5 0Z">
                                </path>
                            </svg>
                            <span class="script-font">${githubRepo.forks_count}</span>
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-1.5">
                        ${githubLangs.map(lang => `
                            <span
                                class="badge bg-yellow-200 text-yellow-950 text-xs text-center whitespace-nowrap font-medium px-2 py-0.5 rounded group-hover:bg-white border border-yellow-900 dark:text-yellow-900">
                                ${lang}
                            </span>
                        `).join('')}
                    </div>
                </div>
            </div>
        </div>
    </li>
`;