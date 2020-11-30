</br></br></br></br></br></br></br></br>
<form align="center" method="post" action="{{route('post_login')}}">
    @csrf
    <div class="form-group">
        <h2>Authentication</h2>
        <h5>Admin Username: admin; Password: admin.</h5>
        <h5>Student Username: student; Password: student.</h5>
        <label>Username</label>
        <input type="text" name="name" class="form-control">
        </br></br>
        <label>Password</label>
        <input type="password" name="password" class="form-control">
        </br></br>
        <button type="submit">Login</button>
    </div>
</form>
