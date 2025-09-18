<style>
    .bg {
        animation: toGray 1.5s ease-in-out 0s forwards;
    }

    .bg.slide-up {
        animation:
            toGray 1.5s ease-in-out 0s forwards,
            slideUp 1.5s ease-in-out forwards 1.5s;
    }

    @keyframes toGray {
        to {
            filter: grayscale(65%);
        }
    }

    @keyframes slideUp {
        to {
            transform: translateY(-100%);
        }
    }

    .content {
        opacity: 0;
    }

    .content.show {
        animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
</style>

<div class="bg fixed inset-0 bg-cover bg-center z-20"
    style="background-image: url('{{ asset('assets/img/Banner.png') }}');"></div>

<script>
    const fadeDuration = 1500;
    const slideDuration = 1500;
    const fadeDelay = 0;

    const bgElement = document.querySelector(".bg");
    const contentElement = document.querySelector(".content");
    const submitButton = document.getElementById("submitBtn");
    const firstNameInput = document.getElementById("firstName");
    const lastNameInput = document.getElementById("lastName");

    setTimeout(() => {
        bgElement.classList.add("slide-up");
        setTimeout(() => {
            contentElement.classList.add("show");
            document.body.style.overflow = "auto";
        }, slideDuration);
    }, 0);
</script>
