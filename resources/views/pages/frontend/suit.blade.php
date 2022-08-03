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
                        <a href="#" aria-label="current-page">Suit</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- END: Breadcrumb -->

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