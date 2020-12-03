<div class="testbox">
  <h1>Registration</h1>

  <form action="../../controllers/postcontr.php" method="POST">
  <input type="hidden" name="action" value='postear'>
    <label id="icon" for="name"><i class="icon-user"></i></label>
    <input type="text" name="name" placeholder="Name" />

    <label id="icon" for="short_brief"><i class="icon-user"></i></label>
    <input type="text" name="short_brief" placeholder="breve descripcion" />

    <label id="icon" for="body"><i class="icon-envelope "></i></label>
    <input type="text" name="body" placeholder="body"/>



    
    <p><input type="submit" value="postear"></p>
   
  </form>
</div>