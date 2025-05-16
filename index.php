<?php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENFTOMARK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #fff5f7, #e6e0ea);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            width: 100%;
            padding: 10px 50px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #6b46c1;
        }
        .search-bar input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 20px;
            width: 200px;
        }
        .nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #6b46c1;
            font-weight: bold;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-info span {
            margin-right: 10px;
            color: #6b46c1;
        }
        .user-info .balance {
            background-color: #6b46c1;
            color: #fff;
            padding: 5px 10px;
            border-radius: 10px;
        }
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            margin-top: 50px;
            min-height: 600px;
        }
        .hero-content {
            max-width: 50%;
        }
        .hero-content h1 {
            font-size: 48px;
            margin: 0;
            color: #2d3748;
            line-height: 1.2;
        }
        .hero-content p {
            font-size: 16px;
            color: #718096;
            margin: 20px 0;
        }
        .hero-buttons a {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #6b46c1;
            border-radius: 5px;
        }
        .hero-buttons a:first-child {
            background-color: #6b46c1;
        }
        .hero-buttons a:last-child {
            background-color: #a0aec0;
            color: #2d3748;
        }
        .nft-card {
            position: relative;
            background-color: #6b46c1;
            width: 300px;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .nft-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .nft-card .details {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .nft-card .details p {
            margin: 5px 0;
        }
        .nft-card .details .likes {
            color: #ff6347;
        }
        .top-employees {
            width: 80%;
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        .top-employees h2 {
            font-size: 24px;
            color: #2d3748;
            margin-bottom: 20px;
        }
        .employee-list {
            display: flex;
            justify-content: space-around;
        }
        .employee-card {
            width: 200px;
        }
        .employee-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .employee-card h3 {
            font-size: 18px;
            color: #2d3748;
            margin: 10px 0;
        }
        .employee-card p {
            font-size: 14px;
            color: #718096;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">ENFTOMARK</div>
        <div class="search-bar">
            <input type="text" placeholder="Search items, collections, and creators">
        </div>
        <div class="nav">
            <a href="#">Home</a>
            <a href="#">Explore</a>
            <a href="#">Activity</a>
            <a href="#">Blog</a>
            <a href="#">Pages</a>
            <a href="#">...</a>
        </div>
        <div class="user-info">
            <span>Alex Joe</span>
            <span class="balance">234.98ETH</span>
        </div>
    </div>
    <div class="hero">
        <div class="hero-content">
            <h1>Create, Collect And Sell Digital Items.</h1>
            <p>Digital Marketplace For Crypto Collections and Non-Fungible Tokens. Buy, Sell, And Discover Exclusive Digital Assets.</p>
            <div class="hero-buttons">
                <a href="#">Explore</a>
                <a href="#">Create</a>
            </div>
        </div>
        <div class="nft-card">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==" alt="Silly Cat">
            <div class="details">
                <p>Silly Cat #3</p>
                <p>Price: 0.34 ETH</p>
                <p class="likes">❤️ 230</p>
            </div>
        </div>
    </div>
    <div class="top-employees">
        <h2>Top 3 Outstanding Employees of the Month</h2>
        <div class="employee-list">
            <div class="employee-card">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==" alt="Employee 1">
                <h3>Nguyen Van A</h3>
                <p>Developer</p>
            </div>
            <div class="employee-card">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==" alt="Employee 2">
                <h3>Tran Thi B</h3>
                <p>Designer</p>
            </div>
            <div class="employee-card">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==" alt="Employee 3">
                <h3>Le Van C</h3>
                <p>Manager</p>
            </div>
        </div>
    </div>
</body>
</html>