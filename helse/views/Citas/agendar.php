<section>
  <div class="container m-auto p-5">
    <h1 class="text-center">Dashboard</h1>
    <div class="create-post w-50 m-auto">
      <h3 class="text-center">Agendar cita</h3>
      <form class="" action="?controller=post&method=store" method="post">    
      <div class="form-group">
      <label for="exampleSelect1">Tipo de cita</label>
      <select class="form-control" id="exampleSelect1">
        <option>General</option>
        <option>Especial</option>
        <option>Urgencias</option>
      </select>
    </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name="description" placeholder="Write here..."></textarea>
        </div>
        <button type="submit" class="btn btn-success">Crear post</button>
      </form>
    </div>
  </div>
</section>