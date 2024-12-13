// @ts-nocheck

// lazy loading
document.addEventListener("DOMContentLoaded", () => {
  const lazySections = document.querySelectorAll(".lazy-section");

  lazySections.forEach((section, index) => {
    setTimeout(() => {
      section.classList.add("opacity-100");
    }, index * 100);
  });
});

// contact form
const BASEURL =
  "https://demo13.isaccobertoli.com/b9da026ff153ad29aabb8ccd590dcc5991f5c696723d92f988c088cb2aaf17a4";
const form = document.getElementById("contactForm");
const responseDiv = document.getElementById("responseMessage");
const submitButton = document.getElementById("submitButton");

form.addEventListener("submit", async function (event) {
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

// carousel
const carouselContainer = document.getElementById("carousel-container");
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");

const images = [
  "./assets/imgs/volo-del-cuculo-1.jpg",
  "./assets/imgs/volo-del-cuculo-2.jpg",
  "./assets/imgs/volo-del-cuculo-3.jpg",
  "./assets/imgs/volo-del-cuculo-4.jpg",
  "./assets/imgs/volo-del-cuculo-6.jpg",
  "./assets/imgs/volo-del-cuculo-7.jpg",
  "./assets/imgs/volo-del-cuculo-8.jpg",
  "./assets/imgs/volo-del-cuculo-9.jpg",
  "./assets/imgs/volo-del-cuculo-10.jpg",
  "./assets/imgs/volo-del-cuculo-11.jpg",
];

let currentIndex = 0;

function getImagesPerSlide() {
  return window.innerWidth < 768 ? 1 : 3;
}

function renderSlides() {
  carouselContainer.innerHTML = "";

  const imagesPerSlide = getImagesPerSlide();

  for (let i = 0; i < images.length; i++) {
    const slide = document.createElement("div");
    slide.setAttribute("role", "group");
    slide.setAttribute("aria-roledescription", "slide");
    slide.className = `shrink-0 grow-0 basis-[calc(100%/${imagesPerSlide})] pl-[10px]`;

    const imgContainer = document.createElement("div");
    imgContainer.className = "relative text-clip rounded-xl overflow-hidden";

    const img = document.createElement("img");
    img.src = images[i];
    img.alt = `Image ${i + 1}`;
    img.className =
      "w-[300px] h-[200px] md:w-[450px] md:h-[350px] object-cover";

    imgContainer.appendChild(img);
    slide.appendChild(imgContainer);
    carouselContainer.appendChild(slide);
  }
}

function updateCarousel() {
  const slideWidth = carouselContainer.children[0].offsetWidth;
  const totalSlides = images.length;
  currentIndex = (currentIndex + totalSlides) % totalSlides;
  carouselContainer.style.transform = `translateX(-${
    currentIndex * slideWidth
  }px)`;
}

prevBtn.addEventListener("click", () => {
  currentIndex--;
  updateCarousel();
});

nextBtn.addEventListener("click", () => {
  currentIndex++;
  updateCarousel();
});

window.addEventListener("resize", () => {
  renderSlides();
  updateCarousel();
});
renderSlides();


// IBAN copy button
document.getElementById("copy-button").addEventListener("click", () => {
  const input = document.getElementById("iban-input");
  input.select();
  input.setSelectionRange(0, 99999);

  navigator.clipboard.writeText(input.value);
});

// donation card
const openButtons = document.querySelectorAll(".open-donate");
const closeButton = document.getElementById("close-donate");
const donateCard = document.getElementById("donate-card");

openButtons.forEach((button) => {
  button.addEventListener("click", () => {
    donateCard.classList.remove("hidden");
    donateCard.classList.remove("opacity-0");
    donateCard.classList.add("opacity-100", "scale-100");
  });
});

closeButton.addEventListener("click", () => {
  donateCard.classList.add("opacity-0");
  donateCard.classList.remove("opacity-100", "scale-100");
  setTimeout(() => {
    donateCard.classList.add("hidden");
  }, 300);
});
