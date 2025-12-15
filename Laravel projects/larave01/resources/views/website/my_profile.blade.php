<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customer Profile Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
      background: #fff;
      border-radius: 16px;
      padding: 25px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.12);
      animation: fadeIn 1s ease-in-out;
      position: relative;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .profile-pic {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      margin: 0 auto 20px;
      border: 3px solid #ddd;
      animation: popIn 0.8s ease-in-out;
    }
    @keyframes popIn {
      0% { transform: scale(0.5); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
    h2 {
      text-align: center;
      margin-bottom: 10px;
    }
    .info {
      margin: 15px 0;
      font-size: 16px;
      animation: fadeIn 1.2s ease-in-out;
    }
    .info strong {
      display: inline-block;
      width: 140px;
    }
    .back-btn {
      position: absolute;
      top: 15px;
      left: 15px;
      width: auto;
      padding: 8px 14px;
      background: linear-gradient(135deg, #4b4b4b, #1c1c1c);
      border-radius: 8px;
      color: #fff;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .btn {
      display: block;
      padding: 12px;
      background: #007bff;
      color: #fff;
      text-align: center;
      border-radius: 10px;
      text-decoration: none;
      font-size: 16px;
      width: 90%;
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      transition: 0.3s;
    }
    .btn:hover {
      background: #0056b3;
      transform: translateX(-50%) translateY(-2px);
    }
    .back-btn:hover {
      background: linear-gradient(135deg, #000, #3a3a3a);
      transform: translateY(-2px) scale(1.03);
      box-shadow: 0 6px 14px rgba(0,0,0,0.3);
    }
    .back-btn {
      background: #444;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="container">
    <a href="/index" class="back-btn">⬅ Back</a>
    <img src="{{asset('upload/customer/' . $customer->image)}}" alt="Profile Picture" class="profile-pic" />
    <h2>Customer Name : {{$customer->name}}</h2>

     <div class="info"><strong>Phone:</strong>{{$customer->image}}</div>
     <div class="info"><strong>Email:</strong>{{$customer->email}}</div>

    <div class="info"><strong>Member Since:</strong> {{$customer->created_at}}</div>
      <div class="info"><strong>Last Update:</strong> {{$customer->updated_at}}</div>
 <br>
 <br>
 <br>
    <a href="edit_profile/{{$customer->id}}" class="btn" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 50%;">Edit Profile</a>
  </div>

    @include('sweetalert::alert')

</body>
</html>
