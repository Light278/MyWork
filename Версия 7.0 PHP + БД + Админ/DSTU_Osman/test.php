<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
    <style>
        /* Стили */
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .gallery-item {
            width: 500px; /* Ширина галереи */
            height: 500px; /* Высота галереи */
            margin: 10px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Галерея -->
<div class="gallery-item">
    <img src="assets/images/image_1.png" alt="Фото 1">
</div>

<div class="gallery-item">
    <img src="assets/images/image_lodka1.png" alt="Фото 2">
</div>

<div class="gallery-item">
    <img src="assets/images/image_lodka2.png" alt="Фото 3">
</div>

<div class="gallery-item">
    <img src="assets/images/image_lodka3.png" alt="Фото 4">
</div>

<div class="gallery-item">
    <img src="assets/images/image_lodka4.png" alt="Фото 5">
</div>

<div class="gallery-item">
    <img src="assets/images/image_lodka5.png" alt="Фото 6">
</div>

<div class="gallery-item">
    <img src="assets/images/DSTU.png" alt="Фото 7">
</div>
<div class="gallery-item">
    <img src="assets/images/OSMAN.png" alt="Фото 7">
</div>

</body>
</html>
