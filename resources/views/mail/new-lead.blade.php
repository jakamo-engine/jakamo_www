<!DOCTYPE html>
<html>
<head><meta charset="utf-8"/></head>
<body style="font-family: monospace; background: #131313; color: #e5e2e1; padding: 32px;">
<h2 style="color: #00d4ff; text-transform: uppercase; letter-spacing: 0.15em;">JAKAMO // NOWY LEAD</h2>
<table style="border-collapse: collapse; width: 100%; max-width: 600px;">
  <tr><td style="padding: 8px; border-bottom: 1px solid #3c494e; color: #859398; font-size: 11px; text-transform: uppercase;">Imię i nazwisko</td><td style="padding: 8px; border-bottom: 1px solid #3c494e;">{{ $lead->name }}</td></tr>
  <tr><td style="padding: 8px; border-bottom: 1px solid #3c494e; color: #859398; font-size: 11px; text-transform: uppercase;">Firma</td><td style="padding: 8px; border-bottom: 1px solid #3c494e;">{{ $lead->company }}</td></tr>
  <tr><td style="padding: 8px; border-bottom: 1px solid #3c494e; color: #859398; font-size: 11px; text-transform: uppercase;">Email</td><td style="padding: 8px; border-bottom: 1px solid #3c494e;"><a href="mailto:{{ $lead->email }}" style="color: #00d4ff;">{{ $lead->email }}</a></td></tr>
  <tr><td style="padding: 8px; border-bottom: 1px solid #3c494e; color: #859398; font-size: 11px; text-transform: uppercase;">Telefon</td><td style="padding: 8px; border-bottom: 1px solid #3c494e;">{{ $lead->phone ?? '—' }}</td></tr>
  <tr><td style="padding: 8px; border-bottom: 1px solid #3c494e; color: #859398; font-size: 11px; text-transform: uppercase;">Zastosowanie Excela</td><td style="padding: 8px; border-bottom: 1px solid #3c494e; color: #fd7200;">{{ $lead->use_case }}</td></tr>
  <tr><td style="padding: 8px; border-bottom: 1px solid #3c494e; color: #859398; font-size: 11px; text-transform: uppercase;">Wiadomość</td><td style="padding: 8px; border-bottom: 1px solid #3c494e;">{{ $lead->message ?? '—' }}</td></tr>
  <tr><td style="padding: 8px; color: #859398; font-size: 11px; text-transform: uppercase;">IP</td><td style="padding: 8px; font-size: 11px; color: #859398;">{{ $lead->ip_address }}</td></tr>
</table>
<p style="margin-top: 32px; font-size: 10px; color: #3c494e; text-transform: uppercase; letter-spacing: 0.2em;">JAKAMO_ENGINE_v2.0 // AUTO_NOTIFICATION</p>
</body>
</html>
