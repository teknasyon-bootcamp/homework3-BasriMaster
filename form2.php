<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<div class="container">

    <form action="<?php $this->action; ?>" method="<?php $this->method; ?>">

        <?php foreach($this->fields as $type): ?>
            <?php 

                var_dump($type);

            ?>

        <div class="md-3">
            <label class="form-label"><?php $type; ?></label>
            <input type='text' name='name' class="form-control" value='' />
        </div>

        <?php endforeach; ?>




        <div class="md-3 mt-2">
            <button type='submit' class="btn btn-outline-danger">Gönder</button>
        </div>
    </form>




</div>

