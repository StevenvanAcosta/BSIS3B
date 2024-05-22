<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= ROOT ?>/assests/css/createdesign.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 690" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,700 L 0,175 C 38.27061855670104,157.2928939617084 76.54123711340208,139.5857879234168 146,137 C 215.45876288659792,134.4142120765832 316.1056701030928,146.94974226804123 387,157 C 457.8943298969072,167.05025773195877 499.03608247422676,174.6152430044183 554,185 C 608.9639175257732,195.3847569955817 677.7499999999999,208.5892857142857 737,211 C 796.2500000000001,213.4107142857143 845.9639175257732,205.02761413843888 897,199 C 948.0360824742268,192.97238586156112 1000.3943298969073,189.3002577319588 1057,195 C 1113.6056701030927,200.6997422680412 1174.458762886598,215.77135493372606 1239,214 C 1303.541237113402,212.22864506627394 1371.770618556701,193.61432253313697 1440,175 L 1440,700 L 0,700 Z" stroke="none" stroke-width="0" fill="#47b4b9" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 350)"></path><path d="M 0,700 L 0,408 C 48.374815905743745,403.5432621502209 96.74963181148749,399.08652430044185 151,376 C 205.2503681885125,352.91347569955815 265.37628865979383,311.1971649484536 334,322 C 402.62371134020617,332.8028350515464 479.74521354933734,396.1248159057438 547,438 C 614.2547864506627,479.8751840942562 671.6428571428571,500.30357142857133 733,490 C 794.3571428571429,479.69642857142867 859.6833578792341,438.6608983799705 921,407 C 982.3166421207659,375.3391016200295 1039.6237113402062,353.0528350515464 1093,344 C 1146.3762886597938,334.9471649484536 1195.821796759941,339.12776141384387 1253,352 C 1310.178203240059,364.87223858615613 1375.0891016200294,386.43611929307804 1440,408 L 1440,700 L 0,700 Z" stroke="none" stroke-width="0" fill="#47b4b9" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 350)"></path></svg>
</head>
<body>
    <div class="container border d-flex justify-content-center p-3 mb-2 bg-light text-dark w-50 position-absolute top-50 start-50 translate-middle rounded">

    <form action="" method="POST" class="w-50 mt-5">
        <h2>Create User</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php foreach ($errors as $error): ?>
                    <?= $error . "<br>" ?>
                <?php endforeach; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>



        <div class="mb-2">
            <label for="">First Name</label>
            <input name="fname" value="<?= get_var('fname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lname" value="<?= get_var('lname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Username</label>
            <input name="username" value="<?= get_var('username') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= get_var('password') ?>" type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 51, 53, 54;" href="<?= ROOT ?>/login">
            <label class = "text-secondary text-center mt-1 p-1 ">
                Already have account
            </label>
        </a>
        <br><br><br><br><br><br><br>
    </form>
    </div>
</body>
</html>