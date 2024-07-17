
<div class="row mb">
                    <div class="box-title"></div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <title>Feedback Form</title>
</head>
<style>


.feedback-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.h1gopy{
    background-color: #0070c0;
    color: #fff;
    text-align: center;
    padding: 20px;
    font-size: 24px;
}

p {
    font-size: 16px;
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

</style>
<body>
    <div class="feedback-container">
        <h1 class="h1gopy">Phản hồi và Góp ý</h1>
        <p>Chúng tôi rất mong nhận được phản hồi của bạn. Vui lòng điền thông tin dưới đây.</p>

        <form action="process_feedback.php" method="POST">
            <div class="input-field">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input-field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-field">
                <label for="feedback">Nội dung phản hồi:</label>
                <textarea id="feedback" name="feedback" rows="4" required></textarea>
            </div>

            <button type="submit">Gửi phản hồi</button>
        </form>
    </div>
</body>
</html>
</div>

