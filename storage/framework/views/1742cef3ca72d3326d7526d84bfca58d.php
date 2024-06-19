<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Website</title>
</head>
<body>
    <header>
        <h1>Superhero Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="superheroes/batman">Batman</a></li>
            <li><a href="superheroes/spiderman">Spiderman</a></li>
            <li><a href="superheroes/superman">Superman</a></li>
            <li><a href="superheroes/ironman">Ironman</a></li>
        </ul>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>&copy; 2024 Sangalang Superhero Website</p>
    </footer>
</body>
</html><?php /**PATH C:\Users\rloui\app-name\resources\views/superhero.blade.php ENDPATH**/ ?>