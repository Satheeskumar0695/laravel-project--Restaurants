@extends('components.admin1')
@section('menu')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h3 {
            text-align: center;
            color: #3498db;
        }


            td {
    text-align: center;
}

.img {
    width: 50px;
    height: 50px;
    display: block;
    margin: 0 auto;
    border-radius: 10%;
}


/* Add these styles to your existing CSS or in a style tag within the head of your HTML */

label {
    font-weight: bold;
    margin-right: 10px;
}

#search {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Optional: Add some styles to improve the look of the placeholder text */
#search::placeholder {
    color: #aaa;
}

/* Optional: Style the reset button */
button {
    padding: 8px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #eaeaea;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius:10%;
            align-items: center;
        }
    </style>
</head>
<body>
    <form action="" class="user">
        <div class="container">
            <h3>All PRODUCTS</h3>
            <div>
                <label for="search">Search:</label>
                <input type="text" id="search" name="search" placeholder="Enter product name">

            </div>

            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>PRODUCT NAME </th>
                        <th>IMAGE</th>
                        <th>QUANTITY</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventary as $index => $inventarys)
    <tr>
        <td>{{ ($inventary->currentPage() - 1) * $inventary->perPage() + $loop->iteration }}</td>
                            <td>{{$inventarys->product_name}}</td>
                            <td ><img src="{{asset($inventarys->product_image)}}" alt="" class="img"></td>
                            <td>{{$inventarys->product_quantity}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">
            {{ $inventary->links() }}
        </div>

    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search');
            const tableRows = document.querySelectorAll('tbody tr');

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.trim().toLowerCase();

                tableRows.forEach(function (row) {
                    const productName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

                    if (productName.includes(searchTerm)) {
                        row.style.display = '';  // Show the row
                    } else {
                        row.style.display = 'none';  // Hide the row
                    }
                });
            });
        });
    </script>

    @endsection
</body>
</html>