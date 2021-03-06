@extends('_layouts.master')

@section('body')
<div class="hero-banner relative lg:px-8">
        <div class="hero-inner px-8 max-w-md lg:max-w-full mx-auto relative min-h-screen flex items-center">
            <div class="flex flex-col lg:flex-row w-full">
                <div class="details-section flex flex-col justify-between pb-4 lg:pb-8 xl:pb-12 pt-12 md:pt-0">
                    <div>
                        <div class="absolute pin-t pin-l ml-8 mt-4 lg:static lg:mt-0 lg:ml-0 intro-section">
                            <img src="/assets/images/thewhyt_microsite.svg" alt="The Whyt Microsite" height="24px" class="opacity-50 hidden lg:block">
                            <img src="/assets/images/microsite_mobile.svg" alt="The Whyt Microsite" height="48px" class="opacity-50 block lg:hidden">
                            <p class="font-black text-grey opacity-50 text-2xl super-condensed hidden lg:block">FullSiteUnderway//</p>
                            <a class="font-black text-yellow hover:text-white text-2xl md:inline no-underline block md:text-left tracking-tight block"
                                href="mailto:ross@whytstudio.com">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.42 61.42" height="18px">
                                    <polygon class="cls-1" points="15.29 0 0 15.36 35.18 15.36 1.37 49.17 12.21 60.02 46.06 26.17 46.06 61.42 61.42 46.13 61.42 0 15.29 0"
                                    />
                                </svg>
                                Contact
                            </a>
                        </div>
                    </div>
                    <a class="font-black text-yellow hover:text-white text-2xl no-underline lg:inline block mt-4 md:text-left tracking-tight absolute pin-b mb-8 lg:static lg:mb-0"
                        href="/downloads/portfolio.pdf">
                        <span>Portfolio</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.42 61.42" height="18px" class="flip">
                            <polygon class="cls-1" points="15.29 0 0 15.36 35.18 15.36 1.37 49.17 12.21 60.02 46.06 26.17 46.06 61.42 61.42 46.13 61.42 0 15.29 0"
                            />
                        </svg>
                    </a>
                </div>
                <div class="flex-1 logo-section lg:pl-12">
                    <div>
                        <img src="/assets/images/whyt_logo.svg" alt="Whyt Studio logo" class="w-full opacity-35 lg:hidden">
                    </div>
                    <div class="logo-block w-full text-white hidden lg:block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 437.72 111.28">
                            <path d="M243.6 65.97h25.75v24.51H243.6z" />
                            <path d="M334.2 41.34v-15.1h-13.12V6.68h-24.5v19.56h-4.84v-.74C291 14.48 283 0 258.82 0c-21.41 0-30.65 12.66-33.24 26.24l-10.42 36.89h-.24l-10.28-36.89H178.4l2.81 7.62c-4-6.21-11.12-9.23-18.65-9.23-10.4 0-15.84 3.59-20.05 8.54h-.25V2.1H94.07l-11 55.33h-.25L72.41 2.1h-24L37.75 56.69h-.24L26.74 2.1H0l24 88.38h26.62l9.29-53.84h.25l9.53 53.84h26.49l21.57-77v77h24.51V56.57c0-10.28 5.57-12.38 9.78-12.38 7.18 0 8.05 5.2 8.05 12.62v33.67h24.5V46.42a28.42 28.42 0 0 0-.31-4.23l5 13.63c1.36 3.72 10.76 27.36 10.76 30.45 0 2.85-.86 4.09-2.35 4.83-1.73.87-5 .62-7.43.62h-5.69v19.56h11.14c9.53 0 19.43.12 25.87-7.92 3.84-4.83 6.07-12.14 8.05-17.83l21.27-59.41a7.15 7.15 0 0 1 7.18-5.12c4.58 0 7.18 2.23 7.18 6.32 0 5.57-7.67 7.54-11.51 9.65-9.53 5.32-8.91 16.71-8.66 21.79H268c0-5.7 1.37-8 6.94-11.14 3.78-2.07 7.68-3.71 10.76-6.4v.08h10.9V72c0 17.57 11.51 19.18 21.9 19.18 5.2 0 10.77-.74 15.72-.74V71.92a43.3 43.3 0 0 1-5.57.37c-6.19 0-7.55-2.6-7.55-8.54V41.34z"
                                fill-rule="evenodd" />
                            <path class="flashdance" d="M386.27 69.59l50.09-50.1-14.92-14.92-50.15 50.14V3.16l-21.15 21.06v66.52h66.53l21.05-21.15h-51.45z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <p class="absolute pin-b pin-l mb-4 ml-8 font-black text-white text-2xl opacity-75 tracking-tight hidden lg:block">
                Recent
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.42 61.42" height="18px" class="flip-flop">
                    <polygon class="cls-1" points="15.29 0 0 15.36 35.18 15.36 1.37 49.17 12.21 60.02 46.06 26.17 46.06 61.42 61.42 46.13 61.42 0 15.29 0"
                    />
                </svg>
            </p>
        </div>
    </div>
    <div class="bg-grey-dark pt-40 pb-20 px-4 lg:px-0">
        <section class="max-w-lg mx-auto pb-16">
            <h3 class="text-white">
                <span class="font-black text-white text-2xl tracking-tight">Riversimple</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.42 61.42" height="18px" class="flip">
                    <polygon class="cls-1" points="15.29 0 0 15.36 35.18 15.36 1.37 49.17 12.21 60.02 46.06 26.17 46.06 61.42 61.42 46.13 61.42 0 15.29 0"
                    />
                </svg>
            </h3>
            <p class="leading-tight text-white mt-4 mb-12 font-light text-lg antialiased tracking-tight">Speed. An appropriate enough word to sum up the teaser and promotional / funding films for
                <strong>Riversimple</strong>. From the roughly drawn storyboard ideas in a café before the first meeting, to the
                intensive and cold three day shoot just across the Welsh border one month later, continuing through to this
                unique vehicle itself. Whatever your viewpoint on the future of automotive travel and its environmental impact,
                the simple fact is we all have to make a difference.</p>
            <div class="relative h-0" style="padding-bottom: 56.25%;">
                <iframe src="https://player.vimeo.com/video/263830425?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0"
                    class="absolute pin-t pin-l w-full h-full" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <span class="font-black text-white text-2xl tracking-tight opacity-50">
                Teaser
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.42 61.42" height="18px">
                    <polygon class="cls-1" points="15.29 0 0 15.36 35.18 15.36 1.37 49.17 12.21 60.02 46.06 26.17 46.06 61.42 61.42 46.13 61.42 0 15.29 0"
                    />
                </svg>
            </span>
            
            <div class="relative h-0 mt-24" style="padding-bottom: 56.25%;">
                <iframe src="https://player.vimeo.com/video/263832537?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0"
                    class="absolute pin-t pin-l w-full h-full" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <span class="font-black text-white text-2xl tracking-tight opacity-50">
                Promo
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.42 61.42" height="18px">
                    <polygon class="cls-1" points="15.29 0 0 15.36 35.18 15.36 1.37 49.17 12.21 60.02 46.06 26.17 46.06 61.42 61.42 46.13 61.42 0 15.29 0"
                    />
                </svg>
            </span>
            <div class="my-24">
                    <div data-flickity='{"alignCells": "left", "autoPlay": 4000, "arrowShape": {"x0": 10, "x1": 60, "y1": 50, "x2": 80, "y2": 50, "x3": 30}, "wrapAround": true}'>
                        <img class="w-full" src="/assets/images/riversimple/optimised/01StoryboardSketch.jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/02Crew(ShotSetting).jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/03Car(DoorsUp)Side.jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/04Car(Staff).jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/05Crew(ShotDiscuss).jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/06LargeMonitor(Workshop).jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/07Crew(Side)Workshop.jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/08Lighting(Warehouse).jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/09Extras(LongShadows).jpg" alt="the riversimple shoot crew">
                        <img class="w-full" src="/assets/images/riversimple/optimised/10Crew.jpg" alt="the riversimple shoot crew">
                    </div>
            </div>
        </section>


    </div>
    <footer class="py-16 bg-grey-dark px-4">
        <div class="max-w-lg mx-auto">
            <a href="mailto:hello@whytstudio.com" class="text-white no-underline font-black text-2xl lg:text-2xl tracking-tight">hello@whytstudio.com</a>
            <p class="text-white opacity-50 font-black tracking-tight super-super-condensed text-2xl">
                &copy;2018
                <img src="/assets/images/whyt_logo.svg" alt="Whyte logo" height="22px" class="inline-block -mb-1">
            </p>
        </div>
    </footer>
@endsection