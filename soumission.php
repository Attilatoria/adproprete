<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ADpropreté - Demander une soumission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header,
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h1 {
            color: white;
        }

        h2 {
            color: black;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            background: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #555;
        }
    </style>
    <script>
        function validateForm() {
            const name = document.forms["soumissionForm"]["name"].value;
            const email = document.forms["soumissionForm"]["email"].value;
            const phone = document.forms["soumissionForm"]["phone"].value;
            const details = document.forms["soumissionForm"]["details"].value;

            if (name == "" || email == "" || phone == "" || details == "") {
                alert("Tous les champs doivent être remplis.");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <header>
        <div class="container">
            <h1>ADpropreté</h1>
            <p>On se salit les mains pour vous!</p>
        </div>
    </header>

    <div class="container">
        <h2>Demander une soumission</h2>
        <form name="soumissionForm" action="submit_soumission.php" method="post" onsubmit="return validateForm()">
            <label for="name">Nom complet:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Téléphone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="details">Détails du projet:</label>
            <textarea id="details" name="details" rows="5" required></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 ADpropreté. Tous droits réservés.</p>
            <ul>
                <p>Contactez-nous : <a href="mailto:contact@adproprete.com">
                        <li>contact@adproprete.com
                    </a></li>
                    <li><u>438-529-3548</u></li>
                </p>
            </ul>
        </div>
    </footer>
</body>

</html>