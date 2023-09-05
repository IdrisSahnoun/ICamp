<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/Accueil.css" media="screen">
    <link rel="stylesheet" href="css/reservation.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tableRows = document.querySelectorAll(".tr");

            // Function to filter table rows by keyword
            function filterTableRows(keyword) {
                tableRows.forEach(function (row) {
                    const cellContents = Array.from(row.querySelectorAll("td")).map(function (cell) {
                        return cell.textContent.toLowerCase();
                    });

                    if (cellContents.some(function (content) {
                        return content.includes(keyword.toLowerCase());
                    })) {
                        row.style.display = "table-row";
                    } else {
                        row.style.display = "none";
                    }
                });
            }

            // Handle search input changes
            const searchInput = document.getElementById("search");
            searchInput.addEventListener("input", function () {
                const keyword = this.value;
                filterTableRows(keyword);
            });
        });
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body data-home-page="Accueil.html" data-home-page-title="Accueil" class="u-body u-xl-mode" data-lang="fr">
<header class="u-clearfix u-header u-header" style="background-color: #4d535c" id="sec-4e2d">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="456" data-image-height="362">
            <img src="../images/mostfa.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            href="Reservation.php" style="padding: 10px 92px;">Events</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            href="  destination/Destination.php" style="padding: 10px 92px;">Category</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            href="../index.html" style="padding: 10px 92px;">LogOut</a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html">Accueil</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Shop</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Reservation.php">Events</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Contact.html">Contact</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../À-propos-de.html">À propos
                                    de</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>
<section class="u-align-center u-clearfix u-image u-shading u-section-2" src="" data-image-width="1980"
         data-image-height="1320" id="sec-6196">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
            <div class="u-input input_label">
                <label for="search">Search: </label>
                <input type="text" id="search" placeholder="Enter a keyword">
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th class="th" scope="col">Person Count</th>
                    <th class="th" scope="col">Start Date</th>
                    <th class="th" scope="col">End Date</th>
                    <th class="th" scope="col">Category</th>
                </tr>
                </thead>
                <tbody>
                <?php include './php/fetch_all_reservations.php'; ?>
                <?php foreach ($result as $row) :
                    global $pdo;
                    try {
                        $query = $pdo->prepare(
                            'SELECT * FROM destination WHERE id=:id'
                        );
                        $query->execute([
                            'id' => $row['destination']
                        ]);
                        $destination = $query->fetch();
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }?>
                    <tr class="tr">
                        <td hidden=""><?= $row['id'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['person_count'] ?></td>
                        <td><?= $row['start_date'] ?></td>
                        <td><?= $row['end_date'] ?></td>
                        <td><?= $destination['name'] ?></td>
                        <td><a href="update_page.php?id=<?= $row['id'] ?>">Update</a></td>
                        <td><a href="php/delete_reservation.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="add_page.php"
               class="u-border-1 u-border-grey-75 u-border-hover-white u-btn u-btn-round u-button-style u-gradient u-none u-radius-50 u-text-body-alt-color u-btn-1">Add Event</a>
        </div>
    </div>
</section>
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-f3c2">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Exemple de texte. Cliquez pour sélectionner l'élément de
            texte.</p>
    </div>
</footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
    </a>.
</section>
</body>
</html>