<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="{{ URL::asset('assets/img/logo/favicon.ico') }}"  type="image/x-icon">
    <title>Portifolio - Sobral Dev</title>
</head>
<body>
    <livewire:header />

    <main>
        <livewire:carrossell />

        <livewire:tecnologias />

        <livewire:projetos />
            
        <hr class="featurette-divider">
        <livewire:projetos_cientificos />

    </main>
    <livewire:footer />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
    </script>   
    <script src="https://kit.fontawesome.com/7d7b31a9bc.js" crossorigin="anonymous"></script>
</body>
</html>