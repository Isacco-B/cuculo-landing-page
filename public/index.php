<!DOCTYPE html>
<html lang="it-IT" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="Promuoviamo il benessere mentale attraverso la solidarietà, l’inclusione e la condivisione. Volo del Cuculo è un’associazione di volontariato dedicata al supporto di persone con disagio psichico e alla lotta contro lo stigma." />
    <meta name="keywords" content="salute mentale, benessere psicologico, associazione di volontariato, volontariato per la salute mentale, lotta contro lo stigma, inclusione sociale, supporto psicologico, disagio psichico, solidarietà sociale, associazione no-profit, volontariato Telgate, supporto comunitario, Volo del Cuculo, aiuto psicologico volontariato, benessere mentale inclusivo" />
    <meta name="author" content="Associazione Volo del Cuculo" />
    <meta property="og:locale" content="it_IT" />
    <meta property="og:type" content="website" />
    <meta
        property="og:title"
        content="Volo del Cuculo - Associazione di volontariato per la salute mentale" />
    <meta
        property="og:description"
        content="Promuoviamo il benessere mentale attraverso la solidarietà, l’inclusione e la condivisione. Volo del Cuculo è un’associazione di volontariato dedicata al supporto di persone con disagio psichico e alla lotta contro lo stigma." />
    <meta property="og:url" content="https://volodelcuculo.it/" />
    <meta
        property="og:site_name"
        content="Volo del Cuculo - Associazione di volontariato per la salute mentale" />
    <meta
        property="article:modified_time"
        content="2024-08-24T15:40:33+00:00" />
    <meta
        property="og:image"
        content="https://i.postimg.cc/HWRzQSyM/volo-del-cuculo-logo.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta
        name="twitter:title"
        content="Volo del Cuculo - Associazione di volontariato per la salute mentale" />
    <meta
        name="twitter:description"
        content="Promuoviamo il benessere mentale attraverso la solidarietà, l’inclusione e la condivisione. Volo del Cuculo è un’associazione di volontariato dedicata al supporto di persone con disagio psichico e alla lotta contro lo stigma." />
    <meta name="twitter:label1" content="Tempo di lettura stimato" />
    <meta name="twitter:data1" content="10 minuti" />
    <link rel="canonical" href="https://volodelcuculo.it/" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="../src/assets/css/output.css" rel="stylesheet" />
    <link
        rel="shortcut icon"
        href="../src/assets/imgs/favicon.png"
        type="image/x-icon" />
    <title>Salute Mentale e Volontariato - Volo del Cuculo Telgate</title>
</head>

<body class="scroll-smooth">

    <?php include '../src/components/donationCard.php'; ?>
    <?php include '../src/components/header.php'; ?>
    <?php include '../src/components/hero.php'; ?>

    <?php include '../src/components/about.php'; ?>
    <?php include '../src/components/ctaVoluntary.php'; ?>
    <?php include '../src/components/mission.php'; ?>



    <?php include '../src/components/features.php'; ?>
    <?php include '../src/components/ctaDonation.php'; ?>
    <?php include '../src/components/collaborations.php'; ?>

    <?php include '../src/components/teams.php'; ?>

    <?php include '../src/components/gallery.php'; ?>

    <?php include '../src/components/theFuture.php'; ?>
    <?php include '../src/components/contactForm.php'; ?>

    <?php include '../src/components/footer.php'; ?>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const lazySections = document.querySelectorAll('.lazy-section');

        lazySections.forEach((section, index) => {
            setTimeout(() => {
                section.classList.add('opacity-100');
            }, index * 100);
        });
    });
