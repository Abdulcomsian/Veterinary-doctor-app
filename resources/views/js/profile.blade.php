<script>
let activeStep = 1;

const nextBtnEl = document.querySelector(".btn-next");
const stepsContainer = document.querySelector(".steps-container");
const allStepsContent = document.querySelectorAll(".step-content");
const allSteps = document.querySelectorAll(".step");

const stepNavigatorBtnsEl = document.querySelector(".step-navigator-buttons");
const bookedAppBtnsEl = document.querySelector(".appoitment-booked-action-box");
const prevBtnEl = document.querySelector(".btn-perv");
const exitBtnEl = document.querySelector(".btn-exit");

function validateForm(step) {
  const eleements = document
    .querySelector(`.step-content-${activeStep}`)
    .querySelectorAll("input[type='text']");
  console.log(eleements);
}

function updateActionBtns(stepNum) {
  if (stepNum > 1 && stepNum < allStepsContent.length) {
    prevBtnEl.classList.remove("d-none");
    exitBtnEl.classList.add("d-none");
    stepsContainer.classList.remove("d-none");
  }
  if (stepNum === allStepsContent.length) {
    stepsContainer.classList.add("d-none");
    stepNavigatorBtnsEl.classList.add("d-none");
    bookedAppBtnsEl.classList.remove("d-none");
  }
}

function updateStepUI() {
  allStepsContent.forEach((step, i, stepArr) => {
    step.classList.add("d-none");
    if (i + 1 <= allSteps.length) allSteps[i].classList.remove("step-active");
  });

  document
    .querySelector(`.step-content-${activeStep}`)
    .classList.remove("d-none");
  if (activeStep <= allSteps.length)
    document.querySelector(`.step-${activeStep}`).classList.add("step-active");

  updateActionBtns(activeStep);
}

nextBtnEl.addEventListener("click", async function () {

 
  let loader = document.querySelector(".progress")
  let formDetail = getFormDetail();
  // let response = await updateFormData(formDetail.url , formDetail.form , 1 , loader)


  if (activeStep < allStepsContent.length) {
      activeStep++;
      updateStepUI();


  }



});


function getFormDetail()
{
  let stepContent = document.querySelector(".step-content:not(.d-none)");
  let formDetail = {};
  if(stepContent.classList.contains('step-content-1')){
    formDetail = {...getPetFormData()};
  }else if(stepContent.classList.contains('step-content-2')){

  }else if(stepContent.classList.contains('step-content-3')){
    
  }else if(stepContent.classList.contains('step-content-4')){
    
  }

  return formDetail;
}

function getPetFormData(){
  let petName = document.getElementById("name").value;
  let age = document.getElementById("age").value;
  let breed = document.getElementById("breed").value;
  
  let previousChecked = document.querySelector("input[name='already-seen']").value == yes ? 1 : 0;
  let previousAppointmentDate = document.getElementById("previous-appointment-date").value;
    
  let url = '{{route("addPet")}}';
  let form = new FormData();
  
  form.append('petName' , petName);
  form.append('age' , age);
  form.append('breed' , breed);
  if(document.getElementById("medical-history").files[0]){
    form.append('medicalHistory' , document.getElementById("medical-history").files[0])
  }
  form.append('previousChecked' , previousChecked);
  form.append('previousAppointmentDate' , previousAppointmentDate);

  myDropzone.getAcceptedFiles().forEach(function(file) {
      form.append('petProfilePictures[]' , file);
  })
  return {url : url , form : form};
}

prevBtnEl.addEventListener("click", function () {
  if (activeStep > 1) {
    activeStep--;
    updateStepUI();
  }
});

// INITIALIZING SWIPER JS
const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  //   loop: true,
  slidesPerView: 1,
  spaceBetween: 20,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    // When window width is >= 768px
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
  },

  // And if we need scrollbar
  //   scrollbar: {
  //     el: ".swiper-scrollbar",
  //   },
});

// function validateForm(stepContent) {
//   const inputs = stepContent.querySelectorAll("input[required]");
//   for (let i = 0; i < inputs.length; i++) {
//     if (!inputs[i].value) {
//       alert("Please fill in all required fields.");
//       return false;
//     }
//   }
//   return true;
// }

// Swipper slider Appointment seletec time feature
const alldateCardsEl = document.querySelectorAll(".appoinment-date-card");

alldateCardsEl.forEach((card) =>
  card.addEventListener("click", function (e) {
    alldateCardsEl.forEach((card) =>
      card.classList.remove("appointment-selected")
    );
    e.target
      .closest(".appoinment-date-card")
      .classList.add("appointment-selected");
  })
);

document.querySelector(".medical-history-btn").addEventListener("click" , function(e){
  document.getElementById("medical-history").click()
})


async function addAppointmentChargeAmount()
{
        const { setupIntent, error} = await stripe.confirmCardSetup( '{{$clientSecret}}' , {
                                                                        payment_method : {
                                                                            card : card,
                                                                        }
                                                                });


        if(error){
            toastr.error(error.message);
            loader.classList.remove("d-none");
            return;
        }else{

            
            let url = this.getAttribute('action');
            let submitBtn = this.querySelector(".submit-btn");
            form.append('payment_method' , setupIntent.payment_method);
            addFormData(url , form , loader , null , submitBtn , null)

        }
}


</script>