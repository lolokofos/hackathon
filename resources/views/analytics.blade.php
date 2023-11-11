<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analytics</title>

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

        .icon {
            width: 24px; /* Nastavte vhodnou velikost pro vaše ikony */
            height: auto;
            margin-left: 10px; /* Odstup mezi ikonami */
        }

        h2{
          color: #11A3D1;
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

        .payments-container {
            background: #333;
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }

        .payment-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            background: #444;
            border-radius: 10px;
            padding: 10px;
        }

        .payment-details h3 {
            margin: 0;
            font-size: 1.5em;
        }

        .payment-details p, .payment-amount p {
            margin: 5px 0;
        }

        .payment-amount p {
            text-align: right;
            font-size: 1.2em;
        }

        .payment-amount p:last-child {
            color: #AAA;
        }
  </style>
</head>
<body>
  <div class="header">
    <a href="/home">
      <img src="{{ asset('images/sipka.png') }}" alt="Profil" class="icon" />
    </a>
  </div>

  <h2>Netflix subscription</h2>
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

  <div class="payments-container">
        <h2>Payments</h2>
        <div class="payment-item">
            <div class="payment-details">
                <h3>Netflix</h3>
                <p>1 payment</p>
            </div>
            <div class="payment-amount">
                <p>23,30 €</p>
                <p>88%</p>
            </div>
        </div>
        <div class="payment-item">
            <div class="payment-details">
                <h3>UPC</h3>
                <p>1 payment</p>
            </div>
            <div class="payment-amount">
                <p>03,35 €</p>
                <p>12%</p>
            </div>
        </div>
    </div>
</body>
</html>