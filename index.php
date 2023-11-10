<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Home"; ?>
<?php include("./partials/head.php"); ?>
<style>
    .content-box {
        position: relative;
        width: 100%;
    }

    .content-box::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        opacity: 0.35;
    }

    .content-box.box1::before {
        background-image: url('asset/4574519.jpg');
    }
</style>

<body>
    <?php include("./partials/navbar.php") ?>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-[450px] 2xl:h-[500px]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Sundarban-Development/asset/slider/1.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Sundarban-Development/asset/slider/2.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Sundarban-Development/asset/slider/3.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Sundarban-Development/asset/slider/4.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="http://localhost/Sundarban-Development/asset/slider/5.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="w-full mx-auto flex flex-col justify-center">
        <div class="mx-auto md:w-[95vw] w-[98vw] py-8 overflow-hidden">
            <img src="./asset/image.jpg" alt="" class="hover:scale-105 transition duration-300 ease-in-out">
        </div>
        <div class="py-20 content-box box1">
            <div class="relative z-10 px-5 mx-auto flex flex-wrap items-center justify-center gap-10">
                <div class="text flex flex-col w-[90vw] sm:w-[45vw]">
                    <h1 class="text-3xl md:text-5xl text-green-900 font-semibold"><span
                            class=" md:text-6xl">S</span>undarbans and Honey
                    </h1>
                    <p class="text-2xl  mt-8 font-semibold leading-10">There are many different species of
                        bees in the Sundarbans and among them, apis dorsata type of bee comparatively makes more hives
                        and honey. It is said that the honey collected from these hives are the best honey of the
                        Sundarbans. This honey is dark red in colour and wild in taste with great medicinal values.</p>
                </div>
                <div>
                    <img src="asset/purehoney.jpg" class="lg:w-[430px] lg:h-[400px] rounded-lg" alt="">
                </div>
            </div>

        </div>

        <div class="bg-green-50 py-20">
            <div
                class="px-5 flex flex-row-reverse flex-wrap  md:flex-wrap   mx-auto items-center justify-center gap-10">
                <div class="text flex flex-col w-[90vw] sm:w-[45vw] pl-10">
                    <h1 class="text-3xl md:text-4xl text-green-900 font-semibold"><span class=" md:text-5xl">W</span>hy
                        you should choose Sundarini
                    </h1>
                    <p class="text-2xl text-gray-600 mt-8">A team of young professionals, technical experts
                        work directly as employees of thousands of small & marginalized women dairy cooperative farmers
                        of Sundarban Islands</p>
                    <ul class="flex flex-col gap-5 pt-10 text-lg">
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Sundarini Naturals keeps the soil, animals, plants, humans healthy
                        </li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Sundarini Naturals cares for traditional and indigenous produces</li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Sundarini Naturals is sustainable, local, seasonal & diverse
                        </li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Sundarini Naturals is free from chemicals & adulteration
                        </li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Sundarini Naturals empowers small and marginalized women
                            farmers of Sundarban</li>

                    </ul>
                </div>
                <div>
                    <img src="https://p.w3layouts.com/demos_new/template_demo/05-02-2021/agricfarm-liberty-demo_Free/1836878686/web/assets/images/ab4.jpg"
                        class="lg:w-[400px] rounded-lg" alt="">
                </div>
            </div>
        </div>

        <div class="py-20">
            <div class="md:w-[70vw] mx-auto flex items-center justify-center gap-10 flex-col">
                <div class="flex flex-col mx-auto">
                    <h1 class="text-3xl md:text-4xl text-green-700 font-semibold text-center capitalize sm:pb-10"><span
                            class=" md:text-5xl">O</span>ur best selling products
                    </h1>
                </div>
                <div class="flex flex-wrap gap-10 justify-evenly w-full">
                    <div class="flex flex-col w-72 gap-3">
                        <img src="admin\include\form\images\1698405616Desi Danedar Ghee 500ml Glass jar.jpg" alt=""
                            class="h-56 object-cover rounded-xl">
                        <h2 class="text-2xl font-semibold">100% Natural Ghee</h2>
                        <a href="./products.php?category=ghee"
                            class="uppercase px-8 py-3 rounded-full text-white bg-[#0a472e] hover:bg-green-800 w-max mt-5 flex items-center gap-3">
                            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 9V4a3 3 0 0 0-6 0v5m9.92 10H2.08a1 1 0 0 1-1-1.077L2 6h14l.917 11.923A1 1 0 0 1 15.92 19Z" />
                            </svg>
                            shop now</a>
                    </div>
                    <div class="flex flex-col w-72 gap-3">
                        <img src="admin\include\form\images\1698405724Organic Wild Sundarban Honey, 250gm.jpg"
                            class="h-56 object-cover rounded-xl" alt="">
                        <h2 class="text-2xl font-semibold">Organic & Tasty Honey</h2>
                        <a href="./products.php?category=honey"
                            class="uppercase px-8 py-3 rounded-full text-white bg-[#0a472e] hover:bg-green-800 w-max mt-5 flex items-center gap-3">
                            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 9V4a3 3 0 0 0-6 0v5m9.92 10H2.08a1 1 0 0 1-1-1.077L2 6h14l.917 11.923A1 1 0 0 1 15.92 19Z" />
                            </svg>
                            shop now</a>
                    </div>
                    <div class="flex flex-col w-72 gap-3">
                        <img src="admin\include\form\images\1698405696Certified Organic Malai Paneer Handcrafted From Cow Milk, 200gm pack.jpg"
                            class="h-56 object-cover rounded-xl" alt="">
                        <h2 class="text-2xl font-semibold">Fresh & Healthy Paneer</h2>
                        <a href="./products.php?category=sweet"
                            class="uppercase px-8 py-3 rounded-full text-white bg-[#0a472e] hover:bg-green-800 w-max mt-5 flex items-center gap-3">
                            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 9V4a3 3 0 0 0-6 0v5m9.92 10H2.08a1 1 0 0 1-1-1.077L2 6h14l.917 11.923A1 1 0 0 1 15.92 19Z" />
                            </svg>
                            shop now</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex gap-10  md:mx-auto mx-6 items-center flex-wrap md:flex-nowrap justify-center bg-white  pt-10 pb-20">
            <div class="flex flex-col gap-12 justify-between">
                <h1 class="text-2xl md:text-4xl text-green-700 font-semibold text-center capitalize"><span
                        class="text-3xl md:text-5xl">O</span>ur Products with best quality</h1>
                <div class="flex flex-wrap justify-center gap-8 items-center">
                    <div class="flex flex-col gap-6 max-w-[400px]">
                        <div class="flex gap-2 items-center">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/natural-leaves-logo.png"
                                class="w-16" alt="">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold">100% Natural</h2>
                                <p>Free from pesticides, chemicals, antibiotics & toxins</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/high-antioxidant-logo.png"
                                class="w-16" alt="">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold">Powerful antioxidants</h2>
                                <p>Full of vitamins, minerals as in raw form</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/feature-3.png.webp"
                                class="w-16" alt="">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold">Rich in nutrients</h2>
                                <p>There are atleast 31 vitamins & minerals in Natural honey. These include vitamin C,
                                    phosphorus, magnesium, sodium, potassium and calcium</p>
                            </div>
                        </div>
                    </div>
                    <img src="./asset/our-products.png" class="w-[400px]" alt="">
                    <div class="flex flex-col gap-6 max-w-[400px]">
                        <div class="flex gap-2 items-center">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/honey-kept-on-plate.png.webp"
                                class="w-16" alt="">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold">Curated Products</h2>
                                <p>Eat local, consume local, closer to nature.</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/feature-4.png.webp"
                                class="w-16" alt="">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold">Boost Immunity</h2>
                                <p>Free from harmful fertilizers & adulteration, comes with the power of double immunity
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/feature-1.png.webp"
                                class="w-16" alt="">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold">Conscious & ethical</h2>
                                <p>Our Natural honey is sourced from deep Sundarban forests, preserving nature and the
                                    natural way of beekeeping.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-green-50 py-20" id="counter">
            <div class="md:w-[70vw] mx-auto flex flex-wrap justify-evenly gap-10">
                <div class="px-5 flex flex-col items-center">
                    <p class="count text-3xl sm:text-6xl font-bold text-green-800" max-data="510">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">custom products</p>
                </div>
                <div class="px-5 flex flex-col items-center">
                    <p class="count text-3xl sm:text-6xl font-bold text-green-800" max-data="625">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">our farms</p>
                </div>
                <div class="px-5 flex flex-col items-center">
                    <p class="count text-3xl sm:text-6xl font-bold text-green-800" max-data="750">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">happy customers</p>
                </div>
                <div class="px-5 flex flex-col items-center">
                    <p class="count text-3xl sm:text-6xl font-bold text-green-800" max-data="340">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">awards</p>
                </div>
            </div>
        </div>

        <div class="py-20">
            <div class="md:w-[70vw] mx-auto">
                <div class="flex flex-col items-center">
                    <h1 class="text-3xl md:text-4xl text-green-700 font-semibold text-center capitalize pb-20"><span
                            class="text-3xl md:text-5xl">O</span>ur customer's
                        reviews</h1>
                    <div class="flex flex-wrap justify-center gap-10 mx-auto">
                        <div class="relative flex flex-col gap-5 bg-green-50 rounded-xl w-80 p-8">
                            <svg class="w-6 h-6 text-green-700 rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <p class="text-lg text-gray-500 pb-20 font-light">
                                Organic Wild Sundarban Honey of Sundarini Naturals is safe and has a unique taste. I
                                have faith on using this product for my grandchildren also.
                            </p>
                            <div class="absolute bottom-6 flex gap-5 items-center">
                                <img src="https://eportal.sundarini.organic/assets/images/thumb/1696485074-1696485074-591474134.jpg" class="w-14 rounded-full" alt=""
                                    class="rounded-full w-10">
                                <p class="text-2xl font-semibold">Ruban Pathak</p>
                            </div>
                        </div>
                        <div class="relative flex flex-col gap-5 bg-green-50 rounded-xl w-80 p-8">
                            <svg class="w-6 h-6 text-green-700 rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <p class="text-lg text-gray-500 pb-20 font-light">
                                I absolutely love the Sundarini ghee. I have been using it for the last one year and
                                till now have not seen the quality being compromised.
                            </p>
                            <div class="absolute bottom-6 flex gap-5 items-center">
                                <img src="https://eportal.sundarini.organic/assets/images/thumb/1696485107-1696485107-606193037.png" class="w-14 rounded-full" alt=""
                                    class="rounded-full w-10">
                                <p class="text-2xl font-semibold">Joy Sikdar</p>
                            </div>
                        </div>
                        <div class="relative flex flex-col gap-5 bg-green-50 rounded-xl w-80 p-8">
                            <svg class="w-6 h-6 text-green-700 rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <p class="text-lg text-gray-500 pb-20 font-light">
                                Authentic sweets and other products like rice, dal, ghee - which were pure and fresh!!!
                                Thanks Sundarini
                            </p>
                            <div class="absolute bottom-6 flex gap-5 items-center">
                                <img src="https://eportal.sundarini.organic/assets/images/thumb/1696485091-1696485091-155344644.jpg" class="w-14 rounded-full" alt=""
                                    class="rounded-full w-10">
                                <p class="text-2xl font-semibold">Mrinal Das</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20">
            <div class="md:w-max mx-auto">
                <div class="flex sm:flex-row flex-col px-5 items-center justify-center gap-5">
                    <div class="flex xl:flex-row flex-col gap-5">
                        <div class="flex gap-4 min-w-[250px]">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/icon-2.jpg.webp" alt="">
                            <div class="flex flex-col gap-1 max-w-[200px]">
                                <p class="text-lg font-semibold">Handmade</p>
                                <p class="text-gray-600 text-sm">Made with passion by 300+ curators.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 min-w-[250px]">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/icon-3.jpg.webp" alt="">
                            <div class="flex flex-col gap-1 max-w-[200px]">
                                <p class="text-lg font-semibold">100% Natural</p>
                                <p class="text-gray-600 text-sm">Eat local, consume local, closer to nature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex xl:flex-row flex-col gap-5">
                        <div class="flex gap-4 min-w-[250px]">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/icon-40ok.jpg.webp" alt="">
                            <div class="flex flex-col gap-1 max-w-[200px]">
                                <p class="text-lg font-semibold">Shipping</p>
                                <p class="text-gray-600 text-sm">All India Shipping</p>
                            </div>
                        </div>
                        <div class="flex gap-4 min-w-[250px]">
                            <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/icon-5.jpg.webp" alt="">
                            <div class="flex flex-col gap-1 max-w-[200px]">
                                <p class="text-lg font-semibold">Save Money</p>
                                <p class="text-gray-600 text-sm">At lowest price</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./partials/footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="asset/js/counting.js"></script>
</body>

</html>