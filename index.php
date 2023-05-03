<!-- The aim of this project is we want to save our todos data in the json file -->
<?php

    $todos = [];
    if (file_exists('todo.json')){
        $json = file_get_contents('todo.json');
        $todos = json_decode($json, true);
    }

?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ToDo Application</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/"
                        class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none fw-bolder">
                        ToDO App
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-white ms-5">Home</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
                            aria-label="Search">
                    </form>

                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
                </div>
            </div>
        </header>

        <section class="todoPart my-5">
            <div class="container d-flex justify-content-center">
                <form action="new_todo.php" method="POST" class="w-50 p-5 bg-dark text-light rounded">
                    <div class="mb-4">
                        <label for="todo" class="form-label fw-bolder">Enter your ToDo:</label>
                        <input type="text" name="todo_name" class="form-control" id="todo">
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </form>
            </div>
        </section>

        <section class="printToDo py-5">
            <div class="container">
                <h1 class="text-primary text-center mb-5">ToDo Items</h1>
                <div class="row g-5">
                    <?php foreach($todos as $todoName => $todo) { ?>
                        <div class="col-md-4">
                            <div class="card p-3 bg-dark text-light">
                                <div class="card-title mb-3">
                                    <form action="change_status.php" method="POST">
                                        <input type="hidden" name="todo_name" value="<?php echo $todoName; ?>">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" <?php echo $todo['completed'] ? 'checked' : ''; ?>>
                                        <label class="form-check-label ms-2" for="flexCheckDefault">
                                            <?php echo $todoName; ?>
                                        </label>
                                    </form>
                                </div>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="todo_name" value="<?php echo $todoName; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <footer class="pt-5 bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of what's new and exciting from us.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
                    <p>© 2023 Shawon. All rights reserved.</p>
                    <!-- <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="text-light" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="text-light" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="text-light" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul> -->
                </div>
            </div>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script>
            const checkboxes = document.querySelectorAll('input[type=checkbox]');
            checkboxes.forEach(ch => {
                ch.onclick = function(){
                    this.parentNode.submit();
                };
            })
        </script>
    </body>

</html>