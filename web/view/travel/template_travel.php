<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .background {
            position: relative;
            width: 100vw;
            height: 100vh;
        }

        .background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('../bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.6;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="content">
        <section class="background">
            <div class="container py-2">
                <a href="../index.php" class="btn btn-primary mb-2">ย้อนกลับ</ฟ>
            </div>

            <div class="container py-1">
                <div class="d-flex justify-content-center">
                    <h3 class="text-dark fw-bold">หัวข้อ</h3>
                </div>

                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-6">
                        <div class="text-center mt-3 mb-2">
                        <img src="../../modal/history/t1.jpg" 
                            style="width: 70%; max-width: 600px; object-fit: contain; border-radius: 20px; box-shadow: 
                            inset 0 0 10px rgba(0, 0, 0, 0.5); mask-image: radial-gradient(circle, rgba(0, 0, 0, 1) 60%, rgba(0, 0, 0, 0) 100%);">
                        </div>

                        <h3 class="text-dark fw-bold">เนื้อหา</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
