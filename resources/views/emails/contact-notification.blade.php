<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #f4f4f4; padding: 20px; border-radius: 5px; margin-bottom: 20px;">
        <h1 style="color: #2c3e50; margin-top: 0;">New Contact Form Submission</h1>
    </div>

    <div style="background-color: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <h2 style="color: #34495e; border-bottom: 2px solid #3498db; padding-bottom: 10px;">Contact Details</h2>
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
            <tr>
                <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold; width: 150px;">Name:</td>
                <td style="padding: 10px;">{{ $contact->name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold;">Email:</td>
                <td style="padding: 10px;">
                    <a href="mailto:{{ $contact->email }}" style="color: #3498db; text-decoration: none;">{{ $contact->email }}</a>
                </td>
            </tr>
            @if($contact->phone)
            <tr>
                <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold;">Phone:</td>
                <td style="padding: 10px;">
                    <a href="tel:{{ $contact->phone }}" style="color: #3498db; text-decoration: none;">{{ $contact->phone }}</a>
                </td>
            </tr>
            @endif
            @if($contact->subject)
            <tr>
                <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold;">Subject:</td>
                <td style="padding: 10px;">{{ $contact->subject }}</td>
            </tr>
            @endif
            <tr>
                <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold; vertical-align: top;">Message:</td>
                <td style="padding: 10px; white-space: pre-wrap;">{{ $contact->message }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold;">Submitted:</td>
                <td style="padding: 10px;">{{ $contact->created_at->format('F j, Y \a\t g:i A') }}</td>
            </tr>
        </table>
    </div>

    <div style="margin-top: 20px; padding: 15px; background-color: #ecf0f1; border-radius: 5px; font-size: 12px; color: #7f8c8d;">
        <p style="margin: 0;">This email was sent from your portfolio contact form.</p>
        <p style="margin: 5px 0 0 0;">You can reply directly to this email to respond to {{ $contact->name }}.</p>
    </div>
</body>
</html>

