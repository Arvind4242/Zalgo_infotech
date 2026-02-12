<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Zalgo Infotech - IT Solution</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    position:relative;
    color:#000;
}

/* Background Image */
body::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:url('{{asset('assets/images/bg/Thank-you.jpg')}}') no-repeat center center/cover;
    z-index:-2;
}

/* Dark overlay for readability */
body::after{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(255,255,255,0.85); /* Light overlay */
    z-index:-1;
}

.container{
    max-width:850px;
    padding:30px;
}

.logo{
    width:220px;
    margin-bottom:25px;
}

h1{
    font-size:42px;
    font-weight:700;
    line-height:1.3;
}

.company{
    display:block;
    font-size:48px;
    font-weight:700;
    color:#0f6a66;
    margin-top:10px;
}

.sub{
    margin-top:20px;
    font-size:20px;
    font-weight:600;
}

.desc{
    margin-top:15px;
    font-size:15px;
    max-width:600px;
    margin-left:auto;
    margin-right:auto;
    color:#333;
}

/* WhatsApp Floating Button */
.whatsapp{
    position:fixed;
    bottom:20px;
    right:20px;
    background:#25D366;
    width:55px;
    height:55px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-size:28px;
    text-decoration:none;
    box-shadow:0 5px 15px rgba(0,0,0,0.3);
}

@media(max-width:768px){
    h1{
        font-size:28px;
    }
    .company{
        font-size:32px;
    }
}
</style>
</head>

<body>

<div class="container">

    <img src="{{asset('assets/images/logo/zalgo_logo.png')}}" class="logo" alt="Zalgo Infotech">

    <h1>
        Thank you for contacting
        <span class="company">Zalgo Infotech Pvt. Ltd.</span>
    </h1>

    <div class="sub">
        Your message has been successfully received.
    </div>

    <div class="desc">
        🚀 Our support team usually replies within a few hours (max 24 hours).
        We’re excited to help you and will be in touch soon.
    </div>

</div>


</body>
</html>