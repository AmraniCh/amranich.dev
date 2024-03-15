<div class="section care-about-section scroll-indicator" data-scroll-indicator-text="{!! $page->trans('scroll-indicator.care-about') !!}">
    <x-section-heading text="{!! $page->trans('care-about.heading') !!}" />

    <div class="flex flex-wrap justify-center gap-12 md:gap-10 lg:gap-12">
        <x-care-about-card title="{!! $page->trans('care-about.1.title') !!}" description="{!! $page->trans('care-about.1.desc') !!}">
            @slot('icon')
                <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="49" height="49.5" fill="url(#pattern0)" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_196_1922" transform="matrix(0.00789222 0 0 0.0078125 -0.00510204 0)" />
                        </pattern>
                        <image id="image0_196_1922" width="128" height="128"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
            @endslot
        </x-care-about-card>

        <x-care-about-card title="{!! $page->trans('care-about.2.title') !!}" description="{!! $page->trans('care-about.2.desc') !!}">
            @slot('icon')
                <svg width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_196_1931)">
                        <path class="fill-yellow-400 "
                            d="M23.6667 21.5569C18.1943 21.5569 13.7419 16.9007 13.7419 11.1779C13.7419 5.45502 18.1943 0.798828 23.6667 0.798828C29.139 0.798828 33.5914 5.45502 33.5914 11.1779C33.5914 16.9007 29.139 21.5569 23.6667 21.5569Z" />
                        <path class="fill-yellow-950"
                            d="M25.505 16.8682C28.2182 14.5042 29.7741 11.0296 29.7741 7.33704V6.38695H28.7091C27.0593 6.38695 25.4622 5.88158 24.0896 4.92431L23.6666 4.62891L23.2429 4.92431C21.8702 5.88158 20.2731 6.38695 18.6241 6.38695H17.5591V7.33704C17.5591 11.0296 19.115 14.5042 21.8282 16.8682C22.3428 17.3169 22.9963 17.5644 23.6666 17.5644C24.3369 17.5644 24.9904 17.3169 25.505 16.8682ZM24.5278 15.6419C24.4988 15.6674 24.4613 15.677 24.43 15.6985V6.94423C25.618 7.54541 26.9028 7.90469 28.2297 7.97095C28.064 10.9005 26.7356 13.7177 24.5278 15.6419ZM19.1035 7.97175C20.4304 7.90469 21.7153 7.54541 22.9032 6.94423V15.6985C22.8719 15.6762 22.8345 15.6666 22.8054 15.6419C20.5976 13.7177 19.2692 10.9497 19.1035 7.97175Z" />
                        <path class="fill-yellow-950 dark:fill-yellow-200"
                            d="M45.043 41.5161H44.2796V15.0847C45.0514 14.4604 45.8026 13.8025 46.5264 13.1039C47.0394 12.6089 47.3333 11.9071 47.3333 11.1774C47.3333 10.4477 47.0394 9.74591 46.5264 9.25091C40.3471 3.28536 32.3119 0 23.9018 0H23.4315C15.0215 0 6.98625 3.28536 0.806957 9.25091C0.293925 9.74591 0 10.4477 0 11.1774C0 11.9071 0.293925 12.6089 0.806957 13.1039C1.5307 13.8025 2.28192 14.4612 3.05376 15.0847V41.5161H2.29032C1.02759 41.5161 0 42.5908 0 43.9113C0 46.9931 2.3972 49.5 5.34409 49.5H41.9892C44.9361 49.5 47.3333 46.9931 47.3333 43.9113C47.3333 42.5908 46.3057 41.5161 45.043 41.5161ZM1.52688 11.1774C1.52688 10.8924 1.6414 10.6178 1.84218 10.4245C7.739 4.73204 15.4062 1.59677 23.4315 1.59677H23.9018C31.9271 1.59677 39.5943 4.73204 45.4911 10.4245C45.6919 10.6178 45.8064 10.8924 45.8064 11.1774C45.8064 11.4624 45.6919 11.7371 45.4911 11.9303C39.5943 17.6228 31.9271 20.7581 23.9018 20.7581H23.4315C15.4062 20.7581 7.739 17.6228 1.84218 11.9303C1.6414 11.7371 1.52688 11.4624 1.52688 11.1774ZM7.63441 18.1912C10.5072 19.8088 13.59 20.9768 16.7957 21.6547V23.1532C16.7957 23.5931 16.4529 23.9516 16.0323 23.9516H12.9785C11.7158 23.9516 10.6882 25.0262 10.6882 26.3468V28.0905C9.80182 28.421 9.16129 29.2992 9.16129 30.3387C9.16129 31.6592 10.1889 32.7339 11.4516 32.7339C12.7143 32.7339 13.7419 31.6592 13.7419 30.3387C13.7419 29.2992 13.1014 28.421 12.2151 28.0905V26.3468C12.2151 25.9069 12.5578 25.5484 12.9785 25.5484H16.0323C17.295 25.5484 18.3226 24.4738 18.3226 23.1532V21.9389C19.3311 22.1018 20.3495 22.2159 21.3763 22.2814V27.9435C21.3763 28.3835 21.0336 28.7419 20.6129 28.7419H19.086C17.8233 28.7419 16.7957 29.8166 16.7957 31.1371V32.0824C15.9093 32.4129 15.2688 33.2911 15.2688 34.3306C15.2688 35.6512 16.2964 36.7258 17.5591 36.7258C18.8219 36.7258 19.8495 35.6512 19.8495 34.3306C19.8495 33.2911 19.2089 32.4129 18.3226 32.0824V31.1371C18.3226 30.6972 18.6654 30.3387 19.086 30.3387H20.6129C21.8756 30.3387 22.9032 29.2641 22.9032 27.9435V22.3421C23.0796 22.3445 23.2552 22.3548 23.4315 22.3548H23.9018C24.0782 22.3548 24.2538 22.3445 24.4301 22.3421V27.9435C24.4301 29.2641 25.4577 30.3387 26.7204 30.3387H28.2473C28.668 30.3387 29.0108 30.6972 29.0108 31.1371V32.0824C28.1244 32.4129 27.4839 33.2911 27.4839 34.3306C27.4839 35.6512 28.5115 36.7258 29.7742 36.7258C31.0369 36.7258 32.0645 35.6512 32.0645 34.3306C32.0645 33.2911 31.424 32.4129 30.5376 32.0824V31.1371C30.5376 29.8166 29.51 28.7419 28.2473 28.7419H26.7204C26.2998 28.7419 25.957 28.3835 25.957 27.9435V22.2814C26.9838 22.2159 28.0022 22.1018 29.0108 21.9389V23.1532C29.0108 24.4738 30.0383 25.5484 31.3011 25.5484H34.3548C34.7755 25.5484 35.1183 25.9069 35.1183 26.3468V28.0905C34.2319 28.421 33.5914 29.2992 33.5914 30.3387C33.5914 31.6592 34.619 32.7339 35.8817 32.7339C37.1445 32.7339 38.172 31.6592 38.172 30.3387C38.172 29.2992 37.5315 28.421 36.6452 28.0905V26.3468C36.6452 25.0262 35.6176 23.9516 34.3548 23.9516H31.3011C30.8804 23.9516 30.5376 23.5931 30.5376 23.1532V21.6547C33.7433 20.9768 36.8261 19.8096 39.6989 18.1912V38.3226H7.63441V18.1912ZM12.2151 30.3387C12.2151 30.7786 11.8723 31.1371 11.4516 31.1371C11.031 31.1371 10.6882 30.7786 10.6882 30.3387C10.6882 29.8988 11.031 29.5403 11.4516 29.5403C11.8723 29.5403 12.2151 29.8988 12.2151 30.3387ZM18.3226 34.3306C18.3226 34.7706 17.9798 35.129 17.5591 35.129C17.1385 35.129 16.7957 34.7706 16.7957 34.3306C16.7957 33.8907 17.1385 33.5323 17.5591 33.5323C17.9798 33.5323 18.3226 33.8907 18.3226 34.3306ZM30.5376 34.3306C30.5376 34.7706 30.1948 35.129 29.7742 35.129C29.3535 35.129 29.0108 34.7706 29.0108 34.3306C29.0108 33.8907 29.3535 33.5323 29.7742 33.5323C30.1948 33.5323 30.5376 33.8907 30.5376 34.3306ZM36.6452 30.3387C36.6452 30.7786 36.3024 31.1371 35.8817 31.1371C35.4611 31.1371 35.1183 30.7786 35.1183 30.3387C35.1183 29.8988 35.4611 29.5403 35.8817 29.5403C36.3024 29.5403 36.6452 29.8988 36.6452 30.3387ZM4.58065 16.2504C5.0807 16.6096 5.59144 16.9498 6.10753 17.2787V38.3226C6.10753 39.2032 6.79233 39.9194 7.63441 39.9194H39.6989C40.541 39.9194 41.2258 39.2032 41.2258 38.3226V17.2779C41.7419 16.949 42.2526 16.6088 42.7527 16.2496V41.5161H4.58065V16.2504ZM35.1183 47.9032H33.5914V46.3065H35.1183V47.9032ZM41.2258 47.9032H39.6989V46.3065H41.2258V47.9032ZM42.7527 47.8226V44.7097H38.172V47.9032H36.6452V44.7097H32.0645V47.9032H5.34409C3.23928 47.9032 1.52688 46.1124 1.52688 43.9113C1.52688 43.4714 1.86967 43.1129 2.29032 43.1129H45.043C45.4637 43.1129 45.8064 43.4714 45.8064 43.9113C45.8064 45.8386 44.4926 47.4513 42.7527 47.8226Z" />
                    </g>
                    <defs>
                        <clipPath id="clip0_196_1931">
                            <rect width="47.3333" height="49.5" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            @endslot
        </x-care-about-card>

        <x-care-about-card title="{!! $page->trans('care-about.3.title') !!}" description="{!! $page->trans('care-about.3.desc') !!}">
            @slot('icon')
                <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_196_1946)">
                        <path class="fill-yellow-400 dark:fill-transparent"
                            d="M24.9783 9.47559V2.90137L26.5424 1.83789L37.4911 5.27002L44.1741 15.0347L45.9752 23.3008H39.7188L35.0265 15.0347L24.9783 9.47559Z" />
                        <path class="fill-yellow-400 dark:fill-transparent"
                            d="M22.798 39.4443L23.9355 47.082H21.2339L10.2852 43.6499L3.60216 33.8853L1.80106 25.6191H9.14762L12.7498 33.8853L22.798 39.4443Z" />
                        <path class="fill-yellow-400 dark:fill-transparent"
                            d="M9.28978 23.252H2.84376L1.80103 21.6567L5.16622 10.4902L14.7405 3.67431L22.8454 1.8374V9.33008L14.7405 13.0039L9.28978 23.252Z" />
                        <path class="fill-yellow-400 dark:fill-transparent "
                            d="M39.7189 25.8125H45.6909L46.3545 27.6011L43.4633 37.7524L33.889 44.5684L28.2962 47.082H24.8836L24.2674 40.0244L33.889 35.2388L39.7189 25.8125Z" />
                        <path class="fill-yellow-400 "
                            d="M21.5183 25.2255C21.5183 26.2376 21.1381 26.6159 20.5261 26.6159C19.9141 26.6159 19.5338 26.2376 19.5338 25.2255V21.6504H17.3452V25.2917C17.3452 27.2779 18.5136 28.4224 20.5076 28.4224C22.5014 28.4224 23.6698 27.2779 23.6698 25.2917V21.6504H21.5183V25.2255Z" />
                        <path class="fill-yellow-400 "
                            d="M31.5154 21.6504H29.16L28.0843 23.315L26.9808 21.6504H24.5232L26.786 24.9324L24.4397 28.2711H26.9343L28.0286 26.5024L29.1507 28.2711H31.6546L29.262 24.8473L31.5154 21.6504Z" />
                        <path class="fill-yellow-950 dark:fill-yellow-200"
                            d="M41.4269 7.24924C36.8434 2.57448 30.7494 0 24.2673 0C17.7853 0 11.6913 2.57448 7.10777 7.24924C2.52428 11.9238 0 18.139 0 24.75C0 31.361 2.52428 37.5763 7.10777 42.2509C11.6913 46.9255 17.7853 49.5 24.2673 49.5C30.7494 49.5 36.8434 46.9256 41.4269 42.251C46.0104 37.5763 48.5347 31.361 48.5347 24.75C48.5347 18.139 46.0104 11.9238 41.4269 7.24924ZM45.6229 23.2897H39.835C39.1526 15.6609 33.1793 9.56878 25.6992 8.87278V2.96981C30.8773 3.3164 35.6989 5.53743 39.4021 9.31431C43.1052 13.0912 45.283 18.0086 45.6229 23.2897ZM24.2673 37.7743C17.2258 37.7743 11.497 31.9317 11.497 24.75C11.497 17.5684 17.2257 11.7258 24.2673 11.7258C31.3089 11.7258 37.0377 17.5684 37.0377 24.75C37.0377 31.9317 31.3089 37.7743 24.2673 37.7743ZM9.13267 9.31431C12.8359 5.53743 17.6574 3.31631 22.8356 2.96981V8.87278C15.3554 9.56878 9.38217 15.6609 8.69975 23.2897H2.9118C3.25163 18.0086 5.42944 13.0912 9.13267 9.31431ZM2.9118 26.2103H8.69965C9.38208 33.8392 15.3554 39.9313 22.8355 40.6273V46.5302C17.6573 46.1836 12.8358 43.9626 9.13258 40.1857C5.42934 36.4089 3.25163 31.4915 2.9118 26.2103ZM39.402 40.1857C35.6988 43.9626 30.8773 46.1837 25.6991 46.5302V40.6273C33.1792 39.9313 39.1525 33.8392 39.8349 26.2103H45.6228C45.2831 31.4915 43.1053 36.4089 39.402 40.1857Z" />
                    </g>
                    <defs>
                        <clipPath id="clip0_196_1946">
                            <rect width="48.5347" height="49.5" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            @endslot
        </x-care-about-card>

        <x-care-about-card title="{!! $page->trans('care-about.4.title') !!}" description="{!! $page->trans('care-about.4.desc') !!}">
            @slot('icon')
                <svg width="55" height="50" viewBox="0 0 55 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_196_1961)">
                        <path class="fill-yellow-950 dark:fill-yellow-200"
                            d="M54.1648 38.7418L51.0863 31.2536V7.34668C51.0863 4.94777 48.9468 2.99609 46.3169 2.99609H7.94912C5.31923 2.99609 3.17965 4.94777 3.17965 7.34668V31.2536L0.101219 38.7418C0.0342342 38.9046 0 39.077 0 39.251V42.1514C0 44.5503 2.13959 46.502 4.76947 46.502H49.4965C52.1264 46.502 54.266 44.5503 54.266 42.1514V39.251C54.266 39.077 54.2318 38.9046 54.1648 38.7418ZM6.3593 7.34668C6.3593 6.54704 7.07249 5.89648 7.94912 5.89648H46.3169C47.1935 5.89648 47.9067 6.54704 47.9067 7.34668V30.0664H6.3593V7.34668ZM5.87122 32.9668H48.3949L50.3822 37.8008H3.88394L5.87122 32.9668ZM51.0863 42.1514C51.0863 42.951 50.3731 43.6016 49.4965 43.6016H4.76947C3.89284 43.6016 3.17965 42.951 3.17965 42.1514V40.7012H51.0863V42.1514Z" />
                        <path class="fill-yellow-400"
                            d="M36.3235 12.2416C35.775 11.6162 34.7745 11.5148 34.0889 12.0151C33.4033 12.5154 33.2921 13.428 33.8406 14.0534L37.2856 17.9815L33.8406 21.9096C33.2921 22.535 33.4033 23.4476 34.0889 23.9479C34.7746 24.4482 35.775 24.3468 36.3235 23.7213L40.563 18.8874C41.0276 18.3578 41.0276 17.6052 40.563 17.0756L36.3235 12.2416Z" />
                        <path class="fill-yellow-400"
                            d="M20.177 12.0151C19.4913 11.5148 18.4909 11.6162 17.9424 12.2416L13.7029 17.0756C13.2384 17.6052 13.2384 18.3578 13.7029 18.8874L17.9424 23.7213C18.4909 24.3468 19.4914 24.4482 20.177 23.9479C20.8626 23.4476 20.9738 22.535 20.4253 21.9096L16.9803 17.9815L20.4253 14.0534C20.9738 13.428 20.8626 12.5154 20.177 12.0151Z" />
                        <path class="fill-yellow-400"
                            d="M29.617 8.35136C28.7623 8.16796 27.9063 8.65126 27.7052 9.43089L23.4657 25.8663C23.2646 26.646 23.7945 27.4267 24.6492 27.6101C25.5039 27.7936 26.3598 27.3102 26.5609 26.5306L30.8004 10.0952C31.0016 9.31555 30.4718 8.53476 29.617 8.35136Z" />
                    </g>
                    <defs>
                        <clipPath id="clip0_196_1961">
                            <rect width="54.266" height="49.5" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            @endslot
        </x-care-about-card>
    </div>
</div>
