<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Award Nomination Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="submit_form.php" method="POST">
        <h1>Award Nomination Form</h1>
        
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
        <input type="text" id="nominee_native" name="nominee_native" required>

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
            <!-- Add all 29 categories as options -->
            <option value="Arts and Crafts">Arts and Crafts</option>
            <option value="Cartoon">Cartoon</option>
            <!-- Add other categories similarly -->
        </select>

        <label for="reason_for_nomination">Reason for Nomination *</label>
        <textarea id="reason_for_nomination" name="reason_for_nomination" required></textarea>

        <label for="achievements">Nominee's Achievements or Contributions *</label>
        <textarea id="achievements" name="achievements" required></textarea>

        <label for="recent_video_link">Recent Uploaded Post/Video's Link *</label>
        <input type="text" id="recent_video_link" name="recent_video_link" required>

        <button type="submit">Submit Nomination</button>
    </form>
</body>
</html>
