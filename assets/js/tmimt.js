
// Js For collaboration cards
//Funcation to show collab popup modal
function showCollabModal() {
    const body = document.body;
    const modal = document.getElementById('collabModal');
    const clickedCard = event.target.closest('.collab-card');
    const cardImg = clickedCard.querySelector('.collab-card-img');
    const cardTitle = clickedCard.querySelector('.collab-card-title').textContent;
    const cardText = clickedCard.querySelector('.collab-card-text').textContent;
    const modalImg = modal.querySelector('.collab-card-img');
    const modalTitle = modal.querySelector('.collab-card-title');
    const modalText = modal.querySelector('.collab-card-text');

    if (modal && clickedCard) {
        modalImg.src = cardImg.src;
        modalTitle.textContent = cardTitle;
        modalText.textContent = cardText;
        modal.classList.add('active');
        body.classList.add('stop-body-scroll');
    }
}

// Functio to close the Collab popup modal
function closeCollabModal() {
    const body = document.body;
    const modal = document.getElementById('collabModal');

    if (modal) {
        modal.classList.remove('active');
        body.classList.remove('stop-body-scroll');
    }
}





// function to show testimonial popup modal
function showTestimonialModal() {
    const body = document.body;
    const modal = document.getElementById('testimonialModal');
    const clickedCard = event.target.closest('.media');
    const cardOverview = clickedCard.querySelector('.overview').innerHTML;
    console.log("this ", cardOverview);
    const cardText = clickedCard.querySelector('.testimonial > p:last-child').textContent;
    const cardImgSrc = clickedCard.querySelector('img').src;
    const modalImg = modal.querySelector('img');
    const modalOverview = modal.querySelector('.testimonial-user-name');
    const modalText = modal.querySelector('.testimonial-content');

    if (modal && clickedCard) {
        modalImg.src = cardImgSrc;
        modalOverview.innerHTML = cardOverview;
        modalText.textContent = cardText;
        modal.classList.add('active');
        body.classList.add('stop-body-scroll');
    }
}

function closeTestimonialModal() {
    const body = document.body;
    const modal = document.getElementById('testimonialModal');

    if (modal) {
        modal.classList.remove('active');
        body.classList.remove('stop-body-scroll');
    }
}
