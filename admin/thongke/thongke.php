<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 0px 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #chartContainer {
            display: none;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    
    <div class="container">
    <div class="header">
        <h1>Thống kê sản phẩm</h1>
    </div>
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
            </tr>
            <tr>
                <td>Iphone 12</td>
                <td>12</td>
                <td>1000$</td>
                <td>800$</td>
                <td>900$</td>
            </tr>
            <tr>
                <td>Iphone 15</td>
                <td>13</td>
                <td>1000$</td>
                <td>800$</td>
                <td>900$</td>
            </tr>
            <tr>
                <td>Iphone 14</td>
                <td>14</td>
                <td>1000$</td>
                <td>800$</td>
                <td>900$</td>
            </tr>
        </table>
        <button id="viewChartBtn">Xem biểu đồ</button>
    </div>
    <div class="header">
        <h1>Biểu đồ thống kê</h1>
        <img src="img/img/bieudo.png" alt="">
    </div>
</body>
</html>
