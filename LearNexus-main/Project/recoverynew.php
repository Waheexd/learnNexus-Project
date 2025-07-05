<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: Gainsboro;
            margin-top: 50px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: PapayaWhip;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 300px;
            width: 95%;
            height:auto;
            backdrop-filter: blur(5px);
        }

        h2 {
            margin-bottom: 30px;
            color: DimGray;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
            margin-bottom: 10px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: DodgerBlue;
            outline: none;
        }

        button {
            padding: 12px 20px;
            background-color: RoyalBlue;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: DodgerBlue;
        }

        .verify-link {
            color: DarkGreen;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px;
            transition: color 0.3s ease;
        }

        .verify-link:hover {
            color: ForestGreen;
        }

        .columns {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .column {
            width: 100%;
        }

        .form-group.otp { 
            width: 100%; 
            position: relative;
        }

        .form-group.verify-otp {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: absolute;
            top: 0;
            right:0;
            height: 90%;
            padding-right: 30px;
        }

        .error-message {
            color: red;
            display: none;
        }

        .verified {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Recover your password?</h2>
        <div class="image-container">
            <img src="img3.avif" alt="">
        </div>
        <form method="post">
            <div class="columns">
                <div class="column">
                    <div class="form-group otp">
                        <input type="text" id="otp" name="otp" placeholder="Enter OTP" required>
                        <div class="form-group verify-otp">
                            <a href="#" class="verify-link" name="verify">Verify</a>
                        </div>
                        <div id="otpError" class="error-message" style="display: none;">OTP does not match</div>
                    </div>
                </div>
                <div class="column">
                    <div class="form-group password">
                        <input type="password" id="password" name="password" placeholder="Create New Password" required>
                    </div>
                </div>
                <div class="column">
                    <div class="form-group confirm-password">
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm New Password" required>
                        <div id="passwordError" class="error-message" style="display: none;">Passwords do not match</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" name="confirm">Confirm</button>
            </div>
        </form>
    </div>
</body>
</html>
