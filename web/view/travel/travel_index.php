<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Thai+Sarabun&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Thai Sarabun', sans-serif;
        }

        .background {
            position: relative;
            width: 100vw;
            min-height: 100vh;
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

        .clickable-frame {
            display: block;
            text-decoration: none;
        }

        .clickable-frame div {
            transition: background-color 0.3s, transform 0.3s;
            width: 100%; 
            height: 100%; 
        }

        .clickable-frame:hover div {
            background-color: #fff;
        }

        .clickable-frame:active div {
            transform: scale(0.95);
        }

    </style>
</head>
<body>
    <div class="content">
        <section class="background">
            <div class="container py-2">
                <a href="../index.php" class="btn btn-primary mb-2">ย้อนกลับ</a>
            </div>

            <div class="container py-1">
                <div class="d-flex justify-content-center">
                    <h3 style="font-size: 45px; color: #000; font-weight: 700;">แหล่งท่องเที่ยว</h3>
                </div>

                <div class="row d-flex justify-content-center align-items-center h-100 py-5">
                    <div class="col-8">
                        <div class="d-flex flex-row">
                            <div id="attraction-container"></div>
                            <!-- <img src="../../modal/history/t1.jpg" alt="สถานที่เที่ยว 1 ประตูท่าแพ" style="width: 25%; border-radius: 20px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
                            <div class="d-flex align-items-center" style="margin-left: 5%;">
                                <a href="your-link-here" class="clickable-frame">
                                    <div style="border: 2px solid #000; padding: 10px; border-radius: 10px; width: 400px; background-color: #fff;">
                                        <div class="d-flex justify-content-between">
                                            <h4 style="font-size: 40px; color: #000; font-weight: 600;">ประตูท่าแพ</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-right-circle ms-auto" viewBox="0 0 16 16" style="color: #000;">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="../../controller/data_travel.js"></script>
    <script>
        const container = document.getElementById('attraction-container');

        attractions.forEach((attraction) => {
            const attractionDiv = document.createElement('div');
            attractionDiv.classList.add('d-flex', 'flex-row', 'mb-4');

            attractionDiv.innerHTML = `
                <img src="${attraction.image}" alt="${attraction.name}" style="width: 25%; border-radius: 20px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
                <div class="d-flex align-items-center" style="margin-left: 5%;">
                    <a href="template_travel.php?id=${attraction.id}" class="clickable-frame">
                        <div style="border: 2px solid #000; padding: 10px; border-radius: 10px; width: 400px; background-color: #fff;">
                            <div class="d-flex justify-content-between">
                                <h4 style="font-size: 40px; color: #000; font-weight: 600;">${attraction.name}</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-right-circle ms-auto" viewBox="0 0 16 16" style="color: #000;">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            `;

            container.appendChild(attractionDiv);
        });
    </script>
</body>
</html>
