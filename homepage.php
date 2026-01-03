<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobalTrotter | Complete South India Guide</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary-dark: #2d3436;
            --accent-green: #00b894;
            --bg-color: #f7f9fb;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background-color: var(--bg-color); padding-bottom: 100px; }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            background: #fff;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .logo { font-size: 22px; font-weight: 600; color: var(--primary-dark); }
        .nav-buttons { display: flex; gap: 15px; align-items: center; }
        .nav-button {
            padding: 10px 20px;
            background: var(--accent-green);
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .profile-pic {
            width:40px;
            height:40px;
            border-radius:50%;
            background:#eee;
            border:1px solid #ccc;
        }

        /* Banner */
        .banner {
            width: 90%;
            margin: 20px auto;
            height: 160px;
            border-radius: 20px;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?w=1200') center/cover;
            display: flex; align-items: center; justify-content: center; color: #fff;
        }

        /* Toolbar */
        .toolbar { width: 90%; margin: 20px auto; }
        .search-bar { width: 100%; padding: 15px 25px; border-radius: 50px; border: 1.5px solid #ccc; font-size: 16px; outline: none; }

        .container { width: 90%; margin: 0 auto; }
        h2 { margin: 30px 0 15px; font-size: 20px; color: var(--primary-dark); }

        /* States Scroll */
        .horizontal-scroll { display: flex; gap: 15px; overflow-x: auto; padding: 10px 0; scrollbar-width: none; }
        .horizontal-scroll::-webkit-scrollbar { display: none; }
        .region-card {
            min-width: 130px; height: 130px; border-radius: 15px; background: #fff;
            overflow: hidden; cursor: pointer; transition: 0.3s; box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: relative;
        }
        .region-card img { width: 100%; height: 100%; object-fit: cover; }
        .region-name { position: absolute; bottom: 0; width: 100%; background: rgba(0,0,0,0.7); color: #fff; font-size: 11px; text-align: center; padding: 5px 0; }

        /* Grid */
        .vertical-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 20px; }
        .trip-card {
            background: #fff; border-radius: 15px; overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: 0.3s; cursor: pointer;
        }
        .trip-card:hover { transform: translateY(-5px); }
        .trip-card img { width: 100%; height: 180px; object-fit: cover; }
        .card-info { padding: 12px; }

        /* Modal Details */
        .modal-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.85); display: none; justify-content: center; align-items: center; z-index: 2000;
        }
        .modal-content { background: #fff; width: 95%; max-width: 550px; border-radius: 20px; padding: 25px; position: relative; }
        .close-modal { position: absolute; top: 10px; right: 15px; font-size: 28px; cursor: pointer; }
        .modal-img { width: 100%; height: 250px; border-radius: 15px; object-fit: cover; margin-bottom: 15px; }
        .modal-body h2 { color: var(--accent-green); margin-bottom: 8px; }
        .modal-body p { line-height: 1.6; color: #444; font-size: 14px; }

        .fab { position: fixed; bottom: 30px; right: 30px; padding: 15px 30px; background: var(--primary-dark); color: #fff; border-radius: 50px; border: none; cursor: pointer; font-weight: 600; box-shadow: 0 5px 15px rgba(0,0,0,0.3); }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">GlobalTrotter</div>
        <div class="nav-buttons">
            <button class="nav-button" onclick="window.location.href='explore.html'">Explore</button>
            <button class="nav-button" onclick="window.location.href='user-settings.html'">Settings</button>
             <button class="nav-button" onclick="window.location.href='budget.html'">Budget</button>
        </div>
        <div class="profile-pic"></div>
    </nav>

    <div class="banner"><h1>The Soul of South India</h1></div>

    <div class="toolbar"><input type="text" id="searchInput" class="search-bar" placeholder="Search by destination..."></div>

    <div class="container">
        <h2>Explore by State</h2>
        <div class="horizontal-scroll">
            <div class="region-card" onclick="openDetails('Tamil Nadu', 'Home to the magnificent Brihadisvara Temple and classical arts like Bharatanatyam.', 'https://images.unsplash.com/photo-1582510003544-4d00b7f74220?w=400')">
                <img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?w=400"><div class="region-name">Tamil Nadu</div>
            </div>
            <div class="region-card" onclick="openDetails('Kerala', 'God’s Own Country, famous for its tranquil backwaters and lush greenery.', 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?w=400')">
                <img src="https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?w=400"><div class="region-name">Kerala</div>
            </div>
            <div class="region-card" onclick="openDetails('Karnataka', 'A blend of ancient heritage ruins in Hampi and high-tech life in Bengaluru.', 'https://images.unsplash.com/photo-1600132806608-231446b2e7af?w=400')">
                <img src="https://images.unsplash.com/photo-1600132806608-231446b2e7af?w=400"><div class="region-name">Karnataka</div>
            </div>
            <div class="region-card" onclick="openDetails('Andhra Pradesh', 'Known for the Tirupati Temple and the beautiful coastline of Vizag.', 'https://lh3.googleusercontent.com/gps-cs-s/AG0ilSyXnOMeYL3DrUIIowfa_iQpntqQnpi9SgyuiWfvxeEQZaRCO_GpEcG1seKKDLhJwNMNzFsqmdeQPXL5dZ6705g0XTXyXTMxir0AX_O1W5VdUM9KVzNl3B8M4C911meb30Bf-vPZ=w675-h390-n-k-no')">
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AG0ilSyXnOMeYL3DrUIIowfa_iQpntqQnpi9SgyuiWfvxeEQZaRCO_GpEcG1seKKDLhJwNMNzFsqmdeQPXL5dZ6705g0XTXyXTMxir0AX_O1W5VdUM9KVzNl3B8M4C911meb30Bf-vPZ=w675-h390-n-k-no"><div class="region-name">Andhra</div>
            </div>
            <div class="region-card" onclick="openDetails('Telangana', 'Historic Charminar city and the massive Golconda Fort ruins.', 'https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTK5Ef83XaKV4RpmTeaWGGdCtr1uQOXKsPxxTdWDCSdxCk4w7d9PxZGwXZ7CqABGbWw1wqPpu1NLnQ7mFyvano1Jg8&s=19')">
                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTK5Ef83XaKV4RpmTeaWGGdCtr1uQOXKsPxxTdWDCSdxCk4w7d9PxZGwXZ7CqABGbWw1wqPpu1NLnQ7mFyvano1Jg8&s=19"><div class="region-name">Telangana</div>
            </div>
            <div class="region-card" onclick="openDetails('Pondicherry', 'A unique French-colonial vibe with beautiful boulevards and spiritual Auroville.', 'https://lh3.googleusercontent.com/gps-cs-s/AG0ilSxWdgzfCah5xzu1fu3XT0Cq2yccUsrwb0YyYvOFAvSH9O1DrCVin3Nju4TitV1D8sq0nk7OoYSwIHD3M6iKNbKkz3r8FTdsHibObOfgs5dmC_gAOd6HrGLugxj_K51GGtWMQX1Q=w675-h390-n-k-no')">
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AG0ilSxWdgzfCah5xzu1fu3XT0Cq2yccUsrwb0YyYvOFAvSH9O1DrCVin3Nju4TitV1D8sq0nk7OoYSwIHD3M6iKNbKkz3r8FTdsHibObOfgs5dmC_gAOd6HrGLugxj_K51GGtWMQX1Q=w675-h390-n-k-no"><div class="region-name">Pondicherry</div>
            </div>
        </div>

        <h2>Famous Destinations</h2>
        <div class="vertical-grid" id="tripGrid">
            <div class="trip-card" onclick="openDetails('Tirupati', 'Situated in Andhra Pradesh, Tirupati is home to the world-famous Venkateswara Temple on Tirumala Hills. It is one of the most visited pilgrimage sites globally.', 'https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcSZPGhVvtjWfwlodwuNaUUw1cLmaG_60DUh0QpYOnV8HK5CjONhxOtgrJKxqeb_dJ2199U62CKtBltLVgKiJyY8Nx0&s=19')">
                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcSZPGhVvtjWfwlodwuNaUUw1cLmaG_60DUh0QpYOnV8HK5CjONhxOtgrJKxqeb_dJ2199U62CKtBltLVgKiJyY8Nx0&s=19"><div class="card-info"><h3>Tirupati</h3><p>Holy City</p></div>
            </div>
            <!-- other trip cards remain same -->
        </div>
    </div>

    <div class="modal-overlay" id="detailModal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeDetails()">&times;</span>
            <img id="modalImg" src="" class="modal-img">
            <div class="modal-body">
                <h2 id="modalTitle"></h2><p id="modalDesc" style="margin-top:10px;"></p>
                <button style="margin-top:15px; padding:10px 20px; background:var(--accent-green); color:#fff; border:none; border-radius:8px; cursor:pointer;">Plan This Trip</button>
            </div>
        </div>
    </div>

    <button class="fab" onclick="window.location.href='plan_trip.html'">+ Plan a trip</button>

    <script>
        const modal = document.getElementById('detailModal');
        const mTitle = document.getElementById('modalTitle');
        const mDesc = document.getElementById('modalDesc');
        const mImg = document.getElementById('modalImg');

        function openDetails(title, info, imgUrl) {
            mTitle.innerText = title;
            mDesc.innerText = info;
            mImg.src = imgUrl;
            modal.style.display = 'flex';
        }

        function closeDetails() { modal.style.display = 'none'; }
        window.onclick = function(event) { if (event.target == modal) closeDetails(); }

        document.getElementById('searchInput').addEventListener('keyup', function() {
            const query = this.value.toLowerCase();
            document.querySelectorAll('.trip-card').forEach(card => {
                const title = card.querySelector('h3').innerText.toLowerCase();
                card.style.display = title.includes(query) ? "" : "none";
            });
        });
    </script>
</body>
</html>