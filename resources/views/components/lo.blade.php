<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restaurant Mangement System</title>
    <link rel="stylesheet" href="./assets/css/login1.css">
	<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

    @csrf
	<div class='w-full h-[10vh] px-3 flex items-center bg-[#610908] text-white justify-between py-6'>
		<img src="./assets/img/company logo.jpeg" alt="" class="h-10 rounded-lg ms-10" />
		<span class='flex gap-3 me-5 items-center'>
		  <img src="./assets/img/employee.jpeg" alt="" class="h-5" />
		  <h1 class=''>+91 9585679193</h1>
		</span>
	  </div>
	<div class="  h-[80vh] mx-5 flex flex-col gap-3 justify-center">
		<div class="px-5  py-5 flex  divide-x-2 rounded-lg shadow-md">
			<span class="w-[40%] flex items-center justify-center">
			<img src="./assets/img/foods.jpeg" alt="" class="h-100 w-100 img " />
			</span>
			<span class="w-[60%] flex items-center flex-col justify-center">
                {{-- <div class="content">
                    @yield('content')
                </div>
            </span> --}}
		</div>
		<h1 class="text-xl ms-12 mt-5 font-semibold text-[#610908]">Integrated With</h1>
		<div class=" flex flex-col items-center justify-center">

			<span class="flex w-3/5 py-5 items-center justify-evenly">
			<img src="./assets/img/swiggy.jpeg" alt="" class=" h-16 " />
			<img src="./assets/img/uber.jpeg" alt="" class=" h-16 " />
			<img src="./assets/img/zomato.jpeg" alt="" class=" h-16 " />
			</span>
		</div>
	</div>
	<div class='w-full h-[10vh] py-6 flex items-center justify-center flex-col bg-gray-400'>
		<h1 class="text-xs">Trusted by 100+ companies</h1>
		<h1 class="text-sm font-semibold">@2023 Epicurean All Rights Reserved</h1>
	  </div>
      <script src="./assets/js/passwordshow.js"></script>
</body>
</html>
