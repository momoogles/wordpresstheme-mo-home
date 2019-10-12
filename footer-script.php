<body>
  <script>
    setTimeout(() => {
      document.querySelectorAll(".load .title").forEach(element => element.classList.add("isActive"))
    }, 200);
    setTimeout(() => {
      document.querySelector(".load").classList.add("isActive")
    }, 1000)
    setTimeout(() => {
      document.querySelector(".load").classList.add("isLoaded")
    }, 1400);
  </script>
  <?php wp_footer(); ?>
</body>

</html>