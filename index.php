<?php
$profile = [
    "name" => "Nguyễn Phú Tài",
    "title" => "Lập trình viên PHP",
    "bio" => "Tôi là một lập trình viên với niềm đam mê phát triển web.",
    "email" => "faded0968@gmail.comcom",
    "phone" => "0987996373",
    "avatar" => "C:\Users\HP\OneDrive\Pictures\542cd1a68866117947fe0869e900a445.jpg", // Đường dẫn ảnh đại diện
    "socials" => [
        "Facebook" => "https://facebook.com/nguyenvana",
        "GitHub" => "https://github.com/nguyenvana",
        "LinkedIn" => "https://linkedin.com/in/nguyenvana"
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Cá Nhân</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            text-align: center; 
            margin: 50px; 
            color: #fff;
        }
        .container {
            max-width: 600px; 
            margin: auto; 
            padding: 20px; 
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ffd700;
            margin-bottom: 15px;
        }
        h1, h3 { color: #ffd700; }
        .social-links a {
            display: inline-block; 
            margin: 10px; 
            padding: 10px 15px; 
            text-decoration: none; 
            color: #fff; 
            background: #ff5733;
            border-radius: 5px;
            transition: 0.3s;
        }
        .social-links a:hover { background: #c70039; }
    </style>
</head>
<body>
    <div class="container">
        <img src="<?php echo $profile['avatar']; ?>" alt="Avatar" class="avatar">
        <h1><?php echo $profile['name']; ?></h1>
        <h3><?php echo $profile['title']; ?></h3>
        <p><?php echo $profile['bio']; ?></p>
        <p><strong>Email:</strong> <?php echo $profile['email']; ?></p>
        <p><strong>Số điện thoại:</strong> <?php echo $profile['phone']; ?></p>
        <div class="social-links">
            <h3>Liên kết mạng xã hội</h3>
            <?php foreach ($profile['socials'] as $platform => $link): ?>
                <a href="<?php echo $link; ?>" target="_blank"><?php echo $platform; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
