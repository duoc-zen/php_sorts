<?php

include('sort.php');

if (isset($_POST['arr'])) {

    $input = $_POST['arr'];
    $sortType = $_POST['radioSorts'];

    $arr = explode(" ", $input);
    $n = count($arr);
    $KQ = array();
    $radio = "";

    switch ($sortType) {

        case 0:
            $radio = "Selection Sort";
            $sort = new SelectionSort();
            $KQ = $sort->sort($arr, $n);
            break;
        case 1:
            $radio = "Bubble Sort";
            $sort = new BubbleSort();
            $KQ = $sort->sort($arr, $n);
            break;
        case 2:
            $radio = "Insertion Sort";
            $sort = new InsertionSort();
            $KQ = $sort->sort($arr, $n);
            break;
        case 3:
            $radio = "Cycle Sort";
            $sort = new CycleSort();
            $KQ = $sort->sort($arr, $n);
            break;
        case 4:
            $radio = "Cocktail Sort";
            $sort = new CocktailSort();
            $KQ = $sort->sort($arr, $n);
            break;
    }

    $stringKQ = implode(" ", $KQ);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả sắp xếp dãy số</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <script src="./bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class=" container-fluid">
        <div class=" col-4 mt-3 m-auto">
            <div class=" card shadow-sm p-3 mb-0 bg-body rounded">
                <div class=" card-body">
                    <div class=" card-title">
                        <h1 class=" text-center">Kết quả sắp xếp</h1>
                    </div>
                    <div class="mb-3">
                        <label for="array" class="form-label">Giải thuật đã chọn:</label>
                        <input type="text" class="form-control" value="<?php if (isset($radio)) echo $radio ?>">
                    </div>
                    <div class="mb-3">
                        <label for="array" class="form-label">Dãy số đã sắp xếp:</label>
                        <input type="text" class="form-control" value="<?php if (isset($stringKQ)) echo $stringKQ ?>">
                    </div>
                    <a class=" btn btn-outline-primary" href="javascript:window.history.back(-1);">Trở về</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>