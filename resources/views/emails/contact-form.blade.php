<h2>You have a new contact form submission</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Budget:</strong> {{ $data['budget'] }}</p>
<p><strong>Service:</strong> {{ $data['service'] }}</p>
<p><strong>Message:</strong> {{ $data['message'] }}</p>
@if(!empty($formData['additional_document']))
    <p><strong>File Uploaded:</strong> {{ $formData['additional_document'] }}</p>
@endif