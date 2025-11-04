<div>
    <!-- He who is contented is rich. - Laozi -->
    <h1>Signup Form</h1>
    <form action="signup-result" method="post">
        @csrf
        <p><input type="text" name="username" placeholder="User Name"></p>

        <p><input type="email" name="email" placeholder="Email"></p>
        
        <p><input type="text" name="city" placeholder="city"></p>

        <button type="submit">Submit</button>
    </form>
</div>


<style>
    .input{

    }
</style>