@extends('layouts.frontend')

@section('content')
        <!-- START: Breadcrumb -->
        <section class="px-4 py-8 bg-gray-100">
            <div class="container mx-auto">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route ('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="#" aria-label="current-page">Catalog</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- END: Breadcrumb -->     

        <!-- START: Browser CATALOG -->
        <section class="px-8 py-16 bg-gray-100">
            <div class="container mx-auto">
                <div class="flex justify-center mb-4 text-center flex-start" data-aos-duration="1000">
                    <h3 class="text-2xl font-semibold capitalize">
                        Browse The Fashion <br class="" />That We Designed For You
                    </h3>
                </div>
                <div class="flex flex-wrap mb-4 -mx-3 overflow-x-auto">
                    <!--START:item 1-->
                    <div class="w-full px-3 mb-8 md:w-3/12">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogsatu.jpg" alt=""
                                    class="object-cover object-center w-full h-full">
                            <div
                            class="inset-0 flex flex-col justify-center pt-0 pl-48 overlay md:top-auto md:items-center md:pl-0 md:pt-12">
                            <h5 class="text-2xl font-semibold text-white">Batik Design</h5>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--END:item 1-->
                    
                    <!--START:item 2-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogdua.jpg" alt=""
                                    class="object-cover object-center w-full h-full">
                                <div
                                class="inset-0 flex flex-col justify-center pt-0 pl-48 overlay md:top-auto md:items-center md:pl-0 md:pt-12">
                                <h5 class="text-2xl font-semibold text-white">Shirt Design</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END:item 2-->

                    <!--START:item 3-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalog4.jpg" alt=""
                                    class="object-cover object-center w-full h-full">
                                <div
                                class="inset-0 flex flex-col justify-center pt-0 pl-48 overlay md:top-auto md:items-center md:pl-0 md:pt-12">
                                <h5 class="text-2xl font-semibold text-white">Pants Design</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END:item 3-->

                    <!--START:item 4-->
                    <div class="w-full px-3 mb-8 md:w-3/12">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalog3.jpg" alt=""
                                    class="object-cover object-center w-full h-full">

                                    <div
                                    class="inset-0 flex flex-col justify-center pt-0 pl-48 overlay md:top-auto md:items-center md:pl-0 md:pt-12">
                                    <h5 class="text-2xl font-semibold text-white">Suit Design</h5>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--END:item 4-->
                </div>
            </div>
        </section>
        <!-- END: Browse CATALOG -->

        <!-- START: BATIK CATALOG -->
        <section class="px-8 py-16 bg-gray-100">
            <div class="container mx-auto">
                <div class="flex justify-center mb-4 text-center flex-start" data-aos-duration="1000">
                    <h3 class="text-3xl font-semibold capitalize ">
                        BATIK DESIGN
                    </h3>
                </div>
                <div class="flex flex-wrap mb-4 -mx-3 overflow-x-auto">
                    <!--START:item 1-->
                    <div class="w-full px-3 mb-8 md:w-3/12">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogbatik3.jpg" alt=""
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Wardhana</h5>
                            <span>IDR 899.000</span>
                            <a href="details/wardhana" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 1-->
                    
                    <!--START:item 2-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogbatik1.jpg" alt=""
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Anantaraja</h5>
                            <span>IDR 799.000</span>
                            <a href="details/anataraja" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 2-->

                    <!--START:item 3-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogbatik2.jpg" alt=""
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Kuwera</h5>
                            <span>IDR 599.000</span>
                            <a href="details/kuwera" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 3-->

                    <!--START:item 4-->
                    <div class="w-full px-3 mb-8 md:w-3/12">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogbatik6.jpg" alt=""
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Aswatama</h5>
                            <span>IDR 449.000</span>
                            <a href="details/aswatama" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 4-->
                </div>
            </div>
        </section>
        <!-- END: BATIK CATALOG -->
    
        <!-- START : SHIRT CATALOG-->
        <section class="px-8 py-16 bg-gray-100">
            <div class="container mx-auto">
                <div class="flex justify-center mb-4 text-center flex-start aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h3 class="text-3xl font-semibold capitalize ">
                        SHIRT DESIGN
                    </h3>
                </div>
                <div class="flex flex-wrap mb-4 -mx-3 overflow-x-auto">
                    <!--START:item 1-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/kemeja1.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Casual Slim Fit-White</h5>
                            <span>IDR 599.000</span>
                            <a href="details/casual-slim-fit-white" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 1-->
                    <!--START:item 2-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/kemeja2.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Casual Slim Fit-Brown</h5>
                            <span>IDR 699.000</span>
                            <a href="details/casual-slim-fit-brown" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 2-->
                    <!--START:item 3-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogkemeja8.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Casual Slim Fit-Black</h5>
                            <span>IDR 799.000</span>
                            <a href="details/casual-slim-fit-black" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 3-->
                    <!--START:item 4-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogkemeja5.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Casual Brick-Orange</h5>
                            <span>IDR 649.000</span>
                            <a href="details/casual-brick-orange" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 4-->
                </div>
            </div>
        </section>
        <!-- END : SHIRT CATALOG-->
    
        <!--START : PANTS CATALOG-->
        <section class="px-8 py-16 bg-gray-100">
            <div class="container mx-auto">
                <div class="flex justify-center mb-4 text-center flex-start aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h3 class="text-3xl font-semibold capitalize ">
                        PANTS DESIGN
                    </h3>
                </div>
                <div class="flex flex-wrap mb-4 -mx-3 overflow-x-auto">
                    <!--START:item 1-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogcelana4.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Formal Pants Slim Fit-Green</h5>
                            <span>IDR 499.000</span>
                            <a href="details/formal-pants-slim-fit-green" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 1-->
                    <!--START:item 2-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogcelana5.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Chino Beige</h5>
                            <span>IDR 549.000</span>
                            <a href="details/chino-beige" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 2-->
                    <!--START:item 3-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogcelana7.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Formal Pants Slim Fit-Beige</h5>
                            <span>IDR 599.000</span>
                            <a href="details/formal-pants-slim-fit-beige" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 3-->
                    <!--START:item 4-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogcelana6.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Formal Pants - Black</h5>
                            <span>IDR 1.199.000</span>
                            <a href="details/formal-pants-black" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 4-->
                </div>
            </div>
        </section>
        <!--END : PANTS CATALOG-->
    
        <!--START : SUIT CATALOG-->
        <section class="px-8 py-16 bg-gray-100">
            <div class="container mx-auto">
                <div class="flex justify-center mb-4 text-center flex-start aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h3 class="text-3xl font-semibold capitalize ">
                        SUIT DESIGN
                    </h3>
                </div>
                <div class="flex flex-wrap mb-4 -mx-3 overflow-x-auto">
                    <!--START:item 1-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogjas5.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Milford</h5>
                            <span>IDR 2,799,000</span>
                            <a href="details/milford" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 1-->
                    <!--START:item 2-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogjas6.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Harrison-Four Button</h5>
                            <span>IDR 1,249,000</span>
                            <a href="details/harrison-four-button" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 2-->
                    <!--START:item 3-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogjas2.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">Slim Fit Jacquard Suit</h5>
                            <span>IDR 2,999,000</span>
                            <a href="details/slim-fit-jacquard-suit" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 3-->
                    <!--START:item 4-->
                    <div class="w-full px-3 mb-8 md:w-3/12 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="relative p-4 pb-8 bg-white rounded-xl">
                            <div class="w-full overflow-hidden rounded-xl card-shadow h-50">
                                <img src="/frontend/src/images/content/catalogjas3.jpg" alt="cangkir"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <h5 class="mt-4 text-lg font-semibold">	Blue Jas White List</h5>
                            <span>IDR 1,799,000</span>
                            <a href="details/blue-jas-white-list" class="stretched-link"></a>
                        </div>
                    </div>
                    <!--END:item 4-->
                </div>
            </div>
        </section>
        <!-- END : SUIT CATALOG-->
@endsection