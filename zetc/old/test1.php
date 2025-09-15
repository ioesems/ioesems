<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Price Predictor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mobile Price Predictor</h1>
        <form id="predictForm">
            <label for="ram">RAM (GB):</label>
            <input type="number" id="ram" step="0.01" required>

            <label for="rom">ROM (GB):</label>
            <input type="number" id="rom" step="0.01" required>

            <label for="mobileSize">Mobile Size (inches):</label>
            <input type="number" id="mobileSize" step="0.01" required>

            <label for="primaryCam">Primary Camera (MP):</label>
            <input type="number" id="primaryCam" step="1" required>

            <label for="selfiCam">Selfie Camera (MP):</label>
            <input type="number" id="selfiCam" step="0.01" required>

            <label for="batteryPower">Battery Power (mAh):</label>
            <input type="number" id="batteryPower" step="1" required>

            <button type="submit">Predict Price</button>
        </form>
        <div class="result" id="result"></div>
    </div>

    <script>
        // Feature importances from the trained RandomForestRegressor model
        const featureImportances = {
            RAM: 0.2400154569577916,
            ROM: 0.0619292685171555,
            Mobile_Size: 0.3729954695933651,
            Primary_Cam: 0.05709206113340743,
            Selfi_Cam: 0.2096979292446641,
            Battery_Power: 0.05826981455361621
        };

        // Function to calculate the predicted price
        function predictPrice(features) {
            let weightedSum = 0;
            for (const feature in featureImportances) {
                weightedSum += features[feature] * featureImportances[feature];
            }
            return Math.round(weightedSum*100); // Round the result to the nearest integer
        }

        // Event listener for form submission
        document.getElementById('predictForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Collect user inputs
            const ram = parseFloat(document.getElementById('ram').value);
            const rom = parseFloat(document.getElementById('rom').value);
            const mobileSize = parseFloat(document.getElementById('mobileSize').value);
            const primaryCam = parseFloat(document.getElementById('primaryCam').value);
            const selfiCam = parseFloat(document.getElementById('selfiCam').value);
            const batteryPower = parseFloat(document.getElementById('batteryPower').value);

            // Create feature object
            const features = {
                RAM: ram,
                ROM: rom,
                Mobile_Size: mobileSize,
                Primary_Cam: primaryCam,
                Selfi_Cam: selfiCam,
                Battery_Power: batteryPower
            };

            // Predict price
            const predictedPrice = predictPrice(features);

            // Display the result
            document.getElementById('result').textContent = `Predicted Price: ₹${predictedPrice}`;
        });
    </script>
</body>
</html>