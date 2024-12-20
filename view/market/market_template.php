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
            flex-direction: row;
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
                        <div class="header mx-auto text-center fs-2 fw-bold" id="market-name">
                            
                        </div>

                        <div class="text-left mt-4 mb-5 text-contnet">
                            <div class="mb-4">
                                <label class="line-text mb-3">คำอธิบาย</label>
                                <p id="market-description"></p>
                            </div>
                            <div class="mb-2">
                                <label class="line-text mb-3">การเดินทาง</label>
                                <p id="market-travel"></p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="images">
                                <div id="market-images" class="img-size"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="other-content">
            <label class="text-dark fw-bold fs-4">ร้านอาหารอื่นๆ</label>
            <hr>

            <div id="market-list"></div>
        </div>
    </div>

    <script>
        const markets = [
            {
                id: 1,
                name: "ถนนคนเดินวัวลาย",
                description: "ตลาดที่ตั้งอยู่บริเวณถนนวัวลาย (Wualai Road) ซึ่งเป็นถนนที่มีความเป็นเอกลักษณ์ของเชียงใหม่ ร้านค้าต่างๆ มีทั้งของท้องถิ่น งานศิลปะ ของที่ระลึก รวมถึงของกินจากหลากหลายท้องถิ่น",
                travel: {
                    public: "สามารถนั่งรถสองแถวหรือแท็กซี่จากจุดต่างๆ ไปยังถนนวัวลาย ซึ่งไม่ไกลจากใจกลางเมืองมาก",
                    private: "ขับรถมาจากถนนราชดำเนิน (ถนนหลักในเมือง) แล้วเลี้ยวเข้าสู่ถนนวัวลาย ซึ่งมีที่จอดรถใกล้เคียง"
                },
                images: [
                    "../../modal/market/i11.jpg",
                    "../../modal/market/i12.jpg",
                    "../../modal/market/i13.jpg"
                ],
                images_index: "../../modal/market/i14.jpg"
            },
            {
                id: 2,
                name: "ตลาดวังหลวง",
                description: "ตลาดที่เก่าแก่ที่สุดในเชียงใหม่ ตั้งอยู่ใกล้แม่น้ำปิง มีสินค้าหลากหลายชนิด เช่น เสื้อผ้า, ของฝาก, เครื่องประดับ, อาหารท้องถิ่น, และของสด ตลาดนี้มีทั้งร้านในตัวอาคารและร้านค้าข้างทาง",
                travel: {
                    public: "สามารถนั่งรถสองแถวจากในเมืองไปที่ตลาดวังหลวงได้ หรือใช้บริการแท็กซี่",
                    private: "หากขับรถส่วนตัวไปยังตลาดวังหลวงสามารถจอดรถได้บริเวณใกล้เคียงโดยมีที่จอดรถหลายจุด"
                },
                images: [
                    "../../modal/market/i21.jpg",
                    "../../modal/market/i22.jpg",
                    "../../modal/market/i23.jpg"
                ],
                images_index: "../../modal/market/i24.jpg"
            },
            {
                id: 3,
                name: "ถนนคนเดินท่าแพ",
                description: "ตลาดที่เปิดทุกวันอาทิตย์บนถนนราชดำเนินในเชียงใหม่ เป็นตลาดที่ใหญ่และมีชื่อเสียงในด้านสินค้าท้องถิ่น ของประดับและอาหาร ที่นี่เป็นจุดที่นักท่องเที่ยวมาเยี่ยมชมมากที่สุด",
                travel: {
                    public: "สามารถนั่งรถสองแถวหรือแท็กซี่มาที่ตลาด ซึ่งอยู่ใกล้กับประตูท่าแพ",
                    private: "ขับรถไปที่ถนนราชดำเนินและสามารถจอดรถในพื้นที่ที่กำหนดหรือที่จอดรถใกล้เคียง"
                },
                images: [
                    "../../modal/market/i31.jpg",
                    "../../modal/market/i32.jpg",
                    "../../modal/market/i33.jpg"
                ],
                images_index: "../../modal/market/i34.jpg"
            },
            {
                id: 4,
                name: "กาดหน้ามอ",
                description: "'กาดหน้ามอ' เป็นตลาดนัดที่ตั้งอยู่บริเวณหน้ามหาวิทยาลัย (มักจะหมายถึงหน้ามหาวิทยาลัยเชียงใหม่) ที่มีชื่อเสียงในเรื่องของอาหารพื้นเมือง ขนม ของฝาก เสื้อผ้า และของใช้ราคาย่อมเยา เป็นสถานที่ที่คนในพื้นที่ นักศึกษา และนักท่องเที่ยวนิยมไปเดินช้อปปิ้งหรือพักผ่อนในช่วงเย็น",
                travel: {
                    public: "สามารถขึ้นรถสองแถวสีแดงที่ให้บริการรอบเมืองเชียงใหม่ แจ้งคนขับว่าไป 'หน้ามหาวิทยาลัยเชียงใหม่' ค่าโดยสารเริ่มต้นประมาณ 20-30 บาท ขึ้นอยู่กับระยะทาง",
                    private: "ขับมาตามถนนห้วยแก้ว มุ่งหน้าไปทางมหาวิทยาลัยเชียงใหม่ กาดหน้ามอจะอยู่บริเวณฝั่งตรงข้ามทางเข้าหลักของมหาวิทยาลัย"
                },
                images: [
                    "../../modal/market/i41.jpg",
                    "../../modal/market/i42.jpg",
                    "../../modal/market/i43.jpg"
                ],
                images_index: "../../modal/market/i44.png"
            },
            {
                id: 5,
                name: "ไนท์บาซาร์เชียงใหม่",
                description: "ไนท์บาซาร์เชียงใหม่ (Chiang Mai Night Bazaar) เป็นแหล่งช้อปปิ้งที่มีชื่อเสียงของจังหวัดเชียงใหม่ ตั้งอยู่บริเวณถนนช้างคลาน ถือเป็นสถานที่ท่องเที่ยวที่นักท่องเที่ยวทั้งชาวไทยและต่างชาตินิยมมาเดินช้อปปิ้งและสัมผัสบรรยากาศยามค่ำคืน จุดเด่นคือสินค้าแฮนด์เมด เสื้อผ้า งานศิลปะ และของที่ระลึกต่าง ๆ รวมถึงอาหารพื้นเมืองอร่อย ๆ และการแสดงวัฒนธรรมพื้นบ้าน",
                travel: {
                    public: "รถสองแถวแดง บอกจุดหมายปลายทางว่า 'ไนท์บาซาร์' ค่าโดยสาร : เริ่มต้นประมาณ 20-30 บาท ขึ้นอยู่กับระยะทาง",
                    private: "เดินทางจากตัวเมืองเชียงใหม่ ให้ใช้ถนนช้างคลาน (Chang Klan Road) ซึ่งไนท์บาซาร์จะตั้งอยู่ใกล้กับโรงแรมเซ็นทารา"
                },
                images: [
                    "../../modal/market/i51.jpg",
                    "../../modal/market/i52.jpg",
                    "../../modal/market/i53.jpeg"
                ],
                images_index: "../../modal/market/i54.jpg"
            }
        ];

        const marketListContainer = document.getElementById("market-list");

        markets.forEach((market) => {
            const marketHTML = `
                <a href="market_template.php?id=${market.id}">
                    <div class="restaurant-item" style="margin-bottom: 20px;">
                        <div class="image-container" style="position: relative; width: 100%; border-radius: 10px; overflow: hidden;">
                            <img src="${market.images_index}" style="height: 300px; width: 100%; object-fit: cover; display: block;">
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
                            </span>
                        </div>
                    </div>
                </a>
            `;
            marketListContainer.innerHTML += marketHTML;
        });

        const urlParams = new URLSearchParams(window.location.search);
        const marketId = parseInt(urlParams.get('id'));
        const market = markets.find(r => r.id === marketId);

        if (market) {
            document.getElementById('market-name').textContent = market.name;
            document.getElementById('market-description').textContent = market.description;
            document.getElementById('market-travel').innerHTML = `
                ขนส่งสาธารณะ: ${market.travel.public}<br>
                การเดินทางโดยรถยนต์: ${market.travel.private}
            `;
            
            const imagesContainer = document.getElementById('market-images');
            if (imagesContainer && market.images && Array.isArray(market.images)) {
                market.images.slice().reverse().forEach(image => {
                    const imgElement = document.createElement('img');
                    imgElement.src = image;
                    imgElement.style.width = '500px';
                    imgElement.style.marginBottom = '10px';
                    imagesContainer.appendChild(imgElement);
                });
            }
        }
    </script>
</body>

</html>