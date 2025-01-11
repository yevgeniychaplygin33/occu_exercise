<!DOCTYPE html>
<html>

<head>
    <title>Laravel App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\views\app.blade.php">

    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        .tableData {
            height: 10px;
        }

        .tabled {
            margin: 0;
            padding: 0;
        }

        #cmprTxt {
            width: 1em;
        }

        #cmprBtn {
            margin: 0px 0px 50px 0;
        }

        #cb {
            margin-top: 10px;
        }

        .input-row .form-group {
            flex: 1;
            margin-right: 10px;
        }

        .input-row .form-group:last-child {
            margin-right: 0;
        }

        .btn-custom {
            /* This matches the height of form-control-sm  */
            height: calc(1.5em + .75rem + 2px);
            align-self: center;
            margin-top: 1.2em;
        }

        #tableRow {
            text-align: center;
            vertical-align: middle;
            margin-top: 50px;
            width: 10px;
        }

        #editBtn {
            border: 0 0 0 10px;
            text-align: center;
            vertical-align: middle;
            font-size: 16px;
            width: 50px;
            padding-right: 40px;
        }

        #deleteBtn {
            border: 0 0 0 10px;
            text-align: center;
            vertical-align: middle;
            font-size: 16px;
            width: 70px;
            margin: 5px 5px 0 0;
        }

        #tableBorder {
            border-width: 10px 0 10px 10px
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .heading {
            flex: 1;
            text-align: left;
        }

        .search-box {
            text-align: center;
            margin: 50px 50px 10px 50px;
            flex: 1;
            text-align: right;
        }

        .item {
            display: inline-block;
            width: 5%;
            margin-right: 10%;
        }

        #searchLabel {
            width: 100px;
            margin: 10%;
        }

        #searchBy {
            margin-left: 30%;
        }

        .searchInput {
            margin: 20% 20% 20% 0;
        }

        #checkBox{
            /* margin-left: 50px; */
            height: 20px;
            width: 20px;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; /* Adjust as needed */
        }
</style>
</head>
<!DOCTYPE html>
<html>

<body>
    @include('components.navbar')
    <div class="container">
        @yield('content')
    </div>
    <!-- <div x-data="{ editing: false, name: 'John Doe', email: 'john.doe@example.com' }" class="p-4">
        <div x-show="!editing">
            <p><strong>Name:</strong> <span x-text="name"></span></p>
            <p><strong>Email:</strong> <span x-text="email"></span></p>
            <button @click="editing = true" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
        </div>

        <div x-show="editing">
            <form @submit.prevent="editing = false">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" id="name" x-model="name" class="border rounded px-2 py-1 w-full">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" x-model="email" class="border rounded px-2 py-1 w-full">
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
                <button type="button" @click="editing = false" class="bg-red-500 text-white px-4 py-2 rounded">Cancel</button>
            </form>
        </div>
    </div>
    <table> <thead> <tr> <th>Name</th> <th>Email</th> <th>Action</th> </tr> </thead> <tbody> <tr x-data="{ isEditable: false }"> <td> <input type="text" x-bind:disabled="!isEditable" value="John Doe"> </td> <td> <input type="text" x-bind:disabled="!isEditable" value="john.doe@example.com"> </td> <td> <button @click="isEditable = !isEditable"> <span x-text="isEditable ? 'Save' : 'Edit'"></span> </button> </td> </tr> <tr x-data="{ isEditable: false }"> <td> <input type="text" x-bind:disabled="!isEditable" value="Jane Smith"> </td> <td> <input type="text" x-bind:disabled="!isEditable" value="jane.smith@example.com"> </td> <td> <button @click="isEditable = !isEditable"> <span x-text="isEditable ? 'Save' : 'Edit'"></span> </button> </td> </tr> </tbody> </table> -->
</body>
</html>