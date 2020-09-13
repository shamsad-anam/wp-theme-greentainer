<form action="/" method="get" class="mb-5 mt-3">
  <div class="d-flex no-gutters">
    <div class="col-3">
      <select name="cat" id="cat-dropdown" class="form-control">
        <option value="">All</option>
        <?php 
          $cats = get_categories();
          foreach($cats as $cat):
          ?>
          <option value="<?php echo $cat->$term_id  ?>"><?php echo $cat->name ?></option>
        <?php endforeach;
        ?>
    </select>
    </div>
  <input type="text" class="form-control" name="s" id="search" value="<?php get_search_query(); ?>">
  <button class="btn btn-info" type="submit">Search</button>
  </div>
</form>