<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .test{
            display: flex;
        }
    </style>
</head>

<body>
    <h1>您好，{{ $myData['name'] }}</h1>
    <p>您已成立訂單，訂單編號為 {{ $myData['order_id'] }}</p>
    <p>金額為 {{ $myData['total_price'] }}</p>
    <div class="test">
        <p style="margin-right: auto;">謝謝惠顧!</p>
        <p>test</p>
    </div>
</body>

</html>
