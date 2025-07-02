<a {{ $attributes }} 
    class="nav-link relative text-sm font-semibold pb-2">
    {{ $slot }}
</a>

<style>
    /* Efek garis bawah default (hover) */
    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 3px;
        background-color: gray;
        border-radius: 4px;
        transition: width 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    /* Efek garis bawah untuk halaman aktif */
    .nav-link.active::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 3px;
        background-color: #059669;
        border-radius: 4px;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll(".nav-link");
        const currentPage = window.location.href;
        
        navLinks.forEach(link => {
            if (link.href === currentPage) {
                link.classList.add("active");
            }
        });
    });
</script>