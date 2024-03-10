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
            <?php
                include 'library/db_conn.php';

                $rand_id = $_REQUEST['love'];
                
                $sql = "SELECT sender, receiver FROM data WHERE rand_id='$rand_id'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $sender = $row['sender'];
                    $receiver = $row['receiver'];
                }
            ?>

            <img src="images/stars.svg" alt="stars" class="fixed top-0 md:-top-96 z-0 opacity-40">

            <h1 class='md:text-5xl text-4xl text-pink-500 font-lobster cursor-default mt-12 z-10 drop-shadow-glow leading-normal px-8 opacity-0 animate-[fade1_2s_ease-out_1_1s_forwards]'>
                Happy Valentine's Day
                <?php echo $receiver; ?>!
                <span class="inline-block animate-[heartbeat_2s_ease_infinite] invert hover:invert-0 transition-all duration-300 ease-in">❤️</span>
            </h1>
            <h1 class='md:text-3xl text-2xl text-orange-200 font-singleDay cursor-default mt-6 z-10 opacity-0 animate-[fade2_2s_ease-out_1_3s_forwards]'>
                From
                <?php echo $sender; ?>
            </h1>
            
            <img src="images/rose.svg" alt="rose" class="w-96 fixed bottom-0 drop-shadow-glow2 opacity-0 animate-[fade2_3s_ease-out_1_5s_forwards]">

            <a href="./" class="fixed bottom-0 right-0 bg-violet-200 hover:bg-rose-200 py-1 px-4 rounded font-singleDay text-lg transition">Send Your Rose</a>

            <button onclick="copyLink()" class="fixed bottom-0 left-0 bg-violet-200 hover:bg-rose-200 py-1 px-4 rounded font-singleDay text-lg transition">Copy Link</button>
        </div>
    </div>

    <script>
        function copyLink() {
            var url = window.location.href;
            navigator.clipboard.writeText(url);
        }
    </script>
</body>

</html>