



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crud App</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }
    </style>
  </head>
  <body>
    <div style="border: 1px solid skyblue; padding: 20px; width: 50%;height: auto;">
      <div style="text-align: center;">
        <h1 style="color: blue; text-decoration: underline;">PHP Crud App</h1>
      </div>

      <div>
        <button
          style="
            display: flex;
            flex-direction: row;
            width: 100px;
            text-align: center;
            align-items: center;
            background-color: green;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            height: 30px;
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="white"
            class="w-2 h-2"
            style="width: 20px; height: 20px; padding-left: 5px"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 4.5v15m7.5-7.5h-15"
            />
          </svg>

          <a style="color: white; padding-left: 5px;" href="create.php">Create</a>
        </button>
      </div>

      <div>
        <table style="width: 100%; padding-top: 20px;">
          <thead>
            <tr>
              <th style="border-bottom: 1px solid black;">Firstname</th>
              <th style="border-bottom: 1px solid black;">Lastname</th>
              <th style="border-bottom: 1px solid black;">Email</th>
              <th style="border-bottom: 1px solid black;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              include_once 'users.php'
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
