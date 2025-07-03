<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoNatty - @yield('title', 'Home')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .btn-primary {
            @apply bg-orange-500 hover:bg-orange-600 text-white font-medium px-6 py-2 rounded-lg transition duration-300;
        }
        .section-title {
            @apply text-2xl font-bold text-center mb-8;
        }
        .product-card {
            @apply bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300;
        }
        .product-image {
            @apply w-full h-64 object-cover;
        }
        .product-info {
            @apply p-4;
        }
        .price {
            @apply text-orange-500 font-bold text-lg;
        }
        .price-old {
            @apply text-gray-400 line-through text-sm ml-2;
        }
    </style>
</head>
<body>
    <div class="min-h-screen bg-[#f3f3f3]">
        @include('client.partials.header')

        @yield('content')
    </div>

    <!-- Messenger Chat Plugin -->
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100012345678901"); // Thay thế bằng ID page của bạn
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>
