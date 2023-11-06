
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="#">
          <h1 id="vit">Pasti Kerja Indonesia</h1>

          <input type="text" placeholder="Name" id="name" />
          <input type="email" placeholder="Email" id="mail" />
          <input type="password" placeholder="Password" id="pass" />
          <button>Sign Up</button>
          <br /><br /><br /><br />

          <div class="social-container">
            <a href="https:www.facebook.com" class="social" id="fb">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https:www.instagram.com" class="social" id="ins">
              <i class="fab fa-instagram"> </i>
            </a>
            <a href="https://www.gmail.com" class="social" id="gm">
              <i class="fas fa-envelope"></i>
            </a>
            <a href="https://www.twitter.com" class="social" id="tw">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#">
          <h1>Sign In</h1>

          <input type="email" placeholder="Email" id="mail" />
          <input type="password" placeholder="Password" id="pass" />
          <button>Log In</button>
          <br /><br /><br /><br /><br /><br />

          <div class="social-container">
            <a href="https:www.facebook.com" class="social" id="fb">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https:www.instagram.com" class="social" id="ins">
              <i class="fab fa-instagram"> </i>
            </a>
            <a href="https://www.gmail.com" class="social" id="gm">
              <i class="fas fa-envelope"></i>
            </a>
            <a href="https://www.twitter.com" class="social" id="tw">
              <i class="fab fa-twitter"></i>
              
              <a href="<?= site_url('awal') ;?>" class="social" id="tw">
              <i >TOMBOL BALEK AWAL</i>
            </a>
          </div>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>welcome</h1>
            <p>
              Wherever the art of Medicine is loved, there is also a love of
              Humanity.
            </p>
            <br />
            <p style="color: rgb(0, 68, 255)">Already have an account?</p>
            <button class="press" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Pasti Kerja Indoenesia</h1>
            <p>Passion for excellence. Compassion for people.</p>
            <br />
            <p style="color: rgb(0, 68, 255)">Don't have an account?</p>
            <button class="press" id="signUp" style="color: rgb(57, 49, 5)">
              Sign Up
            </button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>
