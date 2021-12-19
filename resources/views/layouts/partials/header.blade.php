@include('layouts.partials.head')

<body>
    <div id="page">
        <header class="header menu_fixed">
            <nav id="menu" class="main-menu">
                <ul>
                    <li>
                        <span>
                            <a href="{{ route('index') }}"><b>Oyun Listesi</b></a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="{{ route('bracketControlForm') }}"><b>Parantez Kontrol</b></a>
                        </span>
                    </li>
                </ul>
            </nav>
        </header>
