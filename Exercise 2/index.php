<?php
$team_members = [
    [
        "name" => "Jude Bernardo",
        "img" => "Jude.jpg",
        "img_class" => "", 
        "quote" => '"I see myself. I see myself. I see myself in the mirror."',
        "info" => "Role: Clutch Player <br> Specialty: Web Architecture & Systems Design"
    ],
    [
        "name" => "Wish Zaragoza",
        "img" => "Wish.jpg",
        "img_class" => "",
        "quote" => '"PATAWADDDDDD!!!!"',
        "info" => "Role: Protagonist <br> Specialty: Interface Layouts & Prototyping"
    ],
    [
        "name" => "Renier Camaso",
        "img" => "Renier.jpg",
        "img_class" => "", 
        "quote" => '"MAY KALIWA BA SA KANAN?!! MAY KALIWA BA SA ROIGHTTT?!!"',
        "info" => "Role: Sidekick <br> Specialty: Responsive CSS & Styling"
    ],
    [
        "name" => "Renz Regidor",
        "img" => "Renz.jpg",
        "img_class" => "",
        "quote" => '"HMMMMM DEPENDE KUNG 3 YAN"',
        "info" => "Role: NPC <br> Specialty: Database Management & PHP"
    ],
    [
        "name" => "Erick John Nofuente",
        "img" => "Erick.jpg",
        "img_class" => "",
        "quote" => '"MAIIPIT KA NGANIIIIII!"',
        "info" => "Role: Mysterious Character <br> Specialty: Code Optimization & Debugging"
    ],
    [
        "name" => "Christian Andrei Ortinez",
        "img" => "Christian Andrei Ortinez.jpg",
        "img_class" => "",
        "quote" => '"Turning ambition into achievement."',
        "info" => "Role: Final Boss <br> Specialty: Requirements & Tech Documentation"
    ],
    [
        "name" => "Dianne Claire Redulosa",
        "img" => "Dianne.jpg",
        "img_class" => "",
        "quote" => '"Tamad na Artist"',
        "info" => "Role: Legendary NPC <br> Specialty: Digital Illustration & Visual Assets"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meet The Team - Group 4</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)), 
                  url('schoolbg.jpg') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
      position: relative;
    }

    .page-logo {
      position: fixed;
      top: 25px;
      width: 150px;
      height: 150px;
      object-fit: contain;
      z-index: 100;
    }

    .logo-left {
      left: 25px;
    }

    .logo-right {
      right: 25px;
    }

    .container {
      width: 100%;
      max-width: 1250px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .title-card {
      background-color: #ffffff;
      border: 2px solid #002b66;
      border-radius: 12px;
      padding: 20px 40px;
      margin-bottom: 25px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    h1 {
      color: #002b66;
      font-size: 2.8rem;
      font-weight: 800;
    }

    h2 {
      color: #d97706;
      font-size: 1.5rem;
      font-weight: 700;
      margin-top: 5px;
    }

    .team-box {
      border: 3px solid #000000;
      border-radius: 16px;
      padding: 30px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: stretch;
      gap: 20px;
      background: rgba(255, 255, 255, 0.2);
      width: 100%;
    }

    /* Fixed uniform card size and vertical alignment */
    .card {
      background-color: #ffffff;
      border: 2px solid #002b66;
      border-radius: 12px;
      width: 210px;
      min-height: 380px;
      padding: 20px 15px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
    }

    .card-img {
      width: 140px;
      height: 140px;
      object-fit: cover;
      object-position: top;
      border-radius: 8px;
      margin-bottom: 12px;
      flex-shrink: 0;
    }

    .card h3 {
      color: #002b66;
      font-size: 1.1rem;
      margin-bottom: 8px;
      flex-shrink: 0;
    }

    /* Flex-grow quote container keeps buttons aligned regardless of quote length */
    .card p.quote {
      color: #555;
      font-size: 0.85rem;
      line-height: 1.3;
      margin-bottom: 10px;
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Toggle Button Styling */
    .toggle-btn {
      background: #002b66;
      color: #ffffff;
      border: none;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: auto;
      flex-shrink: 0;
      transition: transform 0.3s ease, background-color 0.2s ease;
    }

    .toggle-btn:hover {
      background-color: #d97706;
    }

    .toggle-btn .arrow {
      font-size: 0.8rem;
      transition: transform 0.3s ease;
    }

    .toggle-btn.active .arrow {
      transform: rotate(180deg);
    }

    /* Hidden Extra Info Section */
    .extra-info {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s ease;
      width: 100%;
    }

    .extra-info.open {
      max-height: 150px;
      padding-top: 12px;
      border-top: 1px dashed #cbd5e1;
      margin-top: 10px;
    }

    .extra-info p {
      color: #002b66;
      font-size: 0.8rem;
      font-weight: 600;
      line-height: 1.4;
    }
  </style>
</head>
<body>

  <!-- Top Page Logos -->
  <img src="Pamantasan_ng_Lungsod_ng_Muntinlupa_logo.png" alt="PLMun Logo" class="page-logo logo-left">
  <img src="CITC_Logo.png" alt="CITCS Logo" class="page-logo logo-right">

  <div class="container">
    
    <!-- Title Card -->
    <div class="title-card">
      <h1>MEET THE TEAM</h1>
      <h2>GROUP 4</h2>
    </div>

    <!-- Team Members Box dynamically rendered with PHP -->
    <div class="team-box" id="teamBox">
      <?php foreach ($team_members as $member): ?>
        <div class="card">
          <img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>" class="card-img <?php echo $member['img_class']; ?>">
          <h3><?php echo $member['name']; ?></h3>
          <p class="quote"><?php echo $member['quote']; ?></p>

          <!-- Toggle Button -->
          <button class="toggle-btn" onclick="toggleDetails(this)" aria-label="Toggle extra details">
            <span class="arrow">▼</span>
          </button>

          <!-- Expandable Extra Info -->
          <div class="extra-info">
            <p><?php echo $member['info']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

  <!-- JavaScript Accordion Toggle Functionality -->
  <script>
    function toggleDetails(button) {
      const extraInfo = button.nextElementSibling;
      
      button.classList.toggle('active');
      extraInfo.classList.toggle('open');
    }
  </script>

</body>
</html>
