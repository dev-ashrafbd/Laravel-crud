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
 
    <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
     @csrf
     <h1>Update {{$Id->name}} information </h1>

      <h1></h1>
      <input type="hidden" value="{{$Id->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" >

      <!-- NAME FIELD -->
      <div class="form-field">
        <label for="field" class="label--required">Name</label>
        <section>
          <input id="field"  type="text" value="{{$Id->name}}" name="name" />
        </section>
      </div>

      <!-- PHONE FIELD -->
      <div class="form-field">
        <label for="phone" class="label--required">Phone</label>
        <section>
          <input id="phone"  type="tel" value="{{$Id->phone}}"  name="phone" />
        </section>
      </div>

      <!-- EMAIL FIELD -->
      <div class="form-field">
        <label for="email" class="label--required">Email</label>
        <section>
          <input id="email"  type="email" value="{{$Id->email}}"name="email" />
        </section>
      </div>
      <!-- Image FIELD -->
      <div class="form-field">
        <label for="ProfilePic" class="label--required">Picture </label>
          <section>
            <input id="ProfilePic"  type="file" value="{{$Id->picture}}" name="image" />
          </section>
      </div>



      <!-- BUTTONS -->
      <div class="form-buttons">
         <button class="a-btn--filled" type="submit">Update</button>
       </div>

    </form>
  </main>
</body>

</html>