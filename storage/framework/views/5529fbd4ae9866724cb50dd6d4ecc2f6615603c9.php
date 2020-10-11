<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebGram</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #bfbfbf; 
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url(<?php echo e('img/background.png'); ?>), 
                radial-gradient(#777, #555);
                background-repeat: no-repeat;
                background-position: center center;
                background-blend-mode: multiply;
                background-attachment: fixed;
                background-size:100% 100%;

                
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #bfbfbf;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
            <a  href="<?php echo e(url('/')); ?>">
                   WebGram
            </a>
            </div> 
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="/profile/<?php echo e(Auth::id() ?? ''); ?>"><?php echo e(Auth::user()->username ?? ''); ?></a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    WebGram
                </div>

                <div class="links">
                    <a href="#">News</a>
                    <a href="#">Blog</a>
                    <a href="#">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\Χρηστος\Desktop\webGram\resources\views/welcome.blade.php ENDPATH**/ ?>