<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Chiang Mai Tourism</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Thai+Sarabun&display=swap" rel="stylesheet">

    <style>
        .dynamic-height-section {
            min-height: 100vh;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .custom-container {
            display: flex;
            align-items: flex-start;
        }
        .image-container img {
            width: 800px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: block;
            mask-image: radial-gradient(circle, rgba(0,0,0,1) 65%, rgba(0,0,0,0) 100%);
            -webkit-mask-image: radial-gradient(circle, rgba(0,0,0,1) 65%, rgba(0,0,0,0) 100%);
        }
        .text-container {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .text-container h1 {
            font-size: 1.8rem;
            font-weight: bold;
        }
        .text-container p {
            font-size: 1rem;
            line-height: 1.6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Thai Sarabun', sans-serif;
        }

        .menu-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .menu-item {
            position: relative;
            width: 300px;
            height: 280px;
            border-bottom: 5px solid transparent;
            border-radius: 10px;
            overflow: hidden;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .menu-item .menu-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 26px;
            font-weight: bolder;
            color: white;
            text-shadow: 
                2px 2px 0px #000,
                -2px -2px 0px #000, 
                2px -2px 0px #000,
                -2px 2px 0px #000;
            padding: 10px;
        }

        .menu-item.tourist {
            background-image: url('../modal/history/129744765_l.jpg');
            background-size: 200% 100%;
            background-position: center;
        }

        .menu-item.restaurant {
            background-image: url('../modal/history/res1.jpg');
            background-size: 200% 100%;
            background-position: center;
        }

        .menu-item.market {
            background-image: url('../modal/history/image-17.png');
            background-size: 200% 100%;
            background-position: center;
        }

        .menu-item:hover {
            border-color: #444;
        }

        .menu-item:active {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="content">
        <section class="dynamic-height-section" style="background-image: url('../modal/history/1089078390.jpg'); background-size: cover; background-position: center;">
            <div class="container py-5">
                <!-- หัวของเว็บ -->
                <div class="d-flex justify-content-center">
                    <p class="text-center bg-white rounded p-3 shadow fw-bold fs-3" style="opacity: 0.8; border: 5px solid rgba(158, 158, 158, 0.8);">
                        ท่องเที่ยวเชียงใหม่
                    </p>
                </div>

                <!-- ความเป็นมา -->
                <div class="custom-container">
                    <div class="image-container me-4">
                        <img src="../modal/history/26160118_l.jpg" alt="จังหวัดเชียงใหม่" class="img-fluid">
                    </div>

                    <div class="text-container">
                        <h1>ความเป็นมาของจังหวัดเชียงใหม่</h1>
                        <p>
                            จังหวัดเชียงใหม่ ตั้งอยู่ทางภาคเหนือของประเทศไทย เป็นจังหวัดที่มีประวัติศาสตร์ยาวนานกว่า 700 ปี ก่อตั้งขึ้นในปี พ.ศ. 1839 
                            โดยพญามังราย ซึ่งเลือกพื้นที่บริเวณนี้เป็นที่ตั้งเมืองหลวงของอาณาจักรล้านนา โดยมีชื่อเดิมว่า "นพบุรีศรีนครพิงค์เชียงใหม่" 
                            เมืองเชียงใหม่เป็นศูนย์กลางทางการค้า ศาสนา และวัฒนธรรมในยุคนั้น
                        </p>
                        <p>
                            ปัจจุบัน เชียงใหม่เป็นศูนย์กลางการท่องเที่ยว การศึกษา และเศรษฐกิจของภาคเหนือ มีความหลากหลายทางวัฒนธรรมและธรรมชาติที่สวยงาม 
                            ทำให้เป็นหนึ่งในจังหวัดที่ดึงดูดนักท่องเที่ยวทั้งชาวไทยและต่างชาติได้มากที่สุดในประเทศ
                        </p>
                    </div>
                </div>

                <!-- เมนู -->
                <div class="menu-container">
                    <a href="travel/travel_index.php" class="menu-item tourist">
                        <div class="menu-text">แหล่ง <br>ท่องเที่ยว</div>
                    </a>
                    <a href="#restaurant" class="menu-item restaurant">
                        <div class="menu-text">ร้านอาหาร <br>และคาเฟ่</div>
                    </a>
                    <a href="#market" class="menu-item market">
                        <div class="menu-text">เดินชมตลาด</div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>