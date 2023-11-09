@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-blue-400 text-5xl uppercase font-bold text-shadow-md pb-14">
                    DAILY BLOG POST!!!
                </h1>
                <a style=" background-color:skyblue; border-radius:5px; color:white" 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Daily Post
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/Image.jpg') }}" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 style="background-color: blue; height:40px; color:aliceblue" class="text-3xl font-extrabold text-gray-600">
                Daily Post Blog
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
            "What you do after you create your content is what truly counts"
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                
Uploading a new post to a blog website typically involves several steps, including creating a draft, formatting the content, adding images or other media, and publishing the post. The specific steps may vary depending on the blogging platform you are using, but the general process is similar across most platforms.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Upload Your Blog Post
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            UI/UX Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Blogging
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
        Uploading a new post to a blog website typically involves several steps, including creating a draft, formatting the content, adding images or other media, and publishing the post. The specific steps may vary depending on the blogging platform you are using, but the general process is similar across most platforms.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                Uploading a new post to a blog website typically involves several steps, including creating a draft, formatting the content, adding images or other media, and publishing the post. The specific steps may vary depending on the blogging platform you are using, but the general process is similar across most platforms.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection