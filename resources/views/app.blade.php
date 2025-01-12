<!DOCTYPE html>
<html>

<head>
    <title>Laravel App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script> 
    function resetFormByName(formName) { 
        const form = document.getElementsByName(formName);
        if (form){
            for (i=0; i < form.length; i++){
                form[i].reset();
            }
        } 
    }

    </script>
    <style>
        [x-cloak] { display: none !important; }
        
        #copyModal{
            margin-left: 10px;
        }


        #deleteAllBtn{
            margin: 50px 0 50px 50px;
        }

        .bottomBtns { 
            width: 100%; 
            display: flex; 
            justify-content: space-between;
            padding: 0px;
            margin-bottom: 50px; 
        }


        #cmprTxt {
            width: 1em;
        }

        #compareBtn {
            padding: 0 10px 0 10px;
            height: 40px;
            /* margin: 50px 0px 50px 0; */
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

        #deleteBtn #copyBtn{
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
            height: 20px;
            width: 20px;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; 
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
</body>
</html>