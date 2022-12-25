<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h1 {
        color: #d12323;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin-bottom: 20px;
    }

    i {
        color: #d12323;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }

    .btn-go-home {
        outline: none;
        font-size: 18px;
        height: auto;
        background: #88B04B;
        color: #fff;
        text-decoration: none;
        font-weight: normal;
        padding: 14px;
        border-radius: 2px;
    }
    .btn-go-home:hover {
        background: #b7d48c;
    }

</style>

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i style="font-size: 70px; margin-top: 57px; margin-left: -2px;" class="fa fa-close"></i>
        </div>
        <h1>Cancelled</h1>
        <p>We coudn't receive your order!</p>

        <a class="btn-go-home" href="{{ route('home') }}">Go Back To Home Page</a>
    </div>
</body>

</html>
