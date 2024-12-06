<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Thai+Sarabun&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Thai Sarabun', sans-serif;
            margin: 0;
            height: 100vh;
        }

        .form-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            width: 100%;
            max-width: 600px;
        }

        .header {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .line-text {
            position: relative;
            display: inline-block;
            font-size: 24px;
            font-weight: 700;
        }

        .line-text::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -5px;
            height: 3px;
            background-color: #0023ff;
        }

        .text-des {
            margin-top: 15px;
        }

        .images {
            display: flex;
            justify-content: center;
        }

        .img-size {
            width: 90%;
        }

        .vh-100 {
            height: 100vh;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .d-flex {
            display: flex;
        }

        .align-items-center {
            align-items: center;
        }

        .justify-content-center {
            justify-content: center;
        }

        .text-contnet {
            background-color: #fff;
            border: 1px solid #a5a5a5;
            border-radius: 10px;
            padding: 20px;
        }

        .other-content {
            background-color: #fff;
            border: 1px solid #a5a5a5;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include('navbar_template.php') ?>
    
    <div class="form-content">
        <div class="content">
            <section class="d-flex align-items-center">
                <div class="container py-4">
                    <div class="header mx-auto text-center">
                        หัวข้อ
                    </div>
    
                    <div class="text-left mt-4 mb-5 text-contnet">
                        <div class="mb-4">
                            <label class="line-text">คำอธิบาย</label>
                        </div>
                        <div class="mb-2">
                            <label class="line-text">transportation</label>
                        </div>
                    </div>
    
                    <div class="text-center">
                        <div class="images">
                            <img src="../../modal/restaurant/r1.jpg" class="img-size">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="other-content">
        <label class="text-dark fw-bold fs-4">ร้านอาหารอื่นๆ</label>
        <hr>

        <div class="card mb-3" style="width: 50%; position: relative;">
            <div class="card-body" style="position: relative;">
                <img src="../../modal/restaurant/r1.jpg" style="width: 100%; border-radius: 10px;">
                <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
                background-color: rgba(0, 0, 0, 0.5); color: white; padding: 5px 10px; border-radius: 5px; font-size: 25px;">
                    ร้านที่ 1
                </span>
            </div>
        </div>

    </div>

</body>
</html>