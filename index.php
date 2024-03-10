<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Your Rose</title>
    <link rel="stylesheet" href="library/style.css">
</head>
<body>
    <div class="h-dvh bg-bg_1 bg-no-repeat bg-cover bg-fixed overflow-hidden">
        <div class="container text-center mt-16 flex flex-col items-center">
            <form action="sql/insert.php" method="POST" class="mt-8 flex flex-col items-center md:gap-y-8 gap-y-6">
                <h1 class='md:text-5xl text-4xl text-violet-400 font-singleDay cursor-default'>
                    Enter Your Name
                </h1>
                <input type="name" name="sender"
                    class="bg-violet-200 text-4xl focus:outline-none py-2 px-4 font-lobster text-rose-600 text-center tracking-wider rounded-lg md:w-auto w-4/6">
                <h1 class='md:text-5xl text-4xl text-violet-400 font-singleDay cursor-default'>
                    Enter Your
                    <span
                        class="inline-block animate-[heartbeat_2s_ease_infinite] hover:invert transition-all duration-300 ease-in">
                        ❤️
                    </span>
                    's Name
                </h1>
                <input type="name" name="receiver"
                    class="bg-violet-200 text-4xl focus:outline-none py-2 px-4 font-lobster text-rose-600 text-center tracking-wider rounded-lg md:w-auto w-4/6">
                <input type="submit" value=">"
                    class="text-4xl cursor-pointer py-2 px-4 font-singleDay text-white hover:translate-x-1 transition">
            </form>
        </div>
    </div>
</body>

</html>