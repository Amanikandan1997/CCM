<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creator Registration Form</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-image: url('https://capecomorinmedia.github.io/ccm/assets/2024/images/DigitalBGI2024.jpg'); /* Replace 'your-image.jpg' with the image's filename */
    background-size: cover; /* Ensures the image covers the entire screen */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    background-attachment: fixed; /* Keeps the background fixed during scrolling */
    background-position: center; /* Centers the image */
    margin: 0;
    padding: 0;
}

.container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
color: #ffffff;
        }

        h2 {
            text-align: center;
            color:#ffffff;
        }

        h1 {
            text-align: center;
            color: #f0b643;
        }

        label {
            font-weight: bold;
            color:#ffffff;
            margin-top: 10px;
        }

        input, select, textarea {
            width: 98%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"], button[type="submit"] {
            background-color: #f0b643;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"]:hover, button[type="submit"]:hover {
            background-color: #e0a733;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 15px;
            }

            input, select, textarea {
                padding: 8px;
            }

            button[type="submit"] {
                font-size: 14px;
            }
        }

        /* Error message styling */
        .error {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
    <img src="./images/ccm.png" alt="Form Banner" style="display: block; margin: 0 auto 20px; max-width: 30%; height: auto; border-radius: 10px;">
        <h2>Creator Registration Form</h2>

        <h1>Award Nomination Form 2025</h1>
        <form action="submit_form.php" method="POST">
            
            <label for="nominee_for">Are you nominating for yourself or someone else? *</label>
            <select name="nominee_for" id="nominee_for" required>
                <option value="Self">Self</option>
                <option value="Someone else">Someone else</option>
            </select>

            <label for="your_name">Your Full Name *</label>
            <input type="text" id="your_name" name="your_name" required>

            <label for="phone_number">Phone Number *</label>
            <input type="text" id="phone_number" name="phone_number" required>

            <label for="nominee_name">Nominee's Full Name *</label>
            <input type="text" id="nominee_name" name="nominee_name" required>

            <label for="nominee_native">Nominee's Native *</label>
            <label >Other District Not Allowed *</label>
            <select id="nominee_native" name="nominee_native" required>
            
                <option value="Kanniyakumari">Kanniyakumari</option>
               
                <!-- Add other categories similarly -->
            </select>
            

            <label for="nominee_address">Nominee's Address *</label>
            <textarea id="nominee_address" name="nominee_address" required></textarea>

            <label for="nominee_whatsapp">Nominee's WhatsApp Number *</label>
            <input type="text" id="nominee_whatsapp" name="nominee_whatsapp" required>

            <label for="nominee_alternate">Nominee's Alternate Mobile Number</label>
            <input type="text" id="nominee_alternate" name="nominee_alternate">

            <label for="nominee_youtube">Nominee's YouTube Channel Name *</label>
            <input type="text" id="nominee_youtube" name="nominee_youtube" required>

            <label for="nominee_instagram_id">Nominee's Instagram ID *</label>
            <input type="text" id="nominee_instagram_id" name="nominee_instagram_id" required>

            <label for="nominee_other_platform_id">Nominee's Other Digital Platform ID</label>
            <textarea id="nominee_other_platform_id" name="nominee_other_platform_id"></textarea>

            <label for="instagram_url">Instagram URL *</label>
            <input type="text" id="instagram_url" name="instagram_url" required>

            <label for="youtube_url">YouTube URL *</label>
            <input type="text" id="youtube_url" name="youtube_url" required>

            <label for="other_platform_url">Other Digital Platform's URL</label>
            <input type="text" id="other_platform_url" name="other_platform_url">

            <label for="award_category">Award Categories you are nominating for *</label>
            <select name="award_category" id="award_category" required>
                <option value="Arts and Crafts">Arts and Crafts</option>
                <option value="Cartoon">Cartoon</option>
                <!-- Add other categories similarly -->
            </select>

            <label for="reason_for_nomination">Reason for Nomination *</label>
            <textarea id="reason_for_nomination" name="reason_for_nomination" required></textarea>

            <label for="achievements">Nominee's Achievements or Contributions *</label>
            <textarea id="achievements" name="achievements" required></textarea>
            <label for="nominee_image">Upload Nominee's Image *</label>
            <input type="file" id="nominee_image" name="nominee_image" accept="image/*" required>
            <label for="recent_video_link">Recent Uploaded Post/Video's Link *</label>
            <input type="text" id="recent_video_link" name="recent_video_link" required>

            <button type="submit">Submit Nomination</button>
        </form>
    </div>
  <!-- Message when the form is closed -->
  <div class="container" id="closed-message" style="display: none;">
        <h2>Thank You!</h2>
        <div class="message">The registration form is now closed. Thank you for your interest!</div>
    </div>

    <script>
        // Get today's date and the cutoff date
        const today = new Date();
        const cutoffDate = new Date('2024-11-13');

        // Check if today is after the cutoff date
        if (today > cutoffDate) {
            // If today is after October 5, 2025, show the closed message
            document.getElementById('form-container').style.display = 'none';
            document.getElementById('closed-message').style.display = 'block';
        }
    </script>
</body>
</html>
