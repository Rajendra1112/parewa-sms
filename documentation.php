<?php include("includes/header.php"); ?>
<div class="documentation-page">
    <!-- page title section -->
    <section class="page-title-section">
        <div class="container">
            <h1 class="page-title">Documentation</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Documentation</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- content inside documentation page -->
    <section class="documentation-page-detail section-bg-color">
        <div class="container">
            <h2 class="section-heading">Documentation</h2>
            <div class="section-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Velit scelerisque in dictum non. Pretium lectus quam id leo in vitae turpis
                    massa sed. Molestie at elementum eu facilisis sed. In cursus turpis massa tincidunt dui ut ornare
                    lectus. Vel pharetra vel turpis nunc eget lorem dolor sed. Enim blandit volutpat maecenas volutpat.
                    Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit. Scelerisque purus semper
                    eget duis at tellus at. Ullamcorper dignissim cras tincidunt lobortis. Sed cras ornare arcu dui
                    vivamus arcu felis. Nibh nisl condimentum id venenatis a condimentum vitae sapien.</p>
                <h3>API Documentation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Velit scelerisque in dictum non. Pretium lectus quam id leo in vitae turpis
                    massa sed. Molestie at elementum eu facilisis sed. In cursus turpis massa tincidunt dui ut ornare
                    lectus. Vel pharetra vel turpis nunc eget lorem dolor sed.</p>
                <div class="code-wrapper">
                    <pre>
    <code>
import requests

# Replace with your actual API endpoint and API key
api_endpoint = 'https://api.parewasms.com/send'
api_key = 'your_api_key_here'

# Message details
message = {
    'recipient': '+1234567890',  # Replace with the recipient's phone number
    'message': 'Hello, this is a test message from Parewa SMS API.'
}

# Set up headers with the API key
headers = {
    'Authorization': f'Bearer {api_key}'
}

# Send the SMS message
try:
    response = requests.post(api_endpoint, json=message, headers=headers)

    # Check the response status code
    if response.status_code == 200:
        print('Message sent successfully!')
    else:
        print(f'Failed to send message. Status code: {response.status_code}')
except Exception as e:
    print(f'An error occurred: {str(e)}')

    </code>
</pre>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include("includes/footer.php"); ?>