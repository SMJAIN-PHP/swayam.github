<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Profile</title>
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
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
      animation: fadeIn 0.7s ease-in-out;
      position: relative;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Mobile App Style Header */
    .header-bar {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .back-btn {
      background: #222;
      padding: 8px 14px;
      border-radius: 10px;
      color: #fff;
      text-decoration: none;
      font-size: 14px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.25);
      transition: 0.3s;
    }

    .back-btn:hover { transform: scale(1.05); }

    /* Profile Photo Upload */
    .profile-upload {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-upload img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #ddd;
      margin-bottom: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .profile-upload input {
      display: none;
    }

    .upload-btn {
      background: #007bff;
      color: #fff;
      padding: 8px 16px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 14px;
      display: inline-block;
      transition: 0.3s;
    }

    .upload-btn:hover { background: #0056c9; }

    label { font-weight: bold; }

    input, textarea {
      width: 100%;
      padding: 12px;
      margin-top: 6px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 15px;
      background: #f9f9f9;
    }

    .submit-btn {
      width: 100%;
      padding: 14px;
      background: #28a745;
      color: #fff;
      border: none;
      border-radius: 12px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: 0.3s;
    }

    .submit-btn:hover { background: #1f8a37; }

    /* Last Updated */
    .updated-time {
      text-align: center;
      margin-top: 15px;
      font-size: 13px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="container">

    <div class="header-bar">
      <a href="{{ url('/my_profile') }}" class="back-btn">⬅</a>
      Edit Profile
    </div>

      <!-- ✅ Added form tag -->
    <form action="{{url('/update_profile/'.$customer->id)}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="profile-upload">
        <img id="preview" src="{{asset('upload/customer/' . $customer->image)}}" alt="Profile" />
        <br>
        <label class="upload-btn" for="photo">Upload Photo</label>
        <input type="file" id="photo" name="image" accept="image/*" onchange="loadImage(event)" />
      </div>

      <label>Name</label>
      <input type="text" name="name" placeholder="Enter full name" value="{{ $customer->name }}" />

      <label>Email</label>
      <input type="email" name="email" placeholder="Enter email" value="{{ $customer->email }}" />

      <label>Phone Number</label>
      <input type="text" name="mobile" placeholder="Enter phone number" value="{{ $customer->mobile }}" />

    

      <button type="submit" class="submit-btn">Save Changes</button>
    </form>

<script>
  function loadImage(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
  }
</script>

  @include('sweetalert::alert')


  
</body>
</html>