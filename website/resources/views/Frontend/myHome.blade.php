

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Bento</title>

    <!-- Normalize CSS: Option 1 (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />

    <style>
        @import "normalize.css";

        #new .bleed-canvas {
            width: 100vw;
            height: 100%;
            position: absolute;
        }

        #new .chopsticks {
            height: 20%;
            position: absolute;
            right: 0;
            top: 10%;
        }

        #new .veribear {
            width: 10vmin;
            position: absolute;
            bottom: 5%;
            right: 5%;
            rotate: -20deg;
        }

        #new .bento {
            position: absolute;
            bottom: 0%;
            left: 10%;
            rotate: 90deg;
            height: 40vmin;
        }

        @media (max-width: 768px) {
            #new .bento {
                height: 60vmin;
            }
        }

        #new h1 {
            font-size: clamp(2rem, 6vw + 1rem, 8rem);
            font-weight: 600;
            background: linear-gradient(90deg, oklch(36% 0.50 340), oklch(90% 0.5 200));
            color: transparent;
            -webkit-background-clip: text;
        }

        #new section:nth-of-type(1) {
            height: 100vh;
            display: grid;
            place-items: center;
            background: transparent;
        }

        #new .container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }

        #new .sticky {
            width: 50%;
            aspect-ratio: 1;
            position: sticky;
            bottom: 0;
        }

        #new .sticky img {
            width: 150%;
            position: absolute;
            bottom: 0;
            translate: -5% 0;
        }

        #new section {
            container-type: inline-size;
        }

        #new section:nth-of-type(2) p {
            font-weight: 600;
            font-size: clamp(1.5rem, 3vw + 1rem, 4rem);
            text-align: center;
            max-width: 80%;
            margin: 25vh auto;
            background: linear-gradient(to right in oklab,
                    oklch(63% 0.50 337) 0%, oklch(36% 0.50 340) 37% 37%, oklch(90% 0.5 200) 97% 97%);
            color: transparent;
            -webkit-background-clip: text;
            overflow: visible;
        }

        #new .box {
            container-type: inline-size;
        }

        #new .box .logo {
            width: clamp(1rem, 4vw + 1rem, 4rem);
            aspect-ratio: 1;
            background: linear-gradient(90deg, purple, lightblue);
            justify-self: start;
            position: absolute;
            bottom: 100%;
            translate: 0 -25%;
            mask: url('data:image/svg+xml;utf8,<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z" clip-rule="evenodd" /></svg>') center/contain no-repeat;

        }

        #new .box svg path {
            fill: blue;
        }

        #new p {
            position: relative;
        }


        #new section:nth-of-type(3) h2 {
            font-size: clamp(2rem, 8vw + 1rem, 12rem);
            font-weight: 600;
            background: linear-gradient(90deg, purple, lightblue);
            color: transparent;
            -webkit-background-clip: text;
            /*	translate: 0 20%;*/
        }

        #new section:nth-of-type(4) {
            display: grid;
            padding-top: 2rem;
            gap: 4rem;
        }

        #new section:nth-of-type(4) .box:first-of-type {
            margin-bottom: 8rem;
        }

        /* Box styling */

        #new .box {
            width: 100%;
            background: hsl(0 0% 100%);
            border-radius: 2rem;
            display: grid;
            grid-template-columns: 0.6fr 0.4fr;
            gap: 1rem;
            justify-content: end;
            padding: 1rem;
        }

        #new .box__content {
            display: grid;
            place-items: center;
            grid-column: 2;
            min-height: 40cqi;
            padding: 2rem 0rem;
            align-content: center;
            jutify-items: start;
        }

        #new .box p {
            font-weight: 600;
            color: hsl(0 0% 50%);
            font-size: clamp(0.875rem, 0.5vw + 1rem, 2rem);
        }

        #new .box--two {
            position: absolute;
            bottom: 0;
            z-index: -1;
        }


        #new .box--two p {
            font-size: clamp(1rem, 2vw + 1rem, 2.75rem);
            color: black;
            font-weight: 500;
        }

        #new .box--two p span {
            background: linear-gradient(90deg, purple, lightblue);
            color: transparent;
            -webkit-background-clip: text;
        }

        @media(max-width: 768px) {
            #new .box--two {
                padding: 2rem 1rem;
            }

            #new .box--two p {
                font-size: clamp(0.875rem, 0.5vw + 1rem, 2rem);
            }
        }

        @media(min-width: 768px) {
            #new .box {
                padding: 2rem;
            }
        }

        #new section:nth-of-type(4) {
            z-index: 2;
            position: relative;
        }

        #new section:nth-of-type(5) {
            display: grid;
            gap: 2rem;
            grid-template-columns: 1fr 1fr;
            padding: 4rem 0 20vh 0;
            transform-style: preserve-3d;
        }

        #new section:nth-of-type(5)::before {
            content: "";
            z-index: -1;
            background: red;
            position: absolute;
            bottom: 0;
            height: calc(100% + 60cqi);
            width: 100vw;
            left: 50%;
            translate: -50% 0;
            border-radius: 0 0 10vmin 10vmin;
            background: linear-gradient(hsl(333, 61%, 77%), hsl(221, 43%, 41%));
            mask: linear-gradient(transparent, white 25%);
        }

        #new .container {
            container-type: inline-size;
        }

        @container (max-width: 420px) {
            #new section:nth-of-type(5) {
                grid-auto-flow: row;
                grid-template-columns: 1fr;
            }

            #new section:nth-of-type(5)::before {
                height: calc(100% + 120cqi);
            }
        }

        #new section:nth-of-type(6) {
            min-height: 80vh;
            display: grid;
            place-items: center;
        }

        #new section:nth-of-type(6) h2 {
            font-size: clamp(2rem, 3vw + 1rem, 8rem);
        }

        #new section:nth-of-type(6) svg {
            width: 30%;
            position: absolute;
            stroke: hsl(0 0% 0%);
            right: 10%;
            bottom: 10%;
            rotate: 10deg;
        }

        #new .bento--mini {
            aspect-ratio: 1;
            background: hsl(0 0% 100%);
            border-radius: 2rem;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            place-items: center;
            position: relative;
        }

        #new :is(.bird, .bear) {
            width: 100%;
            rotate: -12deg;
            transition: scale 0.2s;
            position: absolute;
            top: 50%;
            left: 0%;
            translate: -50% -50%;
        }

        #new .bird {
            fill: #1D9BF0;
            translate: -40% -25%;
        }

        #new .bear {
            rotate: -26deg;
        }

        #new .bento--mini a {
            text-decoration: none;
            font-size: clamp(1.5rem, 2vw + 1rem, 2rem);
            font-weight: 600;
            color: hsl(0 0% 5%);
            position: relative;
        }

        #new .bento--mini:is(:hover, :focus-within) svg {
            scale: 1.4;
        }

        #new .bento--mini a::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        #new .bento--mini a .logo {
            width: clamp(1rem, 4vw + 1rem, 2rem);
            aspect-ratio: 1;
            background: linear-gradient(90deg, purple, lightblue);
            justify-self: start;
            position: absolute;
            bottom: 100%;
            translate: 0 -25%;
            mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" /></svg>') center/contain no-repeat;
        }

        #new .bento--mini:first-of-type a .logo {
            mask: url('data:image/svg+xml;utf8,<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>') center/contain no-repeat;

        }



        #new section:nth-of-type(4) .box:nth-of-type(2) {
            background: transparent;
        }

        @supports (animation-timeline: scroll()) {
            #new section {
                view-timeline-name: --section;
            }

            #new :is(.chopsticks, .bento) {
                animation: slide both linear;
                animation-timeline: --section;
                animation-range: exit 0 exit 25%;
            }

            #new .chopsticks {
                --x: 50%;
                --y: 100%;
                --opacity: 0;
            }

            #new .bento {
                --x: -100%;
                --y: 100%;
                --opacity: 0;
            }

            @keyframes slide {
                to {
                    translate: var(--x, 0) var(--y, 0);
                    opacity: var(--opacity, 1);
                    scale: var(--scale, 1);
                }
            }

            #new section:nth-of-type(4) .box:nth-of-type(2) p {
                animation: slide both linear;
                animation-range: cover 15% cover 75%;
                animation-timeline: view();
                --opacity: 0;
                --y: -10%;
            }

            #new section:nth-of-type(5)::before {
                translate: -50% 10%;
                opacity: 0;
                animation: slide both linear;
                animation-range: entry 0 entry 25%;
                animation-timeline: --section;
                --opacity: 1;
                --y: 0;
                --x: -50%;
            }

            @keyframes slip {
                to {
                    scale: 1;
                    translate: -5% 0;
                }
            }

            #new .sticky img {
                scale: 1.5;
                translate: 30% 0;
                animation: slip both linear, slide both linear;
                animation-range: entry 50% entry 70%, exit 0% exit 15%;
                animation-timeline: --section;
                --y: 30%;
                --x: -5%;
            }

            #new section:nth-of-type(4) {
                padding-top: 8rem;
            }

            #new .sticky {
                clip-path: inset(-100% -100% 0 -100%);
            }

            #new .spacing-box {
                height: 35vh;
            }

            #new .veribear {
                animation: roll both linear;
                animation-timeline: --section;
                animation-range: exit;
            }

            @keyframes roll {
                to {
                    rotate: 720deg;
                    translate: 500% 0;
                }
            }
        }
    </style>
