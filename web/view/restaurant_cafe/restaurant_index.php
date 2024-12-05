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
        .line-with-text {
            border-left: 4px solid #0023ff; 
            padding-left: 15px; 
            margin: 0; 
        }

        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="content">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <p class="fs-3 text-dark fw-bold line-with-text">ร้านอาหารและคาเฟ่ ในจังหวัดเชียงใหม่</p>

                <div class="row d-flex align-items-center py-5">
                    <div class="col-12">
                        <div id="restaurantCards" class="row"></div>

                        <!-- <div class="card custom-shadow">
                            <div class="card-header fs-5 fw-bold">
                                หัวข้อ
                            </div>
                            

                            <div class="card-body">
                                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="carouselImages">

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="../../controller/data_restaurant.js"></script> -->

    <script>
        const restaurants = [
            {
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
                ]
            },
            {
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
                ]
            },
            {
                name: "ร้านอาหารทิพย์สมัย",
                description: "ร้านนี้เป็นที่รู้จักในเรื่องของอาหารท้องถิ่นที่หลากหลาย เช่น ขนมจีนน้ำเงี้ยว, แกงฮังเล ซึ่งเป็นเมนูที่สะท้อนความเป็นเชียงใหม่ได้อย่างดี",
                transportation: {
                    public: "รถสองแถวหรือบริการรถทัวร์ในเมืองเชียงใหม่สามารถพาคุณไปยังร้านได้",
                    private: "ร้านอยู่ในตัวเมืองเชียงใหม่ เดินทางสะดวกจากย่านนิมมาน"
                },
                images: [
                    "../../modal/restaurant/r-31.jpg",
                    "../../modal/restaurant/r-32.jpg",
                    "../../modal/restaurant/r-33.jpg"
                ]
            },
            {
                name: "ไก่ย่าง วิเชียรบุรี นิมมานเหมินทร์",
                description: "ไก่ย่างวิเชียรบุรี นิมมานเหมินทร์ เป็นร้านอาหารที่ขึ้นชื่อเรื่องไก่ย่างสูตรเด็ด เนื้อฉ่ำ หนังกรอบ มาพร้อมน้ำจิ้มรสเด็ดและเมนูอาหารอีสานหลากหลาย",
                transportation: {
                    public: "จากในตัวเมืองเชียงใหม่ สามารถเรียกรถแดงไปยังถนนนิมมานเหมินทร์ แจ้งคนขับว่าต้องการไปไก่ย่างวิเชียรบุรี",
                    private: "ขับรถมายังถนนนิมมานเหมินทร์ ร้านอยู่ในซอย นิมมานเหมินทร์ ซอย 7"
                },
                images: [
                    "../../modal/restaurant/r-41.jpg",
                    "../../modal/restaurant/r-42.jpg",
                    "../../modal/restaurant/r-43.jpg"
                ]
            },
            {
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
                ]
            }
        ];

        document.addEventListener("DOMContentLoaded", function () {
            const restaurantCardsContainer = document.getElementById("restaurantCards");

            restaurants.forEach((restaurant) => {
                const card = document.createElement("div");
                card.classList.add("col-12", "col-md-4", "mb-4");

                card.innerHTML = `
                    <div class="card custom-shadow">
                        <div class="card-header fs-5 fw-bold">${restaurant.name}</div>
                        <div class="card-body">
                            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    ${restaurant.images.map((image, index) => `
                                        <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                            <img src="${image}" class="d-block w-100" alt="Image of ${restaurant.name}">
                                        </div>
                                    `).join('')}
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                `;

                restaurantCardsContainer.appendChild(card);
            });
        });

    </script>
</body>
</html>
