<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./style.css'>
</head>

<body>
    <?php

    $data = [
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ],
        [
            "Title" => "Product Title",
            "Description" => "Product Description",
            "Price" => "22$",
            "Color" => ["Red", "Black"],
        ]
    ];




    echo "<div class='ag-format-container'>";
    echo "<div class='ag-courses_box'>";
    // loop for the whole array
    foreach ($data as $key => $value) {

        echo "<div class='ag-courses_item'>";
        echo "<a href='#' class='ag-courses-item_link'>";
        echo "<div class='ag-courses-item_bg'></div>";
        // if statment to check if the value of the array is also an array
        if (is_array($value)) {
            // loop for the inside array
            foreach ($value as $key2 => $value2) {

                echo "<spin class='element'>";
                echo $key2 . ": ";
                echo "</spin>";
                // if statment to check if the color is also an array
                if (is_array($value2)) {

                    foreach ($value2 as $key3 => $value3) {
                        //CODE FOR POINT AT THE END OF THE COLOR//
                        $lastElement = end($value2);
                        if ($value3 === $lastElement) {
                            echo "<spin class='element'>";
                            echo $value3 . ".";
                            echo "</spin>";
                        } else {
                            echo "<spin class='element'>";
                            echo $value3 . " , ";
                            echo "</spin>";
                        }

                        //END//
                    }
                } else {
                    echo "<spin class='element'>";
                    echo $value2;
                    echo "</spin>" . "<br>";
                }
            }
        } else {
            echo $value . "<br>";
        }
        echo "</a>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";






    ?>

</html>
</body>