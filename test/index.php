<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
</head>
<body>
    <section class="container">
        <form action="disply.php" method="POST">
            <div class="columns is-centered ">
                <div class="column is-8">
                    <div class="field">
                        <label class="label">Enter numbers separated by comma(,) only</label>
                        <div class="control">
                            <input class="input is-primary" type="text" placeholder="Enter number" name="number" required>
                        </div>
                    </div>
                    <div class="field is-grouped is-grouped-centered">
                        <div class="control">
                            <button type="submit" name="submit" class="button is-primary">Submit</button>
                        </div>
                        <div class="control">
                            <button type="reset" class="button is-primary ">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>