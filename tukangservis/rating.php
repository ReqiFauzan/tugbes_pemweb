<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Tukang Servis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #d9d9d9 ;
            color: white;
            padding: 20px;
        }
        .container {
            background:rgb(66, 66, 66);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            margin-top: 20px;
        }
        select, input, textarea, button {
            width: 80%;
            margin-top: 10px;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }
        .submit {
            background: #ff9800;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .review-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .review {
            background: white;
            color: black;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 250px;
            position: relative;
        }
        .stars {
            color: gold;
            font-size: 18px;
        }
        .profile-pic {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <?php include '../navbar/navbar.php';?>
    <link rel="stylesheet" href="../navbar/nav.css">
    <script src="../navbar/nav.js"></script>
    
    <div class="container">
        <h1>Rating </h1>
        <h2>Pilih bengkel</h2>
        <select id="servisName">
            <option value="Bengkel A">Bengkel A</option>
            <option value="Bengkel B">Bengkel B</option>
            <option value="Bengkel C">Bengkel C</option>
            <option value="Bengkel D">Bengkel D</option>
        </select>
        
        <h2>Ulasan tambahan</h2>
        <input type="text" id="customerName" placeholder="Nama Anda" />
        <input type="number" id="rating" placeholder="Rating (0-5)" min="0" max="5" />
        <textarea id="comment" placeholder="Tulis ulasan..."></textarea>
        <button class="submit" onclick="addReview()">Kirim</button>
        
        <h2>Ulasan Pelanggan</h2>
        <div class="review-list" id="reviews"></div>
    </div>

    <script>
        let reviews = [];

        function displayReviews() {
            const reviewsDiv = document.getElementById('reviews');
            reviewsDiv.innerHTML = '';
            reviews.forEach(review => {
                reviewsDiv.innerHTML += `
                    <div class="review">
                        <img src="https://via.placeholder.com/60" class="profile-pic" alt="Foto Profil">
                        <h3>${review.customer}</h3>
                        <p class="stars">${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}</p>
                        <p>${review.comment}</p>
                        <p><strong>${review.name}</strong></p>
                    </div>
                `;
            });
        }

        function addReview() {
            const name = document.getElementById('servisName').value;
            const customer = document.getElementById('customerName').value;
            const rating = parseInt(document.getElementById('rating').value);
            const comment = document.getElementById('comment').value;
            if (name && customer && rating >= 0 && rating <= 5 && comment) {
                reviews.push({ name, customer, rating, comment });
                displayReviews();
                document.getElementById('customerName').value = '';
                document.getElementById('rating').value = '';
                document.getElementById('comment').value = '';
            } else {
                alert('Harap isi semua data dengan benar!');
            }
        }
    </script>
</body>
</html>
