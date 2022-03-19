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
 
    <form>
     
      <h1>Show {{$Id->name}} information </h1>

      <!-- NAME FIELD -->
      <div class="form-field">
        <label for="field" class="label--required">Name</label>
        <section>
          <input id="field" readonly type="text" value="{{$Id->name}}" name="name" />
        </section>
      </div>

      <!-- PHONE FIELD -->
      <div class="form-field">
        <label for="phone" class="label--required">Phone</label>
        <section>
          <input id="phone" readonly type="tel" value="{{$Id->phone}}"  name="phone" />
        </section>
      </div>

      <!-- EMAIL FIELD -->
      <div class="form-field">
        <label for="email" class="label--required">Email</label>
        <section>
          <input id="email" readonly type="email" value="{{$Id->email}}"name="email" />
        </section>
      </div>
      <!-- Image FIELD -->
      <div class="form-field">
        <label for="ProfilePic" class="label--required">Picture </label>
        
          <img src="{{ asset('storage/images/id/'.$Id->picture)}}" width="150px" height="150px" >
        
      </div>



      <!-- BUTTONS -->
      <div class="form-buttons">
        <a style="text-decoration: none;" class="a-btn--filled" href="{{route('index')}}">Back</a>
         
       </div>

    </form>
  </main>
</body>

</html>