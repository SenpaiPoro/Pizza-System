<?php include ('include/sidebar.php'); ?>
<?php include ('include/topbar.php'); ?>
<style>
    body {
        background-color: #f2ede6;
    }

    .title {
        background-color: #1c75a3;
        color: white;
        text-align: center;
        padding: 15px;
        font-weight: bold;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    .card {
        border: 1px solid #ccc;
        text-align: center;
        padding: 10px;
    }

    .card img {
        width: 100%;
        height: 180px;
        object-fit: contain;
    }

    .card-title {
        font-size: 14px;
        font-weight: bold;
        margin-top: 10px;
    }

    .highlight {
        color: red;
    }
</style>

<div class="container fluid">

<div class="container mt-4">

    <div class="title">PIZZAS</div>

    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="pizza1.jpg">
                <div class="card-title ">5 CHEESE</div>
                <a href="order.php?id=1 "class="btn btn-danger btn-sm">Buy</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="pizza2.jpg">
                <div class="card-title">AMERICAN BACON </div>
                <a href="order.php?id=2 "class="btn btn-danger btn-sm">Buy</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="pizza3.jpg">
                <div class="card-title">BACON & MUSHROOM</div>
                <a href="order.php?id=3 "class="btn btn-danger btn-sm">Buy</a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
                <img src="pizza4.jpg">
                <div class="card-title">BEEF & MUSHROOM MELT</div>
                <a href="order.php?id=4 "class="btn btn-danger btn-sm">Buy</a>
            </div>
        </div>

        <!-- Add more pizzas same pattern -->
        
    </div>

</div>
</div>
<?php include ('include/footer.php'); ?>
