<form action="#" class="rmbt-forms  rmbt-contacts-form">
   <h3><?php echo rmbt_get_redux_field('rmbt-contacts-form-title') ?></h3>
   <p class="font-p"><?php echo rmbt_get_redux_field('rmbt-contacts-form-subtitle') ?></p>

   <div class="rmbt-forms__wrap-field short-field">
      <label for="name">Name</label>
      <input id="name" type="text">
   </div>
   <div class="rmbt-forms__wrap-field short-field">
      <label for="phone">Phone</label>
      <input id="phone" type="text">
   </div>
   <div class="rmbt-forms__wrap-field long-field">
      <label for="email">Email</label>
      <input id="email" type="text">
   </div>

   <div class="rmbt-contacts-form__left-col wrap-radio">
      <h5>Type of Service</h5>
      <p><input type="radio" name="type-of-service" value="residential">Residential</p>
      <p><input checked type="radio" name="type-of-service" value="commercial">Commercial</p>
      <p><input type="radio" name="type-of-service" value="emergency">Emergency</p>
   </div>
   <div class="rmbt-contacts-form__right-col wrap-radio">
      <h5>Type of Roof</h5>
      <p><input checked type="radio" name="type-of-roof" value="metal">Metal</p>
      <p><input type="radio" name="type-of-roof" value="flat">Flat</p>
      <p><input type="radio" name="type-of-roof" value="asphalt-shingle">Asphalt Shingle</p>
   </div>

   <div class="rmbt-forms__footer">
      <div class="rmbt-forms__wrap-field long-field">
         <label for="massage">massage...</label>
         <textarea name="massage" id=""></textarea>
      </div>
      <button type="submit" class='rmbt-button rmbt-forms__button'>send now</button>
   </div>
</form>