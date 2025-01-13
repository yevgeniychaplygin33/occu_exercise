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
        
        #submitBtn{
            margin-top: 1.75em;
        }

        .subData{
            margin: 150px 0 50px 0;
        }
        .searchComp{
            margin-top: 50px;
        }

        #deleteAllBtn{
            margin-bottom: 100px;
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