
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Health Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#eee" />
        <!-- Meta Description -->
        <meta name="description" content="Professional healthcare services with our expert medical team. Book appointments online, explore our health guides and get quality treatment." />
        
        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="MediCare - Professional Healthcare Services" />
        <meta property="og:description" content="We provide premium healthcare services with modern medical equipment and experienced specialists." />
        <meta property="og:image" content="https://www.yourdomain.com/images/healthcare-og-image.jpg" />
        <meta property="og:url" content="https://www.yourdomain.com" />
        <meta property="og:type" content="website" />
        
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="MediCare - Professional Healthcare Services">
        <meta name="twitter:description" content="Premium healthcare services with modern equipment and experienced specialists.">
        <meta name="twitter:image" content="https://www.yourdomain.com/images/healthcare-twitter-image.jpg">
        <!-- favicon -->
         <link rel="icon" type="image/svg+xml" href="./assets/imgs/favicon.svg">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
        <style>
            body {
                font-family: 'Lato', sans-serif;
                background-color: #f8f9fa;
                height: 100vh;
            }
            .thank-you-box {
                border-radius: 10px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            }
           .thank-you-box .icon {
            font-size: 80px;
            color: #2373bd;
            animation: popIn 0.8s ease-out forwards;
            }
            
            @keyframes popIn {
                0% {
                    transform: scale(0);
                    opacity: 0;
                }
                60% {
                    transform: scale(1.2);
                    opacity: 1;
                }
                100% {
                    transform: scale(1);
                }
            }
        
            .thank-you-box h1 {
                color: #2373bd;
            }
            .thank-you-box p {
                color: #333;
            }
            .thank-you-box a {
                background-color: #2373bd;
                border-radius: 5px;
            }
            .thank-you-box a:hover {
                background-color: #1a5a94;
            }
        </style>
    </head>
    <body class="d-flex justify-content-center align-items-center">
        <div class="thank-you-box bg-white text-center p-4 p-lg-5 mx-3">
            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
            <h1 class="mb-3">Thank You!</h1>
            <p class="mb-4 text-muted">Your message has been sent successfully. We will get back to you soon.</p>
            <a class="text-decoration-none text-white py-2 px-3" href="index.php">Back to Home</a>
        </div>
    </body>
</html>
