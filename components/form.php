<style>
    .make_formc{padding: 0 40px;}
    label{font-size: 14px;color: #383838;display:block;}
    input,select,textarea{width: 100%;border: 1px solid #d9d9d9;border-radius: 3px;color: #383838;padding: 5px 10px;}
    input,select{ height: 40px;text-transform: capitalize;}
    input::placeholder, textarea::placeholder{color: #383838;}
    .make_formc button{width: 120px; background-color: #2B65BF;font-size: 20px;color: white;height: 30px;line-height: 30px;
        border: 1px solid #d9d9d9;font-size: 16px;margin-top: 20px;}
    @media screen and (max-width:800px){.make_formc{padding: 0;}}
</style>
<div class="make_formc">
    <h4 style="color:#2B65BF;font-size: 14px;text-transform: uppercase;margin-bottom: 10px;">Contact us</h4>
    <h3 style="font-size: 32px;margin-bottom: 15px;">Make an Appointment</h3>
    <p style="color: #676767;font-size: 15px; ">We will send you a confirmation within 24 hours. Emergency? Call 04362 226700</p>
    <form onsubmit="form(event)">
        <div class="form-area row">
            <div class="col-lg-6 col-sm-12"> 
                <input type="text" data-input="name" required aria-required="true" aria-invalid="false" placeholder="name">
            </div>
            <div class="col-lg-6 col-sm-12">
                <select id="gender" data-input="Gender" required>
                    <option value="" label="Gender"></option>
                    <option  value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
                
            </div>
            <div class="col-lg-6 col-sm-12"> 
                <input type="text" data-input="phone_number" required aria-invalid="false" placeholder="Phone No" >
            </div>
            <div class="col-lg-6 col-sm-12">
                <input type="date" id="date" data-input="date"> 
            </div>
            
            <div class="col-lg-12 col-sm-12">
                <select id="specialist" data-input="specialist">
                    <option value="" label="Specialist"></option>
                  <option  value="General medicine">General medicine</option>
                  <option value="Gynaecology">Gynaecology</option>
                  <option value="Paediatrics">Paediatrics</option>
                  <option  value="Diabetology">Diabetology</option>
                  <option  value="Cardiology">Cardiology</option>
                </select>
              </div>
            
        <div class="col-lg-12 col-sm-12" style="height: 60px !important;overflow: hidden;"> 
              <textarea data-input="message"  placeholder="Enter Message" aria-invalid="false"></textarea>        
        </div>
    </div>
        <button type="submit">Submit</button>
    </form>
</div>