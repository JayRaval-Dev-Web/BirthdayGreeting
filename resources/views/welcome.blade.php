<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Inserting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Welcome to the Birthday Greeting App</h1>

    <div class="container">

        <div class="col-12" style="text-align: -webkit-center;height: 90vh;overflow: scroll;">

            <table class="table table-bordered" style="width: 50%; !important;">
                <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="image-table-body">
                  
                </tbody>

            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const editImageBaseUrl = "{{ url('/edit-image') }}";
        const assetBaseUrl = "{{ asset('') }}";
        function reloadTable() {
                $.get('{{ route('fetch.images') }}', function(data) {
                    let rows = '';
                    data.forEach(function(imageUrl) {
                        const fileName = imageUrl.split('/').pop();
                        rows += `
                            <tr>
                                <td class="text-center">
                                    <img src="${assetBaseUrl}${imageUrl}?t=${new Date().getTime()}" alt="Image Preview" style="width: 250px; height: 250px;">
                                </td>
                                <td class="text-center">
                                    <a href="${editImageBaseUrl}/${fileName}">
                                        <button class="btn btn-danger">Edit</button>
                                    </a>
                                </td>
                            </tr>`;
                    });
                    $('#image-table-body').html(rows);
                });
            }

        $(document).ready(function() {
            reloadTable();
        }); 
    </script>

</body>

</html>