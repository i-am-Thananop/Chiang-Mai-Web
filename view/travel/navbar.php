<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .back-button {
            background-color: transparent;
            border: none;
            font-size: 20px;
            color: black;
            cursor: pointer;
            margin-right: 15px;
        }

        .back-button:focus {
            outline: none;
        }

        .navbar-text {
            font-size: 26px;
            font-weight: bold;
            color: black;
        }

        .thip {
            color: grey;
        }

        .chiang-mai {
            color: blue;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <span class="navbar-text">
            <span class="thip">thip</span>
            <span class="chiang-mai">ChiangMai</span>
        </span>
        <a href="../index.php" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house-fill mb-2" viewBox="0 0 16 16" title="ย้อนกลับ" style="color: #fff;">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
            </svg>
        </a>
    </nav>
</body>
</html>
