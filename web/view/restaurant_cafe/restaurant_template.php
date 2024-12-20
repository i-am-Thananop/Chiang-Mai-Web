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

        .main-content {
            display: flex;
            justify-content: flex-end;
            gap: 20px; 
            padding: 20px;
        }

        .form-content {
            flex: 1; 
            max-width: 50%; 
        }

        .other-content {
            flex: 0 0 30%;
            max-width: 25%; 
            max-height: 80%; 
            overflow-y: auto; 
            padding: 20px;
            background-color: #f8f9fa; 
            border: 1px solid #ddd;
        }

        .form-content {
            display: flex;
            align-items: center; 
            justify-content: center; 
            flex: 1; 
            max-width: 50%; 
            height: 100%;
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
            border: 1px solid #0023ff;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include('navbar_template.php') ?>
    
    <div class="main-content d-flex">
        <div class="form-content">
            <div class="content">
                <section class="d-flex align-items-center">
                    <div class="container py-4">
                        <div class="header mx-auto text-center fs-2 fw-bold" id="restaurant-name">
                            
                        </div>

                        <div class="text-left mt-4 mb-5 text-contnet">
                            <div class="mb-4">
                                <label class="line-text mb-3">คำอธิบาย</label>
                                <p id="restaurant-description"></p>
                            </div>
                            <div class="mb-2">
                                <label class="line-text mb-3">การเดินทาง</label>
                                <p id="restaurant-transportation"></p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="images">
                                <img src="" class="img-size" id="restaurant-image">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="other-content">
            <label class="text-dark fw-bold fs-4">ร้านอาหารอื่นๆ</label>
            <hr>

            <div id="restaurant-list"></div>
            
        </div>
    </div>

    <script>
        const restaurants = [
            {
                id: 1,
                name: "ร้านก๋วยเตี๋ยวห้อยขา",
                description: "ร้านก๋วยเตี๋ยวห้อยขาเป็นร้านก๋วยเตี๋ยวที่มีบรรยากาศเป็นเอกลักษณ์ โดยการนั่งทานในลักษณะห้อยขา ทำให้ได้รับประสบการณ์ที่ไม่เหมือนใคร เมนูแนะนำคือก๋วยเตี๋ยวรสชาติเข้มข้น พร้อมน้ำซุปที่มีรสกลมกล่อม",
                transportation: {
                    public: "ใช้บริการรถสองแถวหรือรถสาธารณะที่วิ่งในเส้นทางจากตัวเมืองเชียงใหม่ไปยังอำเภอแม่ริม",
                    private: "ขับไปตามเส้นทางที่ผ่านถนนเชียงใหม่-แม่ริม ซึ่งใช้เวลาประมาณ 20-30 นาทีจากตัวเมือง"
                },
                images: [
                    "../../modal/restaurant/r1.jpg",
                    "../../modal/restaurant/r2.jpg",
                    "../../modal/restaurant/r3.jpg"
                ],
                images_index: "../../modal/restaurant/r1.jpg"
            },
            {
                id: 2,
                name: "ร้านข้าวซอยแม่สาย",
                description: "ร้านนี้ขึ้นชื่อเรื่อง 'ข้าวซอย' ที่เป็นอาหารพื้นเมืองของเชียงใหม่ เสิร์ฟข้าวซอยไก่หรือเนื้อในน้ำซุปข้น ๆ ที่รสชาติกลมกล่อม โดยมีการใช้เส้นข้าวซอยที่ทำเอง",
                transportation: {
                    public: "ขึ้นรถสองแถวหรือรถเมล์ที่ไปเส้นทางสายข้าวซอยในตัวเมืองเชียงใหม่",
                    private: "ร้านอยู่ในตัวเมืองเชียงใหม่ ใช้เส้นทางไปตามถนนที่ใกล้เคียงกับสถานที่ท่องเที่ยวหลัก"
                },
                images: [
                    "../../modal/restaurant/r-21.jpg",
                    "../../modal/restaurant/r-22.jpg",
                    "../../modal/restaurant/r-23.jpg"
                ],
                images_index: "../../modal/restaurant/res2.jpg"
            },
            {
                id: 3,
                name: "ร้านมีนา",
                description: "ร้านมีนาเสิร์ฟอาหารไทยที่เน้นการใช้ข้าวเป็นวัตถุดิบหลัก โดยมีทั้งเมนูข้าวผัด, ข้าวต้ม, ข้าวหน้าเนื้อ, ข้าวแกง และเมนูอื่น ๆ ที่สอดแทรกความคิดสร้างสรรค์และรสชาติที่ลงตัวในแต่ละจาน บรรยากาศในร้านสะอาด สบายๆ มีการตกแต่งที่ให้ความรู้สึกอบอุ่นและเป็นกันเอง",
                transportation: {
                    public: " สามารถขึ้นรถเมล์ในเส้นทางที่ไปเชียงใหม่เกษตรหรือในเส้นทางหลักที่ผ่านตัวเมืองเชียงใหม่ เส้นทางที่ผ่านถนนนิมมานเหมินทร์",
                    private: "ขับรถไปตามทางหลวงหมายเลข 108 ที่เชื่อมต่อระหว่างเชียงใหม่และหางดง บริเวณที่ตั้งร้าน Meena จะอยู่ใกล้กับหมู่บ้านบ่อสร้าง (Borsang) และสามารถสังเกตป้ายบอกทางได้อย่างชัดเจน"
                },
                images: [
                    "../../modal/restaurant/r-31.jpg",
                    "../../modal/restaurant/r-32.jpg",
                    "../../modal/restaurant/r-33.jpg"
                ],
                images_index: "../../modal/restaurant/r-33.jpg"
            },
            {
                id: 4,
                name: "ร้าน ไก่ย่าง วิเชียรบุรี นิมมานเหมินทร์",
                description: "ไก่ย่างวิเชียรบุรี นิมมานเหมินทร์ เป็นร้านอาหารที่ขึ้นชื่อเรื่องไก่ย่างสูตรเด็ด เนื้อฉ่ำ หนังกรอบ มาพร้อมน้ำจิ้มรสเด็ดและเมนูอาหารอีสานหลากหลาย",
                transportation: {
                    public: "จากในตัวเมืองเชียงใหม่ สามารถเรียกรถแดงไปยังถนนนิมมานเหมินทร์ แจ้งคนขับว่าต้องการไปไก่ย่างวิเชียรบุรี",
                    private: "ขับรถมายังถนนนิมมานเหมินทร์ ร้านอยู่ในซอย นิมมานเหมินทร์ ซอย 7"
                },
                images: [
                    "../../modal/restaurant/r-41.jpg",
                    "../../modal/restaurant/r-42.jpg",
                    "../../modal/restaurant/r-43.jpg"
                ],
                images_index: "../../modal/restaurant/r-41.jpg"
            },
            {
                id: 5,
                name: "ร้านเฟื่องฟ้า",
                description: "ร้านนี้มีชื่อเสียงในการเสิร์ฟอาหารไทยประยุกต์ที่บรรยากาศดี มีทั้งอาหารไทยรสจัดและอาหารที่มีการตกแต่งอย่างสวยงาม",
                transportation: {
                    public: "ขึ้นรถสองแถวที่วิ่งในเส้นทางจากตัวเมืองไปยังพื้นที่บริเวณหางดอย",
                    private: "ใช้เส้นทางถนนสายหลักไปยังเขตหางดอย เชียงใหม่"
                },
                images: [
                    "../../modal/restaurant/r-51.jpg",
                    "../../modal/restaurant/r-52.jpg",
                    "../../modal/restaurant/r-53.jpg"
                ],
                images_index: "../../modal/restaurant/r-54.jpg"
            }
        ];

        const restaurantListContainer = document.getElementById("restaurant-list");

        restaurants.forEach((restaurant) => {
            const restaurantHTML = `
                <a href="restaurant_template.php?id=${restaurant.id}">
                    <div class="restaurant-item" style="margin-bottom: 20px;">
                        <div class="image-container" style="position: relative; width: 100%; border-radius: 10px; overflow: hidden;">
                            <img src="${restaurant.images_index}" style="height: 300px; width: 100%; object-fit: cover; display: block;">
                            <span style="
                                font-size: 26px; 
                                font-weight: 900; 
                                position: absolute; 
                                top: 50%; 
                                left: 50%; 
                                transform: translate(-50%, -50%); 
                                color: white; 
                                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
                                text-align: center;">
                                ${restaurant.name}
                            </span>
                        </div>
                    </div>
                </a>
            `;
            restaurantListContainer.innerHTML += restaurantHTML;
        });

        const urlParams = new URLSearchParams(window.location.search);
        const restaurantId = parseInt(urlParams.get('id'));
        const restaurant = restaurants.find(r => r.id === restaurantId);

        if (restaurant) {
            document.getElementById('restaurant-name').textContent = restaurant.name;
            document.getElementById('restaurant-description').textContent = restaurant.description;
            document.getElementById('restaurant-transportation').textContent = `
                ขนส่งสาธารณะ: ${restaurant.transportation.public}
                การเดินทางโดยรถยนต์: ${restaurant.transportation.private}
            `;
            document.getElementById('restaurant-image').src = restaurant.images;
        }
    </script>
</body>

</html>