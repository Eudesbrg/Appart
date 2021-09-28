@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32 lg:pb-0">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                <h1 class="h1-large mb-5">TROUVER FACILEMENT VOTRE FUTURE LOGEMENT</h1>
                <p class="p-large mb-8">Nous transformons la façon dont les consommateurs prennent des décisions liées à la maison et connectez-vous avec des professionnels.</p>
                <div >
                    <a class="btn-solid-lg" href="#your-link"><i class="fas fa-home"></i>voir les appartements</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Nous contacter</a>
                </div>
            </div>
            <div class="xl:text-left">
                <div class="container mx-auto">
                    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
                        <div class="max-w-md w-full space-y-8">
                            <div>
                                <img class="mx-auto h-12 w-auto" src="{{ asset('images/logo.svg') }}" alt="Workflow">
                                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                                    Rechercher votre logement
                                </h2>
                            </div>
                            <form class="mt-8 space-y-6" action="#" method="POST">
                                <input type="hidden" name="remember" value="true">
                                <div class="rounded-md shadow-sm -space-y-px">
                                    <div>
                                        <label for="Quartier" class="block text-sm font-medium text-left text-gray-700">Quartier</label>
                                        <select id="Quartier" name="Quartier" autocomplete="quartier" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">choisissez un quartier</option>
                                            @foreach ($quartiers as $quartier)
                                                <option value="{{ $quartier->id }}">{{$quartier->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="rounded-md shadow-sm -space-y-px">
                                    <div>
                                        <label for="appartement" class="block text-sm font-medium text-left text-gray-700">Type d'appartement</label>
                                        <select id="appartement" name="appartement" autocomplete="quartier" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">choisissez un type d'appartement</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{$category->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="rounded-md shadow-sm -space-y-px">
                                    <div>
                                        <label for="contrat" class="block text-sm text-left font-medium text-gray-700">contrat</label>
                                        <select id="contrat" name="contrat" autocomplete="quartier" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>Rent</option>
                                            <option>Buy</option>
                                        </select>
                                    </div>
                                </div>
                
                                <div class="flex items-center justify-between space-x-4">
                                    <div class="rounded-md shadow-sm -space-y-px w-1/2">
                                        <div>
                                            <label for="from" class="block text-sm text-left font-medium text-gray-700">Price from</label>
                                            <input type="number" min="0" value="0" name="priceFrom" id="from" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="rounded-md shadow-sm -space-y-px w-1/2 ">
                                        <div>
                                            <label for="to" class="block text-sm text-left font-medium text-gray-700">Price to</label>
                                            <input type="number" min="0" name="priceTo" id="to" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                
                                <div>
                                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->
    <!-- Features -->
    <div id="features" class="cards-1 pt-0">
        <div class="py-20">
            <p class="text-3xl font-extrabold uppercase">featured neighborhood in Madrid</p>
            <p>Découvrez des milliers d'appartements et de maisons à louer à Madrid</p>
        </div>
        <div class="container px-4 sm:px-8 xl:px-4">

            @foreach ($quartiers as $quartier)
                <!-- Card -->
                <div class="card p-0 h-72 shadow-lg" style="padding: 0px;position: relative;">
                    <img src="{{ asset('images/details-1.jpg') }}" alt="" class="h-full w-full border-0 border-solid rounded-lg" style="object-fit: cover;">
                    <div style="position: absolute;top: 50%;left: 50%;transform: translateX(-50%);">
                        <p class="text-4xl" style="color: #eb427e">{{ $quartier->nom }}</p>
                    </div>
                </div>
                <!-- end of card -->
                @if ($loop->iteration == 6)
                    @break
                @endif
            @endforeach

        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->

    <!-- Details 1 -->
    <div id="details" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Negotiate Your Rent and Apply Online</h2>
                    <p class="mb-4">Consultez les propositions et le nombre de candidats pour la propriété afin que vous puissiez prendre une décision éclairée et fixer le prix approprié. </p>
                    <p class="mb-4">Ajoutez votre historique de location, soumettez des références et rédigez des notes personnalisées pour vous assurer que votre application se démarque !</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="xl:ml-14">
                    <img class="inline" src="images/img/custom-offer1.webp" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 1 -->

    <!-- Details 2 -->
    <div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7">
                <div class="mb-12 lg:mb-0 xl:mr-14">
                    <img class="inline" src="images/img/homeowner5-1.webp" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-5">
                <div class="xl:mt-12">
                    <h2 class="mb-6">eSign Papers From Home</h2>
                    <ul class="list mb-7 space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Utilisez votre contrat de location</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Signez électroniquement pour gagner du temps</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Stockage de documents sécurisé</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#">Details</a>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 2 -->

    <!-- Statistics -->
    <div class="counter">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">Catégories d'annonces</h2>
            <!-- Counter -->
            <div id="counter">
                <div class="cell">
                    <div><a href="#">Appartement à louer</a></div>
                    <div><a href="#">Maisons à louer</a></div>
                </div>
                <div class="cell">
                    <div><a href="#">Condos à louer</a></div>
                    <div><a href="#">Duplex à louer</a></div>
                </div>
                <div class="cell">
                    <div><a href="#">Loft à louer</a></div>
                    <div><a href="#">Duplex à louer</a></div>
                </div>
            <!-- end of counter -->

        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">
                MEET OUR AGENTS
                <p class="text-sm text-center">See our great agents and they will help you find your homes</p>
            </h2>
            

            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">
                        
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-1.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it properly into my business flow and it's great</p>
                                    <p class="testimonial-author">Jude Thorn - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-2.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We were so focused on launching as many campaigns as possible that we've forgotten to target our loyal customers</p>
                                    <p class="testimonial-author">Roy Smith - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-3.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the reports it generates and the amazing high accuracy</p>
                                    <p class="testimonial-author">Marsha Singer - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-4.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that can help businesses manage their marketing projects</p>
                                    <p class="testimonial-author">Tim Shaw - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-5.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">Searching for a great prototyping and layout design app was difficult but thankfully I found app suite quickly</p>
                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-6.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">The app support team is amazing. They've helped me with some issues and I am so grateful to the entire team</p>
                                    <p class="testimonial-author">Ann Blake - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <div class="flex justify-center items-center">
        <!-- COMPONENT CODE -->
        <section class="w-full" style="background-color: #ff6e84">
            <div class="container px-4 mx-auto">
                <div class="grid grid-cols-1 my-10 lg:grid-cols-2">
                  <div class="text-center text-white my-auto mx-4">
                    <h1 class="font-GT-Pressura-Regular font-bold text-3xl">WANT DISCOUNTS?</h1>
                    <h2 class="font-GT-Pressura-Regular text-xl">Join our mail list for news & coupons</h2>
                  </div>
                  <div class="py-2 mx-4 lg:py-10">
                    <div class="rounded-full bg-white shadow flex w-full">
                      <input
                        type="text"
                        placeholder="Enter your email to join our mailing list"
                        class="w-full rounded-tl-full rounded-bl-full py-2 px-4" />
                      <button class="bg-yellow-400 rounded-tr-full rounded-br-full hover:bg-red-300 py-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- COMPONENT CODE -->
    </div>
    <script>
        let header = document.querySelector('#header h1');
        let paragraph = document.querySelector('#header p');
        console.log(paragraph);
        let speed = 80;
        let delay = header.innerHTML.length * speed + speed;

        function typeEffect(element, speed) {
            var text = element.innerHTML;
            element.innerHTML = "";
            
            var i = 0;
            var timer = setInterval(function() {
                if (i < text.length) {
                element.append(text.charAt(i));
                i++;
                } else {
                clearInterval(timer);
                }
            }, speed);
        }

        typeEffect(header, speed);
        setTimeout(function(){
            //p.style.display = "inline-block";
            typeEffect(paragraph, speed);
        }, delay);
    </script>
@endsection