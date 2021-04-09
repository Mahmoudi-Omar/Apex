@if (session()->has('add_cat'))
  <div class="alert-danger">
    <h1>lfkkfel</h1>
  </div>
  <script>
      new Noty({
        theme : 'sunset',
      text: 'NOTY - a dependency-free notification library!',
      animation: {
          open: 'animated bounceInRight', // Animate.css class names
          close: 'animated bounceOutRight' // Animate.css class names
      }
      }).show();
  </script>
@endif