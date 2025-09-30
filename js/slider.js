const sliderTrack = document.querySelector("[data-slider-track]");
const cards = sliderTrack.querySelectorAll("[data-slider-card]");
const dotsContainer = document.querySelector("[data-bullets]");

let imagesPerView = window.innerWidth >= 768 ? 3 : 1; // 3 cards on desktop, 1 on mobile
let currentStep = 0;

// Get the total number of steps, min 3 on desktop
function getTotalSteps() {
  const steps = Math.ceil(cards.length / imagesPerView);
  return window.innerWidth >= 768 ? Math.max(3, steps) : steps; // No desktop, pelo menos 3 dots
}

// Function to render the dots
function renderDots() {
  const totalSteps = getTotalSteps();
  dotsContainer.innerHTML = "";
  for (let i = 0; i < totalSteps; i++) {
    const dot = document.createElement("div");
    dot.classList.add("good-things-bullet");
    if (i === currentStep) dot.classList.add("good-things-bullet-active");
    dot.addEventListener("click", () => goToStep(i));
    dotsContainer.appendChild(dot);
  }
}

// Function to go to a specific step
function goToStep(step) {
  currentStep = step;

  // Calculate the new position
  const cardWidth = sliderTrack.offsetWidth / imagesPerView + 20 * imagesPerView; // Gap of 20px between cards
  const translateXinPx = -(cardWidth * step);

  sliderTrack.style.transform = `translateX(${translateXinPx}px)`;
  updateActiveDot();
}

// Update the active dot
function updateActiveDot() {
  dotsContainer.querySelectorAll("div").forEach((div, index) => {
    div.classList.toggle("good-things-bullet-active", index === currentStep);
  });
}

// Funciton to handle screen resize
function handleResize() {
  const prevImagesPerView = imagesPerView;
  imagesPerView = window.innerWidth >= 768 ? 3 : 1;
  totalSteps = Math.ceil(cards.length / imagesPerView);

  // If the layout changed, reset to the first step
  if (prevImagesPerView !== imagesPerView) {
    currentStep = 0;
    goToStep(0);
  }
  renderDots();
}

window.addEventListener("resize", handleResize);

// Initialize
handleResize();
