<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
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

        h2{
          color: #11A3D1;
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
        .email-card {
            background-color: #222; /* Tmavé pozadí */
            color: white; /* Bílý text */
            padding: 20px; /* Vnitřní okraje */
            border-radius: 10px; /* Zaoblené rohy */
            max-width: 300px; /* Maximální šířka karty */
            margin: 20px; /* Vnější okraje */
        }

        .email-details {
            display: flex; /* Flexbox pro uspořádání ikony a emailu vedle sebe */
            align-items: center; /* Vertikální zarovnání */
            margin-bottom: 15px; /* Odstup od textu */
        }

        .email-icon {
            margin-right: 10px; /* Odstup ikony od emailové adresy */
        }

        .email-address {
            font-weight: bold; /* Tučné písmo pro emailovou adresu */
            color: #11A3D1;
        }

        .email-content {
            font-size: 0.9rem; /* Menší velikost textu */
        }

        .read-more {
            color: #11A3D1; /* Modrá barva odkazu */
            text-decoration: none; /* Bez podtržení */
        }
        h3{
          color: #11A3D1;
        }
        .read-more:hover {
            text-decoration: underline; /* Podtržení při najetí */
        }
        .account-details {
            background-color: #333; /* Tmavé pozadí */
            color: #fff; /* Bílý text */
            padding: 20px; /* Vnitřní odsazení */
            border-radius: 10px; /* Zaoblené rohy */
            max-width: 400px; /* Maximální šířka kontejneru */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Stín */
            margin: 20px; /* Vnější odsazení */
        }

        .detail {
            margin-bottom: 10px; /* Odstup mezi detaily */
        }
                .payment-methods {
            text-align: center; /* Centrování textu */
            margin: 20px; /* Vnější okraje */
        }

        .payment-methods h3 {
            
            margin-bottom: 20px; /* Odstup pod nadpisem */
        }

        .icons1 {
            display: flex; /* Flexbox pro ikony */
            justify-content: center; /* Horizontální centrování */
            align-items: center; /* Vertikální centrování */
            gap: 20px; /* Odstupy mezi ikonami */
        }

        .icon1 { 
            width: 100px; /* Šířka ikon */
            height: 100px; /* Výška ikon */
            object-fit: contain; /* Zachování poměru stran obrázků */
        }

        

  </style>
</head>
<body>
  <div class="header">
    <a href="/home">
      <img src="{{ asset('images/sipka.png') }}" alt="Profil" class="icon" />
    </a> 
  </div>
  <div class="email-card">
    <h2>Netflix subscription</h2>
    <div class="email-details">
      <img src="{{ asset('images/logo_mini.png') }}" alt="Zvonek" class="icon" />
        <span class="email-address">noreply@battle.net</span>
    </div>
    <p class="email-content">Hello user, <br>
    We ask you to pay a payment of 7.99 euros for subscription a Netflix account ... <a href="#" class="read-more">Read more</a></p>
  </div>

  <div class="account-details">
    <h3>Detail</h3>
    <div class="detail">
        <strong>IBAN:</strong> SK6807200002811987426353
    </div>
    <div class="detail">
        <strong>Variable symbol:</strong> 561877
    </div>
    <div class="detail">
        <strong>Constant symbol:</strong> 5987
    </div>
    <div class="detail">
        <strong>Specific symbol:</strong> 7849654879
    </div>
    <div class="detail">
        <strong>SWIFT:</strong> GIBASKBX
    </div>
  </div>
  <div class="payment-methods">
    <h3>Payment method</h3>
    <div class="icons1">
        <img src="{{ asset('images/Frame 3.png') }}" alt="Apple Pay" class="icon1" />
        <img src="{{ asset('images/Frame 4.png') }}" alt="Google Pay" class="icon1" />
        <img src="{{ asset('images/Frame 5.png') }}" alt="Samsung Pay" class="icon1" />
    </div>
</div>

</body>
</html>