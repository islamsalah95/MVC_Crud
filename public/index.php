<?php
require_once dirname(__DIR__) . "\\vendor\autoload.php";
use App\Controllers\ProductController;
$products = new ProductController();
$products = $products->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Product Table</title>
</head>

<body>



    <div class="container mt-5">


        <div style=" display: flex;  justify-content: space-evenly; ">
            <div>
                <!-- Button to trigger the create form -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#createModal">
                    create
                </button>
                <!-- Form for updating (hidden initially) -->
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
                    aria-labelledby="createModallLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel">create Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Your create form goes here -->
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="create_name">Name:</label>
                                        <input type="text" class="form-control"
                                            id="create_name" name="create_name"
                                            >
                                    </div>

                                    <div class="form-group">
                                        <label for="create_price">Price:</label>
                                        <input type="text" class="form-control"
                                            id="create_price" name="create_price"
                                        >
                                    </div>

                                    <button type="button" id="createBtn" name="create"
                                        class="btn btn-info">create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <h2>Product Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Replace this part with a loop that fetches data from your database -->
                <?php foreach ($products as $product) { ?>
                    <tr id="tr<?php echo $product['id'] ?>">
                        <td>
                            <?php echo $product['id'] ?>
                        </td>
                        <td>
                            <?php echo $product['name'] ?>
                        </td>
                        <td>
                            <?php echo $product['price'] ?>
                        </td>
                        <td>
                            <?php echo $product['created_at'] ?>
                        </td>
                        <td>
                            <div style=" display: flex;  justify-content: space-evenly; ">
                                <div>
                                    <!-- Button to trigger the update form -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#updateModal<?php echo $product['id'] ?>">
                                        Update
                                    </button>
                                    <!-- Form for updating (hidden initially) -->
                                    <div class="modal fade" id="updateModal<?php echo $product['id'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateModalLabel">Update Product</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Your update form goes here -->
                                                    <form action="" method="post">
                                                        <input type="hidden" name="update_id"
                                                            value="<?php echo $product['id'] ?>">

                                                        <!-- Update form fields -->
                                                        <div class="form-group">
                                                            <label for="update_name">Name:</label>
                                                            <input type="text" class="form-control"
                                                                id="update_name<?php echo $product['id']; ?>"
                                                                name="update_name" value="<?php echo $product['name'] ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="update_price">Price:</label>
                                                            <input type="text" class="form-control"
                                                                id="update_price<?php echo $product['id']; ?>"
                                                                name="update_price" value="<?php echo $product['price'] ?>">
                                                        </div>

                                                        <!-- Add other input fields for updating -->

                                                        <button type="button" id="updateBtn<?php echo $product['id']; ?>"
                                                            name="update" class="btn btn-info">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <!-- Form for deleting -->
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $product['id'] ?>">
                                        <button type="button" id="deleteBtn<?php echo $product['id']; ?>"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>
                <?php } ?>

                <!-- End of loop -->

            </tbody>
        </table>
    </div>

    <?php echo URLPublic . "show.php"?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>


// $.ajax({
//     method: "POST",
//     url: "<?php echo URLPublic . 'show.php'?>",  // Replace this with your actual URL
//     success: function (data, status, xhr) {
//         // Assuming the server returns a JSON string, parse it to an object
//         var newData = JSON.parse(data);

//         console.log(newData);
//     },
//     error: function (xhr, status, error) {
//         console.log("Error loading data:", error);
//     },
// });

        $(function () {
            $('[id^="deleteBtn"]').on("click", function () {
                var productId = $(this).attr('id').replace('deleteBtn', '');
                $.ajax({
                    method: "POST",
                    url: "<?php echo URLPublic . 'delete.php'?>",  // Replace this with your actual URL
                    data: { delete_id: productId, delete: "delete" }, // Add any additional data you need to send
                    success: function (data, status, xhr) {
                        var trElement = document.getElementById('tr' + productId);
                if (trElement) {
                    trElement.hidden = true;
                }
                        console.log(data);
                        console.log(status);
                        console.log(xhr);

                    },
                    error: function (xhr, status, error) {
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    },
                });
            });
        });


        $(function () {
    $('[id^="updateBtn"]').on("click", function () {
        var productId = $(this).attr('id').replace('updateBtn', '');
        var update_name = $("#update_name" + productId).val();
        var update_price = $("#update_price" + productId).val();

        var data = {
            update_id: productId,
            update_name: update_name,
            update_price: update_price,
            update: "update"
        };

        $.ajax({
            method: "POST",
            url: "<?php echo URLPublic . 'update.php'?>",  // Replace this with your actual URL
            data: data,
            success: function (mYdata, status, xhr) {

                console.log(mYdata);
                console.log(status);
                console.log(xhr);


                console.log(data);
                updateTableRow(data);


            },
            error: function (xhr, status, error) {
                console.log(xhr);
                console.log(status);
                console.log(error);
            },
        });
    });

    function updateTableRow(updatedProduct ) {
        var trElement = document.getElementById('tr' + updatedProduct.update_id);

        if (trElement) {
            trElement.cells[1].innerText = updatedProduct.update_name;  // Assuming the name is in the second cell
            trElement.cells[2].innerText = updatedProduct.update_price; // Assuming the price is in the third cell


        }
    }
});

        









        $(function () {
    $('[id^="createBtn"]').on("click", function () {
        var create_name = $("#create_name").val();
        var create_price = $("#create_price").val();

        var data = {
            create_name: create_name,
            create_price: create_price,
            create: "create"
        };

        $.ajax({
            method: "POST",
            url: "<?php echo URLPublic . 'create.php'?>",  // Replace this with your actual URL
            data: data,
            success: function (mYdata, status, xhr) {
                // Assuming the server returns the newly added product data
                console.log(data)
                // Append a new row to the table
                appendRowToTable(data);
                // Clear the form fields
                $("#create_name").val("");
                $("#create_price").val("");

                console.log("Data added successfully.");
            },
            error: function (xhr, status, error) {
                console.log("Error adding data:", error);
            },
        });
    });

    // Function to append a new row to the table
    function appendRowToTable(product) {
        var tbody = $("tbody");

        var newRow = "<tr>" +
            "<td>" + 'last'+ "</td>" +
            "<td>" + product.create_name + "</td>" +
            "<td>" + product.create_price + "</td>" +
            "<td>" + 'now' + "</td>" +
            "<td>" +
            '<div style="display: flex; justify-content: space-evenly;">' +
            '<div>' +
            '<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateModal' + 'last' + '">Update</button>' +
            '<div class="modal fade" id="updateModal' + 'last' + '" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">' +
            // ... Your update modal content here ...
            '</div>' +
            '</div>' +
            '<div>' +
            '<form action="" method="post">' +
            '<input type="hidden" name="delete_id" value="' + 'last' + '">' +
            '<button type="button" id="deleteBtn' + 'last' + '" class="btn btn-danger btn-sm">Delete</button>' +
            '</form>' +
            '</div>' +
            '</div>' +
            '</td>' +
            "</tr>";

        tbody.append(newRow);

        // Add event listeners for the new buttons (similar to your existing script)
        // ... Your existing event listeners here ...
    }
});

    </script>


</body>

</html>