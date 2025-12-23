<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acuas - Welcome to Acuas</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f4f6f8;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="20" cellspacing="0" style="background:#ffffff; margin-top:30px; border-radius:6px;">
                    
                    <tr>
                        <td align="center">
                            <h1 style="color:#e63946;">Welcome to Acuas, {{ $name }}!</h1>
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <h2 style="color:#1d3557;">Your account has been created successfully 🎉</h2>
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <p style="font-size:16px; color:#333;">
                                We’re excited to have you on board. Your registered email is:
                            </p>
                            <p style="font-size:16px; color:#e63946;">
                                <strong>{{ $email }}</strong>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <p style="font-size:14px; color:#555;">
                                Get started by exploring your dashboard, setting up your profile, and discovering our services.
                            </p>
                            <p style="font-size:14px; color:#555;">
                                — Team Acuas
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>