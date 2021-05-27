<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <script src="./bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class=" container-fluid">
        <div class=" row">
            <div class=" col-4 mt-3 m-auto ">
                <div class=" card shadow-sm p-3 mb-0 bg-body rounded">
                    <form action="ketqua.php" method="post">
                        <div class="mb-3">
                            <label for="array" class="form-label">Nhập dãy số:</label>
                            <input type="text" class="form-control" name="arr" id="array" placeholder="mỗi số cách nhau khoảng trắng">
                        </div>
                        <div class=" mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioSorts" id="radio0" value="0" checked>
                                <label class="form-check-label" for="radio0">
                                    Selection Sort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioSorts" id="radio1" value="1">
                                <label class="form-check-label" for="radio1">
                                    Bubble Sort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioSorts" id="radio2" value="2">
                                <label class="form-check-label" for="radio2">
                                    Insertion Sort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioSorts" id="radio3" value="3">
                                <label class="form-check-label" for="radio3">
                                    Cycle Sort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioSorts" id="radio4" value="4">
                                <label class="form-check-label" for="radio4">
                                    Cocktail Sort
                                </label>
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-outline-primary">Sắp xếp</button>
                        <button type="reset" class="btn btn-outline-secondary ">Làm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>