import './modules/functions.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/spoiler.js';
import './modules/tabs.js';
import './modules/arrowsInputNumberStyle.js';
import './modules/HorizontalMenu.js';
import './modules/sliders.js';

/* capture-form   */

const captureForm = document.querySelector('form.rmbt-capture-form');
const nl_RadioButtons = captureForm.querySelectorAll('.wrap-radio');
const nl_wrapInputs = captureForm.querySelectorAll('.wrap-inputs');
const submitButton = captureForm.querySelector('button[type="submit"]');
const displaySteps = captureForm.querySelector('.display-steps');

const nextStepButton = captureForm.querySelector('#next-step-button');
const goBackButton = captureForm.querySelector('#go-back-button');

console.log('captureForm = ', captureForm);

window.addEventListener('resize', captureFormMod);
if (window.innerWidth <= 480) captureFormMod();

nextStepButton.addEventListener('click', e => {
  nl_RadioButtons.forEach(radioButton => {
    radioButton.style.display = 'block';
  });

  nl_wrapInputs.forEach(radioButton => {
    radioButton.style.display = 'none';
  });

  goBackButton.style.display = 'block';
  displaySteps.innerHTML = 'Step 2 of 2';
});

goBackButton.addEventListener('click', e => {
  nl_RadioButtons.forEach(radioButton => {
    radioButton.style.display = 'none';
  });
  goBackButton.style.display = 'none';

  nl_wrapInputs.forEach(wrapInput => {
    wrapInput.style.display = 'block';
  });

  displaySteps.innerHTML = 'Step 1 of 2';
});

function captureFormMod() {
  if (window.innerWidth <= 480) {
    nl_RadioButtons.forEach(radioButton => {
      radioButton.style.display = 'none';
    });
    submitButton.style.display = 'none';
    nextStepButton.style.display = 'block';
    displaySteps.style.display = 'block';
  } else if (window.innerWidth > 480) {
    nl_RadioButtons.forEach(radioButton => {
      radioButton.style.display = 'block';
    });

    nl_wrapInputs.forEach(wrapInput => {
      wrapInput.style.display = 'block';
    });

    nextStepButton.style.display = 'none';
    goBackButton.style.display = 'none';
    displaySteps.style.display = 'none';

    submitButton.style.display = 'block';
    radioButton.style.display = 'block';
  }
}
