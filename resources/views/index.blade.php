@extends('layout.default')
@section('title', 'Home Page')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')

    </head>

    <body class="bg-gray-100">

        
        <!-- Hero Section -->
        <section class="container mx-auto px-4 py-16 text-center  ">
            <h1 class="text-3xl md:text-5xl font-bold text-green-700 mb-2 pop-in">SERVIAMUS FOUNDATION INCORPORATED</h1>
            <p class="text-base text-gray-500 mb-8 font-semibold pop-in">
                Doing business under the name and style of
            </p>

            <h2 class="text-2xl text-green-700 font-semibold italic pop-in">SERVIAMUS MICROFINANCE</h2>
            <div class="flex align-center justify-center my-5 pop-in">
                <img class="w-15 h-15" src="{{ asset("system_img/sfilogo.png") }}" alt="">
            </div>
            <h2 class="text-2xl text-green-700 font-semibold italic pop-in">SINCE 1997</h2>
            <a href="#"
                class="inline-block mt-10 bg-green-800 text-white px-3 py-3 rounded-full font-semibold hover:bg-green-700 transition pop-in">
                <i class="fa-solid fa-magnifying-glass"></i>
                Learn More</a>

            <p class="text-justify mt-10 text-gray-600 pop-in"><b>SERVIAMUS FOUNDATION INCORPORATED</b> is a Diocesan microfinance
                foundation focusing on providing financial
                assistance to it's recognized members. It aims to make formal credit available to women and other
                micro-entrepreneurs to help them start or expand their business activities and increase their income. It
                focuses on micro-enterprises that generate daily or weekly sales.<br><br>



                In pursuit of its vision of empowering poor people to have access to and control over their resources and
                manage these in a sustainable manner, Serviamus Foundation Incorporated (SFI) launched the Small Enterprise
                Development Program (SEDP). Since its inception in 1997 - its implementation and experiences in the
                community proved that Grameen Bank Approach is an effective tool in poverty alleviation. The Grameen Bank
                Approach is modified and refined to respond more effectively and efficiently to the evolving financial
                requirements of the entrepreneurial poor in Iligan City and the neighboring provinces in Mindanao.</p>
        </section>

        <!-- Cards Section -->
        <section class="container mx-auto px-4 py-4">
            <h2 class="text-2xl py-2 text-green-900 font-semibold pop-in">Programs & Service</h2>

            <div class="flex flex-row flex-wrap w-full justify-between gap-4">
                <div class="service-card pop-in">
                    <label for="">Trainings</label>
                    <img src="{{asset('system_img/icons/presentation.png')}}" alt="">
                    <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i> Read More</a>
                </div>
                <div class="service-card pop-in">
                    <label for="">Community Development Program</label>
                    <img src="{{asset('system_img/icons/projects.png')}}" alt="">
                     <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i> Read More</a>
                </div>
                <div class="service-card pop-in">
                    <label for="">SCHOLARSHIP PROGRAM</label>
                    <img src="{{asset('system_img/icons/diploma.png')}}" alt="">
                     <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i> Read More</a>
                </div>
                <div class="service-card pop-in">
                    <label for="">CREDIT SERVICES</label>
                    <img src="{{asset('system_img/icons/credit-union.png')}}" alt="">
                     <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i> Read More</a>
                </div>

            </div>
        </section>

      
    </body>

    </html>
@endsection