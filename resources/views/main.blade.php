<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/main2.css">
    <title>@yield('title')</title>
</head>

<body>

    <div class="sidebar">

        <div class="logo-container">
            <a href="/ihotel" class="d-flex aling-itens-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="" class="d-inline-block align-text-top">
                <span>iHotel</span>
            </a>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <ul>
                <li>
                    <div class="button-accordion" data-bs-toggle="collapse" data-bs-target="#hospedes" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span href="#" class="accordion-header" id="flush-headingOne">Hóspedes</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div id="hospedes" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <a href="/ihotel/cadastro/cadastrar" class="accordion-item" id="flush-headingOne">
                                        <div class="button-accordion-item">
                                            <i class="bi bi-person-plus"></i>
                                            <span>Novo cadastro</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ihotel/cadastro/consultar" class="accordion-item" id="flush-headingOne">
                                        <div class="button-accordion-item">
                                            <i class="bi bi-card-list"></i>
                                            <span>Consultar cadastro</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

<!--                 <li>
                    <div class="button-accordion" data-bs-toggle="collapse" data-bs-target="#hospedagem" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span href="#" class="accordion-header" id="flush-headingOne">Hospedagem</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div id="hospedagem" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <a href="" class="accordion-item" id="flush-headingOne">
                                        <div class="button-accordion-item">
                                            <i class="bi bi-person-plus"></i>
                                            <span>Check-In</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="accordion-item" id="flush-headingOne">
                                        <div class="button-accordion-item"> 
                                            <i class="bi bi-card-list"></i>
                                            <span>Check-Out</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li> -->

<!--                 <li>
                    <div class="button-accordion" data-bs-toggle="collapse" data-bs-target="#apartamentos" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span href="#" class="accordion-header" id="flush-headingOne">Apartamentos</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div id="apartamentos" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <a href="/ihotel/quartos/painel" class="accordion-item" id="flush-headingOne">
                                        <div class="button-accordion-item">
                                            <i class="bi bi-window"></i>
                                            <span>Painel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ihotel/quartos/cadastrar" class="accordion-item" id="flush-headingOne">
                                        <div class="button-accordion-item">
                                            <i class="bi bi-plus-lg"></i>
                                            <span>Novo cadastro</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/ihotel/quartos/consultar" class="accordion-item" id="flush-headingOne">
                                        <div class="button-accordion-item">
                                            <i class="bi bi-card-list"></i>
                                            <span>Consultar cadastro</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>

    <main>
        <div class="container-fluid col-md-12" id="container-dashboard">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>

</html>