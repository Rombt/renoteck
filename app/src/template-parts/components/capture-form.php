<form action="#" class="rmbt-capture-form">
   <h3><?php echo rmbt_get_redux_field('rmbt-capture-form_title') ?></h3>


   <div class="rmbt-capture-form__left-col">
      <div class="rmbt-capture-form__wrap-field">
         <label for="name">Name</label>
         <input id="name" type="text">
      </div>
      <div class="rmbt-capture-form__wrap-field">
         <label for="phone">Phone</label>
         <input id="phone" type="text">
      </div>
      <div class="rmbt-capture-form__wrap-field">
         <label for="city">City</label>
         <input id="city" type="text">
      </div>
   </div>
   <div class="rmbt-capture-form__right-col">
      <div class="rmbt-capture-form__wrap-field">
         <label for="email">Email</label>
         <input id="email" type="text">
      </div>
      <div class="rmbt-capture-form__wrap-field">
         <label for="address">address</label>
         <input id="address" type="text">
      </div>
      <div class="rmbt-capture-form__wrap-field">
         <label for="province">province</label>
         <input id="province" type="text">
      </div>
   </div>

   <div class="rmbt-capture-form__left-col wrap-radio">
      <h5>Type of Service</h5>
      <p><input type="radio" name="type-of-service" value="residential">Residential</p>
      <p><input checked type="radio" name="type-of-service" value="commercial">Commercial</p>
      <p><input type="radio" name="type-of-service" value="emergency">Emergency</p>
   </div>
   <div class="rmbt-capture-form__right-col wrap-radio">
      <h5>Type of Roof</h5>
      <p><input checked type="radio" name="type-of-roof" value="metal">Metal</p>
      <p><input type="radio" name="type-of-roof" value="flat">Flat</p>
      <p><input type="radio" name="type-of-roof" value="asphalt-shingle">Asphalt Shingle</p>
   </div>



   <div class="rmbt-capture-form__footer">
      <div class="rmbt-capture-form__wrap-field">
         <label for="massage">massage...</label>
         <textarea name="massage" id=""></textarea>
      </div>
      <button type="submit" class='rmbt-button rmbt-capture-form__button'>send now</button>
   </div>
</form>