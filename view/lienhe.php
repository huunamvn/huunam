<div class="row mb">
                    <div class="box-title"></div>
                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.contact-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header {
    background-color: #0070c0;
    color: #fff;
    text-align: center;
    padding: 20px;
    font-size: 36px;
    font-weight: bold;
}

.contact-form {
    margin-top: 20px;
}

.input-field {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    background-color: #0070c0;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0050a0;
}

.contact-info {
    margin-top: 20px;
}

.contact-info a {
    color: #0070c0;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

</style>
<body>
    <div class="contact-container">
        <header>
            <h1>Liên hệ</h1>
        </header>

        <div class="contact-form">
            <h2>Bạn cần giúp gì xin hãy điền vào đây</h2>
            <form action="process_form.php" method="POST">
                <div class="input-field">
                    <label for="name">Tên của bạn:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="input-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-field">
                    <label for="message">Tin nhắn:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit">Gửi</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Cách thức liên hệ khác</h2>
            <p>Bạn có thể liên hệ miễn phí qua hostline hoặc email của XSHOP</p>
            <p>Email: <a href="mailto:contact@example.com">namthph38365@fpt.edu.vn</a></p>
            <p>Phone: +84(36249965**)</p>
        </div>
    </div>
</body>
</html>

</div>