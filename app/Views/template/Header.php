<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="">
    <title><?= $judul; ?></title>
</head>

<body>

    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><a href="/"><img src="/logo2.png" class="img" width="150" height="150" style="margin-bottom:10px"></a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="index"><span class="logo navLogo"><a href="index"><img src="/logo2.png" class="img-fluid" width="150" height="150"></a></span>
                            <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/testimoni">Testimony</a></li>
                    <li><a href="/order">Order</a></li>
                    <?php if (session()->get('member_username') == 'admin') { ?>
                        <li><a href="/queue">Queue</a></li>
                    <?php } else { ?>

                    <?php }; ?>



                    <?php if (session()->get('member_username')) { ?>
                        <li><button onClick="location.href='/logout'" style="margin-left: 50.5em;">Logout</button></li>
                    <?php } else { ?>
                        <li><button onClick="location.href='/login'" style="margin-left: 56em;">Login</button></li>
                    <?php }; ?>

                </ul>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('content'); ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/codes.js"></script>
</body>

</html>