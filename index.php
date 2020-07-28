
<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<?php require'head.php' ; ?>


<!-- Body -->

  <body>

    <!-- Header -->

    <?php require'header.php' ; ?>
    
    <!-- Owerflow hidden -->

    <div
      class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"
    >
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Optimergo</h1>
        <p class="lead font-weight-normal">
          And an even wittier subheading to boot. Jumpstart your marketing
          efforts with this example based on Apple’s marketing pages.
        </p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div
        class="product-device product-device-2 shadow-sm d-none d-md-block"
      ></div>
    </div>
    
    <!-- first card's -->

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <?php require'./php/card/card-dark.php' ; ?>
      <?php require'./php/card/card-light.php' ; ?>
    </div>

    <!-- second card's -->

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div
        class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
      >
        <div class="my-3 p-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div
          class="bg-dark shadow-sm mx-auto"
          style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"
        ></div>
      </div>
      <div
        class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
      >
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div
          class="bg-light shadow-sm mx-auto"
          style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"
        ></div>
      </div>
    </div>

    <!-- third card's -->

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div
        class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
      >
        <div class="my-3 p-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div
          class="bg-white shadow-sm mx-auto"
          style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"
        ></div>
      </div>
      <div
        class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
      >
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div
          class="bg-white shadow-sm mx-auto"
          style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"
        ></div>
      </div>
    </div>

    
    <!-- second card's -->

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div
        class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
      >
        <div class="my-3 p-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div
          class="bg-white shadow-sm mx-auto"
          style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"
        ></div>
      </div>
      <div
        class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
      >
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div
          class="bg-white shadow-sm mx-auto"
          style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"
        ></div>
      </div>
    </div>

    
    <!-- footer -->
    <?php require'footer.php' ; ?>

    <!-- script -->
    <?php require'script.php' ; ?>

  </body>
</html>
