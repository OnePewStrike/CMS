// FAQs Module
const faqs = document.querySelectorAll(".faq")

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });
});

// Post Module
const openPost = document.getElementById("openPost")
const closePost = document.getElementById("closePost")
const postModal = document.getElementById("post")

openPost.addEventListener('click', () => {
    postModal.classList.add('show');
});

closePost.addEventListener('click', () => {
    postModal.classList.remove('show');
});
