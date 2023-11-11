<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <style>
        body {
            background-color:#222222;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #222; /* Tmavě šedá barva pozadí */
            color: #11A3D1; /* Světle modrá barva textu */
        }

        .header h1 {
            margin: 0;
            font-size: 24px; /* Velikost písma nadpisu */
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icon {
            width: 24px; /* Nastavte vhodnou velikost pro vaše ikony */
            height: auto;
            margin-left: 10px; /* Odstup mezi ikonami */
        }
        .search-box {
            display: flex;
            background-color: #222; /* Tmavé pozadí */
            border: 1px solid #11A3D1; /* Modrý okraj */
            border-radius: 20px; /* Zaoblené rohy */
            padding: 10px;
            margin-bottom: 20px;
        }

        .search-box input[type="search"] {
            width: 100%; /* Přizpůsobí šířku rodičovskému elementu */
            border: none; /* Odstraní vnitřní rámeček */
            background-color: transparent; /* Průhledné pozadí */
            margin: 0; /* Bez vnějších okrajů */
            padding: 5px 10px; /* Vnitřní okraje */
            color: #11A3D1; /* Modrá barva textu */
            outline: none; /* Odstraní obrys při zaměření */
        }

        /* Styl pro ikonu lupy v rámci vyhledávacího pole */
        .search-box .search-icon {
            color: #11A3D1; /* Modrá barva ikony */
            margin-right: 5px; /* Odstup od textu */
        }
        a{
            text-decoration:none;
        }
        h1{
            text-align: center;
            color: #11A3D1;
        }
        .button-group {
            display: flex;
            border-radius: 20px; /* Zakulacené rohy pro skupinu */
            padding: 5px; /* Odstup mezi tlačítky a okrajem skupiny */
            margin-bottom: 20px; /* Odstup skupiny od ostatních prvků */
        }

        .button {
            border: none; /* Bez okrajů */
            color: #fff; /* Bílý text */
            background-color: transparent; /* Průhledné pozadí */
            margin: 0 5px; /* Odstup mezi tlačítky */
            padding: 10px 20px; /* Vnitřní okraje tlačítek */
            border-radius: 15px; /* Zakulacené rohy pro tlačítka */
            cursor: pointer; /* Ukazatel kurzoru jako ukazatel kliknutí */
            transition: background-color 0.3s; /* Plynulý přechod pro efekt najetí */
        }

        .button:hover {
            background-color: #555; /* Tmavší pozadí při najetí */
        }

        .button.active {
            background-color: #00BFFF; /* Modré pozadí pro aktivní tlačítko */
            color: #000; /* Černý text pro aktivní tlačítko */
        }

        .payment-item {
            background-color: #222;
            border: 1px solid #0af;
            border-radius: 20px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            margin-bottom: 10px; /* Pro oddělení plateb */
        }
        .left{
            justify-content: left;
        }
        .right{
            justify-content: right;
        }
        .left, .right {
            flex-direction: column;
        }

        .email, .subscription, .due-date, .price {
            margin: 0;
        }

        .due-date {
            font-size: 0.8em;
            color: #0af; /* Světle modrá barva pro datum */
        }

        .price {
            color: #0af; /* Světle modrá barva pro cenu */
        }

        .payment-item.expired {
            border-color: #FFC700;
        }
        .payment-item.expired p{
            color: #FFC700;
        }
        .payment-item.paid{
            border-color: #20D111;
        }
        .payment-item.paid p{
            color: #20D111;
        }
        .analytics {
            margin-top: 30px;
        }
        .bar-chart {
            display: flex;
            justify-content: space-between;
        }
        .bar {
            width: 20px;
            height: 50px; /* Výška by se měla měnit podle dat */
            background-color: #0af;
            margin-right: 5px;
        }
        .bar.negative {
            background-color: red;
        }
        p{
            color: #11A3D1;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
            padding-bottom: 50px;
        }

        .page-number {
            display: inline-block;
            margin: 0 5px;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #333; /* Tmavě šedé pozadí pro čísla stránek */
            color: #0af; /* Světle modrá barva textu */
            text-decoration: none; /* Odstranění podtržení */
            transition: background-color 0.3s; /* Přechod pro hover efekt */
        }

        .page-number:hover {
            background-color: #0af; /* Světle modrá barva pozadí při najetí */
            color: #000; /* Černá barva textu při najetí */
        }

        .page-number.active {
            background-color: #0af; /* Světle modrá barva pro aktivní stránku */
            color: #000; /* Černá barva textu pro aktivní stránku */
        }
        .analytics-section {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            color: white;
        }

        .spent-this-month {
            margin-bottom: 20px;
        }

        .change-amount {
            color: red;
        }

        .chart {
            display: flex;
            justify-content: space-around;
            align-items: flex-end;
            
        }

        .bar {
            width: 20px;
            display: flex;
            justify-content: center;
            color: #fff;
            cursor: pointer;
        }

        .bar::before {
            position: relative;
            top: -20px;
            display: block;
            color: #fff;
        }

        .jul { height: 50px; background-color: #11A3D1; }
        .aug { height: 80px; background-color: #11A3D1; }
        .sep { height: 30px; background-color: #11A3D1; }
        .okt { height: 100px; background-color: #11A3D1; }
        .nov { height: 120px; background-color: darkred; }

    </style>
</head>
<body>

<div class="header">
    <h1>Home</h1>
    <div class="icons">
        <img src="{{ asset('images/profil.png') }}" alt="Profil" class="icon" />
        <img src="{{ asset('images/zvoncek.png') }}" alt="Zvonek" class="icon" />
    </div>
</div>


<div class="search-box">
    <img src="{{ asset('images/lupa.png') }}" alt="Zvonek" class="icon" />
    <input type="search" placeholder="Search">
</div>

<h1>Your payments</h1>
<div class="button-group">
    <button class="button active">All</button>
    <button class="button">Pending</button>
    <button class="button">Paid</button>
    <button class="button">Expired</button>
</div>
<a href="/payment">
<div class="payment-list">
    <div class="payment-item">
        <div class="left">
            <p class="email">noreply@battle.net</p>
            <p class="subscription">Monthly subscription</p>
        </div>
        <div class="right">
            <p class="due-date">due to 11/12/2023</p>
            <p class="price">13,00 €</p>
        </div>
    </div>
</a>
<a href="/payment">
    <div class="payment-item expired">
        <div class="left">
            <p class="email">noreply@battle.net</p>
            <p class="subscription">Monthly subscription</p>
        </div>
        <div class="right">
            <p class="due-date">Expired on 10/09/2023</p>
            <p class="price">13,00 €</p>
        </div>
    </div>
</a>   
<a href="/payment">
    <div class="payment-item paid">
        <div class="left">
            <p class="email">noreply@battle.net</p>
            <p class="subscription">Monthly subscription</p>
        </div>
        <div class="right">
            <p class="due-date">Paid</p>
            <p class="price">13,00 €</p>
        </div>
    </div>
</div>
</a>  
<div class="pagination">
    <a href="#" class="page-number active">1</a>
    <a href="#" class="page-number">2</a>
    <a href="#" class="page-number">3</a>
    <a href="#" class="page-number">4</a>
</div>
<a href="/analytics">
    <div class="analytics-section">
        <h2>Analytics</h2>
        <div class="spent-this-month">
            <p>Spent this month</p>
            <p>26,35 €</p>
            <p class="change-amount">▲ 3,34 €</p>
        </div>
        <div class="chart">
            <div class="bar jul" >jul</div>
            <div class="bar aug" >aug</div>
            <div class="bar sep" >sep</div>
            <div class="bar okt" >okt</div>
            <div class="bar nov" >nov</div>
        </div>
    </div>
</a>
</body>
</html>