</head>

<body>
    <div class="about-area" id="about-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 p-0">
                    <div class="img">
                        <iframe width="100%" height="800"
                            src="https://www.youtube.com/embed/fUcECL2KLeg?controls=0&autoplay=1&mute=1"
                            title="Sociomark Showreel" frameborder="0" allow="autoplay;  picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="choose-area overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="new">
        <div class="container">
            <section>
                <h1>Sticky Bento.</h1>
                <div class="bleed-canvas">
                    <img class="chopsticks" src="https://assets.codepen.io/605876/chopsticks.png" alt="" />
                    <img class="bento" src="https://assets.codepen.io/605876/bento-box.png" alt="" />
                    <img class="veribear" src="https://assets.codepen.io/605876/Veribear.svg" alt="" />
                </div>
            </section>
            <section>
                <p>
                    How about dropping some scroll-driven animation in as a progressive
                    enhancement?
                </p>
            </section>
            <section>
                <h2>Hungry?</h2>
            </section>
            <section>
                <div class="spacing-box"></div>
                <div class="box">
                    <div class="box__content">
                        <p>
                            Get 90% with sticky positioning. For extra visual flair wrap
                            scroll-driven stuff in @supports. Progressive enhancement.
                        </p>
                    </div>
                </div>
                <div class="sticky">
                    <img src="https://assets.codepen.io/605876/phone-chat-mockup.png" alt="" />
                </div>
                <div class="box box--two">
                    <div class="box__content">
                        <p>
                            <span class="logo"></span>
                            <span>Hey Aaron</span>, it's doable. Available in Chrome 115+.
                        </p>
                    </div>
                </div>
            </section>
            <section>
                <div class="bento--mini">
                    <div>
                        <svg class="bird" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Twitter</title>
                            <path
                                d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z" />
                        </svg>
                    </div>
                    <div>
                        <a href="https://twitter.com/intent/follow?screen_name=jh3yy">
                            <span class="logo"></span>
                            Follow.
                        </a>
                    </div>
                </div>
                <div class="bento--mini">
                    <div>
                        <svg class="bear" viewBox="0 0 969 955" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="161.191" cy="332.736" r="133.191" stroke="black" stroke-width="20" />
                            <circle cx="806.809" cy="332.736" r="133.191" stroke="black" stroke-width="20" />
                            <circle cx="695.019" cy="600.278" r="31.4016" fill="black" />
                            <circle cx="272.981" cy="600.278" r="31.4016" fill="black" />
                            <path
                                d="M564.388 724.628C564.388 756.538 526.035 792.455 483.372 792.455C440.709 792.455 402.356 756.538 402.356 724.628C402.356 692.717 440.709 676.897 483.372 676.897C526.035 676.897 564.388 692.717 564.388 724.628Z"
                                fill="black" />
                            <rect x="310.42" y="460.854" width="343.468" height="51.4986" fill="#FF1E1E" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M745.643 300.784C815.368 356.729 854.539 445.167 854.539 524.286H614.938V467.196C614.938 445.657 597.477 428.196 575.938 428.196H388.37C366.831 428.196 349.37 445.657 349.37 467.196V524.286L110.949 524.286C110.949 445.167 150.12 356.729 219.845 300.784C289.57 244.839 384.138 213.41 482.744 213.41C581.35 213.41 675.918 244.839 745.643 300.784Z"
                                fill="black" />
                        </svg>
                    </div>
                    <div>
                        <a href="https://www.amazon.co.uk/s?rh=n%3A83450031%2Cp_4%3Ajh3yy">
                            <span class="logo"></span>
                            Merch.
                        </a>
                    </div>
                </div>
            </section>
            <section>
                <div class="section__content">
                    <h2>fin.</h2>
                    <svg aria-hidden="true" class="ml-6 w-1/4" stroke="var(--text-1)" fill="none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 271 209">
                        <title>Jhey</title>
                        <path
                            d="M144.745 123.82c1.907-1.258-3.266-2.199-4.184-2.418-4.076-.973-15.825-2.609-16.141 4.319-.725 15.907 36.347 5.736 16.072-3.986M102.952 112.797c-5.6848 0-6.2149 7.73-.728 7.12 6.139-.682 3.185-9.905-1.861-6.877M170.025 108.347c-1.398-2.796-7.244 2.284-4.531 6.23 2.713 3.946 8.442-.486 6.149-4.612-.608-1.094-3.096-2.133-4.288-1.537M117.998 100.704c0-9.5524-14.086-13.3378-21.4395-11.3323-11.7769 3.2119-15.927 9.6813-15.927 21.1333M187.183 101.246C182.107 82.5407 155.739 77.9455 151.5 99"
                            stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path
                            d="M40.3725 26.8984C58.6558 41.1564 141.659 43.1867 128.248 5.48254c-.337-.94488-1.163-3.24224-2.31-3.47304-1.224-.24653-4.009 4.38498-4.311 4.81425C100.965 36.1863 95.2641 73.5992 74.5923 102.644c-10.8878 15.298-59.8032 43.034-69.03244 10.837C-17.5939 32.705 78.7483 76.0672 105.741 67.4678c14.016-4.4657 19.556-16.7853 27.09-28.3056 2.387-3.6496 4.797-14.5469 7.212-10.9155 4.728 7.1114-20.401 41.6294-24.484 50.2225-4.6 9.679 13.669-31.7231 21.237-24.1359 9.433 9.4564-8.56 28.4026 16.571 7.3471 4.267-3.5745 13.215-15.2775 7.666-14.8349-7.056.563-19.468 20.1743-9.348 23.1872 9.846 2.9308 24.354-31.3131 22.327-21.2426-1.003 4.9789-5.669 18.5794 1.966 20.1168 10.559 2.1259 15.596-33.041 21.559-24.071C240.356 109.24 81.7126 283.324 50.2184 167.261 25.2159 75.1229 240.563 89.2082 268.88 137.08"
                            stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </div>
            </section>
        </div>
    </div>

</body>

</html>