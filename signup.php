

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Signup</title>
    <style>
      body {
        display: flex;
        justify-content: center;
      }
    </style>
  </head>
  <body>
    <div>
      <div
        style="
          border: 1px solid skyblue;
          padding: 20px;
          width: 100%;
          height: auto;
        "
      >
        <div style="text-align: center">
          <h1 style="color: blue; text-decoration: underline">Signup Page</h1>
        </div>
        <form action="signup2.php" method="post" style="width: 100%">
          <div style="margin-bottom: 10px">
            <label for="fname">Firstname</label>
            <input
              style="display: flex;width: 100%;"
              type="text"
              placeholder="Firstname"
              name="fname"
            />
          </div>
          <div style="margin-bottom: 10px">
            <label for="lname">Lastname</label>
            <input
              style="display: flex;width: 100%;"
              type="text"
              placeholder="Firstname"
              name="lname"
            />
          </div>
          <div style="margin-bottom: 10px">
            <label for="email">Email</label>
            <input
              style="display: flex;width: 100%;"
              type="email"
              placeholder="Email"
              name="email"
            />
          </div>
          <div style="margin-bottom: 10px">
            <label for="password">Password</label>
            <input
              style="display: flex;width: 100%;"
              type="password"
              placeholder="Password"
              name="password"
            />
          </div>
          <div style="margin-bottom: 10px">
            <button
              style="
                background-color: blue;
                color: white;
                padding: 10px;
                border-radius: 5px;
                width: 100%;
              "
              type="submit"
            >
              Signup
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
