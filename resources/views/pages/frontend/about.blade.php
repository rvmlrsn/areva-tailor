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
                        <a href="#" aria-label="current-page">About Us</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- END: Breadcrumb -->
    
        <!-- START: Details -->
        <section class="container mx-auto">
            <div class="flex-wrap my-4 md:my-12">
                <div class="w-full px-4 md:hidden">
                    <h2 class="text-5xl font-semibold text-center">AREVA TAILOR</h2>
                </div>
                <div class="preview">
                    <div class="w-full overflow-hidden rounded-lg item">
                        <img src="/frontend/src/images/content/aboutf1.jpg" alt="" class="object-cover w-full h-full rounded-lg" />
                    </div>
                </div>
            </div>
            <div class="flex-1 px-4 md:p-6">
                <div class="hidden md:block">
                    <h2 class="justify-center text-5xl font-semibold text-center">AREVA TAILOR</h2>
                </div>
                <hr class="my-6" />
                <p class="mb-6 text-xl leading-7">
                    Areva Tailor adalah Toko Pakaian yang menawarkan jasa jahit profesional yang dikhususkan untuk
                    pakaian pria. Pemilik dari Areva Tailor adalah Bapak Asep Undang S. Beliau sudah
                    menyelami dunia bisnis menjahit dan pakaian selama 14 tahun sejak 2008 hingga saat ini. Kami
                    telah melayani klien setia kami dengan layanan yang memuaskan dalam menjahit Bespoke (Kostum).
                    Berkembang dari gaya penjahitan konvensional, sekarang kami telah mampu menyediakan setelan modern
                    dengan pilihan kain
                    terbaik dan beberapa perpaduan design yang kami tawarkan untuk menambahkan ciri khas kepada
                    pelanggan kami dan bersifat Limited Edition. Visi Areva Tailor adalah terus mengejar keunggulan dalam
                    pembuatan produk serta pelayanannya, sehingga memungkinkan kami menjadi pionir dalam industri
                    penjahitan. <br> <br>
                    Bespoke (Kostum) Tailoring di Areva Tailor tersedia dalam bentuk desain Jas untuk formal, Kemeja untuk
                    formal dan
                    kasual, Batik untuk formal, dan Celana untuk formal atau kasual. Integritas masing-masing dalam setiap
                    bagian yang dibuat khusus oleh kami, terjamin melalui penjahitan yang baik dengan kualitas bahan yang
                    terbaik dan
                    kecocokan ukuran yang sempurna. Setelan pakaian yang dibuat secara masal meskipun memiliki
                    kepopuleran dikarenakan gaya hidup modern tetap tidak sebanding dengan kemewahan memiliki setelan
                    pakaian yang dibuat khusus dengan kualitas kain terbaik dan ukuran yang pas serta memiliki sentuhan khas
                    yang menjadikannya berbeda dengan yang lainnya sehingga bersifat Limited Edition. Seorang pria dikenal
                    dari pakaian yang dikenakannya.
                </p>
            </div>
            </div>
        </section>
        <!-- END: Details -->

@endsection