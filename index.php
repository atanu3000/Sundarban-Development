<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Home"; ?>
<?php include("./partials/head.php"); ?>
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
        <div class="py-20">
            <div class="md:w-[70vw] mx-auto flex items-center justify-center gap-10">
                <div class="text flex flex-col">
                    <p class="text-xl text-green-500">About us</p>
                    <h2 class="text-5xl font-semibold">
                        A New Way To Invest In Agriculture
                    </h2>
                    <p class="text-xl text-gray-600 mt-8 font-light">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eos laboriosam rerum esse corrupti provident, tempore numquam quia perspiciatis culpa
                        repellat itaque qui ut quas excepturi magni aut nesciunt. Maxime, ad.</p>
                    <a href="aboutus.php"
                        class="bg-[#0a472e] hover:bg-green-800 rounded-full px-10 py-3 text-white text-xl font-light mt-8 w-max">About
                        us</a>
                </div>
                <div>
                    <img src="https://p.w3layouts.com/demos_new/template_demo/05-02-2021/agricfarm-liberty-demo_Free/1836878686/web/assets/images/ab3.jpg"
                        class="md:w-[70vw] rounded-lg" alt="">
                </div>
            </div>

        </div>

        <div class="bg-green-50 py-20">
            <div class="flex flex-row-reverse md:w-[70vw] mx-auto items-center justify-center gap-10">
                <div class="text flex flex-col">
                    <p class="text-xl text-green-500">What we do</p>
                    <h2 class="text-5xl font-semibold">
                        What We Offer For You
                    </h2>
                    <p class="text-xl text-gray-600 mt-8 font-light">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eos laboriosam rerum esse corrupti provident, tempore numquam quia.</p>
                    <ul class="flex flex-col gap-5 pl-10 pt-10">
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Pest Control</li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Weed Control</li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Grass Seeding</li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Industry Oriented</li>
                        <li class="flex gap-3 items-center"><span><svg
                                    class="w-8 h-8 rounded-full text-green-700 p-1 bg-green-100" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg></span>Fresh Milk products</li>

                    </ul>
                </div>
                <div>
                    <img src="https://p.w3layouts.com/demos_new/template_demo/05-02-2021/agricfarm-liberty-demo_Free/1836878686/web/assets/images/ab4.jpg"
                        class="md:w-[50vw] rounded-lg" alt="">
                </div>
            </div>
        </div>

        <div class="py-20">
            <div class="md:w-[70vw] mx-auto flex items-center justify-center gap-10 flex-col">
                <div class="flex flex-col mx-auto">
                    <p class="text-xl text-green-500">Healthy food</p>
                    <h2 class="text-5xl font-semibold">
                        Our best selling products
                    </h2>
                    <p class="text-xl text-gray-600 mt-7 font-light">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eaque, vero.</p>
                </div>
                <div class="flex justify-evenly w-full">
                    <div class="flex flex-col w-72 gap-3">
                        <img src="admin\include\form\images\1697639161Desi Danedar Ghee 500ml Glass jar.jpg" alt="" class="h-56 object-cover rounded-xl">
                        <h2 class="text-2xl font-semibold">Fresh Ghee</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, velit!</p>
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
                        <img src="admin\include\form\images\1697641314Organic Wild Sundarban Honey, 250g Glass Jar.jpg"
                            class="h-56 object-cover rounded-xl" alt="">
                        <h2 class="text-2xl font-semibold">Organic Honey</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, velit!</p>
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
                        <img src="admin\include\form\images\1697641191Jalbhora Sandesh (Plain) - 4 Pcs Pack.jpg"
                            class="h-56 object-cover rounded-xl" alt="">
                        <h2 class="text-2xl font-semibold">Delicious Sweets</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, velit!</p>
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

        <div class="bg-green-50 py-20" id="counter">
            <div class="md:w-[70vw] mx-auto flex justify-evenly">
                <div class="">
                    <p class="count text-6xl font-bold text-green-800" max-data="510">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">custom products</p>
                </div>
                <div class="">
                    <p class="count text-6xl font-bold text-green-800" max-data="625">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">our farms</p>
                </div>
                <div class="">
                    <p class="count text-6xl font-bold text-green-800" max-data="750">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">happy customers</p>
                </div>
                <div class="">
                    <p class="count text-6xl font-bold text-green-800" max-data="340">1</p>
                    <p class="text-2xl capitalize text-green-500 mt-4">awards</p>
                </div>
            </div>
        </div>

        <div class="py-20">
            <div class="md:w-[70vw] mx-auto">
                <div class="flex flex-col items-center">
                    <p class="text-xl text-green-500">Here’s what they have to say</p>
                    <h2 class="text-5xl font-semibold mb-6">Our customer's reviews</h2>
                    <div class="flex flex-wrap justify-center md:justify-between w-full mx-auto">
                        <div class="flex flex-col gap-5 bg-green-50 rounded-xl w-80 p-8 my-5">
                            <svg class="w-6 h-6 text-green-700 rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <p class="text-lg text-gray-500 font-light">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, rem!
                            </p>
                            <div class="flex gap-5">
                                <img src="https://avatars.githubusercontent.com/u/96945274?v=4" alt=""
                                    class="rounded-full w-10">
                                <p class="text-2xl font-semibold">Atanu Paul</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-5 bg-green-50 rounded-xl w-80 p-8 my-5">
                            <svg class="w-6 h-6 text-green-700 rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <p class="text-lg text-gray-500 font-light">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, rem!
                            </p>
                            <div class="flex gap-5">
                                <img src="https://avatars.githubusercontent.com/u/96945274?v=4" alt=""
                                    class="rounded-full w-10">
                                <p class="text-2xl font-semibold">Atanu Paul</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-5 bg-green-50 rounded-xl w-80 p-8 my-5">
                            <svg class="w-6 h-6 text-green-700 rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <p class="text-lg text-gray-500 font-light">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, rem!
                            </p>
                            <div class="flex gap-5">
                                <img src="https://avatars.githubusercontent.com/u/96945274?v=4" alt=""
                                    class="rounded-full w-10">
                                <p class="text-2xl font-semibold">Atanu Paul</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20">
            <div class="md:w-max mx-auto">
                <div class="flex flex-wrap items-center justify-center w-full gap-5">
                    <div class="flex gap-4 grow">
                        <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/icon-2.jpg.webp" alt="">
                        <div class="flex flex-col gap-1 max-w-[200px]">
                            <p class="text-lg font-semibold">Handmade</p>
                            <p class="text-gray-600 text-sm">Made with passion by 300+ curators.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 grow">
                        <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/icon-3.jpg.webp" alt="">
                        <div class="flex flex-col gap-1 max-w-[200px]">
                            <p class="text-lg font-semibold">100% Natural</p>
                            <p class="text-gray-600 text-sm">Eat local, consume local, closer to nature.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 grow">
                        <img src="https://sundarbansjfmc.org/wp-content/uploads/2022/06/icon-40ok.jpg.webp" alt="">
                        <div class="flex flex-col gap-1 max-w-[200px]">
                            <p class="text-lg font-semibold">Shipping</p>
                            <p class="text-gray-600 text-sm">All India Shipping</p>
                        </div>
                    </div>
                    <div class="flex gap-4 grow">
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
    <?php include("./partials/footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="asset/js/counting.js"></script>
</body>
</html>