</script>
<script>
    const BASEURL = "https://demo13.isaccobertoli.com/b9da026ff153ad29aabb8ccd590dcc5991f5c696723d92f988c088cb2aaf17a4";
    const form = document.getElementById("contactForm");
    const responseDiv = document.getElementById("responseMessage");
    const submitButton = document.getElementById("submitButton");

    form.addEventListener("submit", async function(event) {
        event.preventDefault();

        const formData = new FormData(form);
        const data = new URLSearchParams(formData);

        submitButton.disabled = true;

        try {
            const response = await fetch(BASEURL, {
                method: "POST",
                body: data,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    Accept: "application/json",
                },
            });

            if (response.ok) {
                const result = await response.json();
                responseDiv.style.display = "block";
                responseDiv.innerText = result.message;
                responseDiv.classList.add("bg-bgPrimary");
                form.reset();
            } else {
                const error = await response.json();
                throw new Error(error.message);
            }
        } catch (error) {
            responseDiv.style.display = "block";
            responseDiv.innerText = error.message;
            responseDiv.classList.add("bg-red-100");
        } finally {
            submitButton.classList.remove("loading");
            submitButton.disabled = false;
            setTimeout(() => {
                responseDiv.style.display = "none";
            }, 5000);
        }
    });
</script>
<script>
    const carouselContainer = document.getElementById('carousel-container');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    const images = [
        '../src/assets/imgs/volo-del-cuculo-1.jpg',
        '../src/assets/imgs/volo-del-cuculo-2.jpg',
        '../src/assets/imgs/volo-del-cuculo-3.jpg',
        '../src/assets/imgs/volo-del-cuculo-4.jpg',
        '../src/assets/imgs/volo-del-cuculo-1.jpg',
        '../src/assets/imgs/volo-del-cuculo-2.jpg',
        '../src/assets/imgs/volo-del-cuculo-3.jpg',
        '../src/assets/imgs/volo-del-cuculo-4.jpg',
        '../src/assets/imgs/volo-del-cuculo-1.jpg',
        '../src/assets/imgs/volo-del-cuculo-2.jpg',
        '../src/assets/imgs/volo-del-cuculo-3.jpg',
        '../src/assets/imgs/volo-del-cuculo-4.jpg',
    ];

    let currentIndex = 0;

    function getImagesPerSlide() {
        return window.innerWidth < 768 ? 1 : 3;
    }

    function renderSlides() {
        carouselContainer.innerHTML = '';

        const imagesPerSlide = getImagesPerSlide();

        for (let i = 0; i < images.length; i++) {
            const slide = document.createElement('div');
            slide.setAttribute('role', 'group');
            slide.setAttribute('aria-roledescription', 'slide');
            slide.className = `shrink-0 grow-0 basis-[calc(100%/${imagesPerSlide})] pl-[10px]`;

            const imgContainer = document.createElement('div');
            imgContainer.className = 'relative text-clip rounded-xl overflow-hidden';

            const img = document.createElement('img');
            img.src = images[i];
            img.alt = `Image ${i + 1}`;
            img.className = 'w-[300px] h-[200px] md:w-[450px] md:h-[350px] object-cover';

            imgContainer.appendChild(img);
            slide.appendChild(imgContainer);
            carouselContainer.appendChild(slide);
        }
    }

    function updateCarousel() {
        const slideWidth = carouselContainer.children[0].offsetWidth;
        const totalSlides = Math.ceil(images.length / getImagesPerSlide());
        currentIndex = (currentIndex + totalSlides) % totalSlides;
        carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    prevBtn.addEventListener('click', () => {
        currentIndex--;
        updateCarousel();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex++;
        updateCarousel();
    });

    window.addEventListener('resize', () => {
        renderSlides();
        updateCarousel();
    });
    renderSlides();
</script>
<script>
    document.getElementById('copy-button').addEventListener('click', () => {
        const input = document.getElementById('iban-input');
        input.select();
        input.setSelectionRange(0, 99999);

        navigator.clipboard.writeText(input.value)
    });
</script>
<script>
    const openButtons = document.querySelectorAll('.open-donate');
    const closeButton = document.getElementById('close-donate');
    const donateCard = document.getElementById('donate-card');

    openButtons.forEach(button => {
        button.addEventListener('click', () => {
            donateCard.classList.remove('hidden');
            donateCard.classList.remove('opacity-0');
            donateCard.classList.add('opacity-100', 'scale-100');
        });
    });

    closeButton.addEventListener('click', () => {
        donateCard.classList.add('opacity-0');
        donateCard.classList.remove('opacity-100', 'scale-100');
        setTimeout(() => {
            donateCard.classList.add('hidden');
        }, 300);
    });
</script>

</html>
