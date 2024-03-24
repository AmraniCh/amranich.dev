<!DOCTYPE html>
<html lang="{{ $page->getPath() ?: $page->local }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->trans('siteDescription') }}">

    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->trans('siteName') }}</title>

    <meta name="title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->trans('siteName') }}">

    <meta name="author" content="{{ $page->author }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->trans('siteName') }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="/" />
    <meta property="og:description" content="{{ $page->description ?? $page->trans('siteDescription') }}" />
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/me.png" />

    <link rel="home" href="{{ $page->baseUrl }}">

    <link rel="favicon" type="image/x-icon" href="/assets/icons/favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png" />

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-57x57-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-60x60-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-72x72-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-76x76-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-114x114-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-120x120-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-144x144-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-152x152-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-180x180-touch-icon.png" />

    <link rel="icon" type="image/png" sizes="196x196" href="/assets/icons/android-chrome-196x196.png" />

    <meta name="theme-color" content="#f0e5cd" />

    <meta name="msapplication-TileColor" content="#f0e5cd" />
    <meta name="msapplication-TileImage" content="/assets/icons/windows-tile.png">
    <meta name="msapplication-square70x70logo" content="/assets/icons/windows-small-tile.png" />
    <meta name="msapplication-square150x150logo" content="/assets/icons/windows-medium-tile.png" />
    <meta name="msapplication-wide310x150logo" content="/assets/icons/windows-wide-tile.png" />
    <meta name="msapplication-square310x310logo" content="/assets/icons/windows-large-tile.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dangrek:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <noscript>
        <style>
            .noscript-opacity-1,
            .section {
                opacity: 1;
            }

            .hero-section {
                height: 92vh;
            }

            #navbar-default li:last-child,
            .dark-mode-toggle-btn {
                display: none
            }

            @media (min-width: 1024px) {
                #navbar-default {
                    gap: 3.9rem;
                }
            }

            @media (min-width: 1280px) {
                #navbar-default {
                    gap: 4.5rem;
                }
            }

            :target {
                animation: fadeInUp 1.5s ease;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </noscript>
</head>

<body class="sm:p-2 md:py-4 md:px-4 lg:px-8 lg:py-8 bg-yellow-200 text-yellow-800 dark:md:bg-dark dark:text-yellow-200">

    @yield('body')

    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')

    <div id="archive-viewer" class="archive-viewer-overlay px-12 pt-12">
        <div class="max-w-7xl m-auto h-full">
            <div class="flex justify-between items-center">
                <div class="flex flex-col gap-2">
                    <a class="flex items-center gap-1 text-xl font-bold" href="#archive-project-tip">
                        <svg class="w-4 h-4 fill-yellow-900" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>

                        Return
                    </a>
                    <h2 class="text-4xl font-bold">Projects Archive</h2>
                </div>

                <a href="#archive-project-tip">
                    <svg class="w-8 h-8 fill-yellow-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </a>
            </div>

            <div class="content mt-8 pr-4 overflow-auto h-[calc(100vh-30%)]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repellat ad atque id asperiores
                commodi doloribus hic, laudantium mollitia architecto exercitationem inventore reprehenderit tempora
                autem quasi odio animi nam eius.
                Ab quo fugit optio dolor atque nulla repellat corporis odit facere, ea quod fuga minima amet, odio error
                aspernatur. Autem ea sapiente ab quas tenetur, in incidunt ducimus amet omnis.
                Consequatur, aperiam deserunt. Unde magnam iste cum perferendis saepe impedit consequatur rerum dolores
                a, facilis iusto, inventore veritatis alias reiciendis nulla harum atque labore enim necessitatibus
                deleniti culpa quidem ut.
                Aspernatur quia eligendi dolorem nihil quidem non. Porro quibusdam quod laboriosam pariatur ipsum,
                reprehenderit corporis placeat, labore necessitatibus nihil dignissimos veritatis itaque sint
                accusantium quisquam velit deserunt vero a harum!
                Nisi inventore, soluta facere vero iure doloribus odit assumenda cumque enim ducimus! Laborum recusandae
                reprehenderit, vero minima, perferendis modi nihil pariatur itaque maxime ipsum voluptates fugit, omnis
                nam adipisci. Obcaecati.
                Ullam aliquam omnis obcaecati neque deleniti iusto quaerat quo necessitatibus sit, velit laboriosam
                architecto eveniet asperiores repellendus, dolores mollitia quos voluptas minus vero amet culpa magni
                voluptates rem. Voluptatem, rem.
                Vel, eveniet nobis ea reprehenderit fugit deserunt officia qui asperiores aut placeat natus tempora
                eaque dolorum est sed et. Atque corrupti saepe perferendis dolorem veritatis commodi velit officia iure
                enim!
                Et, non doloremque illum nulla nobis ut eligendi praesentium itaque, nemo maxime iusto ratione sapiente.
                Tempore officiis a aliquam quae iure maxime! Sit voluptate ipsa vero deleniti asperiores dignissimos
                similique.
                Numquam iusto, ipsa perferendis tempore, hic quae voluptatum magnam harum quos neque excepturi fugit, ad
                dicta ut mollitia obcaecati autem. Nobis illum sunt officia sed voluptatem. Commodi blanditiis magnam
                laudantium.
                Cupiditate soluta alias minima molestiae fugiat veniam odio, dolores illum deserunt eveniet ullam non
                eligendi, perferendis earum dolorum magni temporibus nulla et sint quod nobis error hic ex! Ut, quaerat.
                Perspiciatis accusamus ad architecto earum totam, provident cum tempora obcaecati reiciendis, vel
                voluptatibus recusandae quo suscipit reprehenderit eius asperiores nesciunt esse porro soluta dolore
                facere, est consequuntur! Et, exercitationem doloribus?
                Deleniti, quod porro illum laudantium excepturi harum natus adipisci dolor placeat autem eveniet ipsum
                asperiores velit eligendi minima numquam ducimus alias quidem inventore fuga expedita explicabo commodi
                maiores! Commodi, dolor?
                Dolorem tempore dicta, nihil minus unde quia sequi pariatur. Fugit, rerum molestias soluta, dignissimos
                vitae ea dolores enim doloribus ullam, cupiditate doloremque itaque sit totam quae nesciunt libero ipsa
                rem?
                Delectus ipsum suscipit ab perferendis nam vitae omnis, accusantium animi quod culpa, possimus
                consequuntur dignissimos excepturi commodi aliquid in ea? Aperiam illum quis consequuntur dicta nostrum
                quaerat temporibus itaque iste.
                Quod odio dolore dicta aliquid neque quidem itaque maiores ut excepturi eligendi dolor voluptates
                commodi repellat placeat voluptate dolorem, perferendis corrupti enim ipsa rerum error numquam, eum
                asperiores? Labore, voluptates?
                Culpa veniam iusto porro quaerat eligendi id possimus laudantium qui labore, veritatis blanditiis
                magnam. Officiis, minima eum reprehenderit praesentium maiores quidem enim accusamus velit quibusdam
                repudiandae, magnam blanditiis tempora itaque.
                Beatae laboriosam, optio error natus illo corporis incidunt sit pariatur veniam consectetur animi
                assumenda enim quo eaque harum totam! Soluta rem repellat asperiores inventore illum dolore voluptas
                necessitatibus, repellendus facere.
                Maxime dolor voluptatibus dolores alias saepe fugiat quo perspiciatis sint harum quisquam natus quia
                temporibus itaque dolorem debitis ab doloremque ipsam laboriosam voluptatem eos, voluptas, officia eius
                numquam minus. Ex?
                Molestias, quidem fugiat minima, commodi mollitia qui molestiae facere perspiciatis deserunt odio vero
                accusantium unde veritatis ut ab aspernatur maxime eveniet ipsum iure cumque possimus quae deleniti
                asperiores? Ipsa, incidunt!
                In fugit necessitatibus eius odit repellendus provident, minus temporibus veritatis soluta id iure
                officiis eligendi dolores voluptatum sunt vitae mollitia, eveniet incidunt maiores maxime porro, et
                quaerat hic! Modi, harum!
                Nostrum, quasi facere autem, voluptas consequatur voluptate nesciunt exercitationem, beatae numquam quis
                quibusdam officiis! Ab non, ipsam provident modi aperiam enim voluptatem cum, fuga esse quisquam cumque,
                qui iste dolore.
                Obcaecati ea repudiandae, fugiat veritatis eius vitae quia maxime, ab dolorem a soluta laborum voluptas
                harum nihil mollitia voluptatibus? Eveniet, vitae aliquam? Dolores est provident aperiam reiciendis,
                nihil tempore doloremque?
                Modi laboriosam illum in beatae quasi, suscipit atque. Dolores est explicabo aspernatur ipsum autem
                molestias nam recusandae eius assumenda dignissimos nulla similique commodi porro, hic distinctio cumque
                aperiam iste fugit.
                Dignissimos magni quae in aut, voluptate modi laboriosam eligendi sunt aperiam expedita ex cum ea
                perferendis non enim eius itaque. Perferendis incidunt enim doloribus eaque quidem. Laborum doloremque
                minus officiis!
                Aspernatur aut amet distinctio atque accusantium incidunt nisi pariatur sit nostrum id necessitatibus
                porro, sapiente iusto facilis ipsa molestiae libero ipsam vel quaerat? Doloribus earum, nam id quod a
                aperiam?
                Sit, atque harum officia nemo ipsum alias perferendis temporibus a tenetur quo eum fugit commodi
                reprehenderit praesentium ex est accusantium minus iste ad. Alias nobis fuga voluptates labore possimus.
                Nobis.
                Voluptatum sequi ducimus molestias voluptate iure dolorem et mollitia ipsa accusantium sunt. Eum quidem
                quos dicta nesciunt laborum. Laboriosam consectetur praesentium nisi animi deserunt sed iusto, iste quos
                omnis voluptatibus.
                Saepe architecto doloremque odio quibusdam obcaecati. Quis aliquid iure dolorem non ratione commodi!
                Commodi magni animi fugit ullam dignissimos iusto aliquid, impedit ea incidunt accusamus deleniti.
                Voluptates repellendus quisquam dolorem.
                Maxime accusamus necessitatibus commodi sit dolor, dolore eligendi. Quas molestias eaque culpa cum natus
                excepturi laborum magni? Et repellat ex aspernatur doloribus? Cumque consequatur qui reprehenderit fuga
                nesciunt? Tempora, ea.
                Eos qui tempora necessitatibus vitae, at nostrum optio totam suscipit ab enim et quis labore eveniet,
                obcaecati veritatis deleniti modi iste! Voluptate fugit culpa itaque non officiis exercitationem facilis
                distinctio.
                Dolor neque perferendis doloremque id beatae? Doloremque, repudiandae nobis numquam nostrum pariatur
                esse quasi error quam dolores a necessitatibus hic voluptatibus iusto modi quibusdam, eum unde obcaecati
                rem minus deleniti.
                Excepturi quis odio quasi at expedita suscipit aliquid voluptates iusto nulla facilis eius nisi dolores
                tempore ipsa, fugit mollitia quas consequuntur quod inventore aperiam veniam animi magni, debitis illo!
                Illum!
                Iusto fugiat accusantium saepe omnis maiores aliquid rerum ratione soluta sequi nemo pariatur distinctio
                doloremque, possimus ea molestias quas porro placeat, obcaecati assumenda. Eum quas quaerat, autem
                consequuntur eius voluptas.
                Ducimus, voluptatibus, amet eius nulla nihil deserunt ratione assumenda fugit iusto quisquam quam eos.
                Maiores error eum sit officia, sed in? Aut perspiciatis itaque omnis recusandae unde. Eveniet, ut
                laborum!
                Totam, dolorum tempore quisquam voluptas voluptatem labore sequi qui id maxime quis harum soluta
                corrupti. Ab quos, neque molestiae laboriosam corrupti eveniet soluta ex id, velit esse beatae quae
                explicabo!
                Nostrum quos quod reiciendis hic dignissimos illo laboriosam id consectetur labore. Doloremque
                aspernatur dicta optio eveniet ratione minus voluptatem commodi odio, sint esse enim ea. Molestias
                facilis eos quo autem.
                Hic dolore dolores dicta inventore impedit nobis ad consectetur amet cupiditate labore. Error inventore
                vero ratione dolores alias nemo officia, beatae, ducimus enim, repudiandae architecto quo laudantium
                tenetur similique suscipit?
                Architecto totam dolores praesentium? Rem, explicabo assumenda atque fugiat quos sunt qui corporis quam.
                Doloribus ipsum possimus mollitia. Mollitia delectus distinctio incidunt quod. Aperiam dolorum,
                voluptate optio facilis ut cupiditate!
                Nihil atque facilis quia, asperiores non aliquid quam nisi reiciendis quas a! Perspiciatis atque,
                commodi exercitationem maiores aliquid neque asperiores velit consequuntur unde ad accusantium ea quam
                quod possimus nostrum!
                Maiores suscipit deleniti vero laboriosam obcaecati explicabo atque cumque a, voluptate iste similique
                est sint nemo voluptas eum quidem ratione, velit quaerat id eius! Incidunt quibusdam voluptate natus?
                Tempore, eum.
                Mollitia eligendi quae debitis est illo officiis et error blanditiis voluptates doloremque, eveniet
                beatae nihil? Rerum quaerat, nisi corrupti aliquam amet harum ex possimus dolor magnam. Voluptatem est
                quam optio.
                Inventore ut corporis, excepturi nobis maxime repellat eum molestiae ducimus earum vero dicta fuga
                repudiandae atque similique necessitatibus est rerum voluptatibus pariatur quia officiis sunt! Delectus
                quis nulla laboriosam consequatur!
                Obcaecati tempore ullam exercitationem laboriosam dolorum, libero earum sit non neque culpa recusandae
                tempora consequatur ea cupiditate quaerat eligendi praesentium maxime animi sunt! Fugit, nihil culpa.
                Qui porro iste iure?
                Ea, a eaque ad id nihil sed esse dolor? Similique, dignissimos quae. Facilis tempore aperiam veniam
                blanditiis saepe, tempora est itaque quae sed praesentium quidem sit neque laboriosam corporis. Dolor?
                Officia quis dicta incidunt officiis. Soluta cumque animi quas accusamus tempore, dolorem cupiditate.
                Tempora minus, cum ullam quae sunt debitis, quam, eius explicabo harum fugiat suscipit fugit ex eum
                unde.
                Commodi explicabo omnis temporibus eum, nam error sit sint minus et laudantium laborum exercitationem
                libero aperiam a? Vitae voluptatibus sunt voluptas fugiat, officia necessitatibus eaque quaerat deleniti
                blanditiis fuga inventore.
                Corrupti id ipsum, impedit ut obcaecati eveniet perspiciatis aut numquam quos molestiae totam vero vitae
                repudiandae natus libero voluptatem dolore cumque! Rerum voluptates adipisci praesentium nulla nemo,
                porro molestias sed?
                Eaque quos eum inventore tempora, sit impedit animi velit incidunt expedita harum, sunt porro ut alias
                laborum illo itaque. Dolore laborum sunt accusantium quod quibusdam voluptatibus esse porro, corrupti
                eaque!
                Deserunt minus voluptatibus beatae praesentium necessitatibus. Cupiditate quo inventore excepturi
                voluptate aliquam omnis ipsam ab, numquam eveniet quis aspernatur ut cumque, perferendis, ad dolores
                quidem. Beatae, odio ut. Omnis, architecto?
                Delectus omnis rerum sint aut quia. Tenetur, nulla quo. Minima sed sint rem eaque harum! Provident modi,
                hic ipsum, adipisci ad exercitationem voluptates culpa sint laborum voluptatibus ea quae praesentium?
            </div>
        </div>
    </div>
</body>

</html>
