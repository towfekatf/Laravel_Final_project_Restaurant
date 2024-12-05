<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <h1 class="text-center py-10 text-5xl font-bold text-red-600">User Registration</h1>
    <div class="max-w-[600px] mx-auto">
        <div class="flex justify-center flex-col gap-y-5 ">
            
                <form action="{{ route('register.store') }}" class="flex flex-col space-y-5" method="POST">
        
            @csrf
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" class="py-3 px-4 border border-red-500 text-base rounded-md min-w-[500px]"/>
            <input type="text" name="email" placeholder="Enter your email" class="py-3 px-4 border border-red-500 text-base rounded-md min-w-[500px]"/>
            <input type="password" name="password" placeholder="Enter your password" class="py-3 px-4 border border-red-500 text-base rounded-md min-w-[500px]"/>
            <input type="address" name="address" placeholder="Enter your address" class="py-3 px-4 border border-red-500 text-base rounded-md min-w-[500px]"/>

            <button type="submit" class="py-3 px-4 border bg-red-600 text-white mt-10 rounded-md">Submit</button>
        </form>
    </div>
</body>
</html>












