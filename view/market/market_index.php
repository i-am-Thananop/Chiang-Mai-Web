<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Index</title>
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
            border-color: #0023ff;
        }

        
        .custom-cafe-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-color: #c2cb00;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include('navbar.php') ?>

    <div class="content">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <p class="fs-3 text-dark fw-bold line-with-text">ตลาดและถนนคนเดิน ในจังหวัดเชียงใหม่</p>

                <div class="row d-flex align-items-center py-5">
                    <div class="col-12">
                        <div id="restaurantCards" class="row"></div>
                    </div>
                </div>
            </div>


        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const markets = [
            {
                id: 1,
                name: "ถนนคนเดินวัวลาย",
                description: "ตลาดที่ตั้งอยู่บริเวณถนนวัวลาย (Wualai Road) ซึ่งเป็นถนนที่มีความเป็นเอกลักษณ์ของเชียงใหม่ ร้านค้าต่างๆ มีทั้งของท้องถิ่น งานศิลปะ ของที่ระลึก รวมถึงของกินจากหลากหลายท้องถิ่น",
                transportation: {
                    public: "สามารถนั่งรถสองแถวหรือแท็กซี่จากจุดต่างๆ ไปยังถนนวัวลาย ซึ่งไม่ไกลจากใจกลางเมืองมาก",
                    private: "ขับรถมาจากถนนราชดำเนิน (ถนนหลักในเมือง) แล้วเลี้ยวเข้าสู่ถนนวัวลาย ซึ่งมีที่จอดรถใกล้เคียง"
                },
                images: [
                    "../../modal/market/i11.jpg",
                    "../../modal/market/i12.jpg",
                    "../../modal/market/i13.jpg"
                ]
            },
            {
                id: 2,
                name: "ตลาดวังหลวง",
                description: "ตลาดที่เก่าแก่ที่สุดในเชียงใหม่ ตั้งอยู่ใกล้แม่น้ำปิง มีสินค้าหลากหลายชนิด เช่น เสื้อผ้า, ของฝาก, เครื่องประดับ, อาหารท้องถิ่น, และของสด ตลาดนี้มีทั้งร้านในตัวอาคารและร้านค้าข้างทาง",
                transportation: {
                    public: "สามารถนั่งรถสองแถวจากในเมืองไปที่ตลาดวังหลวงได้ หรือใช้บริการแท็กซี่",
                    private: "หากขับรถส่วนตัวไปยังตลาดวังหลวงสามารถจอดรถได้บริเวณใกล้เคียงโดยมีที่จอดรถหลายจุด"
                },
                images: [
                    "../../modal/market/i21.jpg",
                    "../../modal/market/i22.jpg",
                    "../../modal/market/i23.jpg"
                ]
            },
            {
                id: 3,
                name: "ถนนคนเดินท่าแพ",
                description: "ตลาดที่เปิดทุกวันอาทิตย์บนถนนราชดำเนินในเชียงใหม่ เป็นตลาดที่ใหญ่และมีชื่อเสียงในด้านสินค้าท้องถิ่น ของประดับและอาหาร ที่นี่เป็นจุดที่นักท่องเที่ยวมาเยี่ยมชมมากที่สุด",
                transportation: {
                    public: "สามารถนั่งรถสองแถวหรือแท็กซี่มาที่ตลาด ซึ่งอยู่ใกล้กับประตูท่าแพ",
                    private: "ขับรถไปที่ถนนราชดำเนินและสามารถจอดรถในพื้นที่ที่กำหนดหรือที่จอดรถใกล้เคียง"
                },
                images: [
                    "../../modal/market/i31.jpg",
                    "../../modal/market/i32.jpg",
                    "../../modal/market/i33.jpg"
                ]
            },
            {
                id: 4,
                name: "กาดหน้ามอ",
                description: "'กาดหน้ามอ' เป็นตลาดนัดที่ตั้งอยู่บริเวณหน้ามหาวิทยาลัย (มักจะหมายถึงหน้ามหาวิทยาลัยเชียงใหม่) ที่มีชื่อเสียงในเรื่องของอาหารพื้นเมือง ขนม ของฝาก เสื้อผ้า และของใช้ราคาย่อมเยา เป็นสถานที่ที่คนในพื้นที่ นักศึกษา และนักท่องเที่ยวนิยมไปเดินช้อปปิ้งหรือพักผ่อนในช่วงเย็น",
                transportation: {
                    public: "สามารถขึ้นรถสองแถวสีแดงที่ให้บริการรอบเมืองเชียงใหม่ แจ้งคนขับว่าไป 'หน้ามหาวิทยาลัยเชียงใหม่' ค่าโดยสารเริ่มต้นประมาณ 20-30 บาท ขึ้นอยู่กับระยะทาง",
                    private: "ขับมาตามถนนห้วยแก้ว มุ่งหน้าไปทางมหาวิทยาลัยเชียงใหม่ กาดหน้ามอจะอยู่บริเวณฝั่งตรงข้ามทางเข้าหลักของมหาวิทยาลัย"
                },
                images: [
                    "../../modal/market/i41.jpg",
                    "../../modal/market/i42.jpg",
                    "../../modal/market/i43.jpg"
                ]
            },
            {
                id: 5,
                name: "ไนท์บาซาร์เชียงใหม่",
                description: "ไนท์บาซาร์เชียงใหม่ (Chiang Mai Night Bazaar) เป็นแหล่งช้อปปิ้งที่มีชื่อเสียงของจังหวัดเชียงใหม่ ตั้งอยู่บริเวณถนนช้างคลาน ถือเป็นสถานที่ท่องเที่ยวที่นักท่องเที่ยวทั้งชาวไทยและต่างชาตินิยมมาเดินช้อปปิ้งและสัมผัสบรรยากาศยามค่ำคืน จุดเด่นคือสินค้าแฮนด์เมด เสื้อผ้า งานศิลปะ และของที่ระลึกต่าง ๆ รวมถึงอาหารพื้นเมืองอร่อย ๆ และการแสดงวัฒนธรรมพื้นบ้าน",
                transportation: {
                    public: "รถสองแถวแดง บอกจุดหมายปลายทางว่า 'ไนท์บาซาร์' ค่าโดยสาร : เริ่มต้นประมาณ 20-30 บาท ขึ้นอยู่กับระยะทาง",
                    private: "เดินทางจากตัวเมืองเชียงใหม่ ให้ใช้ถนนช้างคลาน (Chang Klan Road) ซึ่งไนท์บาซาร์จะตั้งอยู่ใกล้กับโรงแรมเซ็นทารา"
                },
                images: [
                    "../../modal/market/i51.jpg",
                    "../../modal/market/i52.jpg",
                    "../../modal/market/i53.jpeg"
                ]
            }
        ];

        document.addEventListener("DOMContentLoaded", function () {
            const marketCardsContainer = document.getElementById("restaurantCards");

            markets.forEach((market) => {
                const card = document.createElement("div");
                card.classList.add("col-12", "col-md-4", "mb-4");

                const carouselId = `carousel-${market.id}`;

                card.innerHTML = `
                    <a href="market_template.php?id=${market.id}">
                        <div class="card custom-shadow">
                            <div class="card-header text-bg-primary text-white fs-5 fw-bold">${market.name}</div>
                            <div class="card-body">
                                <div id="${carouselId}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        ${market.images.map((image, index) => `
                                            <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                                <img src="${image}" class="d-block w-100" alt="Image of ${market.name}">
                                            </div>
                                        `).join('')}
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                `;

                marketCardsContainer.appendChild(card);
            });
        });

    </script>
</body>
</html>