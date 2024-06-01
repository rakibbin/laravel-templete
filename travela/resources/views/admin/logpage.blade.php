<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container">
  <div class="mt-5 pt-5">
    <div class="row col-12 mt-5 pt-5">
      <div class="col-md-3"></div>
      <div class="col-md-6">
          
            
              <div class="card">
                <div class="card-header text-center ">
                  <h1>Log In</h1>
                  
                            </div>
                  <form method="POST" id="my-form">
                      @csrf
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp" id="email">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password">
                      </div>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                  </form>
              </div>

      </div>
      <div class="col-md-3"></div>

  </div>

  </div>
    

</div>

<script>
    document.getElementById('my-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const mail = (document.getElementById('email').value);
        const pass = (document.getElementById('password').value);
        if (mail != "" && pass != "") {

            axios.post('http://127.0.0.1:8000/api/login', {
                    email: mail,
                    password: pass
                })
                .then(response => {
                    const token = response.data.data.token;
                    const user = response.data.data.user.name;
                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    localStorage.setItem('token', JSON.stringify(token));
                    localStorage.setItem('user', JSON.stringify(user));
                    window.location.href = '/adminh';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        } else {
            console.log('Form data is incomplete');
        }
    });
</script>
