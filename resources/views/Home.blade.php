
<x-layout>
    <x-navbar />

    <main>
        {{-- Hero image --}}
        <section class="container-fluid p-0">
            <div class="heroSection"></div>
        </section>

        {{-- Introduction --}}
        <section class="container intro-section">
            <article>
                <h2 class="fw-bold">
                    Palermo, un'emozione ad ogni angolo
                </h2>

                <p>
                    Custode di antiche civiltà e crocevia di culture,
                    Palermo racconta attraverso i suoi monumenti, le
                    sue strade e i suoi palazzi una storia millenaria,
                    dove ogni pietra custodisce un ricordo e ogni
                    angolo rivela l’anima eterna della Sicilia.
                </p>

                <a href="#" class="btn btn-warning">
                    Scopri di più
                </a>
            </article>
        </section>

        {{-- Image carousel and description --}}
        <section class="container my-5">
            <div class="row justify-content-center align-items-center g-4">

                <div class="col-12 col-md-6">
                    <div id="carouselExampleRide"
                         class="carousel slide"
                         data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                    src="{{ asset('images/home/Cappella Palatina.jpeg') }}"
                                    class="d-block w-100"
                                    alt="Cappella Palatina">
                            </div>

                            <div class="carousel-item">
                                <img
                                    src="{{ asset('images/home/quattrocanisquare.jpeg') }}"
                                    class="d-block w-100"
                                    alt="Quattro Canti square">
                            </div>

                            <div class="carousel-item">
                                <img
                                    src="{{ asset('images/home/top view.jpeg') }}"
                                    class="d-block w-100"
                                    alt="Panoramic view of Palermo">
                            </div>
                        </div>

                        <button class="carousel-control-prev"
                                type="button"
                                data-bs-target="#carouselExampleRide"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"
                                  aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next"
                                type="button"
                                data-bs-target="#carouselExampleRide"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon"
                                  aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <div class="testo rounded p-4">
                        <h2 class="fw-bold fs-1">
                            Discover the Soul of Palermo
                        </h2>

                        <p>
                            From the golden glow of its historic
                            monuments to the irresistible flavors of
                            Sicilian cuisine, Palermo is a city full
                            of life, beauty, and unforgettable stories.
                            Wander through its charming streets,
                            discover centuries of history, and
                            experience the traditions that make every
                            corner unique. Let Palermo surprise you
                            with its vibrant culture, warm atmosphere,
                            and timeless Mediterranean charm.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        {{-- Explore categories --}}
        <section class="container my-5">
            <h3 class="fw-bold fs-1 mb-4 text-center">
                Explore
            </h3>

            <div class="row justify-content-center g-4">
                @foreach ($categories as $category)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100">
                            <a href="{{ route('categories', ['category' => $category['name']]) }}">
                                <img
                                    src="{{ asset($category['image']) }}"
                                    class="card-img-top category-image"
                                    alt="{{ $category['name'] }}">
                            </a>

                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $category['name'] }}
                                </h5>

                                <p class="card-text">
                                    {{ $category['paragraph'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <x-footer />
</x-layout>
