<body>
  <script>
    <?php if (is_front_page()) : ?>
      setTimeout(() => {
        document.querySelectorAll(".load .title").forEach(element => element.classList.add("isActive"))
      }, 200);
      setTimeout(() => {
        document.querySelector(".load").classList.add("isActive")
      }, 1000)
      setTimeout(() => {
        document.querySelector(".load").classList.add("isLoaded")
      }, 1400)
    <?php endif; ?>
  </script>
  <?php wp_footer(); ?>
</body>

</html>