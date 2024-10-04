<div id="contact-section" class="section scroll-spy-indicator-subscriber"
    data-scroll-indicator-text="{!! $page->trans('scroll-indicator.contact') !!}">
    <x-section-heading text="{!! $page->trans('contact-me.heading') !!}" />

    <div class="flex flex-col gap-12 lg:flex-row">

        <div class="flex flex-col gap-6 lg:flex-1 lg:gap-10">
            <p class="text-balance">
                {!! $page->trans('contact-me.p.1') !!}.
            </p>

            <div>
                <p>{!! $page->trans('contact-me.p.2') !!}</p>
                <strong>contact@amranich.dev</strong>
            </div>

            <div>
                <p>{!! $page->trans('contact-me.p.3') !!}</p>
                <ul class="flex items-center gap-3 mt-3">
                    <li>
                        <a href="{{ $page->links->github }}" target="_blank">
                            <svg class="group w-8 h-8" viewBox="0 0 30 31" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    class="fill-brown-400 group-hover:fill-brown-700 dark:fill-yellow-200 dark:group-hover:fill-yellow-50"
                                    d="M26.25 30.6133H18.6914C18.7305 30.3594 18.75 30.1152 18.75 29.8809C18.75 28.2207 18.5596 26.5557 18.1787 24.8857C17.7979 23.2158 17.2656 21.9707 16.582 21.1504C19.1211 20.9355 21.0547 20.1885 22.3828 18.9092C23.7109 17.6299 24.375 15.9746 24.375 13.9434C24.375 12.166 23.75 10.7988 22.5 9.8418V7.17578C22.5 6.98047 22.3926 6.77539 22.1777 6.56055C21.9629 6.3457 21.7578 6.23828 21.5625 6.23828C21.3281 6.23828 20.166 6.92188 18.0762 8.28906C17.1582 8.17188 16.1328 8.11328 15 8.11328C13.8672 8.11328 12.8418 8.17188 11.9238 8.28906C9.83398 6.92188 8.67188 6.23828 8.4375 6.23828C8.24219 6.23828 8.03711 6.3457 7.82227 6.56055C7.60742 6.77539 7.5 6.98047 7.5 7.17578C7.5 7.35156 7.48047 7.78125 7.44141 8.46484C7.40234 9.14844 7.37305 9.64648 7.35352 9.95898C6.20117 10.916 5.625 12.2441 5.625 13.9434C5.625 15.9746 6.28906 17.6299 7.61719 18.9092C8.94531 20.1885 10.8789 20.9355 13.418 21.1504C13.3203 21.2871 13.1836 21.4922 13.0078 21.7656C12.168 22.6641 10.957 23.1133 9.375 23.1133C9.0625 23.1133 8.75 22.9863 8.4375 22.7324C8.125 22.4785 7.81738 22.166 7.51465 21.7949C7.21191 21.4238 6.89453 21.0527 6.5625 20.6816C6.23047 20.3105 5.82031 19.998 5.33203 19.7441C4.84375 19.4902 4.31641 19.3633 3.75 19.3633C3.75 19.5195 3.84766 19.7197 4.04297 19.9639C4.23828 20.208 4.49707 20.5303 4.81934 20.9307C5.1416 21.3311 5.41016 21.7461 5.625 22.1758C6.13281 23.1719 6.66016 23.8896 7.20703 24.3291C7.75391 24.7686 8.47656 24.9883 9.375 24.9883C10.3125 24.9883 11.1621 24.8516 11.9238 24.5781C11.4746 26.2969 11.25 28.0645 11.25 29.8809C11.25 30.1152 11.2695 30.3594 11.3086 30.6133H3.75C2.71484 30.6133 1.83105 30.2471 1.09863 29.5146C0.366211 28.7822 0 27.8984 0 26.8633V4.36328C0 3.32812 0.366211 2.44434 1.09863 1.71191C1.83105 0.979492 2.71484 0.613281 3.75 0.613281H26.25C27.2852 0.613281 28.1689 0.979492 28.9014 1.71191C29.6338 2.44434 30 3.32812 30 4.36328V26.8633C30 27.8984 29.6338 28.7822 28.9014 29.5146C28.1689 30.2471 27.2852 30.6133 26.25 30.6133Z" />
                            </svg>
                        </a>

                    </li>
                    <li>
                        <a href="{{ $page->links->behance }}" target="_blank">
                            <svg class="group w-8 h-8" viewBox="0 0 30 31" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    class="fill-brown-400 group-hover:fill-brown-700 dark:fill-yellow-200 dark:group-hover:fill-yellow-50"
                                    d="M28.8 0.613281H1.2C0.53625 0.613281 0 1.14953 0 1.81328V29.4133C0 30.077 0.53625 30.6133 1.2 30.6133H28.8C29.4637 30.6133 30 30.077 30 29.4133V1.81328C30 1.14953 29.4637 0.613281 28.8 0.613281ZM18.2437 9.57203H23.4338V10.8358H18.2437V9.57203ZM15 19.9933C14.7572 20.4541 14.4106 20.8521 13.9875 21.1558C13.545 21.4633 13.0538 21.6883 12.5325 21.8195C11.9871 21.9657 11.4246 22.0376 10.86 22.0333H4.65V9.24203H10.6875C11.2987 9.24203 11.8538 9.29828 12.36 9.40328C12.8625 9.50828 13.29 9.68828 13.65 9.93203C14.0062 10.1758 14.2875 10.502 14.4862 10.907C14.6812 11.3083 14.7825 11.8108 14.7825 12.407C14.7825 13.052 14.6362 13.5845 14.3437 14.0158C14.0475 14.447 13.62 14.7958 13.0387 15.0695C13.83 15.2945 14.4113 15.6958 14.7937 16.2583C15.1838 16.8283 15.375 17.5108 15.375 18.3133C15.375 18.9658 15.2513 19.5245 15 19.9933ZM25.455 18.0133H18.765C18.765 18.7408 19.0163 19.4383 19.395 19.8133C19.7775 20.1845 20.325 20.372 21.0412 20.372C21.5587 20.372 21.9975 20.2408 22.3725 19.982C22.7437 19.7233 22.9688 19.4495 23.0512 19.1645H25.2937C24.9338 20.2783 24.3862 21.0733 23.6437 21.5533C22.9087 22.0333 22.0087 22.2733 20.9625 22.2733C20.2312 22.2733 19.575 22.1533 18.9862 21.9245C18.42 21.7033 17.91 21.3658 17.49 20.9308C17.0759 20.4841 16.7558 19.9587 16.5487 19.3858C16.32 18.752 16.2075 18.0845 16.215 17.4133C16.215 16.7195 16.3312 16.0745 16.5562 15.4745C16.9875 14.3083 17.8838 13.3745 19.0275 12.8908C19.6388 12.6358 20.295 12.5083 20.9588 12.5158C21.7463 12.5158 22.4287 12.6658 23.0212 12.9733C23.5916 13.2669 24.0869 13.6878 24.4687 14.2033C24.8475 14.717 25.1138 15.302 25.2825 15.962C25.4438 16.6108 25.5 17.2933 25.455 18.0133ZM20.88 14.4283C20.475 14.4283 20.1338 14.4995 19.8713 14.6383C19.6088 14.777 19.3912 14.9495 19.2262 15.1483C19.0691 15.3402 18.953 15.5622 18.885 15.8008C18.825 15.9995 18.7838 16.202 18.7688 16.4083H22.9125C22.8525 15.7595 22.6275 15.2795 22.3275 14.942C22.0125 14.6083 21.5063 14.4283 20.88 14.4283ZM11.5612 14.0495C11.8875 13.8133 12.045 13.4233 12.045 12.887C12.0563 12.632 12.0037 12.3808 11.8912 12.152C11.79 11.9683 11.64 11.8145 11.4562 11.7058C11.2657 11.5902 11.0541 11.5138 10.8337 11.4808C10.5938 11.4358 10.35 11.4133 10.11 11.417H7.47375V14.4058H10.3275C10.8187 14.4095 11.235 14.2895 11.5612 14.0495ZM12.0037 16.7495C11.6362 16.4683 11.145 16.3295 10.5337 16.3295H7.46625V19.8545H10.4737C10.755 19.8545 11.0138 19.8283 11.265 19.7758C11.5162 19.7233 11.7413 19.6333 11.9325 19.5058C12.1238 19.382 12.2775 19.2133 12.3937 18.9958C12.5062 18.7783 12.5625 18.5008 12.5625 18.167C12.5625 17.5033 12.375 17.0345 12.0037 16.7495Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $page->links->linkedin }}" target="_blank">
                            <svg class="group w-8 h-8" viewBox="0 0 30 31" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    class="fill-brown-400 group-hover:fill-brown-700 dark:fill-yellow-200 dark:group-hover:fill-yellow-50"
                                    fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.7099e-07 3.11965C3.7099e-07 2.45492 0.264063 1.81742 0.734097 1.34738C1.20413 0.877347 1.84163 0.613285 2.50636 0.613285H27.4909C27.8203 0.612747 28.1466 0.677189 28.4511 0.802921C28.7556 0.928653 29.0323 1.11321 29.2653 1.34602C29.4984 1.57882 29.6833 1.85532 29.8093 2.15966C29.9354 2.46401 30.0002 2.79023 30 3.11965V28.1042C30.0004 28.4337 29.9357 28.76 29.8099 29.0645C29.684 29.369 29.4993 29.6457 29.2664 29.8787C29.0335 30.1117 28.7569 30.2966 28.4525 30.4226C28.148 30.5487 27.8218 30.6135 27.4923 30.6133H2.50636C2.17711 30.6133 1.85108 30.5484 1.5469 30.4224C1.24273 30.2963 0.96637 30.1116 0.733615 29.8787C0.50086 29.6458 0.316271 29.3694 0.190394 29.0651C0.0645181 28.7609 -0.000178767 28.4348 3.7099e-07 28.1056V3.11965ZM11.8745 12.0515H15.9368V14.0915C16.5232 12.9187 18.0232 11.8633 20.2773 11.8633C24.5986 11.8633 25.6227 14.1992 25.6227 18.4851V26.4242H21.2495V19.4615C21.2495 17.0206 20.6632 15.6433 19.1741 15.6433C17.1082 15.6433 16.2491 17.1283 16.2491 19.4615V26.4242H11.8745V12.0515ZM4.37455 26.2374H8.74909V11.8633H4.37455V26.236V26.2374ZM9.375 7.1751C9.38325 7.54966 9.3166 7.92208 9.17896 8.27053C9.04133 8.61898 8.83548 8.93642 8.5735 9.20424C8.31152 9.47205 7.99868 9.68484 7.65335 9.83011C7.30802 9.97538 6.93714 10.0502 6.5625 10.0502C6.18786 10.0502 5.81698 9.97538 5.47165 9.83011C5.12632 9.68484 4.81348 9.47205 4.5515 9.20424C4.28952 8.93642 4.08367 8.61898 3.94604 8.27053C3.8084 7.92208 3.74175 7.54966 3.75 7.1751C3.76619 6.4399 4.06962 5.74027 4.5953 5.22604C5.12098 4.7118 5.82712 4.42385 6.5625 4.42385C7.29788 4.42385 8.00402 4.7118 8.5297 5.22604C9.05538 5.74027 9.35881 6.4399 9.375 7.1751Z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="contactMeForm" action="/send_email.php" method="POST" class="flex flex-col gap-4 lg:flex-1">

            <input type="text" name="fullname" class="control" placeholder="{!! $page->trans('contact-me.form.fullname.placeholder') !!}" required>

            <input type="email" name="email" class="control" placeholder="{!! $page->trans('contact-me.form.email.placeholder') !!}" required>

            <textarea name="message" class="control h-36" placeholder="{!! $page->trans('contact-me.form.message.placeholder') !!}" required></textarea>

            <div class="alerts flex flex-col gap-3 hidden"></div>

            <x-buttons.primary submit="" text="send" />

        </form>

    </div>
</div>
