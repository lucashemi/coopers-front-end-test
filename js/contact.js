const contactForm = document.querySelector("[data-contact-form]");
const tel = document.querySelector("[data-tel]");

function maskPhone(value) {
  if (!value) return "";
  const phone = value.toString().replace(/\D/g, "");

  if (phone.length === 11) {
    return phone.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (phone.length === 10) {
    return phone.replace(/^(\d{2})(\d{4})(\d{4}).*/, "($1) $2-$3");
  } else if (phone.length > 11) {
    return maskPhone(phone.slice(-11));
  } else {
    return phone;
  }
}

tel.addEventListener("input", (e) => {
  e.target.value = maskPhone(e.target.value);
});

contactForm.addEventListener("submit", (e) => {
  e.preventDefault();
  //contactForm.classList.add('contact-form-sent');
  const formData = new FormData(contactForm);
  const data = Object.fromEntries(formData);
  console.log(data);
});
