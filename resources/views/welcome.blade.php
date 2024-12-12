<x-layout>
    <div class="parent-container">
        <div class="card-container">
            <h1>Laravel in Practice</h1>
            <a href="/login" class="login-button">Login</a> <br>
            <a href="/register" class="register-button">Register</a>
        </div>
    </div>
</x-layout>

<style>
  .parent-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .card-container {
    display: flex;
    justify-content: block;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
    height: 300px;
    width: 400px;
  }

  .card-container h1 {
    font-style: italic;
    font-size: 30px;
    margin-bottom: 60px;
  }

  .login-button {
    background-color: #90CAF9;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    color: white;
    border-radius: 5px;
    border: none;
    padding: 10px 20px;
    width: 100%;
    cursor: pointer;
    font-size: 16px;
    text-decoration: none;
    text-align: center;
    color: black;
    font-weight: bold;
  }

  .register-button {
    background-color: #CCCCCC;
    color: white;
    border-radius: 5px;
    border: none;
    padding: 10px 20px;
    width: 100%;
    cursor: pointer;
    font-size: 16px;
    text-decoration: none;
    text-align: center;
    color: black;
    font-weight: bold;
  }

</style>