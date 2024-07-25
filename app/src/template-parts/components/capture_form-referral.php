<!-- <form action="#" class="rmbt-capture-form rmbt-capture-form-referral-block"> -->
<form action="#" class="rmbt-forms rmbt-referral-form">
   <h3><?php echo esc_html($args['title']) ?></h3>

   <div class="rmbt-referral-form__wrap-step-1">

      <div class="display-steps">
         <div class="display-steps__step-1 step">
            <div class="step__number">1</div>
            <div class="step__text">Your information</div>
         </div>
         <div class="display-steps__step-2 step">
            <div class="step__number">2</div>
            <div class="step__text">Their information</div>
         </div>

      </div>
      <h4><?php echo $args['subtitle-you'] ?></h4>
      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="first name">First Name</label>
         <input id="yor-first-name" type="text">
      </div>
      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="last name">Last Name</label>
         <input id="yor-last-name" type="text">
      </div>
      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field rmbt-referral-form__long-field">
         <label for="mailing-address">Mailing Address <span>(This is the address where the referral award will be
               sent.)</span></label>
         <input id="yor-mailing-address" type="text">
      </div>

      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="phone">Phone</label>
         <input id="yor-phone" type="text">
      </div>

      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="email">Email</label>
         <input id="yor-email" type="text">
      </div>

      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field rmbt-referral-form__long-field">
         <label for="project-manager">Project Manager. <span>If you(the Referrer) have already been in touch with a
               Remedy Roofing Project Manager, please enter their name.<span></label>
         <input id="yor-project-manager" type="text">
      </div>

      <div class="wrap-radio">
         <h5>Are you a Remedy Roofing customer?</h5>
         <p><input type="radio" name="yor-type-of-service" value="" checked>Yes</p>
         <p><input type="radio" name="yor-type-of-service" value="">No</p>
      </div>

      <div class="rmbt-forms__footer rmbt-referral-form__footer">
         <button id="next-step-button" type="button" class='rmbt-button rmbt-forms__button '>next referrsl`s
            information</button>
      </div>
   </div>


   <div class="rmbt-referral-form__wrap-step-2">

      <div class="display-steps">
         <div class="display-steps__step-1 step">
            <div class="step__number">1</div>
            <div class="step__text">Your information</div>
         </div>
         <div class="display-steps__step-2 step">
            <div class="step__number">2</div>
            <div class="step__text">Their information</div>
         </div>

      </div>
      <h4><?php echo $args['subtitle-their'] ?></h4>
      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="first name">First Name</label>
         <input id="their-first name" type="text">
      </div>
      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="last name">Last Name</label>
         <input id="their-last name" type="text">
      </div>
      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field rmbt-referral-form__long-field">
         <label for="mailing-address">
            Property Address <span>(This is the address for the property being referred.)</span> </label>
         <input id="their-mailing-address" type="text">
      </div>

      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="phone">Phone</label>
         <input id="their-phone" type="text">
      </div>

      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field">
         <label for="email">Email</label>
         <input id="their-email" type="text">
      </div>

      <div class="rmbt-forms__wrap-field rmbt-referral-form__wrap-field rmbt-referral-form__long-field">
         <label for="project-manager">Project Manager. <span>If you(the Referrer) have already been in touch with a
               Remedy Roofing Project Manager, please enter their name.<span></label>
         <input id="their-project-manager" type="text">
      </div>

      <div class="wrap-radio">
         <h5>Are you a Remedy Roofing customer?</h5>
         <p><input type="radio" name="their-type-of-service" value="">Yes</p>
         <p><input type="radio" name="their-type-of-service" value="" checked>No</p>
      </div>

      <div class="rmbt-forms__footer rmbt-referral-form__footer">
         <button id="go-back-button" type="button" class='rmbt-button rmbt-forms__button '>back: your
            information</button>
         <button type="submit" class='rmbt-button rmbt-forms__button'>submit referral</button>
      </div>
   </div>

</form>