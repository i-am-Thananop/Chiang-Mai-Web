<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../../controller/data_travel.js"></script>

    <style>
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
    </style>

    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const attractionId = parseInt(urlParams.get('id'));

            const attraction = attractions.find(attraction => attraction.id === attractionId);

            if (attraction) {
                document.getElementById("attraction-name").innerText = attraction.name;
                document.getElementById("attraction-image").src = attraction.image;
                document.getElementById("attraction-content").innerText = attraction.content;
                document.getElementById("attraction-travel").innerText = attraction.travel;
            } else {
                document.getElementById("attraction-details").innerHTML = "<p>Attraction not found.</p>";
            }
        };
    </script>
</head>
<body>
    <div class="content">
        <section class="background">
            <div class="container py-2">
                <a href=" travel_index.php" style="text-decoration: none; background: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house-fill mb-2" viewBox="0 0 16 16" title="ย้อนกลับ" style="color: #000;">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                    </svg>
                </a>
            </div>

            <div class="container py-1">
                <div class="d-flex justify-content-center">
                    <h3 id="attraction-name" style="color: #000; font-weight: 700; font-size: 32px;">หัวข้อ</h3>
                </div>

                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-6">
                        <div class="text-center mt-3 mb-2">
                            <img id="attraction-image" 
                                style="width: 70%; max-width: 600px; object-fit: contain; border-radius: 20px; box-shadow: 
                                inset 0 0 10px rgba(0, 0, 0, 0.5); mask-image: radial-gradient(circle, rgba(0, 0, 0, 1) 60%, rgba(0, 0, 0, 0) 100%);">
                        </div>

                        <h3 style="color: #000; font-weight: 600; font-size: 28px;">เนื้อหา</h3>
                        <p id="attraction-content" style="color: #000; font-size: 18px;"></p>

                        <h3 style="color: #000; font-weight: 600; font-size: 28px;">การเดินทาง</h3>
                        <p id="attraction-travel" style="color: #000; font-size: 18px;"></p>
                    </div>
                </div>

                <!-- <div class="d-flex justify-content-center">
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
                </div> -->
            </div>
        </section>
    </div>

    <script src="../../controller/data_travel.js"></script>
    <script>
        const container = document.getElementById('attraction-container');

        attractions.forEach(attraction => {
            const attractionCard = `
                <div class="col-6 mb-4">
                    <div class="text-center mt-3 mb-2">
                        <img src="${attraction.image}" 
                            style="width: 70%; max-width: 600px; object-fit: contain; border-radius: 20px; 
                            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5); 
                            mask-image: radial-gradient(circle, rgba(0, 0, 0, 1) 60%, rgba(0, 0, 0, 0) 100%);">
                    </div>
                    <h3 class="text-dark fw-bold text-center">${attraction.name}</h3>
                    <p class="text-center">${attraction.content}</p>
                    <p class="text-muted text-center">${attraction.travel}</p>
                </div>
            `;
            container.innerHTML += attractionCard;
        });
    </script>
</body>
</html>
