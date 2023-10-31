<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " About"; ?>
<?php include("./partials/head.php"); ?>

<body>
    <?php include("./partials/navbar.php") ?>

    <div class="bg-gray-200 flex flex-col gap-5">
        <div
            class="flex gap-10    md:mx-auto mx-6 items-center flex-wrap md:flex-nowrap justify-center bg-white px-44 py-16">
            <img src="./asset/our-mission.jpg" alt="product image" class="md:w-[35vw] h-[330px] w-1/2 rounded-lg">
            <div class="flex flex-col gap-12 justify-between">
                <h1 class="text-4xl text-green-700 font-semibold"><span class="text-5xl">O</span>ur Vision</h1>
                <p class="text-lg">"Our mission is to empower marginalized women farmers in the Sundarban Islands,
                    enhancing their lives and
                    livelihoods. We provide certified, tested chemical-free food to both farmers and consumers,
                    fostering
                    transparency in the process for a sustainable future."</p>
            </div>
        </div>
        <div
            class="flex gap-10   md:mx-auto mx-6 my-5 items-center flex-wrap md:flex-nowrap justify-between px-44 py-16">
            <div class="flex flex-col gap-12 justify-between">
                <h1 class="text-4xl text-green-700 font-semibold"><span class="text-5xl">O</span>ur Mision</h1>
                <ul class="flex flex-col gap-3 text-lg">
                    <li>- Eliminate middle-men exploitation</li>
                    <li>- Prevent distress selling by farmers</li>
                    <li>- Facilitate direct farmer-consumer connections</li>
                    <li>- Offer genuine, chemical-free, and certified organic food</li>
                    <li>- Promote chemical-free organic farming and sustainability</li>
                    <li>- Innovate the organized dairy cooperative sector</li>
                    </li>
                </ul>
            </div>
            <img src="./asset/our-vision.png" alt="image" class="md:w-[35vw] h-[330px] w-1/2 rounded-lg">
        </div>
        <div
            class="flex bg-white gap-10  w-full md:mx-auto mx-6 my-5 items-center flex-wrap md:flex-nowrap justify-between py-16">
            <div class="flex flex-col gap-12 justify-between mx-auto">
                <h1 class="text-4xl text-green-700 font-semibold text-center"><span class="text-5xl">O</span>rganic
                    Certification
                </h1>
                <div class="flex justify-between gap-20">
                    <img src="https://www.sundarini.organic/public/assets/public/images/newbiz/512X512_b.jpg"
                        class="w-44 hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out" alt="">
                    <img src="https://www.sundarini.organic/public/assets/public/images/newbiz/512X512_c.jpg"
                        class="w-44 hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out" alt="">
                    <img src="https://www.sundarini.organic/public/assets/public/images/newbiz/512X512_a.jpg"
                        class="w-44 hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out" alt="">
                </div>
            </div>
        </div>
        <div
            class="flex gap-10   md:mx-auto mx-6 my-5 items-center flex-wrap md:flex-nowrap justify-between py-16">
            <div class="flex flex-col gap-12 justify-between mx-auto">
                <h1 class="text-4xl text-green-700 font-semibold text-center"><span class="text-5xl">N</span>ational &
                    International Awards From
                </h1>
                <div class="flex gap-10">
                    <img class="hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out"
                        src="https://www.sundarini.organic/public/assets/public/images/newbiz/512X512_nddb.jpg"
                        class="w-32" alt="">
                    <img class="hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out"
                        src="https://www.sundarini.organic/public/assets/public/images/newbiz/512X512_ficci.jpg"
                        class="w-32" alt="">
                    <img class="hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out"
                        src="https://www.sundarini.organic/public/assets/public/images/newbiz/512X512_m%20a.jpg"
                        class="w-32" alt="">
                    <img class="hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out"
                        src="https://www.sundarini.organic/public/assets/public/images/newbiz/512X512_infoasia.jpg"
                        class="w-32" alt="">
                </div>
            </div>
        </div>


    </div>
    <?php include("./partials/footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>