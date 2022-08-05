<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Hello world! </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Template</h1>"; ?>
                <hr>
                <?php
                    print('<p class="text-start text-muted lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officia quos neque accusantium voluptate officiis, minima inventore, quam, quaerat rerum nostrum? Recusandae voluptatibus dolorem, possimus alias impedit delectus fugit perspiciatis!
                    Voluptate animi, consequatur vel maiores quibusdam odit aliquam accusantium sint ipsa soluta quisquam natus fuga at nobis iusto, eius rem. Suscipit iure sapiente nam quaerat culpa. Atque quis nihil illum.
                    Aut sint natus ex obcaecati veniam a totam, cumque rem blanditiis at sit voluptates! Aliquid, quia reiciendis ipsum magnam non maxime porro sed. Tenetur maiores recusandae in, placeat corrupti delectus.
                    Aspernatur, quis. Dolorum quo eaque dolorem facere? Laudantium, asperiores officiis. Amet vitae error sit accusantium deleniti et quisquam temporibus ipsum est! Delectus quam magnam autem possimus sunt. Ipsum, rerum obcaecati!
                    Iusto sunt ipsam iure veritatis ipsum minus optio vero esse dolorum quos soluta eos, repudiandae, quia doloribus a tempora, corporis sed consequatur ullam. Dignissimos explicabo voluptatum quae perspiciatis deleniti aut!
                    Culpa modi recusandae, velit sapiente odio aspernatur quibusdam, eius porro atque officia excepturi. Eius cupiditate harum, illo sed sapiente illum ratione voluptate ad voluptatem unde, soluta aliquam dignissimos! Vero, illum?
                    Quasi alias aliquid maiores, eum eius quia molestiae aspernatur facilis architecto error harum ullam tempore, nostrum tenetur accusantium unde natus fugit laboriosam maxime molestias non nobis? Consectetur tempore porro dolorem!
                    Vel porro nobis id laboriosam quasi ipsum esse suscipit laborum? Quis nulla quia optio rem, exercitationem dolorum porro non, numquam nobis veritatis nisi sed, cumque reiciendis. Provident dignissimos voluptatem ad!
                    Nam soluta hic numquam, minus qui eum fugit corporis eius porro cumque doloremque esse vero at rem assumenda cum neque quam iure dolore laboriosam vitae nisi delectus impedit! Eos, consequatur.
                    Minima aspernatur a distinctio, voluptas molestias est blanditiis quis eum accusantium commodi alias tempore quaerat placeat unde similique nam assumenda itaque exercitationem sapiente nisi dolore. Laborum harum maiores quam provident. </p>')
                    ?>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>