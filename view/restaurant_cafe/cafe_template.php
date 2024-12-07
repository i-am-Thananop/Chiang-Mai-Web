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
                        <div class="header mx-auto text-center fs-2 fw-bold" id="cafe-name">
                            
                        </div>

                        <div class="text-left mt-4 mb-5 text-contnet">
                            <div class="mb-4">
                                <label class="line-text mb-3">คำอธิบาย</label>
                                <p id="cafe-description"></p>
                            </div>
                            <div class="mb-2">
                                <label class="line-text mb-3">การเดินทาง</label>
                                <p id="cafe-travel"></p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="images">
                                <div id="cafe-images" class="img-size"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="other-content">
            <label class="text-dark fw-bold fs-4">ร้านอาหารอื่นๆ</label>
            <hr>

            <div id="cafe-list"></div>
        </div>
    </div>

    <script>
        const cafes = [
            {
                id: 1,
                name: "Ristr8to",
                description: "คาเฟ่ที่มีชื่อเสียงในเรื่องของกาแฟที่คัดสรรอย่างดีจากทั่วโลก พร้อมบาริสต้าฝีมือเยี่ยมที่ทำให้กาแฟรสชาติกลมกล่อมและคงความเป็นเอกลักษณ์ ร้านมีบรรยากาศที่อบอุ่นและเป็นกันเอง เหมาะสำหรับคนรักกาแฟ",
                travel: {
                    public: "ขึ้นรถสองแถวหรือบริการรถสาธารณะที่มุ่งหน้าไปยังถนนนิมมานเหมินทร์",
                    private: "ร้านตั้งอยู่บนถนนนิมมานเหมินทร์ สามารถขับรถมาจากตัวเมืองเชียงใหม่ได้อย่างสะดวก ใช้เวลาไม่นาน"
                },
                images: [
                    "../../modal/cafe/i11.jpg",
                    "../../modal/cafe/i12.jpg",
                    "../../modal/cafe/i13.jpg"
                ],
                images_index: "../../modal/cafe/i14.jpg"
            },
            {
                id: 2,
                name: "The Barn Eatery Design",
                description: "คาเฟ่ที่มีบรรยากาศโปร่งโล่ง ด้วยการตกแต่งที่ใช้วัสดุไม้และสไตล์มินิมอล มีเมนูกาแฟและขนมหวานที่อร่อยไม่แพ้กัน จุดเด่นคือความสดใหม่ของวัตถุดิบและรสชาติที่เป็นธรรมชาติ",
                travel: {
                    public: "สามารถขึ้นรถสองแถวที่วิ่งในเส้นทางไปยังย่านนิมมานเหมินทร์ หรือใช้บริการรถโดยสารในตัวเมือง",
                    private: "คาเฟ่ตั้งอยู่ในย่านนิมมานเหมินทร์ ขับรถจากตัวเมืองไปได้สะดวก"
                },
                images: [
                    "../../modal/cafe/i21.jpg",
                    "../../modal/cafe/i22.jpg",
                    "../../modal/cafe/i23.jpg"
                ],
                images_index: "../../modal/cafe/i24.jpg"
            },
            {
                id: 3,
                name: "The Coffee Club",
                description: "คาเฟ่สไตล์ตะวันตกที่มีกาแฟคุณภาพและอาหารเช้าอร่อยๆ รวมถึงเบเกอรี่ที่มีให้เลือกมากมาย บรรยากาศร้านน่านั่ง เหมาะสำหรับการพบปะเพื่อนฝูงหรือทำงาน",
                travel: {
                    public: "ใช้บริการรถสองแถวจากตัวเมืองไปยังย่านนิมมาน",
                    private: "ขับรถมาจากตัวเมืองเชียงใหม่ในเวลาไม่นาน โดยร้านตั้งอยู่ในย่านที่เข้าถึงได้ง่าย"
                },
                images: [
                    "../../modal/cafe/i31.jpg",
                    "../../modal/cafe/i32.jpg",
                    "../../modal/cafe/i33.jpg"
                ],
                images_index: "../../modal/cafe/i34.jpg"
            },
            {
                id: 4,
                name: "FOHHIDE (โฟไฮด์)",
                description: "Coffee Bar สุดลับสุดฮิตในอาคารชั้น 5 ใจกลางนิมมาน จ.เชียงใหม่ เชื่อว่าใครหลายๆคนจะมองไม่เห็นป้ายร้ายถ้าไม่ดูดีๆคือเลยแน่นอน ต้องขึ้นลิฟท์ไปชั้น5 ก็เจอ การตกแต่งแบบ Minimal สไตล์ญี่ปุ่น และวิวดอยสุเทพแบบเต็มๆ",
                travel: {
                    public: "ใช้บริการรถสาธารณะจากในเมืองเชียงใหม่, คุณสามารถใช้รถสองแถวหรือรถบัสที่มีเส้นทางไปยังพื้นที่ มีรถสองแถวที่วิ่งจากจุดต่างๆ เช่น ท่ารถเมล์ หรือ ตลาดประตูท่าแพ ไปยังที่ตั้งของร้าน",
                    private: "สามารถใช้แผนที่ GPS หรือแอปพลิเคชันนำทาง เช่น Google Maps เพื่อค้นหาเส้นทางไปยังร้าน FOHHIDE"
                },
                images: [
                    "../../modal/cafe/i41.jpg",
                    "../../modal/cafe/i42.jpg",
                    "../../modal/cafe/i43.jpg"
                ],
                images_index: "../../modal/cafe/i44.jpg"
            },
            {
                id: 5,
                name: "Café de Nimman",
                description: "คาเฟ่ในย่านนิมมานเหมินทร์ที่มีบรรยากาศเหมาะแก่การนั่งชิล มีเมนูกาแฟคุณภาพและขนมเค้กหลากหลาย ร้านตกแต่งด้วยสไตล์ร่วมสมัย และมีการออกแบบพื้นที่ให้เหมาะแก่การนั่งทำงานหรือพบปะเพื่อนฝูง",
                travel: {
                    public: "ใช้บริการรถสองแถวที่วิ่งจากใจกลางเมืองไปย่านนิมมานเหมินทร์",
                    private: "ขับรถไปตามถนนหลักในตัวเมืองเชียงใหม่และไปที่นิมมานเหมินทร์ โดยใช้เวลาประมาณ 5-10 นาที"
                },
                images: [
                    "../../modal/cafe/i51.jpg",
                    "../../modal/cafe/i52.jpg",
                    "../../modal/cafe/i53.jpg"
                ],
                images_index: "../../modal/cafe/i54.jpg"
            }
        ];

        const cafeListContainer = document.getElementById("cafe-list");

        cafes.forEach((cafe) => {
            const cafeHTML = `
                <a href="cafe_template.php?id=${cafe.id}">
                    <div class="restaurant-item" style="margin-bottom: 20px;">
                        <div class="image-container" style="position: relative; width: 100%; border-radius: 10px; overflow: hidden;">
                            <img src="${cafe.images_index}" style="height: 300px; width: 100%; object-fit: cover; display: block;">
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
                                ${cafe.name}
                            </span>
                        </div>
                    </div>
                </a>
            `;
            cafeListContainer.innerHTML += cafeHTML;
        });

        const urlParams = new URLSearchParams(window.location.search);
        const cafeId = parseInt(urlParams.get('id'));
        const cafe = cafes.find(r => r.id === cafeId);

        if (cafe) {
            document.getElementById('cafe-name').textContent = cafe.name;
            document.getElementById('cafe-description').textContent = cafe.description;
            document.getElementById('cafe-travel').innerHTML = `
                ขนส่งสาธารณะ: ${cafe.travel.public}<br>
                การเดินทางโดยรถยนต์: ${cafe.travel.private}
            `;
            
            const imagesContainer = document.getElementById('cafe-images');
            if (imagesContainer && cafe.images && Array.isArray(cafe.images)) {
                cafe.images.slice().reverse().forEach(image => {
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