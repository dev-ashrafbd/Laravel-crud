<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>

<body>
  <main>
    <div class="form-buttons">
     <a href="{{route('index') }}"> <button class="a-btn--filled">All Id card show</button></a>
      
    </div>

    @if (Session::has('Id_add'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Id_add')}}
    </div>
    @endif
    <form action="{{route('store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h1>Create Your ID Card</h1>

      <!-- NAME FIELD -->
      <div class="form-field">
        <label for="field" class="label--required">Name</label>
        <section>
          <input id="field" required type="text" placeholder="enter your name" name="name" />
        </section>
      </div>

      <!-- PHONE FIELD -->
      <div class="form-field">
        <label for="phone" class="label--required">Phone</label>
        <section>
          <input id="phone" required type="tel" placeholder="(234) 234-2342" name="phone" />
        </section>
      </div>

      <!-- EMAIL FIELD -->
      <div class="form-field">
        <label for="email" class="label--required">Email</label>
        <section>
          <input id="email" required type="email" placeholder="somebody@me.com" name="email" />
        </section>
      </div>
      <!-- Image FIELD -->
      <div class="form-field">
        <label for="ProfilePic" class="label--required">Picture </label>
        <section>
          <input type="file" placeholder="Your Profile Picture " name="image" required/>
        </section>
      </div>



      <!-- BUTTONS -->
      <div class="form-buttons">
        <button type="submit" class="a-btn--filled">Save</button>
      </div>

    </form>
  </main>
</body>

</html>