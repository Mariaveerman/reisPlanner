<form  class="space-y-6" method="POST" action="{{url('/test')}}">
@csrf
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name='password' class="form-control" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>