<nav id="menu"
    class="hidden flex flex-col md:flex md:flex-row justify-around capitalize <?php echo $index ? "  mt-28" : "mt-5"; ?>   text-2xl w-3/4 text-white ">
    <a href="../src/nosotros.php" class="hover:text-3xl focus:text-orange-600">Nosotros</a>
    <a href="../src/anuncios.php" class="hover:text-3xl focus:text-orange-600">Anuncios</a>
    <a href="../src/blog.php" class="hover:text-3xl focus:text-orange-600">Blog</a>
    <a href="../src/contacto.php" class="hover:text-3xl focus:text-orange-600">Contacto</a>
</nav>

<button class="md:hidden" id="btnMenu">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="32"
        height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
        stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M4 6l16 0" />
        <path d="M4 12l16 0" />
        <path d="M4 18l16 0" />
    </svg>
</button>