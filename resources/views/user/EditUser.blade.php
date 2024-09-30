<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  
    <title>Document</title>
</head>
<body>
    <div class="w-[500px] h-[600px] mx-auto m-20 flex flex-col items-center justify-center bg-gray-400 border-gray-50 rounded-md"> 
        <h1 class="text-2xl font-semibold font-sans mb-5">Registration form</h1>
    
        <form action="" method="post">
       
         <div class="mt-[-10px] mb-4 flex flex-col">
            <label for="fullname" class="text-xl font-semibold">Fullname</label>
            <input type="text" class="border-solid p-2 text-black h-12 rounded-md" name="name" id="fullname">
         </div>
         <div class="mb-4 flex flex-col">
            <label for="email" class="text-xl font-semibold">Email</label>
            <input type="email" class="border-solid p-2 w-96 text-black h-12 rounded-md" name="email" id="email">
         </div>
         <div class="mb-4 flex flex-col">
            <label for="password" class="text-xl font-semibold">Password</label>
            <input type="password" class="border-solid p-2 w-96 text-black h-12 rounded-md" name="password" id="password">
         </div>
         <!-- <div class="mb-4 flex flex-col">
            <label for="address" class="text-xl font-semibold">Conform password</label>
            <input type="text" class="border-solid p-2 w-96 text-black h-12 rounded-md" name="password_conformation" id="address">
         </div> -->
         <a href="/contact">If you already have an account, login here</a>
        
         <button class="w-full bg-blue-600 h-12 mt-4 border-s-violet-300 rounded-md text-xl font-semibold text-white hover:bg-green-600">Register</button>
        </form>
       </div> 
</body>
</html>